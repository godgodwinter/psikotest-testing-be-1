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
        Schema::create('apiprobk_sertifikat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('apiprobk_id')->nullable();
            $table->text('no_induk')->nullable();
            $table->text('nama')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->text('sekolah')->nullable();
            $table->text('umur')->nullable();
            $table->text('kb')->nullable();
            $table->text('kb_persen')->nullable();
            $table->text('lm')->nullable();
            $table->text('lm_persen')->nullable();
            $table->text('ks')->nullable();
            $table->text('ks_persen')->nullable();
            $table->text('km')->nullable();
            $table->text('km_persen')->nullable();
            $table->text('kk')->nullable();
            $table->text('kk_persen')->nullable();
            $table->text('ki')->nullable();
            $table->text('ki_persen')->nullable();
            $table->text('ka')->nullable();
            $table->text('ka_persen')->nullable();
            $table->text('kn')->nullable();
            $table->text('kn_persen')->nullable();
            $table->text('total_km')->nullable();
            $table->text('iq')->nullable();
            $table->text('iq_persen')->nullable();
            $table->text('kbh')->nullable();
            $table->text('lmh')->nullable();
            $table->text('ksh')->nullable();
            $table->text('kmh')->nullable();
            $table->text('kkh')->nullable();
            $table->text('kih')->nullable();
            $table->text('kah')->nullable();
            $table->text('knh')->nullable();
            $table->text('iqh')->nullable();
            $table->text('hspq_a')->nullable();
            $table->text('hspq_a_kn_rank')->nullable();
            $table->text('hspq_a_kn_persen')->nullable();
            $table->text('hspq_a_kn_keterangan')->nullable();
            $table->text('hspq_a_kn_aspek_positif')->nullable();
            $table->text('hspq_a_kn_aspek_negatif')->nullable();
            $table->text('hspq_a_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_a_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_a_kr_rank')->nullable();
            $table->text('hspq_a_kr_persen')->nullable();
            $table->text('hspq_a_kr_keterangan')->nullable();
            $table->text('hspq_a_kr_aspek_positif')->nullable();
            $table->text('hspq_a_kr_aspek_negatif')->nullable();
            $table->text('hspq_a_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_a_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_c')->nullable();
            $table->text('hspq_c_kn_rank')->nullable();
            $table->text('hspq_c_kn_persen')->nullable();
            $table->text('hspq_c_kn_keterangan')->nullable();
            $table->text('hspq_c_kn_aspek_positif')->nullable();
            $table->text('hspq_c_kn_aspek_negatif')->nullable();
            $table->text('hspq_c_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_c_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_c_kr_rank')->nullable();
            $table->text('hspq_c_kr_persen')->nullable();
            $table->text('hspq_c_kr_keterangan')->nullable();
            $table->text('hspq_c_kr_aspek_positif')->nullable();
            $table->text('hspq_c_kr_aspek_negatif')->nullable();
            $table->text('hspq_c_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_c_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_d')->nullable();
            $table->text('hspq_d_kn_rank')->nullable();
            $table->text('hspq_d_kn_persen')->nullable();
            $table->text('hspq_d_kn_keterangan')->nullable();
            $table->text('hspq_d_kn_aspek_positif')->nullable();
            $table->text('hspq_d_kn_aspek_negatif')->nullable();
            $table->text('hspq_d_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_d_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_d_kr_rank')->nullable();
            $table->text('hspq_d_kr_persen')->nullable();
            $table->text('hspq_d_kr_keterangan')->nullable();
            $table->text('hspq_d_kr_aspek_positif')->nullable();
            $table->text('hspq_d_kr_aspek_negatif')->nullable();
            $table->text('hspq_d_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_d_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_e')->nullable();
            $table->text('hspq_e_kn_rank')->nullable();
            $table->text('hspq_e_kn_persen')->nullable();
            $table->text('hspq_e_kn_keterangan')->nullable();
            $table->text('hspq_e_kn_aspek_positif')->nullable();
            $table->text('hspq_e_kn_aspek_negatif')->nullable();
            $table->text('hspq_e_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_e_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_e_kr_rank')->nullable();
            $table->text('hspq_e_kr_persen')->nullable();
            $table->text('hspq_e_kr_keterangan')->nullable();
            $table->text('hspq_e_kr_aspek_positif')->nullable();
            $table->text('hspq_e_kr_aspek_negatif')->nullable();
            $table->text('hspq_e_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_e_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_f')->nullable();
            $table->text('hspq_f_kn_rank')->nullable();
            $table->text('hspq_f_kn_persen')->nullable();
            $table->text('hspq_f_kn_keterangan')->nullable();
            $table->text('hspq_f_kn_aspek_positif')->nullable();
            $table->text('hspq_f_kn_aspek_negatif')->nullable();
            $table->text('hspq_f_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_f_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_f_kr_rank')->nullable();
            $table->text('hspq_f_kr_persen')->nullable();
            $table->text('hspq_f_kr_keterangan')->nullable();
            $table->text('hspq_f_kr_aspek_positif')->nullable();
            $table->text('hspq_f_kr_aspek_negatif')->nullable();
            $table->text('hspq_f_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_f_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_g')->nullable();
            $table->text('hspq_g_kn_rank')->nullable();
            $table->text('hspq_g_kn_persen')->nullable();
            $table->text('hspq_g_kn_keterangan')->nullable();
            $table->text('hspq_g_kn_aspek_positif')->nullable();
            $table->text('hspq_g_kn_aspek_negatif')->nullable();
            $table->text('hspq_g_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_g_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_g_kr_rank')->nullable();
            $table->text('hspq_g_kr_persen')->nullable();
            $table->text('hspq_g_kr_keterangan')->nullable();
            $table->text('hspq_g_kr_aspek_positif')->nullable();
            $table->text('hspq_g_kr_aspek_negatif')->nullable();
            $table->text('hspq_g_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_g_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_h')->nullable();
            $table->text('hspq_h_kn_rank')->nullable();
            $table->text('hspq_h_kn_persen')->nullable();
            $table->text('hspq_h_kn_keterangan')->nullable();
            $table->text('hspq_h_kn_aspek_positif')->nullable();
            $table->text('hspq_h_kn_aspek_negatif')->nullable();
            $table->text('hspq_h_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_h_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_h_kr_rank')->nullable();
            $table->text('hspq_h_kr_persen')->nullable();
            $table->text('hspq_h_kr_keterangan')->nullable();
            $table->text('hspq_h_kr_aspek_positif')->nullable();
            $table->text('hspq_h_kr_aspek_negatif')->nullable();
            $table->text('hspq_h_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_h_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_i')->nullable();
            $table->text('hspq_i_kn_rank')->nullable();
            $table->text('hspq_i_kn_persen')->nullable();
            $table->text('hspq_i_kn_keterangan')->nullable();
            $table->text('hspq_i_kn_aspek_positif')->nullable();
            $table->text('hspq_i_kn_aspek_negatif')->nullable();
            $table->text('hspq_i_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_i_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_i_kr_rank')->nullable();
            $table->text('hspq_i_kr_persen')->nullable();
            $table->text('hspq_i_kr_keterangan')->nullable();
            $table->text('hspq_i_kr_aspek_positif')->nullable();
            $table->text('hspq_i_kr_aspek_negatif')->nullable();
            $table->text('hspq_i_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_i_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_j')->nullable();
            $table->text('hspq_j_kn_rank')->nullable();
            $table->text('hspq_j_kn_persen')->nullable();
            $table->text('hspq_j_kn_keterangan')->nullable();
            $table->text('hspq_j_kn_aspek_positif')->nullable();
            $table->text('hspq_j_kn_aspek_negatif')->nullable();
            $table->text('hspq_j_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_j_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_j_kr_rank')->nullable();
            $table->text('hspq_j_kr_persen')->nullable();
            $table->text('hspq_j_kr_keterangan')->nullable();
            $table->text('hspq_j_kr_aspek_positif')->nullable();
            $table->text('hspq_j_kr_aspek_negatif')->nullable();
            $table->text('hspq_j_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_j_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_o')->nullable();
            $table->text('hspq_o_kn_rank')->nullable();
            $table->text('hspq_o_kn_persen')->nullable();
            $table->text('hspq_o_kn_keterangan')->nullable();
            $table->text('hspq_o_kn_aspek_positif')->nullable();
            $table->text('hspq_o_kn_aspek_negatif')->nullable();
            $table->text('hspq_o_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_o_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_o_kr_rank')->nullable();
            $table->text('hspq_o_kr_persen')->nullable();
            $table->text('hspq_o_kr_keterangan')->nullable();
            $table->text('hspq_o_kr_aspek_positif')->nullable();
            $table->text('hspq_o_kr_aspek_negatif')->nullable();
            $table->text('hspq_o_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_o_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_q2')->nullable();
            $table->text('hspq_q2_kn_rank')->nullable();
            $table->text('hspq_q2_kn_persen')->nullable();
            $table->text('hspq_q2_kn_keterangan')->nullable();
            $table->text('hspq_q2_kn_aspek_positif')->nullable();
            $table->text('hspq_q2_kn_aspek_negatif')->nullable();
            $table->text('hspq_q2_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_q2_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_q2_kr_rank')->nullable();
            $table->text('hspq_q2_kr_persen')->nullable();
            $table->text('hspq_q2_kr_keterangan')->nullable();
            $table->text('hspq_q2_kr_aspek_positif')->nullable();
            $table->text('hspq_q2_kr_aspek_negatif')->nullable();
            $table->text('hspq_q2_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_q2_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_q4')->nullable();
            $table->text('hspq_q4_kn_rank')->nullable();
            $table->text('hspq_q4_kn_persen')->nullable();
            $table->text('hspq_q4_kn_keterangan')->nullable();
            $table->text('hspq_q4_kn_aspek_positif')->nullable();
            $table->text('hspq_q4_kn_aspek_negatif')->nullable();
            $table->text('hspq_q4_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_q4_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_q4_kr_rank')->nullable();
            $table->text('hspq_q4_kr_persen')->nullable();
            $table->text('hspq_q4_kr_keterangan')->nullable();
            $table->text('hspq_q4_kr_aspek_positif')->nullable();
            $table->text('hspq_q4_kr_aspek_negatif')->nullable();
            $table->text('hspq_q4_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_q4_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_q3')->nullable();
            $table->text('hspq_q3_kn_rank')->nullable();
            $table->text('hspq_q3_kn_persen')->nullable();
            $table->text('hspq_q3_kn_keterangan')->nullable();
            $table->text('hspq_q3_kn_aspek_positif')->nullable();
            $table->text('hspq_q3_kn_aspek_negatif')->nullable();
            $table->text('hspq_q3_kn_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_q3_kn_aspek_negatif_di_ungkap')->nullable();
            $table->text('hspq_q3_kr_rank')->nullable();
            $table->text('hspq_q3_kr_persen')->nullable();
            $table->text('hspq_q3_kr_keterangan')->nullable();
            $table->text('hspq_q3_kr_aspek_positif')->nullable();
            $table->text('hspq_q3_kr_aspek_negatif')->nullable();
            $table->text('hspq_q3_kr_aspek_positif_di_ungkap')->nullable();
            $table->text('hspq_q3_kr_aspek_negatif_di_ungkap')->nullable();

            $table->text('hspq_rank_1')->nullable();
            $table->text('hspq_rank_2')->nullable();
            $table->text('hspq_rank_3')->nullable();
            $table->text('hspq_rank_4')->nullable();
            $table->text('hspq_rank_5')->nullable();

            $table->text('hspq_rank_1_positif')->nullable();
            $table->text('hspq_rank_2_positif')->nullable();
            $table->text('hspq_rank_3_positif')->nullable();
            $table->text('hspq_rank_4_positif')->nullable();
            $table->text('hspq_rank_5_positif')->nullable();

            $table->text('hspq_rank_1_negatif')->nullable();
            $table->text('hspq_rank_2_negatif')->nullable();
            $table->text('hspq_rank_3_negatif')->nullable();
            $table->text('hspq_rank_4_negatif')->nullable();
            $table->text('hspq_rank_5_negatif')->nullable();

            $table->text('km_kr')->nullable();
            $table->text('km_kr_keterangan')->nullable();

            $table->text('km_p1')->nullable();
            $table->text('km_p1_keterangan')->nullable();

            $table->text('km_p9')->nullable();
            $table->text('km_p9_keterangan')->nullable();

            $table->text('mnt_cita2_1')->nullable();
            $table->text('mnt_cita2_2')->nullable();
            $table->text('mnt_cita2_3')->nullable();

            $table->text('mnt_studi_lanjut_smp')->nullable();
            $table->text('mnt_studi_lanjut_sma_smk_1_fakultas')->nullable();
            $table->text('mnt_studi_lanjut_sma_smk_1_prodi')->nullable();
            $table->text('mnt_studi_lanjut_sma_smk_2_fakultas')->nullable();
            $table->text('mnt_studi_lanjut_sma_smk_2_prodi')->nullable();
            $table->text('mnt_studi_lanjut_sma_smk_kedinasan')->nullable();

            $table->text('mnt_jurusan_lanjut_sma')->nullable();
            $table->text('mnt_jurusan_lanjut_smk_1')->nullable();
            $table->text('mnt_jurusan_lanjut_smk_2')->nullable();
            $table->text('mnt_jurusan_lanjut_smk_3')->nullable();
            $table->text('saran_fakultas_1')->nullable();
            $table->text('saran_fakultas_1_prodi')->nullable();
            $table->text('saran_fakultas_2')->nullable();
            $table->text('saran_fakultas_2_prodi')->nullable();
            $table->text('kesimpulan_tambahan')->nullable();

            $table->text('tipe_bakat_1')->nullable();
            $table->text('tipe_bakat_2')->nullable();
            $table->text('tipe_bakat_3')->nullable();

            $table->text('minat_pekerjaan_1')->nullable();
            $table->text('minat_pekerjaan_2')->nullable();
            $table->text('minat_pekerjaan_3')->nullable();
            $table->text('minat_pekerjaan_1_persen')->nullable();
            $table->text('minat_pekerjaan_2_persen')->nullable();
            $table->text('minat_pekerjaan_3_persen')->nullable();

            $table->text('sekolah_lanjutan')->nullable();
            $table->text('sekolah_jurusan')->nullable();

            $table->text('eq_persen')->nullable();
            $table->text('eq_persen_keterangan')->nullable();
            $table->text('sq_persen')->nullable();
            $table->text('sq_persen_keterangan')->nullable();
            $table->text('scq_persen')->nullable();
            $table->text('scq_persen_keterangan')->nullable();

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
        Schema::dropIfExists('apiprobk_sertifikat');
    }
};
