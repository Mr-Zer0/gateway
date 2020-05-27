<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  => env('ADMIN_NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password'  => Hash::make(env('ADMIN_PASSWORD')),
            'role'  => 1
        ]);
    }
}
