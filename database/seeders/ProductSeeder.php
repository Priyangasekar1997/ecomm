<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        //
        DB::table('products')->insert([
            [
            'name'=>'Moto mobile',
            'price'=>'200',
            'description'=>'A smartphone with 4GB Ram and much more features',
            'category'=>'mobile',
            'gallery'=>'images/moto_G7.png'
            ],
            [
                'name'=>'Oppo mobile',
                'price'=>'400',
                'description'=>'A smartphone with 8GB Ram and much more features',
                'category'=>'mobile',
                'gallery'=>'images/OPPO F19 Pro+ Transparent Png.png'
            ],
            [
                'name'=>'Samsung mobile',
                'price'=>'600',
                'description'=>'A smartphone with 16GB Ram and much more features',
                'category'=>'mobile',
                'gallery'=>'images/samsung_galaxy_s9.png'
            ],
            [
                'name'=>'Redmi mobile',
                'price'=>'450',
                'description'=>'A smartphone with 4GB Ram and much more features',
                'category'=>'mobile',
                'gallery'=>'images/Redmi_note_9_pro.png'
            ],
            [
                'name'=>'Vivo mobile',
                'price'=>'600',
                'description'=>'A smartphone with 4GB Ram and much more features',
                'category'=>'mobile',
                'gallery'=>'images/vivo v21.png'
            ],
            [
                'name'=>'Panasonic TV ',
                'price'=>'1000',
                'description'=>'A smart Tv with good quality of pictures and much more features',
                'category'=>'Television',
                'gallery'=>'images/LED-TV-PNG.png'
            ],
            [
                'name'=>'LG TV',
                'price'=>'700',
                'description'=>'A smart Tv with good quality of pictures and much more features',
                'category'=>'Television',
                'gallery'=>'images/Ultra-HD-LED-TV-PNG-Free-Image.png'
            ],
            [
                'name'=>'Lenovo Laptop',
                'price'=>'600',
                'description'=>'A Laptop with 8GB Ram and much more features',
                'category'=>'Laptop',
                'gallery'=>'images/Laptop-PNG.png'
            ],
        ]);
    }
}
