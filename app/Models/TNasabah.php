<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TNasabah
 * 
 * @property string|null $ID_CABANG
 * @property string|null $NO_SURVEY
 * @property string|null $CIF
 * @property Carbon|null $TGL_PERMOHONAN
 * @property Carbon|null $TGL_ANALISA
 * @property float|null $LIMIT_KREDIT
 * @property float|null $BUNGA
 * @property int|null $JANGKA_WAKTU
 * @property string|null $SIFAT
 * @property string|null $JENIS_PERMOHONAN
 * @property string|null $TUJUAN
 * @property string|null $KET_TUJUAN
 * @property string|null $BIDANG_USAHA
 * @property string|null $SUB_USAHA
 * @property Carbon|null $TGL_MULAI_USAHA
 * @property int|null $JUMLAH_KARY
 * @property string|null $NAMA
 * @property string|null $NAMA_BADAN_USAHA
 * @property string|null $ALAMAT_USAHA
 * @property string|null $STATUS_PERKAWINAN
 * @property string|null $TEMPAT_LAHIR
 * @property Carbon|null $TGL_LAHIR
 * @property string|null $GENDER
 * @property string|null $NO_KTP
 * @property Carbon|null $TGL_BERLAKU_KTP
 * @property string|null $ALAMAT
 * @property string|null $NO_TELP
 * @property string|null $NO_KANTOR
 * @property string|null $STATUS_TEMPAT_TINGGAL
 * @property int|null $LAMA_TINGGAL
 * @property string|null $TINGKAT_PENDIDIKAN
 * @property string|null $JUMLAH_TANGGUNGAN
 * @property string|null $NAMA_PASANGAN
 * @property string|null $TEMPAT_LAHIR_PASANGAN
 * @property Carbon|null $TGL_LAHIR_PASANGAN
 * @property string|null $ALAMAT_PASANGAN
 * @property string|null $PROFESI_PASANGAN
 * @property string|null $NO_TELP_PASANGAN
 * @property string|null $NAMA_EC
 * @property string|null $HUB_EC
 * @property string|null $ALAMAT_EC
 * @property string|null $NO_TELP_EC
 * @property string|null $USER_ID
 * @property Carbon|null $JADI_NASABAH_SEJAK
 * @property string|null $STATUS_TEMPAT_USAHA
 * @property string|null $NO_TELP_USAHA
 * @property string|null $MASA_KTP
 * @property string|null $JENIS_DEB
 * @property string|null $BENTUK_BADAN_USAHA
 * @property string|null $NO_PENDIRIAN
 * @property Carbon|null $TGL_PENDIRIAN
 * @property string|null $KONDISI_PENDIRIAN
 * @property string|null $ANGGARAN
 * @property Carbon|null $TGL_ANGGARAN
 * @property string|null $KONDISI_ANGGARAN
 * @property string|null $PENGURUS
 * @property Carbon|null $TGL_PENGURUS
 * @property string|null $KONDISI_PENGURUS
 * @property string|null $ISI_PENDIRIAN
 * @property string|null $ISI_ANGGARAN
 * @property string|null $ISI_PENGURUS
 * @property string|null $ID_NASABAH
 *
 * @package App\Models
 */
class TNasabah extends Model
{
	protected $table = 't_nasabah';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TGL_PERMOHONAN' => 'datetime',
		'TGL_ANALISA' => 'datetime',
		'LIMIT_KREDIT' => 'float',
		'BUNGA' => 'float',
		'JANGKA_WAKTU' => 'int',
		'TGL_MULAI_USAHA' => 'datetime',
		'JUMLAH_KARY' => 'int',
		'TGL_LAHIR' => 'datetime',
		'TGL_BERLAKU_KTP' => 'datetime',
		'LAMA_TINGGAL' => 'int',
		'TGL_LAHIR_PASANGAN' => 'datetime',
		'JADI_NASABAH_SEJAK' => 'datetime',
		'TGL_PENDIRIAN' => 'datetime',
		'TGL_ANGGARAN' => 'datetime',
		'TGL_PENGURUS' => 'datetime'
	];

	protected $fillable = [
		'ID_CABANG',
		'NO_SURVEY',
		'CIF',
		'TGL_PERMOHONAN',
		'TGL_ANALISA',
		'LIMIT_KREDIT',
		'BUNGA',
		'JANGKA_WAKTU',
		'SIFAT',
		'JENIS_PERMOHONAN',
		'TUJUAN',
		'KET_TUJUAN',
		'BIDANG_USAHA',
		'SUB_USAHA',
		'TGL_MULAI_USAHA',
		'JUMLAH_KARY',
		'NAMA',
		'NAMA_BADAN_USAHA',
		'ALAMAT_USAHA',
		'STATUS_PERKAWINAN',
		'TEMPAT_LAHIR',
		'TGL_LAHIR',
		'GENDER',
		'NO_KTP',
		'TGL_BERLAKU_KTP',
		'ALAMAT',
		'NO_TELP',
		'NO_KANTOR',
		'STATUS_TEMPAT_TINGGAL',
		'LAMA_TINGGAL',
		'TINGKAT_PENDIDIKAN',
		'JUMLAH_TANGGUNGAN',
		'NAMA_PASANGAN',
		'TEMPAT_LAHIR_PASANGAN',
		'TGL_LAHIR_PASANGAN',
		'ALAMAT_PASANGAN',
		'PROFESI_PASANGAN',
		'NO_TELP_PASANGAN',
		'NAMA_EC',
		'HUB_EC',
		'ALAMAT_EC',
		'NO_TELP_EC',
		'USER_ID',
		'JADI_NASABAH_SEJAK',
		'STATUS_TEMPAT_USAHA',
		'NO_TELP_USAHA',
		'MASA_KTP',
		'JENIS_DEB',
		'BENTUK_BADAN_USAHA',
		'NO_PENDIRIAN',
		'TGL_PENDIRIAN',
		'KONDISI_PENDIRIAN',
		'ANGGARAN',
		'TGL_ANGGARAN',
		'KONDISI_ANGGARAN',
		'PENGURUS',
		'TGL_PENGURUS',
		'KONDISI_PENGURUS',
		'ISI_PENDIRIAN',
		'ISI_ANGGARAN',
		'ISI_PENGURUS',
		'ID_NASABAH'
	];
}
