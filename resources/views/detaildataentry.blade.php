@extends ('partial.main')

@section('container')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>


<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
    <li class="mr-2">
        <a href="#" aria-current="page" class=" active inline-block p-4 text-green-600 bg-gray-100 rounded-t-lg dark:bg-gray-800 dark:text-green-500">Perorangan</a>
    </li>
    <li class="mr-2">
        <a href="/dashboard/detaildataBU" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Badan Usaha</a>
    </li>
</ul>

<form method="POST" action="{{ Route('tambah_nasabah') }}">
    @csrf
    <section id="start" class="md:flex md:flex-row mb-4 md:justify-between">
        <div class="my-4 space-y-4 relative w-full">
            <div>
                <label for="cif" class="block mb-2 text-xs font-medium text-gray-900">CIF Bank</label>
                <input type="text" name="cif" id="cif" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light" placeholder="" required>
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
                        <input name="tgl_permohonan" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
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
                        <input name="tgl_analisa" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 items-center w-full">
            <div>
                <label for="userid" name="user_id"class="block mb-2 text-xs font-medium text-gray-900">User ID</label>
                <input name="id_user" type="text" id="userid" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light" disabled placeholder="" required> 
            </div>
        </div>

    </section>

    <section id="permohonan" class="my-4 space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            I. Data Permohonan Pembiayaan
        </p>

        <div class="md:flex md:flex-row space-y-4 md:space-y-0 mb-4 md:justify-between">
            <div class="space-y-4 w-full">
                <div>
                    <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Limit Kredit yang Dimohon</label>
                    <input name="limit_kredit" type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
                    
                <div class="flex justify-between max-w-md">
                    <div class="">
                        <label for="jawaktu" class="block mb-2 text-xs font-medium text-gray-900">Jangka Waktu yang Dimohon</label>
                        <div class="flex flex-row">
                            <input name="jangka_waktu"  type="text" id="jawaktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                                Bulan
                            </p>
                        </div>
                    </div>
            
                    <div class="">
                        <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Margin</label>
                        <div class="flex flex-row">
                            <input disabled value=1  type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                                % per Bulan
                            </p>
                        </div>
                    </div>
                </div>
                    
                <div class= "min-w-xl">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sifat Pembiayaan</label>
                    <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        <option value="US">Murabahah</option>
                        <option value="CA">Musyarakah</option>
                        <option value="FR">Mudarabah</option>
                        <option value="FR">Ijaroh</option>
                        <option value="FR">Rahn</option>
                        <option value="FR">Qord</option>
                    </select>
                </div>
            </div>
            
            <div class="space-y-4 relative w-full">
                <div class= "">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Jenis Permohonan</label>
                    <select name="jenis_permohonan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        <option value="US">Baru</option>
                        <option value="CA">Tambahan</option>
                        <option value="FR">Tambahan dan Perpanjangan</option>
                    </select>
                </div>

                <div class= "">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
                    <select name="tujuan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        <option value="US">Modal Kerja</option>
                        <option value="CA">Investasi</option>
                        <option value="FR">Konsultasi</option>
                    </select>
                </div>
            
                <div>
                    <label for="ketpeng" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Keterangan Penggunaan</label>
                    <textarea name="keterangan_tujuan" id="ketpeng" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
                </div>
            </div>
        </div>
    </section>
    
    <section id="datadiri" class="my-4 space-y-4">
        <p class=" block py-4 text-base font-semibold text-gray-900">
            II. Data Diri Nasabah
        </p>

        <div class="md:flex md:flex-row mb-4 md:justify-between">
            <div class="my-4 space-y-4 w-full">
                <div>
                    <label for="jenisperm" class="block mb-2 text-xs font-medium text-gray-900">Nama Debitur</label>
                    <input name="nama_debitur" type="text" id="jenisperm" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
            
                <div>
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Status Pernikahan</label>
                    <select name="status_perkawinan" id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        <option value="US">Belum Menikah</option>
                        <option value="CA">Menikah</option>
                        <option value="FR">Janda/Duda</option>
                    </select>
                </div>
            
                <div class="flex flex-row space-x-2 max-w-md">
                    <div>
                        <label for="tujuanpeng" class="block mb-2 text-xs font-medium text-gray-900">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" id="tujuanpeng" class=" max-w-sm shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    </div>
                    <div>
                        <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Lahir</label>
                        <div class="relative max-w-[150px]" id="tglperm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input name="tgl_lahir" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                        </div> 
                    </div>
                    <div class="my-auto space-y-2">
                        <div class="flex my-auto items-center">
                            <input name="gender" value ="L" id="default-radio-2" type="radio" name="default-radio" class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ml-2 text-xs font-medium text-gray-500 dark:text-gray-300">Laki-Laki</label>
                        </div>
                        <div class="flex my-auto items-center">
                            <input name="gender" value="P" id="default-radio-2" type="radio"  name="default-radio" class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ml-2 text-xs font-medium text-gray-500 dark:text-gray-300">Perempuan</label>
                        </div>
                    </div>
            
                </div>
            
                <div class="flex space-x-2 max-w-md">
                    <div>
                        <label for="ktp" class="block mb-2 text-xs font-medium text-gray-900">Nomor KTP</label>
                        <input name="no_ktp" type="text" id="ktp" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    </div>
                    <div>
                        <label for="tglktp" class="block mb-2 text-xs font-medium text-gray-900">Masa Berlaku</label>
                        <div class="flex space-x-2">
                            <div class="flex">
                                <input name="tgl_berlaku_ktp" id="default-radio-2" type="radio" value="" name="default-radio" class=" my-auto mr-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <div class="relative max-w-[180px] " id="tglktp">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input  datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                                </div>
                            </div>        
                            <div class="flex my-auto items-center">
                                <input name="seumur_hidup" id="default-radio-2" type="radio" name="default-radio" class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-xs font-medium text-gray-500 dark:text-gray-300">Seumur Hidup</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Alamat Sesuai KTP</label>
                    <textarea name="alamat_ktp" id="alamatktp" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
                </div>        
            </div>
        
            <div class="my-4 space-y-4 w-full">
                <div class="flex space-x-2 w-full justify-between max-w-md">
                    <div>
                        <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon Pribadi</label>
                        <input name="nomor_telepon" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    </div>
            
                    <div>
                        <label for="nokan" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon Kantor</label>
                        <input name="nomor_telepon_kantor" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    </div>
                </div>
            
                <div class="flex space-x-2 justify-between max-w-md">
                    <div class= "min-w-xl">
                        <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Status Tempat Tinggal</label>
                        <select name="status_tempat_tinggal" id="countries" class=" min-w-[300px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        <option value="US">Rumah Dinas</option>
                        <option value="CA">Milik Sendiri</option>
                        <option value="FR">Kontrak</option>
                        </select>
                    </div>
                    <div class="">
                        <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Lama Tinggal</label>
                        <div class="flex flex-row">
                            <input name="lama_tinggal" type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                                Tahun
                            </p>
                        </div>
                    </div>
                </div>
            
                <div class="flex space-x-2 justify-between max-w-md">
                    <div class= "min-w-xl">
                        <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Tingkat Pendidikan</label>
                        <select name="tingkat_pendidikan" id="countries" class=" min-w-[300px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        <option value="US">S1 / Sederajat</option>
                        <option value="CA">SMA / Sederajat</option>
                        <option value="FR">SMP / Sederajat</option>
                        </select>
                    </div>
                    <div class="">
                        <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Tanggungan</label>
                        <div class="flex flex-row">
                            <input name="jumlah_tanggungan" type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                                Orang
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="3and4" class="md:flex md:flex-row mb-4 md:justify-between">
        <div class="space-y-4 w-full">
            <section id="suami_istri" class="my-4 space-y-4">
                <p class=" block py-4 text-base font-semibold text-gray-900">
                    III. Data Diri Suami / Istri
                </p>
                <div>
                    <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Nama Suami / Istri</label>
                    <input name="nama_pasangan" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
            
                <div class="flex justify-between max-w-md">
                    <div>
                        <label for="tujuanpeng" class="block mb-2 text-xs font-medium text-gray-900">Tempat Lahir</label>
                        <input name="tempat_lahir_pasangan" type="text" id="tujuanpeng" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    </div>
                    <div>
                        <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Lahir</label>
                        <div class="relative max-w-[220px]" id="tglperm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input name="tanggal_lahir_pasangan" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                        </div>
                    </div>
                    
                </div>
            
                <div>
                    <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Alamat Sesuai KTP</label>
                    <textarea name="alamat_ktp_pasangan" id="alamatktp" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
                </div>
            
                <div class=" flex max-w-md justify-between">
                    <div>
                        <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Profesi Suami / Istri</label>
                        <input name="profesi_pasangan" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    </div>
            
                    <div>
                        <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon / HP</label>
                        <input name="nomor_telepon_pasangan" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    </div>
                </div>
            </section>
        </div>
        <div class="space-y-4 relative w-full">
            <section id="emergency" class="my-4 space-y-4 max-w-md">
                <p class=" block py-4 text-base font-semibold text-gray-900">
                    IV. Data Emergency Contact (Keluarga Tidak Serumah)
                </p>
            
                <div>
                    <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Nama Lengkap</label>
                    <input name="nama_kontak_darurat" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
            
                <div>
                    <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Hubungan Keluarga</label>
                    <input name="hubungan_keluarga" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
            
                <div>
                    <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Alamat Sesuai KTP</label>
                    <textarea name="alamat_ktp_kontak_darurat" id="alamatktp" rows="4" class=" max-w-xl block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
                </div>
            
                <div>
                    <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon / HP</label>
                    <input name="nomor_telepon_kontak_darurat" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
                
            </section>
        </div>
    </section>

    <section id="bun" class="my-4 space-y-4">
        <p class=" block py-4 text-base font-semibold text-gray-900">
            V. Data Bidang Usaha Nasabah
        </p>

        <div>
            <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Nama Badan Usaha</label>
            <input name="nama_badan_usaha" type="text" id="nokan" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
        </div>

        <div class="flex max-w-md justify-between space-x-2">
            <div>
                <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Sektor Usaha</label>
                <input name="sektor_usaha" type="text" id="nokan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
            </div>
        
            <div>
                <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Bidang Usaha</label>
                <input name="bidang_usaha" type="text" id="nokan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
            </div>

            <div class="">
                <label for="jawaktu" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Karyawan</label>
                <div class="flex flex-row">
                    <input name="jumlah_karyawan" type="text" id="jawaktu" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        Orang
                    </p>
                </div>
            </div>
        </div>

        <div>
            <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Alamat Usaha</label>
            <textarea name="alamat_usaha" id="alamatktp" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
        </div>
        
        <div>
            <label for="noprib" class="block mb-2 text-xs font-medium text-gray-900">Status Bidang Usaha</label>
            <input name="status_bidang_usaha" type="text" id="nokan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
        </div>

        <div class="flex justify-between max-w-md">
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Mulai Usaha</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tgl_mulai_usaha" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div>
        
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Menjadi Nasabah Sejak</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="menjadi_nasabah_sejak" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div>
        </div>

    </section>

    <div class=" pt-6">
        <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
    </div>
</form>

@if (session('message'))
    <script>
        alert("Data berhasil disimpan!")
    </script>
@endif
@endsection