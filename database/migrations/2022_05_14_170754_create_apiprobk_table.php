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
        Schema::create('apiprobk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable();
            $table->string('sertifikat')->nullable()->default('belum');
            $table->string('sertifikat_tgl')->nullable();
            $table->string('deteksi')->nullable()->default('belum');
            $table->string('deteksi_tgl')->nullable();
            $table->string('sinkron')->nullable()->default('belum');
            $table->string('sinkron_tgl')->nullable();
            $table->string('status')->nullable()->default('Aktif'); //Aktif/Nonaktif
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
        Schema::dropIfExists('apiprobk');
    }
};
