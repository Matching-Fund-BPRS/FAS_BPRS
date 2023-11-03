<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReffBank
 * 
 * @property string $KODE
 * @property string|null $BANK
 *
 * @package App\Models
 */
class ReffBank extends Model
{
	protected $table = 'reff_bank';
	protected $primaryKey = 'KODE';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'BANK'
	];
}
