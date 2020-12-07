<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('userid')->unsigned()->nullable();
            $table->biginteger('iddservice')->unsigned()->nullable();
            $table->text('service');
            $table->boolean('verifikasi')->default(false);
            $table->double('harga');
            $table->timestamps();
        });
        Schema::table('reparasi', function (Blueprint $table) {
            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('iddservice')->references('id')->on('dataservices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reparasi', function (Blueprint $table) {
            $table->dropForeign('reparasi_userid_foreign');
            $table->dropForeign('reparasi_iddservice_foreign');
        });
        Schema::dropIfExists('reparasi');
    }
}
