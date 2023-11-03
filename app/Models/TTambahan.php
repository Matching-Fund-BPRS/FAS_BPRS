<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TTambahan
 * 
 * @property string $ID_NASABAH
 * @property string|null $TAMBAHAN
 * @property string|null $RESIKO
 * @property string|null $MITIGASI
 * 
 * @property TNasabah $t_nasabah
 *
 * @package App\Models
 */
class TTambahan extends Model
{
	protected $table = 't_tambahan';
	protected $primaryKey = 'ID_NASABAH';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'TAMBAHAN',
		'RESIKO',
		'MITIGASI'
	];

	public function t_nasabah()
	{
		return $this->belongsTo(TNasabah::class, 'ID_NASABAH');
	}
}
