<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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

        $user->assignRole('Super Administrator');
    }
}
