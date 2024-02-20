<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCatatan
 * 
 * @property string $ID_NASABAH
 * @property string|null $CATATAN
 *
 * @package App\Models
 */
class TCatatan extends Model
{
	protected $table = 't_catatan';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'CATATAN'
	];
}
