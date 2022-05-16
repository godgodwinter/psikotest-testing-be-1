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
        Schema::create('apiprobk_deteksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('apiprobk_id')->nullable();
            $table->text('no_induk')->nullable();
            $table->text('nama')->nullable();
            $table->text('umur')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->text('sekolah')->nullable();
            $table->text('kelas')->nullable();
            $table->text('deteksi_total_persen')->nullable();
            $table->text('deteksi_total_keterangan')->nullable();
            $table->text('deteksi_eq_total_persen')->nullable();
            $table->text('deteksi_eq_total_keterangan')->nullable();
            $table->text('deteksi_sq_total_persen')->nullable();
            $table->text('deteksi_sq_total_keterangan')->nullable();
            $table->text('deteksi_scq_total_persen')->nullable();
            $table->text('deteksi_scq_total_keterangan')->nullable();
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
        Schema::dropIfExists('apiprobk_deteksi');
    }
};
