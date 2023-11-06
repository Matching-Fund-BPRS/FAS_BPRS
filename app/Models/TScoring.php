<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TScoring
 * 
 * @property float|null $CHARACTER
 * @property float|null $CAPACITY
 * @property float|null $COLLATERAL
 * @property float|null $CONDITION
 * @property float|null $CAPITAL
 * @property float|null $SYARIAH
 * @property float|null $SCORING
 * @property string|null $ID_NASABAH
 * 
 * @property TNasabah|null $t_nasabah
 *
 * @package App\Models
 */
class TScoring extends Model
{
	protected $table = 't_scoring';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CHARACTER' => 'float',
		'CAPACITY' => 'float',
		'COLLATERAL' => 'float',
		'CONDITION' => 'float',
		'CAPITAL' => 'float',
		'SYARIAH' => 'float',
		'SCORING' => 'float'
	];

	protected $fillable = [
		'CHARACTER',
		'CAPACITY',
		'COLLATERAL',
		'CONDITION',
		'CAPITAL',
		'SYARIAH',
		'SCORING',
		'ID_NASABAH'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
