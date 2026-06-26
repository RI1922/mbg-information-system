<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Super Administrator
        |--------------------------------------------------------------------------
        */

        $superAdmin = Role::where('name', 'Super Administrator')->first();

        if ($superAdmin) {
            $superAdmin->syncPermissions(
                Permission::all()
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Administrator Nasional
        |--------------------------------------------------------------------------
        */

        $nationalAdmin = Role::where('name', 'Administrator Nasional')->first();

        if ($nationalAdmin) {

            $permissions = Permission::query()
                ->where('name', 'like', 'iam.%')
                ->get();

            $nationalAdmin->syncPermissions($permissions);
        }
    }
}