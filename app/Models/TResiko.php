<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TResiko
 * 
 * @property string $ID_NASABAH
 * @property string|null $RESIKO
 * @property string|null $MITIGASI_RESIKO
 * @property string|null $BADAN_USAHA
 * @property string|null $USULAN
 * 
 * @property TNasabah $t_nasabah
 *
 * @package App\Models
 */
class TResiko extends Model
{
	protected $table = 't_resiko';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'RESIKO',
		'MITIGASI_RESIKO',
		'BADAN_USAHA',
		'USULAN'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
