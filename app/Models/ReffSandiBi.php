<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Thiagoprz\CompositeKey\HasCompositeKey;
/**
 * Class ReffSandiBi
 * 
 * @property string $JENIS
 * @property string $SANDI
 * @property string|null $KETERANGAN
 * @property bool|null $DELETED
 *
 * @package App\Models
 */
class ReffSandiBi extends Model
{
	use HasCompositeKey;
	protected $table = 'reff_sandi_bi';
	protected $primaryKey = ['JENIS', 'SANDI'];
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DELETED' => 'bool'
	];

	protected $fillable = [
		'KETERANGAN',
		'DELETED'
	];
}
