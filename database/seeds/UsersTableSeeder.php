<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'last_name' => 'Alferza',
            'email' => 'admin@alferza.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
