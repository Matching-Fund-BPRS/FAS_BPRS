<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCapacity
 * 
 * @property int|null $TEH_UTILISASI
 * @property int|null $TEH_LAMA_USAHA
 * @property int|null $CB_MANAJEMEN_SDM
 * @property int|null $CB_PENGELOLAAN
 * @property float|null $CB_DSCR
 * @property string $ID_NASABAH
 *
 * @package App\Models
 */
class TCapacity extends Model
{
	protected $table = 't_capacity';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TEH_UTILISASI' => 'int',
		'TEH_LAMA_USAHA' => 'int',
		'CB_MANAJEMEN_SDM' => 'int',
		'CB_PENGELOLAAN' => 'int',
		'CB_DSCR' => 'float'
	];

	protected $fillable = [
		'TEH_UTILISASI',
		'TEH_LAMA_USAHA',
		'CB_MANAJEMEN_SDM',
		'CB_PENGELOLAAN',
		'CB_DSCR'
	];
}
