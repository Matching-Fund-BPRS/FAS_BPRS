<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TKuantitatif
 * 
 * @property string $ID_NASABAH
 * @property int|null $KEPEMILIKAN
 * @property int|null $NILAI_AGUNAN
 * @property int|null $PENGIKATAN
 * @property int|null $MARKETABILITY
 * @property int|null $PENGUASAAN
 * @property int|null $ASURANSI
 *
 * @package App\Models
 */
class TKuantitatif extends Model
{
	protected $table = 't_kuantitatif';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'KEPEMILIKAN' => 'int',
		'NILAI_AGUNAN' => 'int',
		'PENGIKATAN' => 'int',
		'MARKETABILITY' => 'int',
		'PENGUASAAN' => 'int',
		'ASURANSI' => 'int'
	];

	protected $fillable = [
		'KEPEMILIKAN',
		'NILAI_AGUNAN',
		'PENGIKATAN',
		'MARKETABILITY',
		'PENGUASAAN',
		'ASURANSI'
	];
}
