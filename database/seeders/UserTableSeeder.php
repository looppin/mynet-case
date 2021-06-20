<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name' => 'Berk Soroğlu',
           'email' => 'deneme@mynet.com',
           'email_verified_at' => NULL,
           'password' => Hash::make('mynet@2023'),
           'file' =>  '60cf5aa754be1.jpeg'
        ]);
    }
}
