<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TPenguru
 * 
 * @property int|null $ID
 * @property string|null $ID_NASABAH
 * @property string|null $NAMA
 * @property string|null $JABATAN
 * @property string|null $NO_TELP
 * @property Carbon|null $TGL_LAHIR
 * @property string|null $NO_KTP
 * @property float|null $SAHAM
 *
 * @package App\Models
 */
class TPenguru extends Model
{
	protected $table = 't_pengurus';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'TGL_LAHIR' => 'datetime',
		'SAHAM' => 'float'
	];

	protected $fillable = [
		'ID',
		'ID_NASABAH',
		'NAMA',
		'JABATAN',
		'NO_TELP',
		'TGL_LAHIR',
		'NO_KTP',
		'SAHAM'
	];
}
