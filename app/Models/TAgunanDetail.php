<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAgunanDetail
 * 
 * @property int $ID
 * @property string|null $ID_NASABAH
 * @property Carbon|null $TGL_PEMERIKAAN
 * @property string|null $PENILAI
 * @property string|null $PEMERIKSA
 * @property string|null $JENIS_OBJEK
 * @property string|null $PEMBELIAN
 * @property string|null $UMUR
 * @property string|null $MERK
 * @property string|null $TYPE
 * @property string|null $JENIS
 * @property int|null $TAHUN_PEMBUATAN
 * @property string|null $KONDISI
 * @property string|null $PERAWATAN
 * @property string|null $DOKUMENT_KEPEMILIKAN
 * @property string|null $NO_DOKUMENT
 * @property Carbon|null $TANGGAL_DOKUMEN
 * @property string|null $ATAS_NAMA
 * @property string|null $IKATAN_JAMINAN
 * @property string|null $NO_AKTA
 * @property Carbon|null $SERTIFIKAT_FEO
 * @property string|null $NOTARIS
 * @property Carbon|null $TANGGAL_FEO
 * @property string|null $ASURANSI
 * @property float|null $NILAI_PENGIKATAN
 * @property string|null $JENIS_PENUTUPAN_AS
 * @property float|null $NILAI_PERTANGGUNGAN
 * @property Carbon|null $TGL_BERLAKU
 * @property string|null $PERUSAHAAN_ASURANSI
 * @property string|null $TUJUAN_PENILAIAN
 * @property float|null $DATA_TERENDAH
 * @property string|null $INFORMAN_TERENDAH
 * @property float|null $DATA_TERTINGGI
 * @property string|null $INFORMAN_TERTINGGI
 * @property Carbon|null $TGL_TERENDAH
 * @property Carbon|null $TGL_TERTINGGI
 * @property string|null $MARKETABILITY
 * @property string|null $PENGIKATAN_SEMPURNA
 * @property string|null $PERMASALAHAN
 * @property string|null $PENGUASAAN
 * @property string|null $LAIN_LAIN
 * @property string|null $REKOMENDASI
 * @property string|null $JENIS_AGUNAN
 * @property string|null $LOKASI
 * @property string|null $KEADAAN_FISIK
 * @property string|null $LUAS_TANAH
 * @property string|null $JALAN
 * @property string|null $LEBAR
 * @property string|null $JARINGAN_LISTRIK
 * @property string|null $JARINGAN_TELEPON
 * @property string|null $FAS_PAM
 * @property string|null $SEKOLAH
 * @property string|null $PASAR
 * @property string|null $SPBU
 * @property string|null $TEMPAT_IBADAH
 * @property string|null $TEMPAT_HIBURAN
 * @property string|null $PERKUBURAN
 * @property string|null $FAS_LINGKUNGAN
 * @property string|null $TAHUN_BELI
 * @property string|null $WILAYAH
 * @property string|null $PERUNTUKAN_WIL
 * @property string|null $DAERAH_BAJIR
 * @property string|null $DAERAH_TEG_TINGGI
 * @property string|null $DAERAH_RAWAN_LONGSOR
 * @property string|null $DAERAH_PENCEMARAN
 * @property string|null $KUALITAS_TANAH
 * @property string|null $COUNTOUR_TANAH
 * @property float|null $INFO_BY_PEMBANGUNAN
 * @property float|null $BIAYA_PEMBANGUNAN_BARU
 * @property int|null $UMUR_EKONOMIS
 * @property float|null $UMUR_EFEKTIF
 * @property int|null $PENYUSUTAN_PERTAHUN
 * @property string|null $INFORMAN_3
 *
 * @package App\Models
 */
class TAgunanDetail extends Model
{
	protected $table = 't_agunan_detail';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'TGL_PEMERIKAAN' => 'datetime',
		'TAHUN_PEMBUATAN' => 'int',
		'TANGGAL_DOKUMEN' => 'datetime',
		'SERTIFIKAT_FEO' => 'datetime',
		'TANGGAL_FEO' => 'datetime',
		'NILAI_PENGIKATAN' => 'float',
		'NILAI_PERTANGGUNGAN' => 'float',
		'TGL_BERLAKU' => 'datetime',
		'DATA_TERENDAH' => 'float',
		'DATA_TERTINGGI' => 'float',
		'TGL_TERENDAH' => 'datetime',
		'TGL_TERTINGGI' => 'datetime',
		'INFO_BY_PEMBANGUNAN' => 'float',
		'BIAYA_PEMBANGUNAN_BARU' => 'float',
		'UMUR_EKONOMIS' => 'int',
		'UMUR_EFEKTIF' => 'float',
		'PENYUSUTAN_PERTAHUN' => 'int'
	];

	protected $fillable = [
		'ID_NASABAH',
		'TGL_PEMERIKAAN',
		'PENILAI',
		'PEMERIKSA',
		'JENIS_OBJEK',
		'PEMBELIAN',
		'UMUR',
		'MERK',
		'TYPE',
		'JENIS',
		'TAHUN_PEMBUATAN',
		'KONDISI',
		'PERAWATAN',
		'DOKUMENT_KEPEMILIKAN',
		'NO_DOKUMENT',
		'TANGGAL_DOKUMEN',
		'ATAS_NAMA',
		'IKATAN_JAMINAN',
		'NO_AKTA',
		'SERTIFIKAT_FEO',
		'NOTARIS',
		'TANGGAL_FEO',
		'ASURANSI',
		'NILAI_PENGIKATAN',
		'JENIS_PENUTUPAN_AS',
		'NILAI_PERTANGGUNGAN',
		'TGL_BERLAKU',
		'PERUSAHAAN_ASURANSI',
		'TUJUAN_PENILAIAN',
		'DATA_TERENDAH',
		'INFORMAN_TERENDAH',
		'DATA_TERTINGGI',
		'INFORMAN_TERTINGGI',
		'TGL_TERENDAH',
		'TGL_TERTINGGI',
		'MARKETABILITY',
		'PENGIKATAN_SEMPURNA',
		'PERMASALAHAN',
		'PENGUASAAN',
		'LAIN_LAIN',
		'REKOMENDASI',
		'JENIS_AGUNAN',
		'LOKASI',
		'KEADAAN_FISIK',
		'LUAS_TANAH',
		'JALAN',
		'LEBAR',
		'JARINGAN_LISTRIK',
		'JARINGAN_TELEPON',
		'FAS_PAM',
		'SEKOLAH',
		'PASAR',
		'SPBU',
		'TEMPAT_IBADAH',
		'TEMPAT_HIBURAN',
		'PERKUBURAN',
		'FAS_LINGKUNGAN',
		'TAHUN_BELI',
		'WILAYAH',
		'PERUNTUKAN_WIL',
		'DAERAH_BAJIR',
		'DAERAH_TEG_TINGGI',
		'DAERAH_RAWAN_LONGSOR',
		'DAERAH_PENCEMARAN',
		'KUALITAS_TANAH',
		'COUNTOUR_TANAH',
		'INFO_BY_PEMBANGUNAN',
		'BIAYA_PEMBANGUNAN_BARU',
		'UMUR_EKONOMIS',
		'UMUR_EFEKTIF',
		'PENYUSUTAN_PERTAHUN',
		'INFORMAN_3'
	];
}
