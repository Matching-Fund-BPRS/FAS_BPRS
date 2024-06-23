<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class TResiko
 * 
 * @property string $ID_NASABAH
 * @property string|null $RESIKO
 * @property string|null $MITIGASI_RESIKO
 *
 * @package App\Models
 */
class TResiko extends Model
{
		use HasFactory;
	protected $table = 't_resiko';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'RESIKO',
		'MITIGASI_RESIKO'
	];
}
