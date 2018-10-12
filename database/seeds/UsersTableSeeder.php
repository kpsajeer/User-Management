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
            'first_name' => "Super",
            'last_name' => "Admin",
            'username' => 'superadmin',
            'email' => 'admin@usermanagement.com',
            'city' => 'Calicut',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);
    }
}
