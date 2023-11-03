<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TAngsuran
 * 
 * @property int $ID
 * @property string|null $ID_NASABAH
 * @property int|null $NO_ANGSURAN
 * @property float|null $POKOK_PINJAMAN
 * @property float|null $ANGS_POKOK
 * @property float|null $ANGS_BUNGA
 * 
 * @property TNasabah|null $t_nasabah
 *
 * @package App\Models
 */
class TAngsuran extends Model
{
	protected $table = 't_angsuran';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'NO_ANGSURAN' => 'int',
		'POKOK_PINJAMAN' => 'float',
		'ANGS_POKOK' => 'float',
		'ANGS_BUNGA' => 'float'
	];

	protected $fillable = [
		'ID_NASABAH',
		'NO_ANGSURAN',
		'POKOK_PINJAMAN',
		'ANGS_POKOK',
		'ANGS_BUNGA'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
