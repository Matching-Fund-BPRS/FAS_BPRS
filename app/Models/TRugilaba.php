<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TRugilaba
 * 
 * @property string $ID_NASABAH
 * @property int|null $PERIODE
 * @property Carbon|null $TGL_PERIODE
 * @property float|null $PENJUALAN_BERSIH
 * @property float|null $HPP
 * @property float|null $BIAYA_PEGAWAI
 * @property float|null $BIAYA_TRANSPORT
 * @property float|null $BIAYA_LISTRIK
 * @property float|null $BIAYA_TELPON
 * @property float|null $BIAYA_PAM
 * @property float|null $BIAYA_LAIN
 * @property float|null $BIAYA_HIDUP
 * @property float|null $PENYUSUTAN
 * @property float|null $PENDAPATAN_LAIN
 * @property float|null $BIAYA_BUNGA
 * @property float|null $BIAYA_PAJAK
 * @property float|null $SET_ASSET
 * @property float|null $SET_BIAYA
 * @property float|null $SET_HPP
 *
 * @package App\Models
 */
class TRugilaba extends Model
{
	protected $table = 't_rugilaba';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PERIODE' => 'int',
		'TGL_PERIODE' => 'datetime',
		'PENJUALAN_BERSIH' => 'float',
		'HPP' => 'float',
		'BIAYA_PEGAWAI' => 'float',
		'BIAYA_TRANSPORT' => 'float',
		'BIAYA_LISTRIK' => 'float',
		'BIAYA_TELPON' => 'float',
		'BIAYA_PAM' => 'float',
		'BIAYA_LAIN' => 'float',
		'BIAYA_HIDUP' => 'float',
		'PENYUSUTAN' => 'float',
		'PENDAPATAN_LAIN' => 'float',
		'BIAYA_BUNGA' => 'float',
		'BIAYA_PAJAK' => 'float',
		'SET_ASSET' => 'float',
		'SET_BIAYA' => 'float',
		'SET_HPP' => 'float'
	];

	protected $fillable = [
		'PERIODE',
		'TGL_PERIODE',
		'PENJUALAN_BERSIH',
		'HPP',
		'BIAYA_PEGAWAI',
		'BIAYA_TRANSPORT',
		'BIAYA_LISTRIK',
		'BIAYA_TELPON',
		'BIAYA_PAM',
		'BIAYA_LAIN',
		'BIAYA_HIDUP',
		'PENYUSUTAN',
		'PENDAPATAN_LAIN',
		'BIAYA_BUNGA',
		'BIAYA_PAJAK',
		'SET_ASSET',
		'SET_BIAYA',
		'SET_HPP'
	];
}
