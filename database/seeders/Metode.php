<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Metode extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('metodes')->insert([
            [
                'code' => 'B1',
                'metod' => 'Bank BCA',
                'deskripsis' => 'Pembayaran Melalui BCA'
            ],
            [
                'code' => 'B2',
                'metod' => 'Bank BTN',
                'deskripsis' => 'Pembayaran Melalui BTN'
            ],
            [
                'code' => 'B3',
                'metod' => 'Bank BRI',
                'deskripsis' => 'Pembayaran Melalui BRI'
            ],
        ]);
    }
}
