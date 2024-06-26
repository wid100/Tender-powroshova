<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Super Admin',
            'country' => 'Bangladesh',
            'phone' => '00000000000',
            'email' => 'tender@admin.com',
            'password' => bcrypt('tender'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Tender User',
            'country' => 'Bangladesh',
            'phone' => '00000000000',
            'email' => 'tender@user.com',
            'password' => bcrypt('tender'),
        ]);
        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Admin',
            'country' => 'Bangladesh',
            'phone' => '01792892198',
            'email' => 'admin@admin.com',
            'password' => bcrypt('helaluddin'),
        ]);
        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'Block User',
            'country' => 'Bangladesh',
            'phone' => '01792892198',
            'email' => 'helal@block.com',
            'password' => bcrypt('helaluddin'),
        ]);
    }
}