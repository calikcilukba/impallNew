<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class seeddataservices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                 'handphone' => 'Xiaomi '.$i,
                 'model' => 'Xiaomi',
                 'kerusakan' => 'Layar',
                    'gambar' => 'layar.jpg',
                 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                 'harga' => rand(100000,300000),
                  'created_at' => Carbon::now(),
                  'updated_at' => Carbon::now(),
               ],
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                    'handphone' => 'Xiaomi '.$i,
                    'model' => 'Xiaomi',
                    'kerusakan' => 'Baterai',
                    'gambar' => 'baterai.jpg',
                    'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'harga' => rand(100000,300000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                    'handphone' => 'Xiaomi '.$i,
                    'model' => 'Xiaomi',
                    'kerusakan' => 'Touchscreen',
                    'gambar' => 'touchscreen.jpg',
                    'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'harga' => rand(100000,300000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                    'handphone' => 'Xiaomi '.$i,
                    'model' => 'Xiaomi',
                    'kerusakan' => 'Mati Total',
                    'gambar' => 'mati-total.jpg',
                    'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'harga' => rand(100000,300000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                    'handphone' => 'Xiaomi '.$i,
                    'model' => 'Xiaomi',
                    'kerusakan' => 'Hang',
                    'gambar' => 'hang.jpg',
                    'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'harga' => rand(100000,300000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                    'handphone' => 'Xiaomi '.$i,
                    'model' => 'Xiaomi',
                    'kerusakan' => 'Kamera',
                    'gambar' => 'kamera.jpg',
                    'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'harga' => rand(100000,300000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                    'handphone' => 'Xiaomi '.$i,
                    'model' => 'Xiaomi',
                    'kerusakan' => 'Casing',
                    'gambar' => 'casing.jpg',
                    'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'harga' => rand(100000,300000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                    'handphone' => 'Xiaomi '.$i,
                    'model' => 'Xiaomi',
                    'kerusakan' => 'USB Charge',
                    'gambar' => 'usb-charge.jpg',
                    'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'harga' => rand(100000,300000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        for ($i = 1; $i <= 10; $i++){
            DB::table('dataservices')->insert([
                [
                    'handphone' => 'Xiaomi '.$i,
                    'model' => 'Xiaomi',
                    'kerusakan' => 'Sinyal',
                    'gambar' => 'sinyal.jpg',
                    'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'harga' => rand(100000,300000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
