<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TKonstruksi
 * 
 * @property string|null $ID_NASABAH
 * @property float|null $NILAI_KONTRAK
 * @property float|null $PPN
 * @property float|null $PPH
 * @property float|null $NILAI_PROYEK_NET
 * @property float|null $MAX_PLAFOND
 * @property float|null $ESTIMASI_HPP
 * @property float|null $ANGSURAN_BANK
 * @property float|null $ESTIMASI_BUNGA
 * 
 * @property TNasabah|null $t_nasabah
 *
 * @package App\Models
 */
class TKonstruksi extends Model
{
	protected $table = 't_konstruksi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'NILAI_KONTRAK' => 'float',
		'PPN' => 'float',
		'PPH' => 'float',
		'NILAI_PROYEK_NET' => 'float',
		'MAX_PLAFOND' => 'float',
		'ESTIMASI_HPP' => 'float',
		'ANGSURAN_BANK' => 'float',
		'ESTIMASI_BUNGA' => 'float'
	];

	protected $fillable = [
		'ID_NASABAH',
		'NILAI_KONTRAK',
		'PPN',
		'PPH',
		'NILAI_PROYEK_NET',
		'MAX_PLAFOND',
		'ESTIMASI_HPP',
		'ANGSURAN_BANK',
		'ESTIMASI_BUNGA'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
