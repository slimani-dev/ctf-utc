<?php

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
        DB::table('users')->insert([
            'name' => 'Mohamed',
            'email' => 'slimani.m1993@gmail.com',
            'password' => bcrypt('mohamed s'),
        ]);
    }
}
