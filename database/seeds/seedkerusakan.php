<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class seedkerusakan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kerusakan')->insert([
            [
                'kerusakan' => 'Layar',
            ],
            [
                'kerusakan' => 'Baterai',
            ],
            [
                'kerusakan' => 'Touchscreen',
            ],
            [
                'kerusakan' => 'Mati Total',
            ],
            [
                'kerusakan' => 'Speaker',
            ],
            [
                'kerusakan' => 'Hang',
            ],
            [
                'kerusakan' => 'Kamera',
            ],
            [
                'kerusakan' => 'Casing',
            ],
            [
                'kerusakan' => 'USB Charge',
            ],
            [
                'kerusakan' => 'Sinyal',
            ],
        ]);
    }
}
