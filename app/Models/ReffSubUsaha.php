<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
		use HasFactory;
	protected $table = 'reff_sub_usaha';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ID',
		'USAHA',
		'SEKTOR'
	];
}
