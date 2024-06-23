<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
	use HasFactory;
	protected $table = 'reff_sandi_sid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'JENIS',
		'SANDI',
		'KETERANGAN'
	];
}
