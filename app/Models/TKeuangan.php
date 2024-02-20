<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TKeuangan
 * 
 * @property string $ID_NASABAH
 * @property float|null $OMZET
 * @property float|null $BIAYA_GAJI
 * @property float|null $BIAYA_BB
 * @property float|null $BIAYA_STOK
 * @property float|null $BIAYA_PRODUKSI
 * @property float|null $BIAYA_TRANSPORT
 * @property float|null $BIAYA_USAHA_LAIN
 * @property float|null $BIAYA_RT_LISTRIK
 * @property float|null $BIAYA_RT_TRANSPORT
 * @property float|null $BIAYA_RT_SEKOLAH
 * @property float|null $BIAYA_RT_MAKAN
 * @property float|null $BIAYA_RT_PEMELIHARAAN
 * @property float|null $BIAYA_PENUNJANG_USAHA
 * @property float|null $BIAYA_RT_LAIN
 * @property float|null $ANGS_BANK_UMUM
 * @property float|null $ANGS_BPR
 * @property float|null $ANGS_LEASING
 * @property float|null $ANGS_KOPERASI
 * @property float|null $ANGS_LAIN
 * @property float|null $PENDAPATAN_LAIN
 * @property float|null $BIAYA_LAIN
 *
 * @package App\Models
 */
class TKeuangan extends Model
{
	protected $table = 't_keuangan';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'OMZET' => 'float',
		'BIAYA_GAJI' => 'float',
		'BIAYA_BB' => 'float',
		'BIAYA_STOK' => 'float',
		'BIAYA_PRODUKSI' => 'float',
		'BIAYA_TRANSPORT' => 'float',
		'BIAYA_USAHA_LAIN' => 'float',
		'BIAYA_RT_LISTRIK' => 'float',
		'BIAYA_RT_TRANSPORT' => 'float',
		'BIAYA_RT_SEKOLAH' => 'float',
		'BIAYA_RT_MAKAN' => 'float',
		'BIAYA_RT_PEMELIHARAAN' => 'float',
		'BIAYA_PENUNJANG_USAHA' => 'float',
		'BIAYA_RT_LAIN' => 'float',
		'ANGS_BANK_UMUM' => 'float',
		'ANGS_BPR' => 'float',
		'ANGS_LEASING' => 'float',
		'ANGS_KOPERASI' => 'float',
		'ANGS_LAIN' => 'float',
		'PENDAPATAN_LAIN' => 'float',
		'BIAYA_LAIN' => 'float'
	];

	protected $fillable = [
		'OMZET',
		'BIAYA_GAJI',
		'BIAYA_BB',
		'BIAYA_STOK',
		'BIAYA_PRODUKSI',
		'BIAYA_TRANSPORT',
		'BIAYA_USAHA_LAIN',
		'BIAYA_RT_LISTRIK',
		'BIAYA_RT_TRANSPORT',
		'BIAYA_RT_SEKOLAH',
		'BIAYA_RT_MAKAN',
		'BIAYA_RT_PEMELIHARAAN',
		'BIAYA_PENUNJANG_USAHA',
		'BIAYA_RT_LAIN',
		'ANGS_BANK_UMUM',
		'ANGS_BPR',
		'ANGS_LEASING',
		'ANGS_KOPERASI',
		'ANGS_LAIN',
		'PENDAPATAN_LAIN',
		'BIAYA_LAIN'
	];
}
