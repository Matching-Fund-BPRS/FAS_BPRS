<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TAgunanDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TAgunanDetail>
 */
final class TAgunanDetailFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TAgunanDetail::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID' => fake()->randomNumber(),
            'ID_NASABAH' => fake()->optional()->word,
            'TGL_PEMERIKAAN' => fake()->optional()->date(),
            'PENILAI' => fake()->optional()->word,
            'PEMERIKSA' => fake()->optional()->word,
            'JENIS_OBJEK' => fake()->optional()->word,
            'PEMBELIAN' => fake()->optional()->word,
            'UMUR' => fake()->optional()->word,
            'MERK' => fake()->optional()->word,
            'TYPE' => fake()->optional()->word,
            'JENIS' => fake()->optional()->word,
            'TAHUN_PEMBUATAN' => fake()->optional()->randomNumber(),
            'KONDISI' => fake()->optional()->word,
            'PERAWATAN' => fake()->optional()->word,
            'DOKUMENT_KEPEMILIKAN' => fake()->optional()->word,
            'NO_DOKUMENT' => fake()->optional()->word,
            'TANGGAL_DOKUMEN' => fake()->optional()->date(),
            'ATAS_NAMA' => fake()->optional()->word,
            'IKATAN_JAMINAN' => fake()->optional()->word,
            'NO_AKTA' => fake()->optional()->word,
            'SERTIFIKAT_FEO' => fake()->optional()->date(),
            'NOTARIS' => fake()->optional()->word,
            'TANGGAL_FEO' => fake()->optional()->date(),
            'ASURANSI' => fake()->optional()->word,
            'NILAI_PENGIKATAN' => fake()->optional()->word,
            'JENIS_PENUTUPAN_AS' => fake()->optional()->word,
            'NILAI_PERTANGGUNGAN' => fake()->optional()->word,
            'TGL_BERLAKU' => fake()->optional()->date(),
            'PERUSAHAAN_ASURANSI' => fake()->optional()->word,
            'TUJUAN_PENILAIAN' => fake()->optional()->word,
            'DATA_TERENDAH' => fake()->optional()->word,
            'INFORMAN_TERENDAH' => fake()->optional()->word,
            'DATA_TERTINGGI' => fake()->optional()->word,
            'INFORMAN_TERTINGGI' => fake()->optional()->word,
            'TGL_TERENDAH' => fake()->optional()->date(),
            'TGL_TERTINGGI' => fake()->optional()->date(),
            'MARKETABILITY' => fake()->optional()->word,
            'PENGIKATAN_SEMPURNA' => fake()->optional()->word,
            'PERMASALAHAN' => fake()->optional()->word,
            'PENGUASAAN' => fake()->optional()->word,
            'LAIN_LAIN' => fake()->optional()->word,
            'REKOMENDASI' => fake()->optional()->word,
            'JENIS_AGUNAN' => fake()->optional()->word,
            'LOKASI' => fake()->optional()->word,
            'KEADAAN_FISIK' => fake()->optional()->word,
            'LUAS_TANAH' => fake()->optional()->word,
            'JALAN' => fake()->optional()->word,
            'LEBAR' => fake()->optional()->word,
            'JARINGAN_LISTRIK' => fake()->optional()->word,
            'JARINGAN_TELEPON' => fake()->optional()->word,
            'FAS_PAM' => fake()->optional()->word,
            'SEKOLAH' => fake()->optional()->word,
            'PASAR' => fake()->optional()->word,
            'SPBU' => fake()->optional()->word,
            'TEMPAT_IBADAH' => fake()->optional()->word,
            'TEMPAT_HIBURAN' => fake()->optional()->word,
            'PERKUBURAN' => fake()->optional()->word,
            'FAS_LINGKUNGAN' => fake()->optional()->word,
            'TAHUN_BELI' => fake()->optional()->word,
            'WILAYAH' => fake()->optional()->word,
            'PERUNTUKAN_WIL' => fake()->optional()->word,
            'DAERAH_BAJIR' => fake()->optional()->word,
            'DAERAH_TEG_TINGGI' => fake()->optional()->word,
            'DAERAH_RAWAN_LONGSOR' => fake()->optional()->word,
            'DAERAH_PENCEMARAN' => fake()->optional()->word,
            'KUALITAS_TANAH' => fake()->optional()->word,
            'COUNTOUR_TANAH' => fake()->optional()->word,
            'INFO_BY_PEMBANGUNAN' => fake()->optional()->word,
            'BIAYA_PEMBANGUNAN_BARU' => fake()->optional()->word,
            'UMUR_EKONOMIS' => fake()->optional()->randomNumber(),
            'UMUR_EFEKTIF' => fake()->optional()->word,
            'PENYUSUTAN_PERTAHUN' => fake()->optional()->randomNumber(),
            'INFORMAN_3' => fake()->optional()->word,
        ];
    }
}
