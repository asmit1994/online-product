<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call(UserTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CartTableSeeder::class);
        $this->call(OrderTableSeeder::class);

        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
