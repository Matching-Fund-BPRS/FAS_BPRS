<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TSyariah
 * 
 * @property int|null $SY_SERTIFIKASI_HALAL
 * @property float|null $SY_JUMLAH_HUTANG
 * @property int|null $SY_AKAD_USAHA
 * @property int|null $SY_JENIS_BARANG
 * @property float|null $SY_PRESENTASE_NON_SYARIAH
 * @property string|null $ID_NASABAH
 * 
 * @property TNasabah|null $t_nasabah
 *
 * @package App\Models
 */
class TSyariah extends Model
{
	protected $table = 't_syariah';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SY_SERTIFIKASI_HALAL' => 'int',
		'SY_JUMLAH_HUTANG' => 'float',
		'SY_AKAD_USAHA' => 'int',
		'SY_JENIS_BARANG' => 'int',
		'SY_PRESENTASE_NON_SYARIAH' => 'float'
	];

	protected $fillable = [
		'SY_SERTIFIKASI_HALAL',
		'SY_JUMLAH_HUTANG',
		'SY_AKAD_USAHA',
		'SY_JENIS_BARANG',
		'SY_PRESENTASE_NON_SYARIAH',
		'ID_NASABAH'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
