<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TBisid
 * 
 * @property string|null $ID_NASABAH
 * @property string|null $SEKTOR_EKONOMI_BI
 * @property string|null $PENGGUNAAN_BI
 * @property string|null $GOL_DEB_BI
 * @property string|null $SIFAT_BI
 * @property string|null $GOL_PENJAMIN_BI
 * @property string|null $TUJUAN_BI
 * @property string|null $GOL_PIUTANG_BI
 * @property string|null $SIFAT_PLAFOND
 * @property string|null $SEK_EKO_SID
 * @property string|null $PENGGUNAAN_SID
 * @property string|null $PEMBIAYAAN_SID
 *
 * @package App\Models
 */
class TBisid extends Model
{
	protected $table = 't_bisid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ID_NASABAH',
		'SEKTOR_EKONOMI_BI',
		'PENGGUNAAN_BI',
		'GOL_DEB_BI',
		'SIFAT_BI',
		'GOL_PENJAMIN_BI',
		'TUJUAN_BI',
		'GOL_PIUTANG_BI',
		'SIFAT_PLAFOND',
		'SEK_EKO_SID',
		'PENGGUNAAN_SID',
		'PEMBIAYAAN_SID'
	];
}
