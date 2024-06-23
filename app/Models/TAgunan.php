<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class TAgunan
 * 
 * @property int $ID
 * @property string|null $ID_NASABAH
 * @property string|null $JENIS
 * @property string|null $BUKTI_MILIK
 * @property string|null $MERK
 * @property int|null $TAHUN
 * @property string|null $NO_BPKB
 * @property string|null $NOPOL
 * @property string|null $NO_MESIN
 * @property string|null $NO_RANGKA
 * @property string|null $WARNA
 * @property string|null $ATAS_NAMA
 * @property string|null $ALAMAT
 * @property Carbon|null $TGL_BERLAKU
 * @property string|null $NO_AGUNAN
 * @property string|null $NAMA_PEMILIK
 * @property string|null $LOKASI
 * @property float|null $NILAI
 * @property string|null $JENIS_PENGIKATAN
 * @property string|null $ASURANSI
 * @property string|null $KET
 * @property string|null $LUAS_TANAH
 * @property string|null $LUAS_BANGUNAN
 * @property string|null $NO_DEP
 * @property string|null $DEP_BANK
 * @property float|null $SAVE_MARGIN
 * @property string|null $JENIS_BANGUNAN
 *
 * @package App\Models
 */
class TAgunan extends Model
{
	use HasFactory;
	protected $table = 't_agunan';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'TAHUN' => 'int',
		'TGL_BERLAKU' => 'datetime',
		'NILAI' => 'float',
		'SAVE_MARGIN' => 'float'
	];

	protected $fillable = [
		'ID_NASABAH',
		'JENIS',
		'BUKTI_MILIK',
		'MERK',
		'TAHUN',
		'NO_BPKB',
		'NOPOL',
		'NO_MESIN',
		'NO_RANGKA',
		'WARNA',
		'ATAS_NAMA',
		'ALAMAT',
		'TGL_BERLAKU',
		'NO_AGUNAN',
		'NAMA_PEMILIK',
		'LOKASI',
		'NILAI',
		'JENIS_PENGIKATAN',
		'ASURANSI',
		'KET',
		'LUAS_TANAH',
		'LUAS_BANGUNAN',
		'NO_DEP',
		'DEP_BANK',
		'SAVE_MARGIN',
		'JENIS_BANGUNAN'
	];
}
