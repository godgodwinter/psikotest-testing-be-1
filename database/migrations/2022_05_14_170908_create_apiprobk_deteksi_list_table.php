<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apiprobk_deteksi_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('apiprobk_deteksi_id')->nullable();
            $table->text('deteksi_nama')->nullable();
            $table->text('deteksi_score')->nullable();
            $table->text('deteksi_keterangan')->nullable();
            $table->text('deteksi_rank')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('apiprobk_deteksi_list');
    }
};
