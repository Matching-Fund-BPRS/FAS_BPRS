<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogError
 * 
 * @property int $ID
 * @property Carbon|null $TANGGAL
 * @property string|null $USER_ID
 * @property string|null $KETERANGAN
 *
 * @package App\Models
 */
class LogError extends Model
{
	protected $table = 'log_error';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'TANGGAL' => 'datetime'
	];

	protected $fillable = [
		'TANGGAL',
		'USER_ID',
		'KETERANGAN'
	];
}
