<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Enums\RoleEnum;

class RoleSeeder extends Seeder
{
    public function run(): void
    {

        $roles = [

            // System
            RoleEnum::SUPER_ADMIN->value,
            'Administrator Nasional',

            // SPPG
            'Administrator SPPG',
            'Kepala Dapur',
            'Petugas Gudang',
            'Ahli Gizi',

            // Sekolah
            'Administrator Sekolah',
            'Operator Sekolah',

            // Posyandu
            'Administrator Posyandu',
            'Kader Posyandu',

            // Monitoring
            'Auditor',
            'Pimpinan',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }
    }
}
