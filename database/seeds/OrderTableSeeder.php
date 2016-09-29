<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->truncate();

        DB::table('orders')->insert([
                [
                    'user_id' => 1,
                    'total' => 120,
                    'product_id' => 1,
                ],
                [
                    'user_id' => 1,
                    'total' => 240,
                    'product_id' => 2,
                ]
            ]
        );

    }
}
