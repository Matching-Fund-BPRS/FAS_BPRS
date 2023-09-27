<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TBmpd
 * 
 * @property string|null $ID_NASABAH
 * @property float|null $MODAL_INTI_CAB
 * @property float|null $MODAL_INTI_PUSAT
 * @property float|null $MODAL_PELENGKAP_CAB
 * @property float|null $MODAL_PELENGKAP_PUSAT
 * @property float|null $BMPD_PERORG_CAB
 * @property float|null $BMPD_PERORG_PUSAT
 * @property float|null $BMPD_KEL_CAB
 * @property float|null $BMPD_KEL_PUSAT
 * @property float|null $BMPD_TERKAIT_CAB
 * @property float|null $BMPD_TERKAIT_PUSAT
 * @property float|null $PLAFOND_CAB
 * @property float|null $PLAFOND_PUSAT
 *
 * @package App\Models
 */
class TBmpd extends Model
{
	protected $table = 't_bmpd';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MODAL_INTI_CAB' => 'float',
		'MODAL_INTI_PUSAT' => 'float',
		'MODAL_PELENGKAP_CAB' => 'float',
		'MODAL_PELENGKAP_PUSAT' => 'float',
		'BMPD_PERORG_CAB' => 'float',
		'BMPD_PERORG_PUSAT' => 'float',
		'BMPD_KEL_CAB' => 'float',
		'BMPD_KEL_PUSAT' => 'float',
		'BMPD_TERKAIT_CAB' => 'float',
		'BMPD_TERKAIT_PUSAT' => 'float',
		'PLAFOND_CAB' => 'float',
		'PLAFOND_PUSAT' => 'float'
	];

	protected $fillable = [
		'ID_NASABAH',
		'MODAL_INTI_CAB',
		'MODAL_INTI_PUSAT',
		'MODAL_PELENGKAP_CAB',
		'MODAL_PELENGKAP_PUSAT',
		'BMPD_PERORG_CAB',
		'BMPD_PERORG_PUSAT',
		'BMPD_KEL_CAB',
		'BMPD_KEL_PUSAT',
		'BMPD_TERKAIT_CAB',
		'BMPD_TERKAIT_PUSAT',
		'PLAFOND_CAB',
		'PLAFOND_PUSAT'
	];
}
