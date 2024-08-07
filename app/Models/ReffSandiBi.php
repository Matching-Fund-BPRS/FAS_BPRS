<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class ReffSandiBi
 * 
 * @property string|null $JENIS
 * @property string|null $SANDI
 * @property string|null $KETERANGAN
 *
 * @package App\Models
 */
class ReffSandiBi extends Model
{
	use HasFactory;
	protected $table = 'reff_sandi_bi';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'JENIS',
		'SANDI',
		'KETERANGAN'
	];
}
