@extends ('partial.main')

@section('container')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>


<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
    <li class="mr-2">
        @if($nasabah == null)
        <a href="/dashboard/detaildata" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perorangan</a>
        @else
        <a href="/dashboard/detaildata/{{ $nasabah->ID_NASABAH }}" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perorangan</a>
        @endif
    </li>
    <li class="mr-2">
        <a href="#" aria-current="page" class="inline-block p-4 text-green-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-green-500">Badan Usaha</a>
    </li>
</ul>

<form method="post" action="{{ route('tambah_nasabah') }}">
    @csrf
    <input name="id" value="{{ $nasabah->ID_NASABAH ?? 0 }}" type="hidden">
    <section id="start" class="md:flex md:flex-row mb-4 md:justify-between">
        <div class="my-4 space-y-4 relative w-full">
            <div>
                <label for="cif" class="block mb-2 text-xs font-medium text-gray-900">CIF Bank</label>
                <input value="{{ $nasabah->CIF ?? 0 }}" type="text" name="cif" id="cif" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light" placeholder="" required>
            </div>
                
            <div class="flex space-x-2">
                <div>
                    <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Permohonan</label>
                    <div class="relative max-w-[220px]" id="tglperm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input required name="tgl_permohonan" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                    </div>
                </div>
        
                <div>
                    <label for="tglan" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Analisa</label>
                    <div class="relative max-w-[220px]" id="tglan">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input required name="tgl_analisa" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 items-center w-full">
            <div>
                <label for="userid" class="block mb-2 text-xs font-medium text-gray-900">User ID</label>
                <input readonly name="user_id" value="{{ auth()->user()->username }}" type="text" id="userid" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light" placeholder="" required>
            </div>
        </div>

    </section>

    <section id="permohonan" class="my-4 space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            I. Data Permohonan
        </p>

        <div class="md:flex md:flex-row space-y-4 md:space-y-0 mb-4 md:justify-between">
            <div class="space-y-4 w-full">
                <div>
                    <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Plafond yang Dimohon</label>
                    <input name="limit_kredit" value="{{ $nasabah->LIMIT_KREDIT ?? 0 }}" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
                    
                <div class="flex justify-between max-w-md">
                    <div class="">
                        <label for="jawaktu" class="block mb-2 text-xs font-medium text-gray-900">Jangka Waktu yang Dimohon</label>
                        <div class="flex flex-row">
                            <input name="jangka_waktu" value="{{ $nasabah->JANGKA_WAKTU ?? 0}}" type="text" id="jawaktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                                Bulan
                            </p>
                        </div>
                    </div>
            
                    <div class="">
                        <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Margin</label>
                        <div class="flex flex-row">
                            <input name="margin" value="{{ $nasabah->BUNGA ?? 1.5 }}" type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                                % per Bulan
                            </p>
                        </div>
                    </div>
                </div>
                    
                <div class= "min-w-xl">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Akad Pembiayaan</label>
                    <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        @if($nasabah == null)
                        <option value="1">Murabahah</option>
                        <option value="2">Musyarakah</option>
                        <option value="3">Mudarabah</option>
                        <option value="4">Ijaroh</option>
                        <option value="5">Rahn</option>
                        <option value="6">Qord</option>
                        @else
                        <option @if($nasabah->SIFAT == 1) selected @endif value="1">Murabahah</option>
                        <option @if($nasabah->SIFAT == 2) selected @endif value="2">Musyarakah</option>
                        <option @if($nasabah->SIFAT == 3) selected @endif value="3">Mudarabah</option>
                        <option @if($nasabah->SIFAT == 4) selected @endif value="4">Ijaroh</option>
                        <option @if($nasabah->SIFAT == 5) selected @endif value="5">Rahn</option>
                        <option @if($nasabah->SIFAT == 6) selected @endif value="6">Qord</option>
                        @endif
                    </select>
                </div>
            </div>
            
            <div class="space-y-4 relative w-full">
                <div class= "">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Jenis Permohonan</label>
                    <select name="jenis_permohonan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        @if($nasabah == null)
                        <option value="1">Baru</option>
                        <option value="2">Tambahan</option>
                        <option value="3">Tambahan dan Perpanjangan</option>
                        @else
                        <option @if($nasabah->JENIS_PERMOHONAN == 1) selected @endif value="1">Baru</option>
                        <option @if($nasabah->JENIS_PERMOHONAN == 2) selected @endif value="2">Tambahan</option>
                        <option @if($nasabah->JENIS_PERMOHONAN == 3) selected @endif value="3">Tambahan dan Perpanjangan</option>
                        @endif
                    </select>
                </div>
            
                <div class= "">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
                    <select name="tujuan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        @if($nasabah == null)
                        <option value="1">Modal Kerja</option>
                        <option value="2">Investasi</option>
                        <option value="3">Konsultasi</option>
                        @else
                        <option @if($nasabah->TUJUAN == 1) selected @endif value="1">Modal Kerja</option>
                        <option @if($nasabah->TUJUAN == 2) selected @endif value="2">Investasi</option>
                        <option @if($nasabah->TUJUAN == 3) selected @endif value="3">Konsumsi</option>
                        @endif
                    </select>
                </div>
            
                <div>
                    <label for="ketpeng" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Keterangan Penggunaan</label>
                    <textarea name="keterangan_tujuan" value="{{ $nasabah->KET_TUJUAN ?? 0}}" id="ketpeng" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
                </div>
            </div>
        </div>

    </section>

    <section id="databadanusaha" class=" my-4 space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            II. Data Badan Usaha
        </p>
        <div class="md:flex md:flex-row mb-4 md:justify-between">
            <div class=" w-full my-4 space-y-4">
                <div>
                    <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Nama Badan Usaha</label>
                    <input name="nama_badan_usaha" value="{{ $nasabah->NAMA_BADAN_USAHA ?? ""}}" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
            
                <div class="flex justify-between max-w-md space-x-2 relative">
                    <div class= "">
                        <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sektor Usaha</label>
                        <select name="sektor_usaha" id="countries" class="min-w-[220px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            @if($nasabah == null)
                            <option value="1">Industri</option>
                            <option value="2">Jasa</option>
                            <option value="3">Kontraktor</option>
                            <option value="4">Pegawai</option>
                            <option value="5">Perdagangan</option>
                            <option value="6">Pertanian</option>
                            @else
                            <option @if($nasabah->SUB_USAHA == 1) selected @endif value="1">Industri</option>
                            <option @if($nasabah->SUB_USAHA == 2) selected @endif value="2">Jasa</option>
                            <option @if($nasabah->SUB_USAHA == 3) selected @endif value="3">Kontraktor</option>
                            <option @if($nasabah->SUB_USAHA == 4) selected @endif value="4">Pegawai</option>
                            <option @if($nasabah->SUB_USAHA == 5) selected @endif value="5">Perdagangan</option>
                            <option @if($nasabah->SUB_USAHA == 6) selected @endif value="6">Pertanian</option>
                            @endif
                        </select>
                    </div>
                
                    <div class= "">
                        <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Bidang Usaha</label>
                        <input name="bidang_usaha" value="{{ $nasabah->BIDANG_USAHA ?? "" }}" name="sub_usaha" type="text" id="nokan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                        </select>
                    </div>
                </div>
            
                <div>
                    <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Alamat Usaha</label>
                    <textarea name="alamat_usaha" value="{{ $nasabah->ALAMAT_USAHA ?? 0 }}" id="alamatktp" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
                </div>
            
                        
            </div>
        
            <div class=" w-full my-4 space-y-4">

                <div class="flex justify-between max-w-md space-x-2 relative">
                    <div class= "">
                        <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Status Tempat Usaha</label>
                        <select name="status_tempat_usaha" id="countries" class="min-w-[224px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            @if($nasabah == null)
                            <option value="1">Milik Sendiri</option>
                            <option value="2">Milik Keluarga / Ortu</option>
                            <option value="3">Kontrak</option>
                            <option value="4">Instansi / Lembaga</option>
                            <option value="5">Kredit</option>
                            @else
                            <option @if($nasabah->STATUS_TEMPAT_TINGGAL == 1) selected @endif value="1">Milik Sendiri</option>
                            <option @if($nasabah->STATUS_TEMPAT_TINGGAL == 2) selected @endif value="2">Milik Keluarga/Ortu</option>
                            <option @if($nasabah->STATUS_TEMPAT_TINGGAL == 3) selected @endif value="3">Instansi</option>
                            <option @if($nasabah->STATUS_TEMPAT_TINGGAL == 4) selected @endif value="4">Kontrak</option>
                            <option @if($nasabah->STATUS_TEMPAT_TINGGAL == 5) selected @endif value="5">Kredit</option>
                            @endif
                        </select>
                    </div>
                
                    <div class= "">
                        <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Bentuk Usaha</label>
                        <select name="bentuk_badan_usaha" id="countries" class=" min-w-[224px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            @if($nasabah == null)
                            <option value="1">Usaha Dagang (UD)</option>
                            <option value="2">Commanditaire Vennootschap (CV)</option>
                            <option value="3">Firma</option>
                            <option value="4">Yayasan</option>
                            <option value="5">Koperasi</option>
                            <option value="6">Perseroan Terbatas (PT)</option>
                            @else
                            <option @if($nasabah->BENTUK_BADAN_USAHA == 1) selected @endif value="1">Usaha Dagang (UD)</option>
                            <option @if($nasabah->BENTUK_BADAN_USAHA == 2) selected @endif value="2">Commanditaire Vennootschap (CV)</option>
                            <option @if($nasabah->BENTUK_BADAN_USAHA == 3) selected @endif value="3">Firma</option>
                            <option @if($nasabah->BENTUK_BADAN_USAHA == 4) selected @endif value="4">Yayasan</option>
                            <option @if($nasabah->BENTUK_BADAN_USAHA == 5) selected @endif value="5">Koperasi</option>
                            <option @if($nasabah->BENTUK_BADAN_USAHA == 6) selected @endif value="6">Perseroan Terbatas (PT)</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div>
                    <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Nomor Telepon Kantor</label>
                    <input name="no_kantor" type="text" value="{{ $nasabah->NO_KANTOR ?? 0}}" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 ">    
                </div>
            
                <div class="flex justify-between max-w-md">
                    <div>
                        <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Mulai Usaha</label>
                        <div class="relative max-w-[150px]" id="tglperm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input required name="tgl_mulai_usaha" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal" required>
                        </div>
                    </div>
                    <div>
                        <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Jadi Nasabah Sejak</label>
                        <div class="relative max-w-[150px]" id="tglperm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input name="menjadi_nasabah_sejak" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal" required>
                        </div>
                    </div>
                
                    <div class="">
                        <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Karyawan</label>
                        <div class="flex flex-row">
                            <input name="jumlah_karyawan" value="{{ $nasabah->JUMLAH_KARY ?? 0 }}" type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                                Orang
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="iii" class="my-4 space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            III. Data Keyperson Perusahaan
        </p>

        <div>
            <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Nama Direksi/Keyperson</label>
            <input value="{{ $nasabah->NAMA ?? "" }}"name="nama_debitur" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
        </div>

       

        <div class="flex justify-between space-x-2 max-w-md">
            <div class= " max-w-md">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Jabatan</label>
                <select name="jabatan_keyperson"id="countries" class="min-w-[220px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Direktur Utama</option>
                    <option value="2">Direktur</option>
                    <option value="3">Komisaris Utama</option>
                    <option value="4">Komisaris</option>
                    <option value="5">Permegang Saham</option>
                    <option value="6">Persero Aktif</option>
                    <option value="7">Persero Komanditer</option>
                    <option value="8">Ketua Umum</option>
                </select>
            </div>
        
            <div>
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Tingkat Pendidikan</label>
                <select name="tingkat_pendidikan" id="countries" class="min-w-[220px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($nasabah == null)
                    <option value="1">SD</option>
                    <option value="2">SMP</option>
                    <option value="3">SMA</option>
                    <option value="4">Diploma</option>
                    <option value="5">S1</option>
                    <option value="6">S2</option>
                    <option value="7">S3</option>
                    @else
                    <option @if($nasabah->TINGKAT_PENDIDIKAN == 1) selected @endif value="1">Sekolah Dasar</option>
                    <option @if($nasabah->TINGKAT_PENDIDIKAN == 2) selected @endif value="2">SMP</option>
                    <option @if($nasabah->TINGKAT_PENDIDIKAN == 3) selected @endif value="3">SMA</option>
                    <option @if($nasabah->TINGKAT_PENDIDIKAN == 4) selected @endif value="4">Diploma</option>
                    <option @if($nasabah->TINGKAT_PENDIDIKAN == 5) selected @endif value="5">S1</option>
                    <option @if($nasabah->TINGKAT_PENDIDIKAN == 6) selected @endif value="6">S2</option>
                    <option @if($nasabah->TINGKAT_PENDIDIKAN == 7) selected @endif value="7">S3</option>
                    @endif
                </select>
            </div>
        </div>

        <div>
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Status Pernikahan</label>
            <select name="status_perkawinan" id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                @if($nasabah == null)
                <option value="1">Belum Menikah</option>
                <option value="2">Menikah</option>
                <option value="3">Duda</option>
                <option value="4">Janda</option>
                @else
                <option @if($nasabah->STATUS_PERKAWINAN == 1) selected @endif value="1">Belum Menikah</option>
                <option @if($nasabah->STATUS_PERKAWINAN == 2) selected @endif value="2">Menikah</option>
                <option @if($nasabah->STATUS_PERKAWINAN == 3) selected @endif value="3">Duda</option>
                <option @if($nasabah->STATUS_PERKAWINAN == 4) selected @endif value="4">Janda</option>
                @endif
            </select>
        </div>

        <div class=" max-w-md flex justify-between">
            <div>
                <label for="tujuanpeng" class="block mb-2 text-xs font-medium text-gray-900">Tempat Lahir</label>
                <input value="{{ $nasabah->TEMPAT_LAHIR ?? '' }}"name="tempat_lahir" type="text" id="tujuanpeng" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Lahir</label>
                <div class="relative max-w-[224px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tgl_lahir" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal" required>
                </div> 
            </div>
        </div>
        <div>
            <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Nomor KTP</label>
            <input value="{{ $nasabah->NO_KTP ?? "" }}"name="no_ktp" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
        </div>
        <div>
            <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Alamat Sesuai KTP</label>
            <textarea name="alamat_ktp" id="alamatktp" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
        </div> 

        <div class="flex justify-between max-w-md space-x-2">
            <div>
                <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon / HP</label>
                <input value="{{ $nasabah->NO_TELP ?? 0 }}"name="nomor_telepon" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
            </div>
            <div>
                <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon Kantor</label>
                <input value="{{ $nasabah->NO_KANTOR ?? 0 }}" name="nomor_telepon_kantor" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 ">
            </div>
        </div>

    </section>

    <section class="max-w-screen-xl h-fit">
        <p class="block py-4 text-base font-semibold text-gray-900">
            IV. Legalitas Pendirian Badan Usaha
        </p>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                        <table class=" divide-y divide-gray-20 w-full table-fixed overflow-auto whitespace-normal">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Dokumen Legalitas Pendirian Badan Usaha
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 w-[25%] text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Nomor
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Tanggal
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Isi Dokumen
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Kondisi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-20">
                                <tr>
                                    <td style="text-align:center" class="px-4 py-4 font-medium whitespace-nowrap">
                                        Akta Pendirian    
                                    </td>
                                    <td class="px-12 py-4 font-medium whitespace-nowrap">
                                        <input value="{{ $nasabah->NO_PENDIRIAN ?? 0 }}" name="no_pendirian" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div>
                                            <div class="relative max-w-[220px]" id="tglperm">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                    </svg>
                                                </div>
                                                <input name="tgl_pendirian"datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <input value="{{ $nasabah->ISI_PENDIRIAN ?? 0 }}"name="isi_pendirian"type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </td>

                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <select name="kondisi_pendirian" id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                            @if($nasabah == null)
                                            <option value="1">Sempurna</option>
                                            <option value="2">Tidak Sempurna</option>
                                            @else
                                            <option @if($nasabah->KONDISI_PENDIRIAN == 1) selected @endif value="1">Sempurna</option>
                                            <option @if($nasabah->KONDISI_PENDIRIAN == 2) selected @endif value="2">Tidak Sempurna</option>
                                            @endif
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center" class="px-4 py-4 font-medium whitespace-nowrap">
                                        Akta Perubahan Anggaran Dasar 
                                    </td>
                                    <td class="px-12 py-4 font-medium whitespace-nowrap">
                                        <input value="{{ $nasabah->ANGGARAN ?? 0 }}"name="no_anggaran" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div>
                                            <div class="relative max-w-[220px]" id="tglperm">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                    </svg>
                                                </div>
                                                <input name="tgl_anggaran" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <input  value="{{ $nasabah->ISI_ANGGARAN ?? 0 }}"name="isi_anggaran" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </td>

                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <select name="kondisi_anggaran" id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                            @if($nasabah == null)
                                            <option value="1">Sempurna</option>
                                            <option value="2">Tidak Sempurna</option>
                                            @else
                                            <option @if($nasabah->KONDISI_ANGGARAN == 1) selected @endif value="1">Sempurna</option>
                                            <option @if($nasabah->KONDISI_ANGGARAN == 2) selected @endif value="2">Tidak Sempurna</option>
                                            @endif
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center" class="px-4 py-4 font-medium whitespace-nowrap">
                                        Akta Susunan Pengurus Terakhir    
                                    </td>
                                    <td class="px-12 py-4 font-medium whitespace-nowrap">
                                        <input value="{{ $nasabah->PENGURUS ?? 0 }}" name="no_pengurus" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div>
                                            <div class="relative max-w-[220px]" id="tglperm">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                    </svg>
                                                </div>
                                                <input name="tgl_pengurus" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <input value="{{ $nasabah->ISI_PENGURUS ?? 0 }}" name="isi_pengurus"type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </td>

                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <select name="kondisi_pengurus" id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                            @if($nasabah == null)
                                            <option value="1">Sempurna</option>
                                            <option value="2">Tidak Sempurna</option>
                                            @else
                                            <option @if($nasabah->KONDISI_PENGURUS == 1) selected @endif value="1">Sempurna</option>
                                            <option @if($nasabah->KONDISI_PENGURUS == 2) selected @endif value="2">Tidak Sempurna</option>
                                            @endif
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <button type="submit" style="float:right" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>

                </div>
            </div>
        </div>

    </section>
