<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        DB::table('products')->insert([
                [
                    'name' => 'Orange',
                    'price' => 80,
                    'description' => 'this is orange',
                ],
                [
                    'name' => 'Shoe',
                    'price' => 120,
                    'description' => 'this is shoe',
                ]
            ]
        );

    }
}
