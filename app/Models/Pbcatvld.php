<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pbcatvld
 * 
 * @property string|null $pbv_name
 * @property string|null $pbv_vald
 * @property int|null $pbv_type
 * @property int|null $pbv_cntr
 * @property string|null $pbv_msg
 *
 * @package App\Models
 */
class Pbcatvld extends Model
{
	protected $table = 'pbcatvld';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pbv_type' => 'int',
		'pbv_cntr' => 'int'
	];

	protected $fillable = [
		'pbv_name',
		'pbv_vald',
		'pbv_type',
		'pbv_cntr',
		'pbv_msg'
	];
}
