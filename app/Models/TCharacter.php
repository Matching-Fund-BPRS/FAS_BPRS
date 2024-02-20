<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCharacter
 * 
 * @property int|null $MAN_KEMAUAN
 * @property int|null $MAN_KEJUJURAN
 * @property int|null $MAN_REPUTASI
 * @property int|null $CW_TANGGUNG
 * @property int|null $CW_TERBUKA
 * @property int|null $CW_DISIPLIN
 * @property int|null $CW_JANJI
 * @property int|null $PU_INTEGRITAS
 * @property int|null $PU_ACCOUNT_BEHAVIOR
 * @property string $ID_NASABAH
 *
 * @package App\Models
 */
class TCharacter extends Model
{
	protected $table = 't_character';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MAN_KEMAUAN' => 'int',
		'MAN_KEJUJURAN' => 'int',
		'MAN_REPUTASI' => 'int',
		'CW_TANGGUNG' => 'int',
		'CW_TERBUKA' => 'int',
		'CW_DISIPLIN' => 'int',
		'CW_JANJI' => 'int',
		'PU_INTEGRITAS' => 'int',
		'PU_ACCOUNT_BEHAVIOR' => 'int'
	];

	protected $fillable = [
		'MAN_KEMAUAN',
		'MAN_KEJUJURAN',
		'MAN_REPUTASI',
		'CW_TANGGUNG',
		'CW_TERBUKA',
		'CW_DISIPLIN',
		'CW_JANJI',
		'PU_INTEGRITAS',
		'PU_ACCOUNT_BEHAVIOR'
	];
}
