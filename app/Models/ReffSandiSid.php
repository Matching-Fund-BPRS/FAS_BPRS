<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReffSandiSid
 * 
 * @property string|null $JENIS
 * @property string|null $SANDI
 * @property string|null $KETERANGAN
 *
 * @package App\Models
 */
class ReffSandiSid extends Model
{
	protected $table = 'reff_sandi_sid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'JENIS',
		'SANDI',
		'KETERANGAN'
	];
}
