<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TNeraca
 * 
 * @property string $ID_NASABAH
 * @property int|null $PERIODE
 * @property Carbon|null $TANGGAL_PERIODE
 * @property float|null $KAS
 * @property float|null $PIUTANG_DAGANG
 * @property float|null $PERSEDIAAN
 * @property float|null $TANAH
 * @property float|null $GEDUNG
 * @property float|null $PENYUSUTAN_GED
 * @property float|null $PERALATAN
 * @property float|null $PENYUSUTAN_PERALATAN
 * @property float|null $HUTANG_JANGKA_PENDEK
 * @property float|null $HUTANG_JANGKA_PANJANG
 * @property float|null $MODAL
 * @property float|null $LABA_DITAHAN
 * @property float|null $LABA_BERJALAN
 * @property float|null $LABA_BERJALAN_2
 * @property float|null $LABA_BERJALAN_3
 * @property float|null $SET_ASSET
 * @property float|null $EBIT
 * @property float|null $OIS
 *
 * @package App\Models
 */
class TNeraca extends Model
{
	protected $table = 't_neraca';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PERIODE' => 'int',
		'TANGGAL_PERIODE' => 'datetime',
		'KAS' => 'float',
		'PIUTANG_DAGANG' => 'float',
		'PERSEDIAAN' => 'float',
		'TANAH' => 'float',
		'GEDUNG' => 'float',
		'PENYUSUTAN_GED' => 'float',
		'PERALATAN' => 'float',
		'PENYUSUTAN_PERALATAN' => 'float',
		'HUTANG_JANGKA_PENDEK' => 'float',
		'HUTANG_JANGKA_PANJANG' => 'float',
		'MODAL' => 'float',
		'LABA_DITAHAN' => 'float',
		'LABA_BERJALAN' => 'float',
		'LABA_BERJALAN_2' => 'float',
		'LABA_BERJALAN_3' => 'float',
		'SET_ASSET' => 'float',
		'EBIT' => 'float',
		'OIS' => 'float'
	];

	protected $fillable = [
		'PERIODE',
		'TANGGAL_PERIODE',
		'KAS',
		'PIUTANG_DAGANG',
		'PERSEDIAAN',
		'TANAH',
		'GEDUNG',
		'PENYUSUTAN_GED',
		'PERALATAN',
		'PENYUSUTAN_PERALATAN',
		'HUTANG_JANGKA_PENDEK',
		'HUTANG_JANGKA_PANJANG',
		'MODAL',
		'LABA_DITAHAN',
		'LABA_BERJALAN',
		'LABA_BERJALAN_2',
		'LABA_BERJALAN_3',
		'SET_ASSET',
		'EBIT',
		'OIS'
	];
}
