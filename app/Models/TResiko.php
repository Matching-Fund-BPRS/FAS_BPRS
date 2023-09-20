<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TResiko
 * 
 * @property string|null $ID_NASABAH
 * @property string|null $RESIKO
 * @property string|null $MITIGASI_RESIKO
 *
 * @package App\Models
 */
class TResiko extends Model
{
	protected $table = 't_resiko';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ID_NASABAH',
		'RESIKO',
		'MITIGASI_RESIKO'
	];
}
