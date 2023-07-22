<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'code_product' => 'FE11',
                'name_product' => 'Lemari 2 pintu',
                'harga' => '15000000',
                'stock' => '1',
                'deskripsi' => 'murah meriah bis di beli sekarang'
            ],
            [
                'code_product' => 'FE31',
                'name_product' => 'Lemari 1 pintu',
                'harga' => '18000000',
                'stock' => '3',
                'deskripsi' => 'murah meriah bis di beli sekarang'
            ],
            [
                'code_product' => 'FE21',
                'name_product' => 'Lemari 3 pintu',
                'harga' => '17000000',
                'stock' => '2',
                'deskripsi' => 'murah meriah bis di beli sekarang'
            ],
        ]);

    }
}
