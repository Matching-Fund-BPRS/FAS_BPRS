<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pbcatedt
 * 
 * @property string|null $pbe_name
 * @property string|null $pbe_edit
 * @property int|null $pbe_type
 * @property int|null $pbe_cntr
 * @property int|null $pbe_seqn
 * @property int|null $pbe_flag
 * @property string|null $pbe_work
 *
 * @package App\Models
 */
class Pbcatedt extends Model
{
	protected $table = 'pbcatedt';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pbe_type' => 'int',
		'pbe_cntr' => 'int',
		'pbe_seqn' => 'int',
		'pbe_flag' => 'int'
	];

	protected $fillable = [
		'pbe_name',
		'pbe_edit',
		'pbe_type',
		'pbe_cntr',
		'pbe_seqn',
		'pbe_flag',
		'pbe_work'
	];
}
