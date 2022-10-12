<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inser admin data
        DB::table('users')->insert([
            'name'          => 'Mr Admin',
            'role_id'       => '1',
            'email'         => 'admin@gmail.com',
            'phone_number'  => '01739568214',
            'address'       => 'Mirpur-1',
            'password'      => Hash::make('pass1234'),
            'created_at'    => date('Y-m-d')
        ]);
        // Inser user data
        DB::table('users')->insert([
            'name'          => 'Mr user',
            'role_id'       => '2',
            'email'         => 'user@gmail.com',
            'phone_number'  => '01739568214',
            'address'       => 'Mirpur-1',
            'password'      => Hash::make('pass1234'),
            'created_at'    => date('Y-m-d')
        ]);
    }
}
