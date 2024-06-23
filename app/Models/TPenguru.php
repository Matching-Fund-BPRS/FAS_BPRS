<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class TPenguru
 * 
 * @property string|null $ID_NASABAH
 * @property string|null $NAMA
 * @property string|null $JABATAN
 * @property string|null $NO_TELP
 * @property Carbon|null $TGL_LAHIR
 * @property string|null $NO_KTP
 * @property float|null $SAHAM
 * @property int $ID
 *
 * @package App\Models
 */
class TPenguru extends Model
{
	use HasFactory;
	protected $table = 't_pengurus';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'TGL_LAHIR' => 'datetime',
		'SAHAM' => 'float'
	];

	protected $fillable = [
		'ID_NASABAH',
		'NAMA',
		'JABATAN',
		'NO_TELP',
		'TGL_LAHIR',
		'NO_KTP',
		'SAHAM'
	];
}
