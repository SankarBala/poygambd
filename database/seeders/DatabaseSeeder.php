<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Candidate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create admin

        User::create([
            'name' => 'Administrator',
            'email' => 'info@cube.com.bd',
            'role' => 'admin',
            'password' => Hash::make('00000000')
        ]);

        User::factory(1)->create();
        Candidate::factory(2)->create();
    }
}
