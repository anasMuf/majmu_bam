<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacaanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bacaan_details', function (Blueprint $table) {
            $table->id('id_bacaan_detail');
            $table->integer('bacaan_id');
            // $table->string('segmen')->nullable();
            $table->string('segmen_parent')->nullable();
            $table->string('segmen_child')->nullable();
            $table->longText('arb')->nullable();
            $table->longText('ina')->nullable();
            $table->longText('keterangan')->nullable();
            $table->boolean('is_syiir')->nullable()->default(false);
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
        Schema::dropIfExists('bacaan_details');
    }
}
