<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReffBank;
use App\Models\ReffSandiBi;
use App\Models\ReffSandiSid;
use App\Models\TAgunan;
use App\Models\TAngsuran;
use App\Models\TBisid;
use App\Models\TBmpd;
use App\Models\TCapacity;
use App\Models\TCapital;
use App\Models\TCharacter;
use App\Models\TCollateral;
use App\Models\TCondition;
use App\Models\TFa;
use App\Models\TKeuangan;
use App\Models\TNasabah;
use App\Models\TNeraca;
use App\Models\TRekomendasi;
use App\Models\TResiko;
use App\Models\TRugilaba;
use App\Models\TScoring;
use App\Models\TSyariah;
use Carbon\Carbon;
use OpenSpout\Common\Entity\Row;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpWord\IOFactory as PhpWordIOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

use function PHPSTORM_META\map;

class LaporanController extends Controller
{
    public function index(){
        return view('dokumen');
    }

    public function downloadLaporan(Request $request){
        //dd($request->all());
        $phpWord = new TemplateProcessor(public_path('template_2.docx'));
        $laporan = TNasabah::where('ID_NASABAH', $request->ID_NASABAH)->first();

        
        if ($laporan->SIFAT == 1) {
            $laporan->SIFAT = 'Murabahah';
        } elseif ($laporan->SIFAT == 2) {
            $laporan->SIFAT = 'Musyarakah';
        } elseif ($laporan->SIFAT == 3) {
            $laporan->SIFAT = 'Mudarabah';
        } elseif ($laporan->SIFAT == 4) {
            $laporan->SIFAT = 'Ijaroh';
        } elseif ($laporan->SIFAT == 5) {
            $laporan->SIFAT = 'Rahn';
        } else {
            $laporan->SIFAT = 'Qord';
        }
    
        if ($laporan->JENIS_PERMOHONAN == 1) {
            $laporan->JENIS_PERMOHONAN = 'Baru';
        } elseif ($laporan->JENIS_PERMOHONAN == 2) {
            $laporan->JENIS_PERMOHONAN = 'Tambahan';
        } elseif ($laporan->JENIS_PERMOHONAN == 3) {
            $laporan->JENIS_PERMOHONAN = 'Tambahan dan Perpanjangan';
        }
    
        if ($laporan->TUJUAN == 1) {
            $laporan->TUJUAN = 'Modal Kerja';
        } elseif ($laporan->TUJUAN == 2) {
            $laporan->TUJUAN = 'Investasi';
        } else {
            $laporan->TUJUAN = 'Konsumsi';
        }
    
    
        if ($laporan->STATUS_PERKAWINAN == 1) {
            $laporan->STATUS_PERKAWINAN = 'Belum Menikah';
        } elseif ($laporan->STATUS_PERKAWINAN == 2) {
            $laporan->STATUS_PERKAWINAN = 'Menikah';
        } elseif ($laporan->STATUS_PERKAWINAN == 3) {
            $laporan->STATUS_PERKAWINAN = 'Duda';
        } elseif ($laporan->STATUS_PERKAWINAN == 4) {
            $laporan->STATUS_PERKAWINAN = 'Janda';
        }
    
        if ($laporan->STATUS_TEMPAT_TINGGAL == 1) {
            $laporan->STATUS_TEMPAT_TINGGAL = 'Milik Sendiri';
        } elseif ($laporan->STATUS_TEMPAT_TINGGAL == 2) {
            $laporan->STATUS_TEMPAT_TINGGAL = 'Milik Keluarga/Ortu';
        } elseif ($laporan->STATUS_TEMPAT_TINGGAL == 3) {
            $laporan->STATUS_TEMPAT_TINGGAL = 'Instansi';
        } elseif ($laporan->STATUS_TEMPAT_TINGGAL == 4) {
            $laporan->STATUS_TEMPAT_TINGGAL = 'Kontrak';
        } elseif ($laporan->STATUS_TEMPAT_TINGGAL == 5) {
            $laporan->STATUS_TEMPAT_TINGGAL = 'Kredit';
        }
    
        if ($laporan->GENDER == 'P') {
            $laporan->GENDER = 'Perempuan';
        } else {
            $laporan->GENDER = 'Laki-Laki';
        }
    
    
        if ($laporan->TINGKAT_PENDIDIKAN == 1) {
            $laporan->TINGKAT_PENDIDIKAN = 'Sekolah Dasar';
        } elseif ($laporan->TINGKAT_PENDIDIKAN == 2) {
            $laporan->TINGKAT_PENDIDIKAN = 'SMP';
        } elseif ($laporan->TINGKAT_PENDIDIKAN == 3) {
            $laporan->TINGKAT_PENDIDIKAN = 'SMA';
        } elseif ($laporan->TINGKAT_PENDIDIKAN == 4) {
            $laporan->TINGKAT_PENDIDIKAN = 'Diploma';
        } elseif ($laporan->TINGKAT_PENDIDIKAN == 5) {
            $laporan->TINGKAT_PENDIDIKAN = 'S1';
        } elseif ($laporan->TINGKAT_PENDIDIKAN == 6) {
            $laporan->TINGKAT_PENDIDIKAN = 'S2';
        } elseif ($laporan->TINGKAT_PENDIDIKAN == 7) {
            $laporan->TINGKAT_PENDIDIKAN = 'S3';
        }
    
        if ($laporan->PROFESI_PASANGAN == 1) {
            $laporan->PROFESI_PASANGAN = 'Ibu Rumah Tangga';
        } elseif ($laporan->PROFESI_PASANGAN == 2) {
            $laporan->PROFESI_PASANGAN = 'Pegawai BUMN/BUMD';
        } elseif ($laporan->PROFESI_PASANGAN == 3) {
            $laporan->PROFESI_PASANGAN = 'Pegawai Negeri Sipil';
        } elseif ($laporan->PROFESI_PASANGAN == 4) {
            $laporan->PROFESI_PASANGAN = 'TNI/Polri';
        } elseif ($laporan->PROFESI_PASANGAN == 5) {
            $laporan->PROFESI_PASANGAN = 'Pegawai Swasta';
        } elseif ($laporan->PROFESI_PASANGAN == 6) {
            $laporan->PROFESI_PASANGAN = 'Profesional';
        } elseif ($laporan->PROFESI_PASANGAN == 7) {
            $laporan->PROFESI_PASANGAN = 'Wiraswasta';
        } elseif ($laporan->PROFESI_PASANGAN == 8) {
            $laporan->PROFESI_PASANGAN = 'Tidak Bekerja';
        }
    
        if ($laporan->HUB_KELUARGA == 1) {
            $laporan->HUB_KELUARGA = 'Anak Kandung';
        } elseif ($laporan->HUB_KELUARGA == 2) {
            $laporan->HUB_KELUARGA = 'Orang Tua';
        } elseif ($laporan->HUB_KELUARGA == 3) {
            $laporan->HUB_KELUARGA = 'Saudara Kandung';
        } elseif ($laporan->HUB_KELUARGA == 4) {
            $laporan->HUB_KELUARGA = 'Saudara Tidak Sekandung';
        } elseif ($laporan->HUB_KELUARGA == 5) {
            $laporan->HUB_KELUARGA = 'Rekan Kerja';
        } elseif ($laporan->HUB_KELUARGA == 6) {
            $laporan->HUB_KELUARGA = 'Tetangga';
        }
    
        $phpWord->setValues([
            'cif' => $laporan->CIF,
            'jenis_permohonan' => $laporan->JENIS_PERMOHONAN,
            'tgl_permohonan' => Carbon::parse($laporan->TGL_PERMOHONAN ? $laporan->TGL_PERMOHONAN : Carbon::now())->format('d/m/Y'),
            'tgl_analisa' => Carbon::parse($laporan->TGL_ANALISA ? $laporan->TGL_ANALISA : Carbon::now())->format('d/m/Y'),
            'limit_kredit' => number_format($laporan->LIMIT_KREDIT, 0, ',', '.'),
            'bunga' => $laporan->BUNGA,
            'jangka_waktu' => $laporan->JANGKA_WAKTU,
            'sifat' => $laporan->SIFAT,
            'tujuan' => $laporan->TUJUAN,
            'ket_tujuan' => $laporan->KET_TUJUAN,
            'bidang_usaha' => $laporan->BIDANG_USAHA,
            'sub_usaha' => $laporan->BIDANG_USAHA,
            'tgl_mulai_usaha' => Carbon::parse($laporan->TGL_MULAI_USAHA ? $laporan->TGL_MULAI_USAHA : Carbon::now())->format('d/m/Y'),
            'jumlah_kary' => $laporan->JUMLAH_KARY,
            'nama' => $laporan->NAMA,
            'nama_1' => $laporan->NAMA,
            'nama_badan_usaha' => $laporan->NAMA_BADAN_USAHA,
            'alamat_usaha' => $laporan->ALAMAT_USAHA,
            'status_perkawinan' => $laporan->STATUS_PERKAWINAN,
            'tempat_lahir' => $laporan->TEMPAT_LAHIR,
            'tgl_lahir' => Carbon::parse($laporan->TGL_LAHIR ? $laporan->TGL_LAHIR : Carbon::now())->format('d/m/Y'),
            'gender' => $laporan->GENDER,
            'no_ktp' => $laporan->NO_KTP,
            'tgl_berlaku_ktp' => Carbon::parse($laporan->TGL_BERLAKU_KTP ? $laporan->TGL_BERLAKU_KTP : Carbon::now())->format('d/m/Y'),
            'alamat' => $laporan->ALAMAT,
            'no_telp' => $laporan->NO_TELP,
            'no_kantor' => $laporan->NO_KANTOR,
            'status_tempat_tinggal' => $laporan->STATUS_TEMPAT_TINGGAL,
            'lama_tinggal' => $laporan->LAMA_TINGGAL,
            'tingkat_pendidikan' => $laporan->TINGKAT_PENDIDIKAN,
            'jumlah_tanggungan' => $laporan->JUMLAH_TANGGUNGAN,
            'nama_pasangan' => $laporan->NAMA_PASANGAN,
            'tempat_lahir_pasangan' => $laporan->TEMPAT_LAHIR_PASANGAN,
            'tgl_lahir_pasangan' => Carbon::parse($laporan->TGL_LAHIR_PASANGAN ? $laporan->TGL_LAHIR_PASANGAN : Carbon::now())->format('d/m/Y'),
            'alamat_pasangan' => $laporan->ALAMAT_PASANGAN,
            'profesi_pasangan' => $laporan->PROFESI_PASANGAN,
            'no_telp_pasangan' => $laporan->NO_TELP_PASANGAN,
            'nama_ec' => $laporan->NAMA_EC,
            'hub_ec' => $laporan->HUB_EC,
            'no_telp_ec' => $laporan->NO_TELP_EC,
            'alamat_ec' => $laporan->ALAMAT_EC,
            'jadi_nasabah_sejak' => Carbon::parse($laporan->JADI_NASABAH_SEJAK ? $laporan->JADI_NASABAH_SEJAK : Carbon::now())->format('d/m/Y'),
            'no_telp_usaha' => $laporan->NO_TELP_USAHA,
            'status_tempat_usaha' => $laporan->STATUS_TEMPAT_USAHA,
            'user_id' => $laporan->USER_ID,
            'id_nasabah' => $laporan->ID_NASABAH,
    
        ]);
        $fas = TFa::where('ID_NASABAH', $laporan->ID_NASABAH)->get();
        //dd($fas);
        // Add a table to the document
        $sum_limit_kredit = 0;
        $sum_baki_debet = 0;
        // Add data rows
        foreach ($fas as $no_fas => $fasilitas) {
    
            if ($fasilitas->JENIS_KREDIT == 1) {
                $fasilitas->JENIS_KREDIT = 'Modal Kerja';
            } else if ($fasilitas->JENIS_KREDIT == 2) {
                $fasilitas->JENIS_KREDIT = 'Investasi';
            } else if ($fasilitas->JENIS_KREDIT == 3) {
                $fasilitas->JENIS_KREDIT = 'Konsumsi';
            }
            $tableData[] = [
                'no_fas' => $no_fas + 1,
                'nama_fas' => $laporan->NAMA,
                'bank_fas' => $fasilitas->BANK,
                'jenis_fas' => $fasilitas->JENIS_KREDIT,
                'limit_fas' => number_format($fasilitas->PLAFOND, 0, ',', '.'),
                'debet_fas' => number_format($fasilitas->BAKI_DEBET, 0, ',', '.'),
                'tgl_fas' => Carbon::parse($fasilitas->TGL_JATUH_TEMPO ? $fasilitas->TGL_JATUH_TEMPO : Carbon::now())->format('d/m/Y'),
                'kol_fas' => $fasilitas->KOL,
                'tgk_fas' => $fasilitas->TUNGGAKAN,
                'lgk_fas' => $fasilitas->LAMA_TUNGGAKAN,
            ];
    
            $sum_limit_kredit += $fasilitas->PLAFOND;
            $sum_baki_debet += $fasilitas->BAKI_DEBET;
        }
    
        $phpWord->setValues([
            'sum_lk_fas' => number_format($sum_limit_kredit, 0, ',', '.'),
            'sum_bd_fas' => number_format($sum_baki_debet, 0, ',', '.'),
        ]);
    
        $phpWord->cloneRowAndSetValues('no_fas', $tableData);
    
        $bmpd = TBmpd::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
        //dump($bmpd);
        $phpWord->setValues([
            'cab_inti' => number_format($bmpd->MODAL_INTI_CAB, 0, ',', '.'),
            'cab_lengkap' => number_format($bmpd->MODAL_PELENGKAP_CAB, 0, ',', '.'),
            'cab_orang' => number_format($bmpd->BMPD_PERORG_CAB, 0, ',', '.'),
            'cab_kelompok' => number_format($bmpd->BMPD_KEL_CAB, 0, ',', '.'),
            'cab_terkait' => number_format($bmpd->BMPD_TERKAIT_CAB, 0, ',', '.'),
            'cab_persen' => $bmpd->PLAFOND_CAB,
            'pus_inti' => number_format($bmpd->MODAL_INTI_PUSAT, 0, ',', '.'),
            'pus_lengkap' => number_format($bmpd->MODAL_PELENGKAP_PUSAT, 0, ',', '.'),
            'pus_orang' => number_format($bmpd->BMPD_PERORG_PUSAT, 0, ',', '.'),
            'pus_kelompok' => number_format($bmpd->BMPD_KEL_PUSAT, 0, ',', '.'),
            'pus_terkait' => number_format($bmpd->BMPD_TERKAIT_PUSAT, 0, ',', '.'),
            'pus_persen' => $bmpd->PLAFOND_PUSAT
        ]);
    
    
        $character = TCharacter::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
    
        if ($character->CW_TANGGUNG == 1) {
            $char_tanggung_jawab = 'Kurang bertanggung Jawab dan Memiliki Reputasi yang Kurang Baik';
        } elseif ($character->CW_TANGGUNG == 2) {
            $char_tanggung_jawab = 'Kurang Bertanggung Jawab';
        } elseif ($character->CW_TANGGUNG == 3) {
            $char_tanggung_jawab = 'Cukup Bertanggung Jawab';
        } elseif ($character->CW_TANGGUNG == 4) {
            $char_tanggung_jawab = 'Bertanggung Jawab';
        } else {
            $char_tanggung_jawab = 'Sangat Bertanggung Jawab dan Memiliki Reputasi yang Baik';
        }
    
        if ($character->PU_ACCOUNT_BEHAVIOR == 1) {
            $char_behaviour = 'Bermasalah';
        } elseif ($character->PU_ACCOUNT_BEHAVIOR == 2) {
            $char_behaviour = 'Pernah menunggak, mutasi rek atif';
        } elseif ($character->PU_ACCOUNT_BEHAVIOR == 3) {
            $char_behaviour = 'Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek tidak atif';
        } elseif ($character->PU_ACCOUNT_BEHAVIOR == 4) {
            $char_behaviour = 'Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek kurang atif';
        } else {
            $char_behaviour = 'Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek atif';
        }
    
        if ($character->CW_TERBUKA == 1) {
            $char_keterbukaan = 'Tidak Terbuka dan Cenderung Menyembunyikan Informasi Perusahaan';
        } elseif ($character->CW_TERBUKA == 2) {
            $char_keterbukaan = 'Penyampaian informasi tentang perusahaan kurang lengkap';
        } elseif ($character->CW_TERBUKA == 3) {
            $char_keterbukaan = 'Penyampaian informasi tentang perusahaan cukup lengkap';
        } elseif ($character->CW_TERBUKA == 4) {
            $char_keterbukaan = 'Penyampaian informasi tentang perusahaan lengkap';
        } else {
            $char_keterbukaan = 'Penyampaian informasi tentang perusahaan secara lengkap dan sukarela';
        }
    
        if ($character->MAN_KEMAUAN == 1) {
            $char_kemauan = 'Sulit memberikan keterangan atau dokumen';
        } elseif ($character->MAN_KEMAUAN == 2) {
            $char_kemauan = 'Kurang antusias dalam memberikan keterangan atau dokumen';
        } elseif ($character->MAN_KEMAUAN == 3) {
            $char_kemauan = 'Membantu dalam setiap tahapan proses kredit';
        }
    
        if ($character->CW_DISIPLIN == 1) {
            $char_kedisiplinan = 'Tidak ada bukti disiplin dalam penggunaan dana atau pemenuhan kewajiban keuangan (Tidak disiplin)';
        } elseif ($character->CW_DISIPLIN == 2) {
            $char_kedisiplinan = 'Beberapa aspek pengeloaan dana dan kewajiban keuangan mungkin tidak sesuai standar (Kurang disiplin)';
        } elseif ($character->CW_DISIPLIN == 3) {
            $char_kedisiplinan = 'Kewajiban keuangan dipenuhi dan dana digunakan secara bertanggung jawab';
        } elseif ($character->CW_DISIPLIN == 4) {
            $char_kedisiplinan = 'Penggunaan dana dan pemenuhan kewajiban keuangan dilakukan dengan baik dan sesuai aturan (Disiplin)';
        } else {
            $char_kedisiplinan = 'Tangat Disiplin dalam Melaksanakan Peraturan Perusahaan';
        }
    
        if ($character->CW_JANJI == 1) {
            $char_janji= 'Perusahan tidak tepat janji';
        } elseif ($character->CW_JANJI == 2) {
            $char_janji= 'Perusahan kadang tepat janji';
        } elseif ($character->CW_JANJI == 3) {
            $char_janji= 'Perusahan tepat janji';
        } elseif ($character->CW_JANJI == 4) {
            $char_janji= 'Perusahan sering tepat janji';
        } else {
            $char_janji= 'Perusahan selalu tepat janji terhadap pihak yang berhungan dengan perusahan';
        }
    
        if ($character->PU_INTEGRITAS == 1) {
            $char_integritas= 'Tidak jujur dan koperatif';
        } elseif ($character->PU_INTEGRITAS == 2) {
            $char_integritas= 'Track record cukup baik, relasi sedikit, cukup koperatif';
        } elseif ($character->PU_INTEGRITAS == 3) {
            $char_integritas= 'Track record baik dan kurang koperatif';
        } elseif ($character->PU_INTEGRITAS == 4) {
            $char_integritas= 'Track record baik dan cukup koperatif';
        } else {
            $char_integritas= 'Track record baik dan koperatif';
        }
    
        if ($character->MAN_KEJUJURAN == 1) {
            $char_jujur = 'Pernyataan banyak bertentangan dengan hasil verifikasi';
        } elseif ($character->MAN_KEJUJURAN == 2) {
            $char_jujur = 'Pernyataan tidak sesuai dengan hasil verifikasi';
        } elseif ($character->MAN_KEJUJURAN == 3) {
            $char_jujur = 'Pernyataan sesuai dengan hasil verifikasi';
        } 
    
        if ($character->MAN_REPUTASI == 1) {
            $char_reputasi = 'Sulit memberikan perilaku dan bisnis yang disukai dan dijadikan panutan';
        } elseif ($character->MAN_REPUTASI == 2) {
            $char_reputasi = 'Tidak ada keluhan dari rekan bisnis';
        } elseif ($character->MAN_REPUTASI == 3) {
            $char_reputasi = 'Memberikan perilaku dan bisnis yang disukai dan dijadikan panutan';
        } 
    
    //dump($character);
    
        $phpWord->setValues([
            'char_tanggung_jawab' => $char_tanggung_jawab,
            'char_kemauan' => $char_kemauan,
            'char_kedisiplinan' => $char_kedisiplinan,
            'char_janji' => $char_janji,
            'char_integritas' => $char_integritas,
            'char_jujur' => $char_jujur,
            'char_reputasi' => $char_reputasi,
            'char_keterbukaan' => $char_keterbukaan,
            'char_behaviour' => $char_behaviour
            
        ]);
    
        $capacity = TCapacity::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
    
        $cbManajemenSdm = '';
        switch ($capacity->CB_MANAJEMEN_SDM) {
            case 1:
                $cbManajemenSdm = 'Tidak Memiliki sistem Pencatan keuangan, Tidak Memiliki karyawan dalam bidang pencatatan keuangan';
                break;
            case 2:
                $cbManajemenSdm = 'Memiliki Sistem Pencatan keuangan yang baik, Tidak memiliki karyawan dalam bidang pencatatan keuangan';
                break;
            case 3:
                $cbManajemenSdm = 'Memiliki Sistem Pencatan keuangan yang Baik, Membuat Laporan Keuangan Secara Periodik, Tidak Memiliki karyawan dalam bidang pencatatan keuangan';
                break;
            case 4:
                $cbManajemenSdm = 'Memiliki Sistem pencatatan keuangan yang baik, Membuat laporan Keuangan Secara Periodik, dan Memiliki karyawan yang ahli dalam bidang pencatatan keuangan';
                break;
            case 5:
                $cbManajemenSdm = 'Memiliki Sistem pencatatan keuangan yang baik, Membuat laporan keuangan secara periodik dan di audit oleh akuntan publik, serta Memiliki karyawan yang ahli dalam bidang pencatatan keuangan';
                break;
            default:
                $cbManajemenSdm = 'Unknown Value';
                break;
        }
        
        $cbPengelolaan = '';
        switch ($capacity->CB_PENGELOLAAN) {
            case 1:
                $cbPengelolaan = 'Pengelolaan perusahaan masih sangat tergantung pada pemilik secara individu dan banyak melibatkan keluarga';
                break;
            case 2:
                $cbPengelolaan = 'Pengelolaan perusahaan tergantung dengan pengelolaan individu dan tidak melibatkan banyak keluarga';
                break;
            case 3:
                $cbPengelolaan = 'Pengelolan perusahan tidak tergantung dengan individu';
                break;
            case 4:
                $cbPengelolaan = 'Pengelolaan perusahaan menggunakan manajemen yang profesional';
                break;
            case 5:
                $cbPengelolaan = 'Pengelolaan perusahaaan menggunakan manajemen yang profesional dan modern';
                break;
            default:
                $cbPengelolaan = 'Unknown Value';
                break;
        }
        
        $tehUtilisasi = '';
        switch ($capacity->TEH_UTILISASI) {
            case 1:
                $tehUtilisasi = 'Kurang dari 50%';
                break;
            case 2:
                $tehUtilisasi = '50% - 75%';
                break;
            case 3:
                $tehUtilisasi = 'Lebih dari 75%';
                break;
            default:
                $tehUtilisasi = 'Unknown Value';
                break;
        }
        
        $tehLamaUsaha = '';
        switch ($capacity->TEH_LAMA_USAHA) {
            case 1:
                $tehLamaUsaha = '< 2 Tahun';
                break;
            case 2:
                $tehLamaUsaha = '2 - 4 Tahun';
                break;
            case 3:
                $tehLamaUsaha = '> 4 Tahun';
                break;
            default:
                $tehLamaUsaha = 'Unknown Value';
                break;
        }
        
        $cbDscr = $capacity->CB_DSCR;
        
        $phpWord->setValues([
            'cty_manajemen' => $cbManajemenSdm,
            'cty_dscr' => $cbDscr,
            'cty_pengelolaan' => $cbPengelolaan,
            'cty_utilisasi' => $tehUtilisasi,
            'cty_lama' => $tehLamaUsaha
        ]);
    
        $condition = TCondition::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
    
        $cuPasokan = '';
        switch ($condition->CU_PASOKAN) {
            case 1:
                $cuPasokan = 'Proses Pengadaan Tidak Lancar';
                break;
            case 2:
                $cuPasokan = 'Proses Pengadaan Lancar';
                break;
            case 3:
                $cuPasokan = 'Proses Pengadaan Sangat Lancar';
                break;
            default:
                $cuPasokan = 'Unknown Value';
                break;
        }
        
        $cuKonsumen = '';
        switch ($condition->CU_KONSUMEN) {
            case 1:
                $cuKonsumen = 'Kepuasan Pelanggan Terhadap Perusahaan Rendah';
                break;
            case 2:
                $cuKonsumen = 'Kepuasan Pelanggan Terhadap Perusahaan Cukup';
                break;
            case 3:
                $cuKonsumen = 'Kepuasan Pelanggan Terhadap Perusahaan Tinggi';
                break;
            default:
                $cuKonsumen = 'Unknown Value';
                break;
        }
        
        $pemKetergantungan = '';
        switch ($condition->PEM_KETERGANTUNGAN) {
            case 1:
                $pemKetergantungan = 'Prospek Usaha Cukup Baik';
                break;
            case 2:
                $pemKetergantungan = 'Prospek Usaha Cukup Baik dan Berkembang';
                break;
            case 3:
                $pemKetergantungan = 'Prospek Usaha Sangat Baik dan Berkembang Pesat';
                break;
            default:
                $pemKetergantungan = 'Unknown Value';
                break;
        }
        
        $pemKebutuhan = '';
        switch ($condition->PEM_KEBUTUHAN) {
            case 1:
                $pemKebutuhan = 'Diperlukan Hanya pada Waktu Tertentu';
                break;
            case 2:
                $pemKebutuhan = 'Diperlukan Tinggi pada Waktu Tertentu';
                break;
            case 3:
                $pemKebutuhan = 'Diatas Sepanjang Tahun';
                break;
            default:
                $pemKebutuhan = 'Unknown Value';
                break;
        }
        
        $cuKecakapan = '';
        switch ($condition->CU_KECAKAPAN) {
            case 1:
                $cuKecakapan = 'Tidak Memiliki keterampilan khusus dan pengalaman yang relevan';
                break;
            case 2:
                $cuKecakapan = 'Memiliki keterampilan dasar yang relevan';
                break;
            case 3:
                $cuKecakapan = 'Memiliki keahlian yang cukup, dengan pengalaman kurang dari 5 tahun';
                break;
            case 4:
                $cuKecakapan = 'Memiliki keahlian yang tinggi, dengan pengalaman lebih dari 5 tahun';
                break;
            case 5:
                $cuKecakapan = 'Memiliki keahlian yang sangat tinggi, dengan pengalaman lebih dari 10 tahun';
                break;
            default:
                $cuKecakapan = 'Unknown Value';
                break;
        }
        
        $cuEksternal = '';
        switch ($condition->CU_EKSTERNAL) {
            case 1:
                $cuEksternal = 'Risiko Faktor Eksternal Perusahaan Sangat Tinggi';
                break;
            case 2:
                $cuEksternal = 'Risiko Faktor Eksternal Perusahaan Tinggi';
                break;
            case 3:
                $cuEksternal = 'Risiko Faktor Eksternal Perusahaan Sedang';
                break;
            case 4:
                $cuEksternal = 'Risiko Faktor Eksternal Perusahaan Rendah';
                break;
            case 5:
                $cuEksternal = 'Risiko Faktor Eksternal Perusahaan Sangat Rendah';
                break;
            default:
                $cuEksternal = 'Unknown Value';
                break;
        }
        
        $phpWord->setValues([
            'con_barang_baku' => $cuPasokan,
            'con_kebutuhan' => $pemKebutuhan,
            'con_kepuasaan' => $cuKonsumen,
            'con_kecakapan' => $cuKecakapan,
            'con_eksternal' => $cuEksternal,
            'con_prospek' => $pemKetergantungan
        ]);
        
    
        $capital = TCapital::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
    
        $phpWord->setValues([
            'cap_dar' => -1 * $capital->CM_DAR,
            'cap_income' => $capital->PK_INCOME_SALES,
            'cap_der' => -1 * $capital->CM_DER,
            'cap_rpc' => -1 * $capital->RPC,
            'cap_lder' => -1 * $capital->CM_LDER,
            'cap_ebit' => $capital->PK_EBIT,
            'cap_aset' => number_format($capital->PK_ASET, 0, ',', '.'),
        ]);
    
        $COLLATERAL = TCollateral::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
    
        $colAgunan = '';
        switch ($COLLATERAL->CA_NILAI_AGUNAN) {
            case 1:
                $colAgunan = 'Nilai Jual Agunan Lebih Rendah Dari Nilai Pembiayaan';
                break;
            case 2:
                $colAgunan = 'Nilai Jual Agunan Setara Nilai Pembiayaan';
                break;
            case 3:
                $colAgunan = 'Nilai Jual Agunan melebihi nilai Pembiayaan';
                break;
            default:
                $colAgunan = 'Unknown Value';
                break;
        }
        
        $colKepemilikan = '';
        switch ($COLLATERAL->KEPEMILIKAN) {
            case 1:
                $colKepemilikan = 'Pihak satu derajat';
                break;
            case 2:
                $colKepemilikan = 'Pihak ketiga';
                break;
            case 3:
                $colKepemilikan = 'Milik sendiri';
                break;
            default:
                $colKepemilikan = 'Unknown Value';
                break;
        }
        
        $colDok = '';
        switch ($COLLATERAL->PA_DOKUMEN) {
            case 1:
                $colDok = 'Dokumen Lengkap';
                break;
            case 2:
                $colDok = 'Dokumen Tidak Lengkap';
                break;
            default:
                $colDok = 'Unknown Value';
                break;
        }
        
        $colPengusaha = '';
        switch ($COLLATERAL->PENGUASAAN) {
            case 1:
                $colPengusaha = 'Tidak Ditempati';
                break;
            case 2:
                $colPengusaha = 'Disewakan';
                break;
            case 3:
                $colPengusaha = 'Ditempati sendiri';
                break;
            default:
                $colPengusaha = 'Unknown Value';
                break;
        }
        
        $colPengikatan = '';
        switch ($COLLATERAL->PENGIKATAN) {
            case 1:
                $colPengikatan = 'Tidak diikat sama sekali';
                break;
            case 2:
                $colPengikatan = 'Diikat dibawah tangan';
                break;
            case 3:
                $colPengikatan = 'Diikat notarial';
                break;
            default:
                $colPengikatan = 'Unknown Value';
                break;
        }
        
        $colLegUsaha = '';
        switch ($COLLATERAL->LEG_USAHA) {
            case 1:
                $colLegUsaha = 'Tidak ada';
                break;
            case 2:
                $colLegUsaha = 'Surat Keterangan Usaha';
                break;
            case 3:
                $colLegUsaha = 'SIUP';
                break;
            default:
                $colLegUsaha = 'Unknown Value';
                break;
        }
        
        $colKemudahan = '';
        switch ($COLLATERAL->MARKETABILITY) {
            case 1:
                $colKemudahan = 'Cukup mudah dijual';
                break;
            case 2:
                $colKemudahan = 'Mudah dijual';
                break;
            case 3:
                $colKemudahan = 'Sangat mudah dijual';
                break;
            default:
                $colKemudahan = 'Unknown Value';
                break;
        }
        
        $phpWord->setValues([
            'col_agunan' => $colAgunan,
            'col_kepemilikan' => $colKepemilikan,
            'col_dok' => $colDok,
            'col_pengusaha' => $colPengusaha,
            'col_pengikatan' => $colPengikatan,
            'col_leg_usaha' => $colLegUsaha,
            'col_kemudahan' => $colKemudahan
        ]);
        
    
        $SYARIAH = TSyariah::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
    
        $syaSertifikasi = '';
        if ($SYARIAH->SY_SERTIFIKASI_HALAL == 1) {
            $syaSertifikasi = 'Memiliki sertifikat halal';
        } elseif ($SYARIAH->SY_SERTIFIKASI_HALAL == 2) {
            $syaSertifikasi = 'Tidak memiliki sertifikat halal';
        } else {
            $syaSertifikasi = 'Unknown Value';
        }
        
        $syaHutang = $SYARIAH->SY_JUMLAH_HUTANG ?? 0;
        
        $syaBarang = '';
        if ($SYARIAH->SY_JENIS_BARANG == 1) {
            $syaBarang = 'Barang atau jasa yang di produksi mengandung hal-hal yang bertentang dengan prinsip syariah';
        } elseif ($SYARIAH->SY_JENIS_BARANG == 2) {
            $syaBarang = 'Barang atau jasa yang di produksi tidak mengandung hal-hal yang bertentang dengan prinsip syariah';
        } else {
            $syaBarang = 'Unknown Value';
        }
        
        $syaHalal = $SYARIAH->SY_PRESENTASE_NON_SYARIAH ?? 0;
        
        $syaAkad = '';
        if ($SYARIAH->SY_AKAD_USAHA == 1) {
            $syaAkad = 'Transaksi Menggunakan Akad Yang Bertentangan Dengan Syariah';
        } elseif ($SYARIAH->SY_AKAD_USAHA == 2) {
            $syaAkad = 'Transaksi Menggunakan Akad Yang Tidak Bertentangan Dengan Syariah';
        } else {
            $syaAkad = 'Unknown Value';
        }
        
        $phpWord->setValues([
            'sya_sertifikasi' => $syaSertifikasi,
            'sya_hutang' => $syaHutang,
            'sya_barang' => $syaBarang,
            'sya_halal' => $syaHalal,
            'sya_akad' => $syaAkad
        ]);
        
    
        $agunan = TAgunan::where('ID_NASABAH', $laporan->ID_NASABAH)->get();
    
        $agunanTable = [];
        $sum_nilai = 0;
        $sum_safe = 0;
        
        
        foreach ($agunan as $key => $value) {
            $teks_Agunan = '';
            $jenisOptions = [
                1 => 'Tanah',
                2 => 'Tanah dan Bangunan',
                3 => 'Bangunan',
                4 => 'Mobil',
                5 => 'Motor R2',
                6 => 'Motor R3',
                7 => 'Minibus',
                8 => 'Bus',
                9 => 'Truck',
                10 => 'Dump Truck',
                11 => 'Mobil Pickup',
                12 => 'Deposito Berjangka',
                13 => 'Emas',
                14 => 'Lainya',
            ];
        
            $jenisBangunanOptions = [
                1 => 'Rumah tinggal',
                2 => 'Ruko',
                3 => 'Rukan',
                4 => 'Gudang',
                5 => 'Rusun',
            ];
        
            $buktiMilikOptions = [
                'A' => 'SHM',
                'B' => 'SHGB',
                'C' => 'SHP',
                'D' => 'Strata Title',
                'E' => 'Sertifikat Deposito',
                'F' => 'Akta Jual Beli',
                'G' => 'BPKB',
                'H' => 'Surat Ijo',
                'I' => 'Petok',
                'J' => 'Girik',
                'K' => 'Lainya',
            ];
            $jenisPengikatanOptions = [
                1 => 'Surat Kuasa Jual',
                2 => 'Gadai',
                3 => 'SKMHT',
                4 => 'HT',
                5 => 'Fiducia',
                6 => 'Hipotik',
                7 => 'Surat Blokir',
            ];
        
            $asuransiOptions = [
                1 => 'Asuransi Jiwa',
                2 => 'Asuransi Kebakaran',
                3 => 'TLO',
                4 => 'All Risk',
                5 => 'Asuransi Kredit',
                6 => 'Asuransi Jiwa dan PHK',
                7 => 'Tanpa Asuransi',
            ];
        
            $teks_Agunan .= ($key + 1) . '. ' . $jenisOptions[$value->JENIS];
    
            if (in_array($value->JENIS, [1, 2, 3])) {
                $teks_Agunan .= ' seluas ' . $value->LUAS_TANAH . ' m2';
            }
        
            if (!empty($value->LOKASI)) {
                $teks_Agunan .= ' yang terletak di ' . $value->LOKASI;
            }
        
            $teks_Agunan .= ' dengan bukti kepemilikan berupa ' . $buktiMilikOptions[$value->BUKTI_MILIK];
        
            if (!empty($value->NO_AGUNAN)) {
                $teks_Agunan .= ' No. ' . $value->NO_AGUNAN;
            }
        
            if (!empty($value->NAMA_PEMILIK)) {
                $teks_Agunan .= ' atas nama ' . $value->NAMA_PEMILIK;
            }
        
            if (!empty($value->JENIS_PENGIKATAN)) {
                $teks_Agunan .= ', yang akan diikat ' . $jenisPengikatanOptions[$value->JENIS_PENGIKATAN];
            }
        
            $teks_Agunan .= '.' . PHP_EOL;
            $teks_Agunan .= '   dengan nilai ' . number_format($value->NILAI, 0, ',', '.');
            $teks_Agunan .= ' dan safe margin ' . number_format($value->SAVE_MARGIN, 0, ',', '.');
        
            if (!empty($value->ASURANSI)) {
                $teks_Agunan .= ' Asuransi: ' . $asuransiOptions[$value->ASURANSI];
            }
        
            $teks_Agunan .= PHP_EOL;
        
            $agunanTable[$key] = [
                'agn_jenis' => $jenisOptions[$value->JENIS] ?? 'Unknown',
                'agn_bangunan' => $jenisBangunanOptions[$value->JENIS_BANGUNAN] ?? 'Unknown',
                'agn_bukti' => $buktiMilikOptions[$value->BUKTI_MILIK] ?? 'Unknown',
                'agn_no' => $value->NO_AGUNAN,
                'agn_pemilik' => $value->NAMA_PEMILIK,
                'agn_nilai' => number_format($value->NILAI, 0, ',', '.'),
                'agn_safe' => number_format($value->SAVE_MARGIN, 0, ',', '.'),
                'agn_ikat' => $jenisPengikatanOptions[$value->JENIS_PENGIKATAN] ?? 'Unknown',
                'agn_asuransi' => $asuransiOptions[$value->ASURANSI] ?? 'Unknown',
                'agn_teks' => $teks_Agunan,
            ];
        
            $sum_nilai += $value->NILAI;
            $sum_safe += $value->SAVE_MARGIN;
        }
        
    
        $phpWord->setValues([
            'tot_agn' => number_format($sum_nilai, 0, ',', '.'),
            'saf_mar' => $sum_safe / $laporan->LIMIT_KREDIT * 100
        ]);
    
        $phpWord->cloneRowAndSetValues('agn_jenis', $agunanTable);
    
        $phpWord->cloneRowAndSetValues('agn_teks', $agunanTable);
    
        $scoring = TScoring::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
        $score_akhir = ($scoring->CHARACTER * 20) + ($scoring->CAPACITY * 20) + ($scoring->COLLATERAL * 20) + ($scoring->CONDITION * 15) + ($scoring->CAPITAL * 20) + ($scoring->SYARIAH * 5) / 100;
    
    
        function get_score($scoring){
            if ($scoring < 28) {
                return "D";
            } else if ($scoring >= 28 && $scoring < 36) {
                return "C-";
            } else if ($scoring >= 36 && $scoring < 44) {
                return "C";
            } else if ($scoring >= 44 && $scoring < 52) {
                return "C+";
            } else if ($scoring >= 52 && $scoring < 60) {
                return "B-";
            } else if ($scoring >= 60 && $scoring < 68) {
                return "B";
            } else if ($scoring >= 68 && $scoring < 76) {
                return "B+";
            } else if ($scoring >= 76 && $scoring < 84) {
                return "A-";
            } else if ($scoring >= 84 && $scoring < 92) {
                return "A";
            } else {
                return "A+";
            }
        }
        $rating = get_score($score_akhir);
    
    
    
        $phpWord->setValues([
            'score_akhir' => $score_akhir,
            'rating' => $rating,
            'score_char' => $scoring->CHARACTER,
            'score_cap' => $scoring->CAPACITY,
            'score_con' => $scoring->CONDITION,
            'score_cpl' => $scoring->CAPITAL,
            'score_col' => $scoring->COLLATERAL,
            'score_sya' => $scoring->SYARIAH,
            'akhir_char' => $scoring->CHARACTER * 20,
            'akhir_cap' => $scoring->CAPACITY * 20,
            'akhir_con' => $scoring->CONDITION * 15,
            'akhir_cpl' => $scoring->CAPITAL * 20,
            'akhir_col' => $scoring->COLLATERAL * 20,
            'akhir_sya' => $scoring->SYARIAH * 5
    
        ]);
    
        $keuangan = TKeuangan::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
        $labarugi = TRugilaba::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
//      
        

        $kenaikanLabaRugi = $request->json_kenaikan_labarugi;
        $kenaikanNeraca = $request->json_kenaikan_neraca;

        //change to object
        $naikLaba = json_decode($kenaikanLabaRugi);
        $naikNeraca = json_decode($kenaikanNeraca);
//all value on naik laba get add 100 and divide by 100
        foreach ($naikLaba as $key => $value) {
            $naikLaba->$key = ($value + 100) / 100;
        }



        
        $phpWord->setValues([
            'lr_periode' => $labarugi->PERIODE,
            'lr1_periode' => $labarugi->PERIODE + 1,
            'lr2_periode' => $labarugi->PERIODE + 2,
            'lr1_omset' => number_format($labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1, 0, ',', '.'),
            'lr1_hpp' => number_format($labarugi->HPP * $naikLaba->kenaikan_hpp_1, 0, ',', '.'),
            'lr1_laba_kotor' => number_format($labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1, 0, ',', '.'),
            'lr1_biaya_total' => number_format($labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1, 0, ',', '.'),
            'lr1_laba_ops' => number_format($labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 - $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1, 0, ',', '.'),
            'lr1_angs' => number_format($labarugi->PENYUSUTAN * $naikLaba->kenaikan_angsuran_bank_lain_1, 0, ',', '.'),
            'lr1_laba_bersih' => number_format($labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 - $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1 - $labarugi->PENYUSUTAN * $naikLaba->kenaikan_angsuran_bank_lain_1, 0, ',', '.'),
            'lr1_pen_lain' => number_format($labarugi->PENDAPATAN_LAIN * $naikLaba->kenaikan_pendapatan_lain_1, 0, ',', '.'),
            'lr1_biaya_lain' => number_format($labarugi->BIAYA_LAIN * $naikLaba->kenaikan_biaya_lain_1, 0, ',', '.'),
            'lr1_ebit' => number_format($labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 - $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1 - $labarugi->PENYUSUTAN * $naikLaba->kenaikan_angsuran_bank_lain_1 + $labarugi->PENDAPATAN_LAIN * $naikLaba->kenaikan_pendapatan_lain_1 - $labarugi->BIAYA_LAIN * $naikLaba->kenaikan_biaya_lain_1, 0, ',', '.'),
            'lr1_margin' => number_format($labarugi->BIAYA_BUNGA, 0, ',', '.'),
            'lr1_pajak' => number_format($labarugi->BIAYA_PAJAK, 0, ',', '.'),
            'lr1_eait' => number_format($labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 - $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1 - $labarugi->PENYUSUTAN * $naikLaba->kenaikan_angsuran_bank_lain_1 + $labarugi->PENDAPATAN_LAIN * $naikLaba->kenaikan_pendapatan_lain_1 - $labarugi->BIAYA_LAIN * $naikLaba->kenaikan_biaya_lain_1 - $labarugi->BIAYA_BUNGA - $labarugi->BIAYA_PAJAK, 0, ',', '.'),
        ]);
        $phpWord->setValues([
            'lr2_omset' =>number_format( $labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 * $naikLaba->kenaikan_penjualan_bersih_2, 0, ',', '.'),
            'lr2_hpp' =>number_format( $labarugi->HPP * $naikLaba->kenaikan_hpp_1 * $naikLaba->kenaikan_hpp_2, 0, ',', '.'),
            'lr2_laba_kotor' =>number_format( $labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 * $naikLaba->kenaikan_penjualan_bersih_2 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 * $naikLaba->kenaikan_hpp_2, 0, ',', '.'),
            'lr2_biaya_total' =>number_format( $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1 * $naikLaba->kenaikan_biaya_ops_nonops_2, 0, ',', '.'),
            'lr2_laba_ops' =>number_format( $labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 * $naikLaba->kenaikan_penjualan_bersih_2 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 * $naikLaba->kenaikan_hpp_2 - $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1 * $naikLaba->kenaikan_biaya_ops_nonops_2, 0, ',', '.'),
            'lr2_angs' =>number_format( $labarugi->PENYUSUTAN * $naikLaba->kenaikan_angsuran_bank_lain_1 * $naikLaba->kenaikan_angsuran_bank_lain_2, 0, ',', '.'),
            'lr2_laba_bersih' =>number_format( $labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 * $naikLaba->kenaikan_penjualan_bersih_2 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 * $naikLaba->kenaikan_hpp_2 - $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1 * $naikLaba->kenaikan_biaya_ops_nonops_2 - $labarugi->PENYUSUTAN * $naikLaba->kenaikan_angsuran_bank_lain_1 * $naikLaba->kenaikan_angsuran_bank_lain_2, 0, ',', '.'),
            'lr2_pen_lain' =>number_format( $labarugi->PENDAPATAN_LAIN * $naikLaba->kenaikan_pendapatan_lain_1 * $naikLaba->kenaikan_pendapatan_lain_2, 0, ',', '.'),
            'lr2_biaya_lain' =>number_format( $labarugi->BIAYA_LAIN * $naikLaba->kenaikan_biaya_lain_1 * $naikLaba->kenaikan_biaya_lain_2, 0, ',', '.'),
            'lr2_ebit' =>number_format( $labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 * $naikLaba->kenaikan_penjualan_bersih_2 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 * $naikLaba->kenaikan_hpp_2 - $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1 * $naikLaba->kenaikan_biaya_ops_nonops_2 - $labarugi->PENYUSUTAN * $naikLaba->kenaikan_angsuran_bank_lain_1 * $naikLaba->kenaikan_angsuran_bank_lain_2 + $labarugi->PENDAPATAN_LAIN * $naikLaba->kenaikan_pendapatan_lain_1 * $naikLaba->kenaikan_pendapatan_lain_2 + $labarugi->BIAYA_LAIN * $naikLaba->kenaikan_biaya_lain_1 * $naikLaba->kenaikan_biaya_lain_2, 0, ',', '.'),
            'lr2_margin' =>number_format( $labarugi->BIAYA_BUNGA , 0, ',', '.'),
            'lr2_pajak' =>number_format( $labarugi->BIAYA_PAJAK , 0, ',', '.'),
            'lr2_eait' =>number_format( $labarugi->PENJUALAN_BERSIH * $naikLaba->kenaikan_penjualan_bersih_1 * $naikLaba->kenaikan_penjualan_bersih_2 - $labarugi->HPP * $naikLaba->kenaikan_hpp_1 * $naikLaba->kenaikan_hpp_2 - $labarugi->BIAYA_HIDUP * $naikLaba->kenaikan_biaya_ops_nonops_1 * $naikLaba->kenaikan_biaya_ops_nonops_2 - $labarugi->PENYUSUTAN * $naikLaba->kenaikan_angsuran_bank_lain_1 * $naikLaba->kenaikan_angsuran_bank_lain_2 + $labarugi->PENDAPATAN_LAIN * $naikLaba->kenaikan_pendapatan_lain_1 * $naikLaba->kenaikan_pendapatan_lain_2 - $labarugi->BIAYA_LAIN * $naikLaba->kenaikan_biaya_lain_1 * $naikLaba->kenaikan_biaya_lain_2 - $labarugi->BIAYA_BUNGA  - $labarugi->BIAYA_PAJAK, 0, ',', '.'),
        ]);
    
        $neraca = TNeraca::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
    
        
        $phpWord->setValues([
            'nrc_periode' => $neraca->PERIODE,
            'nrc_kas' =>number_format( $neraca->KAS, 0, ',', '.'),
            'nrc_piutang' =>number_format( $neraca->PIUTANG_DAGANG, 0, ',', '.'),
            'nrc_persediaan' =>number_format( $neraca->PERSEDIAAN, 0, ',', '.'),
            'nrc_tanah' =>number_format( $neraca->TANAH, 0, ',', '.'),
            'nrc_gedung' =>number_format( $neraca->GEDUNG, 0, ',', '.'),
            'nrc_peny_gedung' =>number_format( $neraca->PENYUSUTAN_GED, 0, ',', '.'),
            'nrc_peralatan' =>number_format( $neraca->PERALATAN, 0, ',', '.'),
            'nrc_peny_peralatan' =>number_format( $neraca->PENYUSUTAN_PERALATAN, 0, ',', '.'),
            'nrc_hut_pendek' =>number_format( $neraca->HUTANG_JANGKA_PENDEK, 0, ',', '.'),
            'nrc_hut_panjang' =>number_format( $neraca->HUTANG_JANGKA_PANJANG, 0, ',', '.'),
            'nrc_modal' =>number_format( $neraca->MODAL, 0, ',', '.'),
            'nrc_laba_tahan' =>number_format( $neraca->LABA_DITAHAN, 0, ',', '.'),
            'nrc_laba_jalan' =>number_format( $neraca->LABA_BERJALAN, 0, ',', '.'),
            'nrc_sub_aktt' =>number_format( $neraca->TANAH + $neraca->GEDUNG - $neraca->PENYUSUTAN_GED + $neraca->PERALATAN - $neraca->PENYUSUTAN_PERALATAN, 0, ',', '.'),
            'nrc_sub_aktl' =>number_format( $neraca->KAS + $neraca->PIUTANG_DAGANG + $neraca->PERSEDIAAN, 0, ',', '.'),
            'nrc_aktiva' =>number_format( $neraca->TANAH + $neraca->GEDUNG - $neraca->PENYUSUTAN_GED + $neraca->PERALATAN - $neraca->PENYUSUTAN_PERALATAN + $neraca->KAS + $neraca->PIUTANG_DAGANG + $neraca->PERSEDIAAN, 0, ',', '.'),
            'nrc_sub_kjb' =>number_format( $neraca->HUTANG_JANGKA_PENDEK + $neraca->HUTANG_JANGKA_PANJANG, 0, ',', '.'),
            'nrc_sub_modal' =>number_format( $neraca->MODAL + $neraca->LABA_DITAHAN + $neraca->LABA_BERJALAN, 0, ',', '.'),
            'nrc_pasiva' =>number_format( $neraca->HUTANG_JANGKA_PENDEK + $neraca->HUTANG_JANGKA_PANJANG + $neraca->MODAL + $neraca->LABA_DITAHAN + $neraca->LABA_BERJALAN, 0, ',', '.'),
        ]);
    
        foreach ($naikNeraca as $key => $value) {
            $naikNeraca->$key = ($value + 100) / 100;
        }
        // {
        //     "kenaikan_kas_1": "9",
        //     "kenaikan_kas_2": "10",
        //     "kenaikan_piutang_dagang_1": "5",
        //     "kenaikan_piutang_dagang_2": "5",
        //     "kenaikan_persediaan_1": "5",
        //     "kenaikan_persediaan_2": "5",
        //     "kenaikan_tanah_1": "5",
        //     "kenaikan_tanah_2": "5",
        //     "kenaikan_gedung_1": "0",
        //     "kenaikan_gedung_2": "0",
        //     "kenaikan_penyusutan_gedung_1": "5",
        //     "kenaikan_penyusutan_gedung_2": "5",
        //     "kenaikan_peralatan_1": "0",
        //     "kenaikan_peralatan_2": "0",
        //     "kenaikan_penyusutan_peralatan_1": "5",
        //     "kenaikan_penyusutan_peralatan_2": "5",
        //     "kenaikan_hutang_jangka_pendek_1": "-25",
        //     "kenaikan_hutang_jangka_pendek_2": "-25",
        //     "kenaikan_hutang_jangka_panjang_1": "-25",
        //     "kenaikan_hutang_jangka_panjang_2": "-25",
        //     "kenaikan_laba_ditahan_1": "10",
        //     "kenaikan_laba_ditahan_2": "0",
        //     "kenaikan_laba_berjalan_1": "0",
        //     "kenaikan_laba_berjalan_2": "0"
        // }
        // let nextsub_total_aktiva_lancarValue = nextkasValue + nextpiutang_dagangValue + nextpersediaanValue;
        // let nextsub_total_aktiva_tetapValue = nextgedungValue - nextpenyusutan_gedungValue + nextperalatanValue - nextpenyusutan_peralatanValue + nexttanahValue;
        // let nextaktivaValue = nextsub_total_aktiva_lancarValue + nextsub_total_aktiva_tetapValue;
        // let nextsub_total_kewajibanValue = nexthutang_jangka_pendekValue + nexthutang_jangka_panjangValue;
        // let nextmodalValue = nextaktivaValue - nextsub_total_kewajibanValue - nextlaba_ditahanValue - nextlaba_berjalanValue;

        $modal1 = $neraca->TANAH * $naikNeraca->kenaikan_tanah_1 + $neraca->GEDUNG * $naikNeraca->kenaikan_gedung_1 - $neraca->PENYUSUTAN_GED * $naikNeraca->kenaikan_penyusutan_gedung_1 + $neraca->PERALATAN * $naikNeraca->kenaikan_peralatan_1 - $neraca->PENYUSUTAN_PERALATAN * $naikNeraca->kenaikan_penyusutan_peralatan_1 + $neraca->KAS * $naikNeraca->kenaikan_kas_1 + $neraca->PIUTANG_DAGANG * $naikNeraca->kenaikan_piutang_dagang_1 + $neraca->PERSEDIAAN * $naikNeraca->kenaikan_persediaan_1 - $neraca->HUTANG_JANGKA_PENDEK * $naikNeraca->kenaikan_hutang_jangka_pendek_1 - $neraca->HUTANG_JANGKA_PANJANG * $naikNeraca->kenaikan_hutang_jangka_panjang_1 - $neraca->LABA_DITAHAN * $naikNeraca->kenaikan_laba_ditahan_1 - $neraca->LABA_BERJALAN * $naikNeraca->kenaikan_laba_berjalan_1;
        $modal12 =$neraca->TANAH * $naikNeraca->kenaikan_tanah_1 * $naikNeraca->kenaikan_tanah_2 + $neraca->GEDUNG * $naikNeraca->kenaikan_gedung_1 * $naikNeraca->kenaikan_gedung_2 - $neraca->PENYUSUTAN_GED * $naikNeraca->kenaikan_penyusutan_gedung_1 * $naikNeraca->kenaikan_penyusutan_gedung_2 + $neraca->PERALATAN * $naikNeraca->kenaikan_peralatan_1 * $naikNeraca->kenaikan_peralatan_2 - $neraca->PENYUSUTAN_PERALATAN * $naikNeraca->kenaikan_penyusutan_peralatan_1 * $naikNeraca->kenaikan_penyusutan_peralatan_2 + $neraca->KAS * $naikNeraca->kenaikan_kas_1 * $naikNeraca->kenaikan_kas_2 + $neraca->PIUTANG_DAGANG * $naikNeraca->kenaikan_piutang_dagang_1 * $naikNeraca->kenaikan_piutang_dagang_2 + $neraca->PERSEDIAAN * $naikNeraca->kenaikan_persediaan_1 * $naikNeraca->kenaikan_persediaan_2 - $neraca->HUTANG_JANGKA_PENDEK * $naikNeraca->kenaikan_hutang_jangka_pendek_1 * $naikNeraca->kenaikan_hutang_jangka_pendek_2 - $neraca->HUTANG_JANGKA_PANJANG * $naikNeraca->kenaikan_hutang_jangka_panjang_1 * $naikNeraca->kenaikan_hutang_jangka_panjang_2 - $neraca->LABA_DITAHAN * $naikNeraca->kenaikan_laba_ditahan_1 * $naikNeraca->kenaikan_laba_ditahan_2 - $neraca->LABA_BERJALAN * $naikNeraca->kenaikan_laba_berjalan_1 * $naikNeraca->kenaikan_laba_berjalan_2;
        $phpWord->setValues([
            'nrc1_periode' =>$neraca->PERIODE,
            'nrc1_kas' =>number_format(  $neraca->KAS * $naikNeraca->kenaikan_kas_1 , 0, ',', '.'),
            'nrc1_piutang' =>number_format(  $neraca->PIUTANG_DAGANG * $naikNeraca->kenaikan_piutang_dagang_1, 0, ',', '.'),
            'nrc1_persediaan' =>number_format(  $neraca->PERSEDIAAN * $naikNeraca->kenaikan_persediaan_1, 0, ',', '.'),
            'nrc1_tanah' =>number_format(  $neraca->TANAH * $naikNeraca->kenaikan_tanah_1, 0, ',', '.'),
            'nrc1_gedung' =>number_format(  $neraca->GEDUNG * $naikNeraca->kenaikan_gedung_1, 0, ',', '.'),
            'nrc1_peny_gedung' =>number_format(  $neraca->PENYUSUTAN_GED * $naikNeraca->kenaikan_penyusutan_gedung_1, 0, ',', '.'),
            'nrc1_peralatan' =>number_format(  $neraca->PERALATAN * $naikNeraca->kenaikan_peralatan_1, 0, ',', '.'),
            'nrc1_peny_peralatan' =>number_format(  $neraca->PENYUSUTAN_PERALATAN * $naikNeraca->kenaikan_penyusutan_peralatan_1, 0, ',', '.'),
            'nrc1_hut_pendek' =>number_format(  $neraca->HUTANG_JANGKA_PENDEK * $naikNeraca->kenaikan_hutang_jangka_pendek_1, 0, ',', '.'),
            'nrc1_hut_panjang' =>number_format(  $neraca->HUTANG_JANGKA_PANJANG * $naikNeraca->kenaikan_hutang_jangka_panjang_1, 0, ',', '.'),
            'nrc1_laba_tahan' =>number_format(  $neraca->LABA_DITAHAN * $naikNeraca->kenaikan_laba_ditahan_1 , 0, ',', '.'),
            'nrc1_laba_jalan' =>number_format(  $neraca->LABA_BERJALAN * $naikNeraca->kenaikan_laba_berjalan_1, 0, ',', '.'),
            'nrc1_sub_aktt' =>number_format(  $neraca->TANAH * $naikNeraca->kenaikan_tanah_1 + $neraca->GEDUNG * $naikNeraca->kenaikan_gedung_1 - $neraca->PENYUSUTAN_GED * $naikNeraca->kenaikan_penyusutan_gedung_1 + $neraca->PERALATAN * $naikNeraca->kenaikan_peralatan_1 - $neraca->PENYUSUTAN_PERALATAN * $naikNeraca->kenaikan_penyusutan_peralatan_1, 0, ',', '.'),
            'nrc1_sub_aktl' =>number_format(  $neraca->KAS * $naikNeraca->kenaikan_kas_1 + $neraca->PIUTANG_DAGANG * $naikNeraca->kenaikan_piutang_dagang_1 + $neraca->PERSEDIAAN * $naikNeraca->kenaikan_persediaan_1, 0, ',', '.'),
            'nrc1_aktiva' =>number_format(  $neraca->TANAH * $naikNeraca->kenaikan_tanah_1 + $neraca->GEDUNG * $naikNeraca->kenaikan_gedung_1 - $neraca->PENYUSUTAN_GED * $naikNeraca->kenaikan_penyusutan_gedung_1 + $neraca->PERALATAN * $naikNeraca->kenaikan_peralatan_1 - $neraca->PENYUSUTAN_PERALATAN * $naikNeraca->kenaikan_penyusutan_peralatan_1 + $neraca->KAS * $naikNeraca->kenaikan_kas_1 + $neraca->PIUTANG_DAGANG * $naikNeraca->kenaikan_piutang_dagang_1 + $neraca->PERSEDIAAN * $naikNeraca->kenaikan_persediaan_1, 0, ',', '.'),
            'nrc1_sub_kjb' =>number_format(  $neraca->HUTANG_JANGKA_PENDEK * $naikNeraca->kenaikan_hutang_jangka_pendek_1 + $neraca->HUTANG_JANGKA_PANJANG * $naikNeraca->kenaikan_hutang_jangka_panjang_1, 0, ',', '.'),
            'nrc1_sub_modal' =>number_format(  $modal1 + $neraca->LABA_DITAHAN * $naikNeraca->kenaikan_laba_ditahan_1 + $neraca->LABA_BERJALAN * $naikNeraca->kenaikan_laba_berjalan_1, 0, ',', '.'),
            'nrc1_pasiva' =>number_format(  $neraca->HUTANG_JANGKA_PENDEK  * $naikNeraca->kenaikan_hutang_jangka_pendek_1 + $neraca->HUTANG_JANGKA_PANJANG * $naikNeraca->kenaikan_hutang_jangka_panjang_1 + $modal1 + $neraca->LABA_DITAHAN * $naikNeraca->kenaikan_laba_ditahan_1 + $neraca->LABA_BERJALAN * $naikNeraca->kenaikan_laba_berjalan_1, 0, ',', '.'),
            'nrc1_modal' =>number_format( $modal1  , 0, ',', '.'),
        ]);
    
        $phpWord->setValues([
            'nrc2_periode' => $neraca->PERIODE,
            'nrc2_kas' =>number_format(  $neraca->KAS * $naikNeraca->kenaikan_kas_1 * $naikNeraca->kenaikan_kas_2,0, ',', '.'),
            'nrc2_piutang' =>number_format(  $neraca->PIUTANG_DAGANG * $naikNeraca->kenaikan_piutang_dagang_1 * $naikNeraca->kenaikan_piutang_dagang_2,0, ',', '.'),
            'nrc2_persediaan' =>number_format(  $neraca->PERSEDIAAN * $naikNeraca->kenaikan_persediaan_1 * $naikNeraca->kenaikan_persediaan_2,0, ',', '.'),
            'nrc2_tanah' =>number_format(  $neraca->TANAH * $naikNeraca->kenaikan_tanah_1 * $naikNeraca->kenaikan_tanah_2,0, ',', '.'),
            'nrc2_gedung' =>number_format(  $neraca->GEDUNG * $naikNeraca->kenaikan_gedung_1 * $naikNeraca->kenaikan_gedung_2,0, ',', '.'),
            'nrc2_peny_gedung' =>number_format(  $neraca->PENYUSUTAN_GED * $naikNeraca->kenaikan_penyusutan_gedung_1 * $naikNeraca->kenaikan_penyusutan_gedung_2,0, ',', '.'),
            'nrc2_peralatan' =>number_format(  $neraca->PERALATAN * $naikNeraca->kenaikan_peralatan_1 * $naikNeraca->kenaikan_peralatan_2,0, ',', '.'),
            'nrc2_peny_peralatan' =>number_format(  $neraca->PENYUSUTAN_PERALATAN * $naikNeraca->kenaikan_penyusutan_peralatan_1 * $naikNeraca->kenaikan_penyusutan_peralatan_2,0, ',', '.'),
            'nrc2_hut_pendek' =>number_format(  $neraca->HUTANG_JANGKA_PENDEK * $naikNeraca->kenaikan_hutang_jangka_pendek_1 * $naikNeraca->kenaikan_hutang_jangka_pendek_2,0, ',', '.'),
            'nrc2_hut_panjang' =>number_format(  $neraca->HUTANG_JANGKA_PANJANG * $naikNeraca->kenaikan_hutang_jangka_panjang_1 * $naikNeraca->kenaikan_hutang_jangka_panjang_2,0, ',', '.'),
            'nrc2_modal' =>number_format(  $modal12,0, ',', '.'),
            'nrc2_laba_tahan' =>number_format(  $neraca->LABA_DITAHAN * $naikNeraca->kenaikan_laba_ditahan_1 * $naikNeraca->kenaikan_laba_ditahan_2,0, ',', '.'),
            'nrc2_laba_jalan' =>number_format(  $neraca->LABA_BERJALAN * $naikNeraca->kenaikan_laba_berjalan_1 * $naikNeraca->kenaikan_laba_berjalan_2,0, ',', '.'),
            'nrc2_sub_aktt' =>number_format(  $neraca->TANAH * $naikNeraca->kenaikan_tanah_1 * $naikNeraca->kenaikan_tanah_2 + $neraca->GEDUNG * $naikNeraca->kenaikan_gedung_1 * $naikNeraca->kenaikan_gedung_2 - $neraca->PENYUSUTAN_GED * $naikNeraca->kenaikan_penyusutan_gedung_1 * $naikNeraca->kenaikan_penyusutan_gedung_2 + $neraca->PERALATAN * $naikNeraca->kenaikan_peralatan_1 * $naikNeraca->kenaikan_peralatan_2 - $neraca->PENYUSUTAN_PERALATAN * $naikNeraca->kenaikan_penyusutan_peralatan_1 * $naikNeraca->kenaikan_penyusutan_peralatan_2,0, ',', '.'),
            'nrc2_sub_aktl' =>number_format(  $neraca->KAS * $naikNeraca->kenaikan_kas_1 * $naikNeraca->kenaikan_kas_2 + $neraca->PIUTANG_DAGANG * $naikNeraca->kenaikan_piutang_dagang_1 * $naikNeraca->kenaikan_piutang_dagang_2 + $neraca->PERSEDIAAN * $naikNeraca->kenaikan_persediaan_1 * $naikNeraca->kenaikan_persediaan_2,0, ',', '.'),
            'nrc2_aktiva' =>number_format(  $neraca->TANAH * $naikNeraca->kenaikan_tanah_1 * $naikNeraca->kenaikan_tanah_2 + $neraca->GEDUNG * $naikNeraca->kenaikan_gedung_1 * $naikNeraca->kenaikan_gedung_2 - $neraca->PENYUSUTAN_GED * $naikNeraca->kenaikan_penyusutan_gedung_1 * $naikNeraca->kenaikan_penyusutan_gedung_2 + $neraca->PERALATAN * $naikNeraca->kenaikan_peralatan_1 * $naikNeraca->kenaikan_peralatan_2 - $neraca->PENYUSUTAN_PERALATAN * $naikNeraca->kenaikan_penyusutan_peralatan_1 * $naikNeraca->kenaikan_penyusutan_peralatan_2 + $neraca->KAS * $naikNeraca->kenaikan_kas_1 * $naikNeraca->kenaikan_kas_2 + $neraca->PIUTANG_DAGANG * $naikNeraca->kenaikan_piutang_dagang_1 * $naikNeraca->kenaikan_piutang_dagang_2 + $neraca->PERSEDIAAN * $naikNeraca->kenaikan_persediaan_1 * $naikNeraca->kenaikan_persediaan_2,0, ',', '.'),
            'nrc2_sub_kjb' =>number_format(  $neraca->HUTANG_JANGKA_PENDEK * $naikNeraca->kenaikan_hutang_jangka_pendek_1 * $naikNeraca->kenaikan_hutang_jangka_pendek_2 + $neraca->HUTANG_JANGKA_PANJANG * $naikNeraca->kenaikan_hutang_jangka_panjang_1 * $naikNeraca->kenaikan_hutang_jangka_panjang_2,0, ',', '.'),
            'nrc2_sub_modal' =>number_format(  $modal12 + $neraca->LABA_DITAHAN * $naikNeraca->kenaikan_laba_ditahan_1 * $naikNeraca->kenaikan_laba_ditahan_2 + $neraca->LABA_BERJALAN * $naikNeraca->kenaikan_laba_berjalan_1 * $naikNeraca->kenaikan_laba_berjalan_2,0, ',', '.'),
            'nrc2_pasiva' =>number_format(  $neraca->HUTANG_JANGKA_PENDEK * $naikNeraca->kenaikan_hutang_jangka_pendek_1 * $naikNeraca->kenaikan_hutang_jangka_pendek_2 + $neraca->HUTANG_JANGKA_PANJANG * $naikNeraca->kenaikan_hutang_jangka_panjang_1 * $naikNeraca->kenaikan_hutang_jangka_panjang_2 + $modal12 + $neraca->LABA_DITAHAN * $naikNeraca->kenaikan_laba_ditahan_1 * $naikNeraca->kenaikan_laba_ditahan_2 + $neraca->LABA_BERJALAN * $naikNeraca->kenaikan_laba_berjalan_1 * $naikNeraca->kenaikan_laba_berjalan_2,0, ',', '.'),
        ]);
    
        $angsuran = TAngsuran::where('ID_NASABAH', $laporan->ID_NASABAH)->get();
    
        $angsuranTable = [];
        $sum_pokok = 0;
        $sum_margin = 0;
        $sum_angs = 0;
        foreach ($angsuran as $key => $value) {
            $angsuranTable[$key] = [
                'angs_no' => $value->NO_ANGSURAN,
                'angs_pinjaman' => number_format($value->POKOK_PINJAMAN,0, ',', '.'),
                'angs_pokok' => number_format($value->ANGS_POKOK,0, ',', '.'),
                'angs_margin' => number_format($value->ANGS_BUNGA,0, ',', '.'),
                'angs_total' => number_format($value->ANGS_POKOK + $value->ANGS_BUNGA,0, ',', '.'),
            ];
            $sum_pokok += $value->POKOK_PINJAMAN;
            $sum_margin += $value->ANGS_BUNGA;
            $sum_angs += $value->POKOK_PINJAMAN + $value->ANGS_BUNGA;
        }
    
        $phpWord->setValues([
            'total_pokok' =>  number_format($angsuran->sum('POKOK_PINJAMAN'),0, ',', '.'),
            'total_margin' =>  number_format($angsuran->sum('ANGS_BUNGA'),0, ',', '.'),
            'total_angs' =>  number_format($angsuran->sum('ANGS_POKOK'),0, ',', '.'),
        ]);
    
    
        $phpWord->cloneRowAndSetValues('angs_no', $angsuranTable);
    
    
        $rekomendasi = TRekomendasi::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
        if ($rekomendasi->SIFAT_KREDIT == 1) {
            $rekomendasi->SIFAT_KREDIT = 'Murabahah';
        } elseif ($rekomendasi->SIFAT_KREDIT == 2) {
            $rekomendasi->SIFAT_KREDIT = 'Musyarakah';
        } elseif ($rekomendasi->SIFAT_KREDIT == 3) {
            $rekomendasi->SIFAT_KREDIT = 'Mudarabah';
        } elseif ($rekomendasi->SIFAT_KREDIT == 4) {
            $rekomendasi->SIFAT_KREDIT = 'Ijaroh';
        } elseif ($rekomendasi->SIFAT_KREDIT == 5) {
            $rekomendasi->SIFAT_KREDIT = 'Rahn';
        } else {
            $rekomendasi->SIFAT_KREDIT = 'Qord';
        }
    
        if ($rekomendasi->JENIS_PERMOHONAN == 1) {
            $rekomendasi->JENIS_PERMOHONAN = 'Baru';
        } elseif ($rekomendasi->JENIS_PERMOHONAN == 2) {
            $rekomendasi->JENIS_PERMOHONAN = 'Tambahan';
        } elseif ($rekomendasi->JENIS_PERMOHONAN == 3) {
            $rekomendasi->JENIS_PERMOHONAN = 'Tambahan dan Perpanjangan';
        }
    
        if ($rekomendasi->TUJUAN == 1) {
            $rekomendasi->TUJUAN = 'Modal Kerja';
        } elseif ($rekomendasi->TUJUAN == 2) {
            $rekomendasi->TUJUAN = 'Investasi';
        } else {
            $rekomendasi->TUJUAN = 'Konsumsi';
        }
        $phpWord->setValues([
            'rek_plafond' => $rekomendasi->LIMIT_KREDIT,
            'rek_sifat' => $rekomendasi->SIFAT_KREDIT,
            'rek_jenis' => $rekomendasi->JENIS_PERMOHONAN,
            'rek_tujuan' => $rekomendasi->TUJUAN,
            'rek_bunga' => $rekomendasi->BUNGA,
            'rek_bank' => $rekomendasi->BASIL_BANK,
            'rek_jangka' => $rekomendasi->JANGKA_WAKTU,
            'rek_mudharib' => $rekomendasi->BASIL_DEB,
            'rek_angsuran' => $rekomendasi->ANGSURAN
    
        ]);
    
        $bisid = TBisid::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
        //     SANDI BI
        // Sektor Ekonomi	: ${bi_ekonomi}	Golongan Penjamin	: ${bi_pen}
        // Penggunaan	: ${bi_guna}	Tujuan Penggunaan	: ${bi_tugu}
        // Golongan Debitur	: ${bi_deb}	Golongan Piutang	: ${bi_piu}
        // Sifat	: ${bi_sifat}	Sifat Plafond	: ${bi_siplon}
    
        // SANDI SID
        // Sektor Ekonomi	: ${sid_ekonomi}
        // Penggunaan	: ${sid_guna}
        // Pembiayaan	: ${sid_biaya}
    
        // protected $fillable = [
        //     'SEKTOR_EKONOMI_BI',
        //     'PENGGUNAAN_BI',
        //     'GOL_DEB_BI',
        //     'SIFAT_BI',
        //     'GOL_PENJAMIN_BI',
        //     'TUJUAN_BI',
        //     'GOL_PIUTANG_BI',
        //     'SIFAT_PLAFOND',
        //     'SEK_EKO_SID',
        //     'PENGGUNAAN_SID',
        //     'PEMBIAYAAN_SID'
        // ];
    
        $phpWord->setValues([
            'bi_ekonomi' => $bisid->SEKTOR_EKONOMI_BI,
            'bi_pen' => $bisid->GOL_PENJAMIN_BI,
            'bi_guna' => $bisid->PENGGUNAAN_BI,
            'bi_tugu' => $bisid->TUJUAN_BI,
            'bi_deb' => $bisid->GOL_DEB_BI,
            'bi_piu' => $bisid->GOL_PIUTANG_BI,
            'bi_sifat' => $bisid->SIFAT_BI,
            'bi_siplon' => $bisid->SIFAT_PLAFOND,
            'sid_ekonomi' => $bisid->SEK_EKO_SID,
            'sid_guna' => $bisid->PENGGUNAAN_SID,
            'sid_biaya' => $bisid->PEMBIAYAAN_SID
        ]);
    
    
    
        //dump($keuangan, $labarugi, $laporan, $neraca);
        $phpWord->setValues([
            'keu_pendapatan' => number_format( $keuangan->OMZET,0, ',', '.'),
            'keu_karyawan' => number_format( $keuangan->BIAYA_GAJI,0, ',', '.'),
            'keu_usaha' => number_format( $keuangan->BIAYA_BB + $keuangan->BIAYA_STOK + $keuangan->BIAYA_PRODUKSI + $keuangan->BIAYA_TRANSPORT,0, ',', '.'),
            'keu_usaha_lain' => number_format( $keuangan->BIAYA_USAHA_LAIN,0, ',', '.'),
            'keu_usaha_total' => number_format( $keuangan->BIAYA_GAJI + $keuangan->BIAYA_BB + $keuangan->BIAYA_STOK + $keuangan->BIAYA_PRODUKSI + $keuangan->BIAYA_TRANSPORT + $keuangan->BIAYA_USAHA_LAIN,0, ',', '.'),
            'keu_listirik'  => number_format( $keuangan->BIAYA_RT_LISTRIK,0, ',', '.'),
            'keu_transport' => number_format( $keuangan->BIAYA_RT_TRANSPORT,0, ',', '.'),
            'keu_sekolah' => number_format( $keuangan->BIAYA_RT_SEKOLAH,0, ',', '.'),
            'keu_makan' => number_format( $keuangan->BIAYA_RT_MAKAN,0, ',', '.'),
            'keu_pelihara' => number_format( $keuangan->BIAYA_RT_PEMELIHARAAN,0, ',', '.'),
            'keu_lainn' => number_format( $keuangan->BIAYA_RT_LAIN,0, ',', '.'),
            'keu_umum_total' => number_format( $keuangan->BIAYA_RT_LISTRIK + $keuangan->BIAYA_RT_TRANSPORT + $keuangan->BIAYA_RT_SEKOLAH + $keuangan->BIAYA_RT_MAKAN + $keuangan->BIAYA_RT_PEMELIHARAAN + $keuangan->BIAYA_RT_LAIN,0, ',', '.'),
            'keu_ang_umum' => number_format( $keuangan->ANGS_BANK_UMUM,0, ',', '.'),
            'keu_ang_bpr' => number_format( $keuangan->ANGS_BPR,0, ',', '.'),
            'keu_ang_leas' => number_format( $keuangan->ANGS_LEASING,0, ',', '.'),
            'keu_ang_kop' => number_format( $keuangan->ANGS_KOPERASI,0, ',', '.'),
            'keu_ang_lain' => number_format( $keuangan->ANGS_LAIN,0, ',', '.'),
            'keu_ang_total' => number_format( $keuangan->ANGS_BANK_UMUM + $keuangan->ANGS_BPR + $keuangan->ANGS_LEASING + $keuangan->ANGS_KOPERASI + $keuangan->ANGS_LAIN,0, ',', '.'),
            'keu_pen_lain' => number_format( $keuangan->PENDAPATAN_LAIN,0, ',', '.'),
            'keu_biaya_lain' => number_format( $keuangan->BIAYA_LAIN,0, ',', '.'),
            'keu_laba' => number_format( $keuangan->OMZET - ($keuangan->BIAYA_GAJI + $keuangan->BIAYA_BB + $keuangan->BIAYA_STOK + $keuangan->BIAYA_PRODUKSI + $keuangan->BIAYA_TRANSPORT + $keuangan->BIAYA_USAHA_LAIN),0, ',', '.'),
            'lr_omset' => number_format( $labarugi->PENJUALAN_BERSIH,0, ',', '.'),
            'lr_hpp' => number_format( $labarugi->HPP,0, ',', '.'),
            'lr_laba_kotor' => number_format( $labarugi->PENJUALAN_BERSIH - $labarugi->HPP,0, ',', '.'),
            'lr_biaya_total' => number_format( $labarugi->BIAYA_HIDUP,0, ',', '.'),
            'lr_laba_ops' => number_format( $labarugi->PENJUALAN_BERSIH - $labarugi->HPP - $labarugi->BIAYA_HIDUP,0, ',', '.'),
            'lr_angs' => number_format( $labarugi->PENYUSUTAN,0, ',', '.'),
            'lr_laba_bersih' => number_format( $labarugi->PENJUALAN_BERSIH - $labarugi->HPP - $labarugi->BIAYA_HIDUP - $labarugi->PENYUSUTAN,0, ',', '.'),
            'lr_pen_lain' => number_format( $labarugi->PENDAPATAN_LAIN,0, ',', '.'),
            'lr_biaya_lain' => number_format( $labarugi->BIAYA_LAIN,0, ',', '.'),
            'lr_ebit' => number_format( $labarugi->PENJUALAN_BERSIH - $labarugi->HPP - $labarugi->BIAYA_HIDUP - $labarugi->PENYUSUTAN + $labarugi->PENDAPATAN_LAIN - $labarugi->BIAYA_LAIN,0, ',', '.'),
            'lr_margin' => number_format( $labarugi->BIAYA_BUNGA,0, ',', '.'),
            'lr_pajak' => number_format( $labarugi->BIAYA_PAJAK,0, ',', '.'),
            'lr_eait' => number_format( $labarugi->PENJUALAN_BERSIH - $labarugi->HPP - $labarugi->BIAYA_HIDUP - $labarugi->PENYUSUTAN + $labarugi->PENDAPATAN_LAIN - $labarugi->BIAYA_LAIN - $labarugi->BIAYA_BUNGA - $labarugi->BIAYA_PAJAK,0, ',', '.'),
            'bunga' => $laporan->BUNGA,
            'angsuran' =>  number_format($laporan->LIMIT_KREDIT / $laporan->JANGKA_WAKTU,0, ',', '.'),
            'rpc' => -1 * $capital->RPC,
    
    
        ]);
    
        $resiko =TResiko::where('ID_NASABAH', $laporan->ID_NASABAH)->first();
    
        $phpWord->setValues([
            'resiko' => $resiko->RESIKO ?? 'Tidak Ada',
            'mitigasi_resiko' => $resiko->MITIGASI_RESIKO ?? 'Tidak Ada',
            'usulan' => $resiko->USULAN ?? 'Tidak Ada',
            'catat_usaha' => $resiko->BADAN_USAHA ?? 'Tidak Ada'
        ]);
    
        $phpWord->saveAs('dokumen/laporan/laporan_' . $laporan->ID_NASABAH . '.docx');
        //redirect back with download
        return redirect()->back()->with('download-url', 'dokumen/laporan/laporan_' . $laporan->ID_NASABAH . '.docx');
    }
}