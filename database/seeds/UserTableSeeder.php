<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
                [
                    'name' => 'Asmit Ghimire',
                    'email' => 'asmit@acd.edu.np',
                    'password' => bcrypt('password'),
                    'roles' => 'admin'
                ]
            ]
        );

    }
}
