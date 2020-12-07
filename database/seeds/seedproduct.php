<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class seedproduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                [
                    'kodeproduk' => 'X' . $i,
                    'namabarang' => 'xiaomi ' . $i,
                    'image' => 'uploads/Xiaomi.jpg',
                    'golongan' => 'Handphone',
                    'kategori' => 'Xiaomi',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'jumlah' => rand(1, 10),
                    'harga' => rand(1000000, 3000000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'kodeproduk' => 'S' . $i,
                    'namabarang' => 'Samsung ' . $i,
                    'image' => 'uploads/Samsung.jpg',
                    'golongan' => 'Handphone',
                    'kategori' => 'Samsung',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'jumlah' => rand(1, 10),
                    'harga' => rand(1000000, 3000000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'kodeproduk' => 'A' . $i,
                    'namabarang' => 'Apple ' . $i,
                    'image' => 'uploads/Apple.jpg',
                    'golongan' => 'Handphone',
                    'kategori' => 'Apple',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'jumlah' => rand(1, 10),
                    'harga' => rand(1000000, 3000000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'kodeproduk' => 'R' . $i,
                    'namabarang' => 'Realme ' . $i,
                    'image' => 'uploads/Realme.jpg',
                    'golongan' => 'Handphone',
                    'kategori' => 'Realme',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'jumlah' => rand(1, 10),
                    'harga' => rand(1000000, 3000000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'kodeproduk' => 'N' . $i,
                    'namabarang' => 'Nokia ' . $i,
                    'image' => 'uploads/Nokia.jpg',
                    'golongan' => 'Handphone',
                    'kategori' => 'Nokia',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'jumlah' => rand(1, 10),
                    'harga' => rand(1000000, 3000000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'kodeproduk' => 'Flex' . $i,
                    'namabarang' => 'Flexible Volume' . $i,
                    'image' => 'uploads/flexvolume.jpg',
                    'golongan' => 'Sparepart',
                    'kategori' => 'Flexible',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'jumlah' => rand(1, 10),
                    'harga' => rand(1000000, 3000000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'kodeproduk' => 'Flex2' . $i,
                    'namabarang' => 'Flexible Power' . $i,
                    'image' => 'uploads/flexpower.jpg',
                    'golongan' => 'Sparepart',
                    'kategori' => 'Flexible',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta feugiat hendrerit. Phasellus vel sodales nisl, consequat tempor ante. Mauris id urna ut lacus facilisis efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non leo non turpis vestibulum dignissim. Aliquam pellentesque non est vestibulum iaculis. Cras consectetur libero ac laoreet finibus. Pellentesque eget arcu sit amet eros lobortis sollicitudin eu ut ante. Pellentesque quis mauris et ligula semper fringilla. Ut porta purus massa, id congue tortor molestie et. Curabitur orci velit, hendrerit et justo sit amet, finibus malesuada ligula. Mauris dapibus suscipit quam eget pharetra. Aenean non orci sit amet massa elementum egestas nec eu libero. Cras eu quam ornare, lacinia lacus vel, tristique metus. Donec euismod, turpis at tempus venenatis, ex urna egestas mi, a iaculis lectus metus eget diam.',
                    'jumlah' => rand(1, 10),
                    'harga' => rand(1000000, 3000000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
