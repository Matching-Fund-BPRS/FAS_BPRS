<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReffSubUsaha
 * 
 * @property string|null $ID
 * @property string|null $USAHA
 * @property string|null $SEKTOR
 *
 * @package App\Models
 */
class ReffSubUsaha extends Model
{
	protected $table = 'reff_sub_usaha';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ID',
		'USAHA',
		'SEKTOR'
	];
}
