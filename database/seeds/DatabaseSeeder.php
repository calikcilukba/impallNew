<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(seedkategori::class);
        $this->call(seedproduct::class);
        $this->call(seeduser::class);
        $this->call(seedkerusakan::class);
        $this->call(seeddataservices::class);
    }
}
