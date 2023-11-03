<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TRekomendasi
 * 
 * @property string $ID_NASABAH
 * @property float|null $LIMIT_KREDIT
 * @property string|null $SIFAT_KREDIT
 * @property string|null $JENIS_PERMOHONAN
 * @property string|null $TUJUAN
 * @property int|null $JANGKA_WAKTU
 * @property float|null $BUNGA
 * @property float|null $ANGSURAN
 * @property string|null $JAMINAN
 * @property string|null $KETENTUAN
 * @property float|null $PROVISI
 * @property float|null $ADMINISTRASI
 * @property float|null $LAINNYA
 * @property int|null $BAYAR_POKOK
 * @property float|null $MATERAI
 * @property float|null $NOTARIS
 * @property float|null $ASURANSI
 * @property float|null $MODAL
 * @property float|null $BASIL_BANK
 * @property float|null $BASIL_DEB
 * 
 * @property TNasabah $t_nasabah
 *
 * @package App\Models
 */
class TRekomendasi extends Model
{
	protected $table = 't_rekomendasi';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'LIMIT_KREDIT' => 'float',
		'JANGKA_WAKTU' => 'int',
		'BUNGA' => 'float',
		'ANGSURAN' => 'float',
		'PROVISI' => 'float',
		'ADMINISTRASI' => 'float',
		'LAINNYA' => 'float',
		'BAYAR_POKOK' => 'int',
		'MATERAI' => 'float',
		'NOTARIS' => 'float',
		'ASURANSI' => 'float',
		'MODAL' => 'float',
		'BASIL_BANK' => 'float',
		'BASIL_DEB' => 'float'
	];

	protected $fillable = [
		'LIMIT_KREDIT',
		'SIFAT_KREDIT',
		'JENIS_PERMOHONAN',
		'TUJUAN',
		'JANGKA_WAKTU',
		'BUNGA',
		'ANGSURAN',
		'JAMINAN',
		'KETENTUAN',
		'PROVISI',
		'ADMINISTRASI',
		'LAINNYA',
		'BAYAR_POKOK',
		'MATERAI',
		'NOTARIS',
		'ASURANSI',
		'MODAL',
		'BASIL_BANK',
		'BASIL_DEB'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
