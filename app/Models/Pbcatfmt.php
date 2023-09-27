<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pbcatfmt
 * 
 * @property string|null $pbf_name
 * @property string|null $pbf_frmt
 * @property int|null $pbf_type
 * @property int|null $pbf_cntr
 *
 * @package App\Models
 */
class Pbcatfmt extends Model
{
	protected $table = 'pbcatfmt';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pbf_type' => 'int',
		'pbf_cntr' => 'int'
	];

	protected $fillable = [
		'pbf_name',
		'pbf_frmt',
		'pbf_type',
		'pbf_cntr'
	];
}
