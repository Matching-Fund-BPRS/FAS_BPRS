<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TDaftarProyek
 * 
 * @property int $ID
 * @property string|null $ID_NASABAH
 * @property string|null $PROYEK
 * @property string|null $JENIS_PROYEK
 * @property string|null $LOKASI
 * @property Carbon|null $TGL_MULAI
 * @property Carbon|null $TGL_AKHIR
 * @property float|null $NILAI
 * 
 * @property TNasabah|null $t_nasabah
 *
 * @package App\Models
 */
class TDaftarProyek extends Model
{
	protected $table = 't_daftar_proyek';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'TGL_MULAI' => 'datetime',
		'TGL_AKHIR' => 'datetime',
		'NILAI' => 'float'
	];

	protected $fillable = [
		'ID_NASABAH',
		'PROYEK',
		'JENIS_PROYEK',
		'LOKASI',
		'TGL_MULAI',
		'TGL_AKHIR',
		'NILAI'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
