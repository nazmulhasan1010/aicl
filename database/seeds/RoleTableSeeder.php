<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inser admin data
        DB::table('roles')->insert([
            'role_name'     => 'Mr Admin',
            'slug'          => Str::slug('admin'),
            'created_at'    => date('Y-m-d')
        ]);
        // Inser admin data
        DB::table('roles')->insert([
            'role_name'     => 'Mr User',
            'slug'          => Str::slug('user'),
            'created_at'    => date('Y-m-d')
        ]);

    }
}
