<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class seedkategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            ['nama' => 'Xiaomi',
                'lcnama' => 'xiaomi',
                'kategori' => 'Handphone',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Oppo',
                'lcnama' => 'oppo',
                'kategori' => 'Handphone',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Vivo',
                'lcnama' => 'vivo',
                'kategori' => 'Handphone',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Samsung',
                'lcnama' => 'samsung',
                'kategori' => 'Handphone',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Apple',
                'lcnama' => 'apple',
                'kategori' => 'Handphone',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Realme',
                'lcnama' => 'realme',
                'kategori' => 'Handphone',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Huawei',
                'lcnama' => 'huawei',
                'kategori' => 'Handphone',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Alat Service',
                'lcnama' => 'alat service',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Baut',
                'lcnama' => 'baut',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Speaker',
                'lcnama' => 'speaker',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Camera',
                'lcnama' => 'camera',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Konektor',
                'lcnama' => 'konektor',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'IC',
                'lcnama' => 'ic',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'LCD',
                'lcnama' => 'lcd',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'MIC',
                'lcnama' => 'mic',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Switch',
                'lcnama' => 'switch',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Sim Tray',
                'lcnama' => 'sim tray',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Touchscreen',
                'lcnama' => 'touchscreen',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Baterai',
                'lcnama' => 'baterai',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'USB Charge',
                'lcnama' => 'usb charge',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['nama' => 'Flexible',
                'lcnama' => 'flexible',
                'kategori' => 'Sparepart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
        ]);
    }
}
