<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin2',
            'email' => 'admin@gmail.com',
            'password' => becrypt('somesecretpasswordmaybehopefullyyea'),
            'is_admin' => 1
        ]);
    }
}
