<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TLimitkredit
 * 
 * @property string $ID_NASABAH
 * @property float|null $LIMIT_KREDIT
 * @property int|null $JANGKA_WAKTU
 * @property float|null $OMSET
 * @property float|null $HPP
 * @property float|null $BIAYA_HIDUP
 * @property float|null $ANGS_BANK_LAIN
 * @property float|null $BUNGA_KREDIT
 * @property float|null $ANGSURAN
 * @property float|null $PEND_LAIN
 * @property float|null $RPC
 * @property string|null $JENIS
 * @property float|null $BIAYA_LAIN
 * 
 * @property TNasabah $t_nasabah
 *
 * @package App\Models
 */
class TLimitkredit extends Model
{
	protected $table = 't_limitkredit';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'LIMIT_KREDIT' => 'float',
		'JANGKA_WAKTU' => 'int',
		'OMSET' => 'float',
		'HPP' => 'float',
		'BIAYA_HIDUP' => 'float',
		'ANGS_BANK_LAIN' => 'float',
		'BUNGA_KREDIT' => 'float',
		'ANGSURAN' => 'float',
		'PEND_LAIN' => 'float',
		'RPC' => 'float',
		'BIAYA_LAIN' => 'float'
	];

	protected $fillable = [
		'LIMIT_KREDIT',
		'JANGKA_WAKTU',
		'OMSET',
		'HPP',
		'BIAYA_HIDUP',
		'ANGS_BANK_LAIN',
		'BUNGA_KREDIT',
		'ANGSURAN',
		'PEND_LAIN',
		'RPC',
		'JENIS',
		'BIAYA_LAIN'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
