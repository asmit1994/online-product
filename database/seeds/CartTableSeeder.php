<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->truncate();

        DB::table('carts')->insert([
                [
                    'user_id' => 1,
                    'product_id' => 1,
                    'quantity' => 1,
                    'total' => 80
                ],
                [
                    'user_id' => 1,
                    'product_id' => 2,
                    'quantity' => 2,
                    'total' => 240
                ]
            ]
        );

    }
}