</form>
    <section>
        <p class="block py-4 text-base font-semibold text-gray-900">
            V. Data Pengurus
        </p>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                        <table class=" divide-y divide-gray-20 w-full table-auto overflow-auto whitespace-normal">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class=" w-[8%] px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Nomor
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 w-[20%] text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Nama
                                    </th>

                                    <th scope="col" class="px-4 py-3.5  text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Jabatan
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 w-[15%] text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Tanggal Lahir
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 w-[15%] text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Nomor Identitas
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 w-[15%] text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Nomor Telepon
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 w-[15%] text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Saham
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-20">
                                @if($id != null)
                                    @foreach ($pengurus as $index => $item)
                                    <tr onclick="
                                    document.getElementById('openPopup{{ $item->ID }}').click()" class="hover:bg-gray-100 cursor-pointer">
                                    <button type="button" class="hidden" data-modal-target="defaultModal{{ $item->ID }}" data-modal-toggle="defaultModal{{ $item->ID }}" id="openPopup{{ $item->ID }}" ></button>
                                        <td class="px-4 py-4 text-center font-medium w-[5%]">
                                            {{ $index + 1 }}
                                        </td>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                            <div class= "flex justify-center max-w-md">
                                                {{ $item->NAMA }}
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 w-[20%] font-medium whitespace-nowrap">
                                            <div class= "flex justify-center max-w-md">
                                                {{ $item->JABATAN }}
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class= "flex justify-center max-w-md">
                                                {{ date('d-m-Y', strtotime($item->TGL_LAHIR)) }}
                                            </div>
                                        </td>
    
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class= "flex justify-center max-w-md">
                                                {{ $item->NO_KTP }}
                                            </div>
                                        </td>
    
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class= "flex justify-center max-w-md">
                                                {{ $item->NO_TELP }}
                                            </div>
                                        </td>
                                        
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class= "flex justify-center max-w-md">
                                                {{ $item->SAHAM }}
                                            </div>
                                        </td> 
                                    </tr>
                                        
                                    @endforeach
                                    @else
                                    <tr>
                                        <td style="text-align:center" class="px-4 py-4 font-medium whitespace-nowrap">
                                            Mohon Simpan Data Terlebih Dahulu
                                        </td>
                                    </tr>
                                @endif


                            </tbody>
                        </table>
                    </div>
                    <br>
                    <button type="submit"  data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" style="float:right" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah Pengurus</button>

                </div>
            </div>
        </div>
    </section>
    <br>
    @if($id != null)
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-sm md:max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b border-gray-200 rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-bold text-gray-700 dark:text-white">
                        Tambah Riwayat
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('tambah_pengurus') }}" method="POST">
                    @csrf
                    <div class="p-4 space-y-4">
                        <input type="hidden" name="id" value="{{ $nasabah->ID_NASABAH }}">
                        <div class="grid grid-cols-2 space-x-4">
                            <div>
                                <label for="bank" class="block mb-2 text-xs font-medium text-gray-900">Nama</label>
                                <input name="nama" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
        
                            <div class= "">
                                <label for="jenis_kredit" class="block mb-2 text-xs font-medium text-gray-900">Jabatan</label>
                                <input name="jabatan" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
                        </div>
    
                        <div class="grid grid-cols-2 space-x-4">
                            <div>
                                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor Identitas</label>
                                <input name="no_ktp" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
        
                            <div>
                                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon</label>
                                <input name="no_telp" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 space-x-4">
                            <div>
                                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Saham</label>
                                <input name="saham" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
        
                            <div class="">
                                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900 ">Tanggal Lahir</label>
                                <div class="relative  id="tglperm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input name="tgl_lahir" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal" required>
                                </div>
                            </div>
                        </div>
    
                        
                    </div>
                                             
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
                        <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Keluar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @if($pengurus->count() > 0)
    @foreach ( $pengurus as $fas)
    <div id="defaultModal{{ $fas->ID }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-sm md:max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b border-gray-200 rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-bold text-gray-700 dark:text-white">
                        Edit Pengurus
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal{{ $fas->ID }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action=" /dashboard/detaildataBU/pengurus/{{ $fas->ID }}/edit" method="POST">
                    @csrf
                    <div class="p-4 space-y-4">
                        <input type="hidden" name="id" value="{{ $nasabah->ID_NASABAH }}">
                        <div class="grid grid-cols-2 space-x-4">
                            <div>
                                <label for="bank" class="block mb-2 text-xs font-medium text-gray-900">Nama </label>
                                <input name="nama" value="{{ $fas->NAMA }}" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
        
                            <div class= "">
                                <label for="jenis_kredit" class="block mb-2 text-xs font-medium text-gray-900">Jabatan</label>
                                <input name="jabatan" value="{{ $fas->JABATAN }}" type="text" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            </div>
                        </div>
    
                        <div class="grid grid-cols-2 space-x-4">
                            <div>
                                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor Identitas</label>
                                <input name="no_ktp" value="{{ $fas->NO_KTP }}" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
        
                            <div>
                                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon</label>
                                <input name="no_telp" value="{{ $fas->NO_TELP }}" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 space-x-4">
                            <div>
                                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Saham</label>
                                <input name="saham" value="{{ $fas->SAHAM }}" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                            </div>
        
                            <div class="">
                                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900 ">Tanggal Lahir</label>
                                <div class="relative  id="tglperm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input name="tgl_lahir" value="{{ $fas->TGL_LAHIR }}" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal" required>
                                </div>
                            </div>
                        </div>
                                             
                    <!-- Modal footer -->
                    <div class="flex justify-between  p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <div class="flex items-center space-x-2">
                            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
                            <button data-modal-hide="defaultModal{{ $fas->ID }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Keluar</button>
                        </div>
                        <div class="">
                            <button type="button" class="text-white bg-gradient-to-b from-red-400 to-red-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" onclick="document.getElementById('delete_riwayat_{{ $fas->ID }}').submit()">Hapus</button>
                        </div>
                    </div>
                    
                </form>
                <form action="/dashboard/detaildataBU/pengurus/{{ $fas->ID }}/delete" method="POST" id="delete_riwayat_{{ $fas->ID }}">
                    @csrf
                    </form>
            </div>
        </div>
    </div>    
    @endforeach
    @endif
    @endif


    <script >
        function formatNumber(amount) {
  if (amount == NaN || amount == ''){
    return 0;
  }
  // Convert the number to a string and remove points
  const formattedAmount = amount.toString().replace(/\./g, '');

  // Convert the string back to a number
  const result = parseFloat(formattedAmount);

  return result;
}

function fixedFormatNumber(amount) {
  // Convert the number to a string
  const formattedAmount = amount.toString();

  // Use a regular expression to add a dot after every three digits
  const result = formattedAmount.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

  return result;
}

let input = [
  'limit'
]
function formatInput(id) {
  let inputElement = document.getElementById(id);
  
  // Save the current caret position
  let caretPosition = inputElement.selectionStart;

  let val = fixedFormatNumber(formatNumber(inputElement.value));
  
  // Update the input value
  inputElement.value = val;

  // Restore the caret position
  inputElement.setSelectionRange(caretPosition, caretPosition);
}
input.forEach(element => {
  formatInput(element);
  document.getElementById(element).addEventListener('keyup', function(){
    formatInput(element);
  })
  document.getElementById(element).addEventListener('blur', function(){
    formatInput(element);
  })
});
    </script>
@endsection
