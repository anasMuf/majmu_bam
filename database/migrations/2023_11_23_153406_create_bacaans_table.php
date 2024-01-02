<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bacaans', function (Blueprint $table) {
            $table->id('id_bacaan');
            $table->string('judul_arb')->nullable();
            $table->string('judul_latin')->nullable();
            $table->string('judul_ina')->nullable();
            $table->string('slug')->nullable();
            $table->string('gambar')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bacaans');
    }
}
