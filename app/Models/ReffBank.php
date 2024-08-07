<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class ReffBank
 * 
 * @property string|null $KODE
 * @property string|null $BANK
 *
 * @package App\Models
 */
class ReffBank extends Model
{
		use HasFactory;
	protected $table = 'reff_bank';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'KODE',
		'BANK'
	];
}
