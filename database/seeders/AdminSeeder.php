<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the admin user.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@mandtglobal.com'],
            [
                'name' => 'Admin',
                'password' => 'password',
            ]
        );
    }
}
