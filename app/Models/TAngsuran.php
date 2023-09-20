<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TAngsuran
 * 
 * @property string|null $ID_NASABAH
 * @property int|null $NO_ANGSURAN
 * @property float|null $POKOK_PINJAMAN
 * @property float|null $ANGS_POKOK
 * @property float|null $ANGS_BUNGA
 *
 * @package App\Models
 */
class TAngsuran extends Model
{
	protected $table = 't_angsuran';
	public $incrementing = false;
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
}
