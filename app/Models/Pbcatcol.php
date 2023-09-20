<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pbcatcol
 * 
 * @property string|null $pbc_tnam
 * @property int|null $pbc_tid
 * @property string|null $pbc_ownr
 * @property string|null $pbc_cnam
 * @property int|null $pbc_cid
 * @property string|null $pbc_labl
 * @property int|null $pbc_lpos
 * @property string|null $pbc_hdr
 * @property int|null $pbc_hpos
 * @property int|null $pbc_jtfy
 * @property string|null $pbc_mask
 * @property int|null $pbc_case
 * @property int|null $pbc_hght
 * @property int|null $pbc_wdth
 * @property string|null $pbc_ptrn
 * @property string|null $pbc_bmap
 * @property string|null $pbc_init
 * @property string|null $pbc_cmnt
 * @property string|null $pbc_edit
 * @property string|null $pbc_tag
 *
 * @package App\Models
 */
class Pbcatcol extends Model
{
	protected $table = 'pbcatcol';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pbc_tid' => 'int',
		'pbc_cid' => 'int',
		'pbc_lpos' => 'int',
		'pbc_hpos' => 'int',
		'pbc_jtfy' => 'int',
		'pbc_case' => 'int',
		'pbc_hght' => 'int',
		'pbc_wdth' => 'int'
	];

	protected $fillable = [
		'pbc_tnam',
		'pbc_tid',
		'pbc_ownr',
		'pbc_cnam',
		'pbc_cid',
		'pbc_labl',
		'pbc_lpos',
		'pbc_hdr',
		'pbc_hpos',
		'pbc_jtfy',
		'pbc_mask',
		'pbc_case',
		'pbc_hght',
		'pbc_wdth',
		'pbc_ptrn',
		'pbc_bmap',
		'pbc_init',
		'pbc_cmnt',
		'pbc_edit',
		'pbc_tag'
	];
}
