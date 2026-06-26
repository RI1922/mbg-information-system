<?php

namespace App\Modules\Master\Wilayah\Services;

use Illuminate\Support\Facades\DB;

class CsvImportService
{
    public static function import(string $table, string $path): void
    {
        if (! file_exists($path)) {
            throw new \RuntimeException("CSV tidak ditemukan: {$path}");
        }

        $handle = fopen($path, 'r');

        if ($handle === false) {
            throw new \RuntimeException("Tidak dapat membuka file CSV.");
        }

        $header = fgetcsv($handle);

        $rows = [];

        while (($data = fgetcsv($handle)) !== false) {

            $rows[] = array_combine($header, $data);

            if (count($rows) === 1000) {

                DB::table($table)->insert($rows);

                $rows = [];
            }
        }

        if (! empty($rows)) {

            DB::table($table)->insert($rows);
        }

        fclose($handle);
    }
}