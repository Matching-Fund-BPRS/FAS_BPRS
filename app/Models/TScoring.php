<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
 * @property string $ID_NASABAH
 *
 * @package App\Models
 */
class TScoring extends Model
{
	use HasFactory;
	protected $table = 't_scoring';
	protected $primaryKey = 'ID_NASABAH';
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
		'SCORING'
	];
}
