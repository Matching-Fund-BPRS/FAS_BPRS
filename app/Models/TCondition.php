<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCondition
 * 
 * @property int|null $PEM_KETERGANTUNGAN
 * @property int|null $PEM_KEBUTUHAN
 * @property int|null $CU_PASOKAN
 * @property int|null $CU_KONSUMEN
 * @property int|null $CU_KECAKAPAN
 * @property int|null $CU_EKSTERNAL
 * @property string $ID_NASABAH
 * 
 * @property TNasabah $t_nasabah
 *
 * @package App\Models
 */
class TCondition extends Model
{
	protected $table = 't_condition';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PEM_KETERGANTUNGAN' => 'int',
		'PEM_KEBUTUHAN' => 'int',
		'CU_PASOKAN' => 'int',
		'CU_KONSUMEN' => 'int',
		'CU_KECAKAPAN' => 'int',
		'CU_EKSTERNAL' => 'int'
	];

	protected $fillable = [
		'PEM_KETERGANTUNGAN',
		'PEM_KEBUTUHAN',
		'CU_PASOKAN',
		'CU_KONSUMEN',
		'CU_KECAKAPAN',
		'CU_EKSTERNAL'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
