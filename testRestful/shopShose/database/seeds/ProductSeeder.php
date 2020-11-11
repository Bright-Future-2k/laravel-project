<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name_product = 'Xe Hyundai';
        $product->price = '504.000.000 VND';
        $product->save();

        $product = new Product();
        $product->name_product = 'Xe Mazda 6';
        $product->price = '804.000.000 VND';
        $product->save();

        $product = new Product();
        $product->name_product = 'Xe Ford';
        $product->price = '535.000.000 VND';
        $product->save();

        $product = new Product();
        $product->name_product = 'Xe Mazda 6';
        $product->price = '804.000.000 VND';
        $product->save();

        $product = new Product();
        $product->name_product = 'Xe Ford';
        $product->price = '535.000.000 VND';
        $product->save();
    }
}
