<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Statuse extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            [
                'code' => 'P1',
                'proses' => 'Dalam Pembayaran',
                'deskripsis' => 'User sedang melakukan Pembayaran'
            ],
            [
                'code' => 'P2',
                'proses' => 'Dalam Peroses Verivikasi',
                'deskripsis' => 'Admin sedang memverifikasi'
            ],
            [
                'code' => 'P3',
                'proses' => 'Selesai',
                'deskripsis' => 'Selesai'
            ],
        ]);
    }
}
