<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCapital
 * 
 * @property string $ID_NASABAH
 * @property float|null $CM_DAR
 * @property float|null $CM_DER
 * @property float|null $CM_LDER
 * @property float|null $PK_ASET
 * @property float|null $PK_INCOME_SALES
 * @property float|null $RPC
 * @property float|null $PK_EBIT
 * 
 * @property TNasabah $t_nasabah
 *
 * @package App\Models
 */
class TCapital extends Model
{
	protected $table = 't_capital';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CM_DAR' => 'float',
		'CM_DER' => 'float',
		'CM_LDER' => 'float',
		'PK_ASET' => 'float',
		'PK_INCOME_SALES' => 'float',
		'RPC' => 'float',
		'PK_EBIT' => 'float'
	];

	protected $fillable = [
		'CM_DAR',
		'CM_DER',
		'CM_LDER',
		'PK_ASET',
		'PK_INCOME_SALES',
		'RPC',
		'PK_EBIT'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
