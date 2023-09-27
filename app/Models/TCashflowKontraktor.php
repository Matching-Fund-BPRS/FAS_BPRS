<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCashflowKontraktor
 * 
 * @property string|null $ID_NASABAH
 * @property float|null $TERMIN_1
 * @property float|null $TERMIN_2
 * @property float|null $TERMIN_3
 * @property float|null $DANA_SENDIRI
 * @property float|null $UANG_MUKA
 * @property float|null $PENCAIRAN
 * @property float|null $PINJAMAN
 * @property float|null $HUTANG_USAHA
 * @property float|null $PEMELIHARAAN
 * @property float|null $TOTAL_BIAYA_PROYEK
 * @property float|null $PAJAK
 * @property float|null $BIAYA_LAIN
 * @property float|null $BUNGA_PINJ_BANK
 * @property float|null $ANGS_POKOK_BANK
 * @property float|null $NILAI_PROYEK
 *
 * @package App\Models
 */
class TCashflowKontraktor extends Model
{
	protected $table = 't_cashflow_kontraktor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TERMIN_1' => 'float',
		'TERMIN_2' => 'float',
		'TERMIN_3' => 'float',
		'DANA_SENDIRI' => 'float',
		'UANG_MUKA' => 'float',
		'PENCAIRAN' => 'float',
		'PINJAMAN' => 'float',
		'HUTANG_USAHA' => 'float',
		'PEMELIHARAAN' => 'float',
		'TOTAL_BIAYA_PROYEK' => 'float',
		'PAJAK' => 'float',
		'BIAYA_LAIN' => 'float',
		'BUNGA_PINJ_BANK' => 'float',
		'ANGS_POKOK_BANK' => 'float',
		'NILAI_PROYEK' => 'float'
	];

	protected $fillable = [
		'ID_NASABAH',
		'TERMIN_1',
		'TERMIN_2',
		'TERMIN_3',
		'DANA_SENDIRI',
		'UANG_MUKA',
		'PENCAIRAN',
		'PINJAMAN',
		'HUTANG_USAHA',
		'PEMELIHARAAN',
		'TOTAL_BIAYA_PROYEK',
		'PAJAK',
		'BIAYA_LAIN',
		'BUNGA_PINJ_BANK',
		'ANGS_POKOK_BANK',
		'NILAI_PROYEK'
	];
}
