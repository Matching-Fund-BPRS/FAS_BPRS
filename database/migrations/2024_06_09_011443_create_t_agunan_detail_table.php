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
        Schema::create('t_agunan_detail', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('ID_NASABAH', 10)->nullable()->index('fk_t_agunan_detail_ID_NASABAH');
            $table->date('TGL_PEMERIKAAN')->nullable();
            $table->string('PENILAI', 30)->nullable();
            $table->string('PEMERIKSA', 30)->nullable();
            $table->string('JENIS_OBJEK', 1)->nullable();
            $table->string('PEMBELIAN', 1)->nullable();
            $table->string('UMUR', 1)->nullable();
            $table->string('MERK', 30)->nullable();
            $table->string('TYPE', 30)->nullable();
            $table->string('JENIS', 30)->nullable();
            $table->integer('TAHUN_PEMBUATAN')->nullable();
            $table->string('KONDISI', 1)->nullable();
            $table->string('PERAWATAN', 1)->nullable();
            $table->string('DOKUMENT_KEPEMILIKAN', 1)->nullable();
            $table->string('NO_DOKUMENT', 30)->nullable();
            $table->date('TANGGAL_DOKUMEN')->nullable();
            $table->string('ATAS_NAMA', 30)->nullable();
            $table->string('IKATAN_JAMINAN', 1)->nullable();
            $table->string('NO_AKTA', 30)->nullable();
            $table->date('SERTIFIKAT_FEO')->nullable();
            $table->string('NOTARIS', 30)->nullable();
            $table->date('TANGGAL_FEO')->nullable();
            $table->string('ASURANSI', 1)->nullable();
            $table->double('NILAI_PENGIKATAN')->nullable();
            $table->string('JENIS_PENUTUPAN_AS', 30)->nullable();
            $table->double('NILAI_PERTANGGUNGAN')->nullable();
            $table->date('TGL_BERLAKU')->nullable();
            $table->string('PERUSAHAAN_ASURANSI', 30)->nullable();
            $table->string('TUJUAN_PENILAIAN', 1)->nullable();
            $table->double('DATA_TERENDAH')->nullable();
            $table->string('INFORMAN_TERENDAH', 30)->nullable();
            $table->double('DATA_TERTINGGI')->nullable();
            $table->string('INFORMAN_TERTINGGI', 30)->nullable();
            $table->date('TGL_TERENDAH')->nullable();
            $table->date('TGL_TERTINGGI')->nullable();
            $table->string('MARKETABILITY', 1)->nullable();
            $table->string('PENGIKATAN_SEMPURNA', 1)->nullable();
            $table->string('PERMASALAHAN', 1)->nullable();
            $table->string('PENGUASAAN', 1)->nullable();
            $table->mediumText('LAIN_LAIN')->nullable();
            $table->mediumText('REKOMENDASI')->nullable();
            $table->string('JENIS_AGUNAN', 1)->nullable();
            $table->string('LOKASI', 100)->nullable();
            $table->string('KEADAAN_FISIK', 1)->nullable();
            $table->string('LUAS_TANAH', 20)->nullable();
            $table->string('JALAN', 1)->nullable();
            $table->string('LEBAR', 2)->nullable();
            $table->string('JARINGAN_LISTRIK', 1)->nullable();
            $table->string('JARINGAN_TELEPON', 1)->nullable();
            $table->string('FAS_PAM', 1)->nullable();
            $table->string('SEKOLAH', 1)->nullable();
            $table->string('PASAR', 1)->nullable();
            $table->string('SPBU', 1)->nullable();
            $table->string('TEMPAT_IBADAH', 1)->nullable();
            $table->string('TEMPAT_HIBURAN', 1)->nullable();
            $table->string('PERKUBURAN', 1)->nullable();
            $table->string('FAS_LINGKUNGAN', 1)->nullable();
            $table->string('TAHUN_BELI', 4)->nullable();
            $table->string('WILAYAH', 1)->nullable();
            $table->string('PERUNTUKAN_WIL', 1)->nullable();
            $table->string('DAERAH_BAJIR', 1)->nullable();
            $table->string('DAERAH_TEG_TINGGI', 1)->nullable();
            $table->string('DAERAH_RAWAN_LONGSOR', 1)->nullable();
            $table->string('DAERAH_PENCEMARAN', 1)->nullable();
            $table->string('KUALITAS_TANAH', 1)->nullable();
            $table->string('COUNTOUR_TANAH', 1)->nullable();
            $table->double('INFO_BY_PEMBANGUNAN')->nullable();
            $table->double('BIAYA_PEMBANGUNAN_BARU')->nullable();
            $table->integer('UMUR_EKONOMIS')->nullable();
            $table->double('UMUR_EFEKTIF')->nullable();
            $table->integer('PENYUSUTAN_PERTAHUN')->nullable();
            $table->string('INFORMAN_3', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_agunan_detail');
    }
};
