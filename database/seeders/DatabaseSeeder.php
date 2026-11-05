<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create([
            'full_name' => 'Patrick Archie',
            'email' => 'patrick@gmail.com',
            'phone' => '09123456789',
        ]);

        Customer::create([
            'full_name' => 'Silayan Calabia',
            'email' => 'silayan@gmail.com',
            'phone' => '09234567890',
        ]);

        Customer::create([
            'full_name' => 'Patrick Calabia',
            'email' => 'pcalabia@gmail.com',
            'phone' => '09345678901',
        ]);

        Customer::create([
            'full_name' => 'Archie Silayan',
            'email' => 'archie@gmail.com',
            'phone' => '09456789012',
        ]);

        Customer::create([
            'full_name' => 'Ocean Santos',
            'email' => 'ocean@gmail.com',
            'phone' => '09567890123',
        ]);

        User::create([
            'username' => 'glitter',
            'full_name' => 'Glitter ',
        ]);

        User::create([
            'username' => 'sparkle',
            'full_name' => 'Sparkle ',
        ]);

        User::create([
            'username' => 'bob',
            'full_name' => 'Bob ',
        ]);

        User::create([
            'username' => 'frank',
            'full_name' => 'Frank ',
        ]);

        User::create([
            'username' => 'ocean',
            'full_name' => 'Ocean ',
        ]);
    }
}