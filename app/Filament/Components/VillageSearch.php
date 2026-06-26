<?php

namespace App\Filament\Components;

use App\Models\Village;
use Filament\Forms\Components\Select;

class VillageSearch
{
    public static function make(string $name = 'village_id'): Select
    {
        return Select::make($name)
            ->label('Cari Wilayah')
            ->placeholder('Ketik desa, kecamatan, kabupaten, atau provinsi...')
            ->searchable()
            ->required()
            ->preload(false)

            ->getSearchResultsUsing(function (string $search): array {

                return Village::query()
                    ->with([
                        'district.regency.province',
                    ])

                    ->where('name', 'like', "%{$search}%")

                    ->orWhereHas('district', function ($query) use ($search) {
                        $query->where('name', 'like', "%{$search}%");
                    })

                    ->orWhereHas('district.regency', function ($query) use ($search) {
                        $query->where('name', 'like', "%{$search}%");
                    })

                    ->orWhereHas('district.regency.province', function ($query) use ($search) {
                        $query->where('name', 'like', "%{$search}%");
                    })

                    ->limit(30)

                    ->get()

                    ->mapWithKeys(function (Village $village) {

                        return [

                            $village->id => sprintf(
                                "%s\nKecamatan %s\nKabupaten %s\nProvinsi %s",
                                $village->name,
                                $village->district->name,
                                $village->district->regency->name,
                                $village->district->regency->province->name,
                            ),

                        ];
                    })

                    ->toArray();
            })

            ->getOptionLabelUsing(function ($value): ?string {

                if (!$value) {
                    return null;
                }

                $village = Village::query()
                    ->with('district.regency.province')
                    ->find($value);

                if (!$village) {
                    return null;
                }

                return sprintf(
                    "%s\nKecamatan %s\nKabupaten %s\nProvinsi %s",
                    $village->name,
                    $village->district->name,
                    $village->district->regency->name,
                    $village->district->regency->province->name,
                );
            });
    }
}