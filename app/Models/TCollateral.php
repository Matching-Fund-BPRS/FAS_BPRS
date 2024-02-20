<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCollateral
 * 
 * @property int|null $LEG_USAHA
 * @property int|null $PENGIKATAN
 * @property int|null $MARKETABILITY
 * @property int|null $KEPEMILIKAN
 * @property int|null $PENGUASAAN
 * @property int|null $CA_NILAI_AGUNAN
 * @property int|null $PA_DOKUMEN
 * @property string $ID_NASABAH
 *
 * @package App\Models
 */
class TCollateral extends Model
{
	protected $table = 't_collateral';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'LEG_USAHA' => 'int',
		'PENGIKATAN' => 'int',
		'MARKETABILITY' => 'int',
		'KEPEMILIKAN' => 'int',
		'PENGUASAAN' => 'int',
		'CA_NILAI_AGUNAN' => 'int',
		'PA_DOKUMEN' => 'int'
	];

	protected $fillable = [
		'LEG_USAHA',
		'PENGIKATAN',
		'MARKETABILITY',
		'KEPEMILIKAN',
		'PENGUASAAN',
		'CA_NILAI_AGUNAN',
		'PA_DOKUMEN'
	];
}
