<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class User
 * 
 * @property string $name
 * @property string $username
 * @property int $level
 * @property bool $isActive
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use HasFactory;
	protected $table = 'users';
	protected $primaryKey = 'username';
	public $incrementing = false;

	protected $casts = [
		'level' => 'int',
		'isActive' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'username',
		'level',
		'isActive',
		'password'
	];
}
