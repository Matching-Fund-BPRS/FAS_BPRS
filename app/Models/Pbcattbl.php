<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pbcattbl
 * 
 * @property string|null $pbt_tnam
 * @property int|null $pbt_tid
 * @property string|null $pbt_ownr
 * @property int|null $pbd_fhgt
 * @property int|null $pbd_fwgt
 * @property string|null $pbd_fitl
 * @property string|null $pbd_funl
 * @property int|null $pbd_fchr
 * @property int|null $pbd_fptc
 * @property string|null $pbd_ffce
 * @property int|null $pbh_fhgt
 * @property int|null $pbh_fwgt
 * @property string|null $pbh_fitl
 * @property string|null $pbh_funl
 * @property int|null $pbh_fchr
 * @property int|null $pbh_fptc
 * @property string|null $pbh_ffce
 * @property int|null $pbl_fhgt
 * @property int|null $pbl_fwgt
 * @property string|null $pbl_fitl
 * @property string|null $pbl_funl
 * @property int|null $pbl_fchr
 * @property int|null $pbl_fptc
 * @property string|null $pbl_ffce
 * @property string|null $pbt_cmnt
 *
 * @package App\Models
 */
class Pbcattbl extends Model
{
	protected $table = 'pbcattbl';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pbt_tid' => 'int',
		'pbd_fhgt' => 'int',
		'pbd_fwgt' => 'int',
		'pbd_fchr' => 'int',
		'pbd_fptc' => 'int',
		'pbh_fhgt' => 'int',
		'pbh_fwgt' => 'int',
		'pbh_fchr' => 'int',
		'pbh_fptc' => 'int',
		'pbl_fhgt' => 'int',
		'pbl_fwgt' => 'int',
		'pbl_fchr' => 'int',
		'pbl_fptc' => 'int'
	];

	protected $fillable = [
		'pbt_tnam',
		'pbt_tid',
		'pbt_ownr',
		'pbd_fhgt',
		'pbd_fwgt',
		'pbd_fitl',
		'pbd_funl',
		'pbd_fchr',
		'pbd_fptc',
		'pbd_ffce',
		'pbh_fhgt',
		'pbh_fwgt',
		'pbh_fitl',
		'pbh_funl',
		'pbh_fchr',
		'pbh_fptc',
		'pbh_ffce',
		'pbl_fhgt',
		'pbl_fwgt',
		'pbl_fitl',
		'pbl_funl',
		'pbl_fchr',
		'pbl_fptc',
		'pbl_ffce',
		'pbt_cmnt'
	];
}
