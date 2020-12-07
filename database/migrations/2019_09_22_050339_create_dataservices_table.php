<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataservices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('handphone');
            $table->String('model');
            $table->String('kerusakan');
            $table->String('gambar');
            $table->longText('detail');
            $table->double('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataservices');
    }
}
