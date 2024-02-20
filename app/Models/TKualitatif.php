<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TKualitatif
 * 
 * @property string $ID_NASABAH
 * @property int|null $LEG_PENDIRIAN
 * @property string|null $LEG_PENDIRIAN_NO
 * @property int|null $LEG_USAHA
 * @property string|null $LEG_USAHA_NO
 * @property int|null $LEG_PEMOHON
 * @property string|null $LEG_PEMOHON_NO
 * @property int|null $LEG_LAIN1
 * @property string|null $LEG_LAIN1_NO
 * @property int|null $LEG_LAIN2
 * @property string|null $LEG_LAIN2_NO
 * @property int|null $LEG_LAIN3
 * @property string|null $LEG_LAIN3_NO
 * @property int|null $PEM_PESAING
 * @property int|null $PEM_REPUTASI
 * @property int|null $PEM_PELANGGAN
 * @property int|null $PEM_KETERGANTUNGAN
 * @property int|null $PEM_KEBUTUHAN
 * @property int|null $MAN_KEJUJURAN
 * @property int|null $MAN_KEMAUAN
 * @property int|null $MAN_REPUTASI
 * @property int|null $TEH_UTILISASI
 * @property int|null $TEH_PENGADAAN
 * @property int|null $TES_REPUTASI
 * @property int|null $TEH_KETERGANTUNGAN
 * @property int|null $TEH_SPESIFIKASI
 * @property int|null $TEH_LAMA_USAHA
 * @property Carbon|null $TGL_PENDIRIAN
 * @property Carbon|null $TGL_USAHA
 * @property Carbon|null $TGL_PEMOHON
 * @property Carbon|null $TGL_LAIN1
 * @property Carbon|null $TGL_LAIN2
 * @property Carbon|null $TGL_LAIN3
 * @property string|null $NPWP
 * @property Carbon|null $NPWP_TGL
 * @property string|null $TDP
 * @property Carbon|null $TDP_TGL
 * @property string|null $SITU
 * @property Carbon|null $SITU_TGL
 * @property string|null $IJIN_HO
 * @property Carbon|null $HO_TGL
 *
 * @package App\Models
 */
class TKualitatif extends Model
{
	protected $table = 't_kualitatif';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'LEG_PENDIRIAN' => 'int',
		'LEG_USAHA' => 'int',
		'LEG_PEMOHON' => 'int',
		'LEG_LAIN1' => 'int',
		'LEG_LAIN2' => 'int',
		'LEG_LAIN3' => 'int',
		'PEM_PESAING' => 'int',
		'PEM_REPUTASI' => 'int',
		'PEM_PELANGGAN' => 'int',
		'PEM_KETERGANTUNGAN' => 'int',
		'PEM_KEBUTUHAN' => 'int',
		'MAN_KEJUJURAN' => 'int',
		'MAN_KEMAUAN' => 'int',
		'MAN_REPUTASI' => 'int',
		'TEH_UTILISASI' => 'int',
		'TEH_PENGADAAN' => 'int',
		'TES_REPUTASI' => 'int',
		'TEH_KETERGANTUNGAN' => 'int',
		'TEH_SPESIFIKASI' => 'int',
		'TEH_LAMA_USAHA' => 'int',
		'TGL_PENDIRIAN' => 'datetime',
		'TGL_USAHA' => 'datetime',
		'TGL_PEMOHON' => 'datetime',
		'TGL_LAIN1' => 'datetime',
		'TGL_LAIN2' => 'datetime',
		'TGL_LAIN3' => 'datetime',
		'NPWP_TGL' => 'datetime',
		'TDP_TGL' => 'datetime',
		'SITU_TGL' => 'datetime',
		'HO_TGL' => 'datetime'
	];

	protected $fillable = [
		'LEG_PENDIRIAN',
		'LEG_PENDIRIAN_NO',
		'LEG_USAHA',
		'LEG_USAHA_NO',
		'LEG_PEMOHON',
		'LEG_PEMOHON_NO',
		'LEG_LAIN1',
		'LEG_LAIN1_NO',
		'LEG_LAIN2',
		'LEG_LAIN2_NO',
		'LEG_LAIN3',
		'LEG_LAIN3_NO',
		'PEM_PESAING',
		'PEM_REPUTASI',
		'PEM_PELANGGAN',
		'PEM_KETERGANTUNGAN',
		'PEM_KEBUTUHAN',
		'MAN_KEJUJURAN',
		'MAN_KEMAUAN',
		'MAN_REPUTASI',
		'TEH_UTILISASI',
		'TEH_PENGADAAN',
		'TES_REPUTASI',
		'TEH_KETERGANTUNGAN',
		'TEH_SPESIFIKASI',
		'TEH_LAMA_USAHA',
		'TGL_PENDIRIAN',
		'TGL_USAHA',
		'TGL_PEMOHON',
		'TGL_LAIN1',
		'TGL_LAIN2',
		'TGL_LAIN3',
		'NPWP',
		'NPWP_TGL',
		'TDP',
		'TDP_TGL',
		'SITU',
		'SITU_TGL',
		'IJIN_HO',
		'HO_TGL'
	];
}
