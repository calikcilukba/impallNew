<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class seeduser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'asd',
                'email' => 'asd@gmail.com',
                'alamat' => 'sukapura',
                'jeniskelamin' => 'laki-laki',
                'umur' => '19',
                'password' => Hash::make('asdasdasd'),
                'role' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'halik',
                'email' => 'chalik@gmail.com',
                'alamat' => 'sukapura',
                'jeniskelamin' => 'laki-laki',
                'umur' => '19',
                'password' => Hash::make('asdasdasd'),
                'role' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'calik',
                'email' => 'calik@gmail.com',
                'alamat' => 'sukapura',
                'jeniskelamin' => 'laki-laki',
                'umur' => '19',
                'password' => Hash::make('asdasdasd'),
                'role' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
