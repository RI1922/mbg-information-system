<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Enums\GuardEnum;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $matrix = config('permissions');

        foreach ($matrix as $domain => $resources) {

            foreach ($resources as $resource => $actions) {

                foreach ($actions as $action) {

                    Permission::firstOrCreate([
                        'name' => "{$domain}.{$resource}.{$action}",
                        'guard_name' => GuardEnum::WEB->value,
                    ]);

                }

            }

        }
    }
}