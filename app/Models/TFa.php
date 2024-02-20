<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TFa
 * 
 * @property string|null $ID_NASABAH
 * @property string|null $KODE
 * @property string|null $BANK
 * @property string|null $JENIS_KREDIT
 * @property float|null $PLAFOND
 * @property float|null $BAKI_DEBET
 * @property Carbon|null $TGL_JATUH_TEMPO
 * @property string|null $KOL
 * @property int|null $TUNGGAKAN
 * @property string|null $LAMA_TUNGGAKAN
 * @property string|null $KET
 * @property int $ID
 *
 * @package App\Models
 */
class TFa extends Model
{
	protected $table = 't_fas';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'PLAFOND' => 'float',
		'BAKI_DEBET' => 'float',
		'TGL_JATUH_TEMPO' => 'datetime',
		'TUNGGAKAN' => 'int'
	];

	protected $fillable = [
		'ID_NASABAH',
		'KODE',
		'BANK',
		'JENIS_KREDIT',
		'PLAFOND',
		'BAKI_DEBET',
		'TGL_JATUH_TEMPO',
		'KOL',
		'TUNGGAKAN',
		'LAMA_TUNGGAKAN',
		'KET'
	];
}
