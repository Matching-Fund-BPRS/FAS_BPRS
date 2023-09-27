<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TPegawai
 * 
 * @property string|null $ID_NASABAH
 * @property string|null $NAMA_PERUSAHAAN
 * @property string|null $ALAMAT
 * @property string|null $JENIS_PEKERJAAN
 * @property string|null $STATUS_PEKERJAAN
 * @property string|null $BIDANG_USAHA
 * @property string|null $SKALA_USAHA
 * @property string|null $JABATAN
 * @property string|null $STATUS_PEGAWAI
 * @property string|null $LAMA_BEKERJA
 * @property string|null $NAMA_ATASAN
 * @property string|null $NO_TELP_ATASAN
 * @property string|null $NO_TELP_KANTOR
 * @property string|null $JABATAN_ATASAN
 * @property string|null $NAMA_BENDAHARA
 * @property string|null $NO_TELP_BENDAHARA
 * @property string|null $PENYALURAN_GAJI
 *
 * @package App\Models
 */
class TPegawai extends Model
{
	protected $table = 't_pegawai';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ID_NASABAH',
		'NAMA_PERUSAHAAN',
		'ALAMAT',
		'JENIS_PEKERJAAN',
		'STATUS_PEKERJAAN',
		'BIDANG_USAHA',
		'SKALA_USAHA',
		'JABATAN',
		'STATUS_PEGAWAI',
		'LAMA_BEKERJA',
		'NAMA_ATASAN',
		'NO_TELP_ATASAN',
		'NO_TELP_KANTOR',
		'JABATAN_ATASAN',
		'NAMA_BENDAHARA',
		'NO_TELP_BENDAHARA',
		'PENYALURAN_GAJI'
	];
}
