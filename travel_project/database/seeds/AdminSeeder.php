<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('admin123'),
            'roles' => 'ADMIN'
        ]);
    }
}
