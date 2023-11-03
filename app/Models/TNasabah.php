<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TNasabah
 * 
 * @property string $ID_NASABAH
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
 * 
 * @property Collection|TAgunan[] $t_agunans
 * @property Collection|TAgunanDetail[] $t_agunan_details
 * @property Collection|TAngsuran[] $t_angsurans
 * @property TBisid $t_bisid
 * @property TBmpd $t_bmpd
 * @property TCapacity $t_capacity
 * @property TCapital $t_capital
 * @property TCashflowKontraktor $t_cashflow_kontraktor
 * @property TCatatan $t_catatan
 * @property TCharacter $t_character
 * @property TCollateral $t_collateral
 * @property TCondition $t_condition
 * @property Collection|TDaftarProyek[] $t_daftar_proyeks
 * @property Collection|TFa[] $t_fas
 * @property TKeuangan $t_keuangan
 * @property TKonstruksi $t_konstruksi
 * @property TKualitatif $t_kualitatif
 * @property TKuantitatif $t_kuantitatif
 * @property TLimitkredit $t_limitkredit
 * @property TNeraca $t_neraca
 * @property TPegawai $t_pegawai
 * @property Collection|TPenguru[] $t_pengurus
 * @property TRekomendasi $t_rekomendasi
 * @property TResiko $t_resiko
 * @property TRugilaba $t_rugilaba
 * @property TTambahan $t_tambahan
 *
 * @package App\Models
 */
class TNasabah extends Model
{
	protected $table = 't_nasabah';
	protected $primaryKey = 'ID_NASABAH';
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
		'ISI_PENGURUS'
	];

	public function t_agunans()
	{
		return $this->hasMany(TAgunan::class, 'ID_NASABAH');
	}

	public function t_agunan_details()
	{
		return $this->hasMany(TAgunanDetail::class, 'ID_NASABAH');
	}

	public function t_angsurans()
	{
		return $this->hasMany(TAngsuran::class, 'ID_NASABAH');
	}

	public function t_bisid()
	{
		return $this->hasOne(TBisid::class, 'ID_NASABAH');
	}

	public function t_bmpd()
	{
		return $this->hasOne(TBmpd::class, 'ID_NASABAH');
	}

	public function t_capacity()
	{
		return $this->hasOne(TCapacity::class, 'ID_NASABAH');
	}

	public function t_capital()
	{
		return $this->hasOne(TCapital::class, 'ID_NASABAH');
	}

	public function t_cashflow_kontraktor()
	{
		return $this->hasOne(TCashflowKontraktor::class, 'ID_NASABAH');
	}

	public function t_catatan()
	{
		return $this->hasOne(TCatatan::class, 'ID_NASABAH');
	}

	public function t_character()
	{
		return $this->hasOne(TCharacter::class, 'ID_NASABAH');
	}

	public function t_collateral()
	{
		return $this->hasOne(TCollateral::class, 'ID_NASABAH');
	}

	public function t_condition()
	{
		return $this->hasOne(TCondition::class, 'ID_NASABAH');
	}

	public function t_daftar_proyeks()
	{
		return $this->hasMany(TDaftarProyek::class, 'ID_NASABAH');
	}

	public function t_fas()
	{
		return $this->hasMany(TFa::class, 'ID_NASABAH');
	}

	public function t_keuangan()
	{
		return $this->hasOne(TKeuangan::class, 'ID_NASABAH');
	}

	public function t_konstruksi()
	{
		return $this->hasOne(TKonstruksi::class, 'ID_NASABAH');
	}

	public function t_kualitatif()
	{
		return $this->hasOne(TKualitatif::class, 'ID_NASABAH');
	}

	public function t_kuantitatif()
	{
		return $this->hasOne(TKuantitatif::class, 'ID_NASABAH');
	}

	public function t_limitkredit()
	{
		return $this->hasOne(TLimitkredit::class, 'ID_NASABAH');
	}

	public function t_neraca()
	{
		return $this->hasOne(TNeraca::class, 'ID_NASABAH');
	}

	public function t_pegawai()
	{
		return $this->hasOne(TPegawai::class, 'ID_NASABAH');
	}

	public function t_pengurus()
	{
		return $this->hasMany(TPenguru::class, 'ID_NASABAH');
	}

	public function t_rekomendasi()
	{
		return $this->hasOne(TRekomendasi::class, 'ID_NASABAH');
	}

	public function t_resiko()
	{
		return $this->hasOne(TResiko::class, 'ID_NASABAH');
	}

	public function t_rugilaba()
	{
		return $this->hasOne(TRugilaba::class, 'ID_NASABAH');
	}

	public function t_tambahan()
	{
		return $this->hasOne(TTambahan::class, 'ID_NASABAH');
	}
}
