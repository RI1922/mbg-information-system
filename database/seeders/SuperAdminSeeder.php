<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Enums\RoleEnum;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::updateOrCreate(
            [
                'email' => 'admin@mbg.local',
            ],
            [
                'name' => 'Super Administrator',
                'username' => 'superadmin',
                'password' => 'password',
            ]
        );

$user->syncRoles([
    RoleEnum::SUPER_ADMIN->value,
]);
    }
}