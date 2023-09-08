@extends ('partial.main')

@section('container')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>


<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
    <li class="mr-2">
        <a href="/dashboard/detaildata" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perorangan</a>
        
    </li>
    <li class="mr-2">
        <a href="#" aria-current="page" class="inline-block p-4 text-green-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-green-500">Badan Usaha</a>
    </li>
</ul>

<section id="start" class="md:flex md:flex-row mb-4 md:justify-between">

    <div class="my-4 space-y-4 relative w-full">
        <div>
            <label for="cif" class="block mb-2 text-xs font-medium text-gray-900">CIF Bank</label>
            <input type="text" id="cif" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light" placeholder="" required>
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
                    <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
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
                    <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 items-center w-full">
        <div>
            <label for="userid" class="block mb-2 text-xs font-medium text-gray-900">User ID</label>
            <input type="text" id="userid" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light" placeholder="" required>
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
                <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
            </div>
                
            <div class="flex justify-between max-w-md">
                <div class="">
                    <label for="jawaktu" class="block mb-2 text-xs font-medium text-gray-900">Jangka Waktu yang Dimohon</label>
                    <div class="flex flex-row">
                        <input type="text" id="jawaktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                        <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                            Bulan
                        </p>
                    </div>
                </div>
        
                <div class="">
                    <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Margin</label>
                    <div class="flex flex-row">
                        <input type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                        <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                            % per Bulan
                        </p>
                    </div>
                </div>
            </div>
                
            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sifat Pembiayaan</label>
                <select id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
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
                <select id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Baru</option>
                <option value="CA">Tambahan</option>
                <option value="FR">Tambahan dan Perpanjangan</option>
                </select>
            </div>
        
            <div class= "">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
                <select id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Modal Kerja</option>
                <option value="CA">Investasi</option>
                <option value="FR">Konsultasi</option>
                </select>
            </div>
        
            <div>
                <label for="ketpeng" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Keterangan Penggunaan</label>
                <textarea id="ketpeng" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
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
                <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
            </div>
        
            <div class="flex justify-between max-w-md space-x-2 relative">
                <div class= "">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sektor Usaha</label>
                    <select id="countries" class="min-w-[220px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Industri</option>
                    <option value="CA">Jasa</option>
                    <option value="FR">Kontraktor</option>
                    <option value="FR">Pegawai</option>
                    <option value="FR">Perdagangan</option>
                    <option value="FR">Pertanian</option>
                    </select>
                </div>
            
                <div class= "">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Bidang Usaha</label>
                    <select id="countries" class=" min-w-[220px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Test</option>
                    <option value="CA">Test</option>
                    </select>
                </div>
            </div>
        
            <div>
                <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Alamat Usaha</label>
                <textarea id="alamatktp" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
            </div>
        
                    
        </div>
    
        <div class=" w-full my-4 space-y-4">

            <div class="flex justify-between max-w-md space-x-2 relative">
                <div class= "">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Status Tempat Usaha</label>
                    <select id="countries" class="min-w-[224px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Milik Sendiri</option>
                    <option value="CA">Milik Keluarga / Ortu</option>
                    <option value="FR">Kontrak</option>
                    <option value="FR">Instansi / Lembaga</option>
                    <option value="FR">Kredit</option>
                    </select>
                </div>
            
                <div class= "">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Bentuk Usaha</label>
                    <select id="countries" class=" min-w-[224px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Usaha Dagang (UD)</option>
                    <option value="CA">Commanditaire Vennootschap (CV)</option>
                    <option value="CA">Firma</option>
                    <option value="CA">Yayasan</option>
                    <option value="CA">Koperasi</option>
                    <option value="CA">Perseroan Terbatas (PT)</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Nomor Telepon Kantor</label>
                <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>    
            </div>
        
            <div class="flex justify-between max-w-md">
                <div>
                    <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Mulai Usaha</label>
                    <div class="relative max-w-[350px]" id="tglperm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                    </div>
                </div>
            
                <div class="">
                    <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Tanggungan</label>
                    <div class="flex flex-row">
                        <input type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
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
        <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Nama Badan Usaha</label>
        <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
    </div>

    <div class="flex justify-between space-x-2 max-w-md">
        <div class= " max-w-md">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Jabatan</label>
            <select id="countries" class="min-w-[220px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
            <option value="US">Direktur Utama</option>
            <option value="CA">Direktur</option>
            <option value="FR">Komisaris Utama</option>
            <option value="FR">Komisaris</option>
            <option value="FR">Permegang Saham</option>
            <option value="FR">Persero Aktif</option>
            <option value="FR">Persero Komanditer</option>
            <option value="FR">Ketua Umum</option>
            </select>
        </div>
    
        <div>
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Tingkat Pendidikan</label>
            <select id="countries" class="min-w-[220px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
            <option value="US">SD</option>
            <option value="CA">SMP</option>
            <option value="FR">SMA</option>
            <option value="FR">Diploma</option>
            <option value="FR">S1</option>
            <option value="FR">S2</option>
            <option value="FR">S3</option>
            </select>
        </div>
    </div>

    <div>
        <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Status Pernikahan</label>
        <select id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
        <option value="US">Belum Menikah</option>
        <option value="CA">Menikah</option>
        <option value="FR">Janda/Duda</option>
        </select>
    </div>

    <div class=" max-w-md flex justify-between">
        <div>
            <label for="tujuanpeng" class="block mb-2 text-xs font-medium text-gray-900">Tempat Lahir</label>
            <input type="text" id="tujuanpeng" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
        </div>
        <div>
            <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Lahir</label>
            <div class="relative max-w-[224px]" id="tglperm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
            </div> 
        </div>
    </div>

    <div>
        <label for="alamatktp" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Alamat Sesuai KTP</label>
        <textarea id="alamatktp" rows="4" class=" max-w-md block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
    </div> 

    <div class="flex justify-between max-w-md space-x-2">
        <div>
            <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon / HP</label>
            <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
        </div>
        <div>
            <label for="limit" class="block mb-2 text-xs font-medium text-gray-900">Nomor Telepon Kantor</label>
            <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
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
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                    <div>
                                        <select id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                        <option value="US">Belum Menikah</option>
                                        <option value="CA">Menikah</option>
                                        <option value="FR">Janda/Duda</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap">
                                    <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div>
                                        <div class="relative max-w-[220px]" id="tglperm">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                </svg>
                                            </div>
                                            <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div>
                                        <select id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                        <option value="US">Belum Menikah</option>
                                        <option value="CA">Menikah</option>
                                        <option value="FR">Janda/Duda</option>
                                        </select>
                                    </div>
                                </td>

                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div>
                                        <select id="countries" class="max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                        <option value="US">Belum Menikah</option>
                                        <option value="CA">Menikah</option>
                                        <option value="FR">Janda/Duda</option>
                                        </select>
                                    </div>
                                </td> 
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</section>

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
                            <tr>
                                <td class="px-4 py-4 text-center font-medium w-[5%]">
                                    1
                                </td>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                    <div>
                                        <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </div>
                                </td>
                                <td class="px-4 py-4 w-[20%] font-medium whitespace-nowrap">
                                    <div class= "flex justify-center max-w-md">
                                        <select id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5">
                                        <option value="US">Direktur Utama</option>
                                        <option value="CA">Direktur</option>
                                        <option value="FR">Komisaris Utama</option>
                                        <option value="FR">Komisaris</option>
                                        <option value="FR">Permegang Saham</option>
                                        <option value="FR">Persero Aktif</option>
                                        <option value="FR">Persero Komanditer</option>
                                        <option value="FR">Ketua Umum</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div>
                                        <div class="relative max-[15%:" id="tglperm">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                </svg>
                                            </div>
                                            <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div>
                                        <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </div>
                                </td>

                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div>
                                        <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </div>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div>
                                        <input type="text" id="limit" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                                    </div>
                                </td> 
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="flex items-center justify-center mt-6">
    <div class="items-center hidden md:flex gap-x-3">
        <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md bg-blue-100/60">1</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">2</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">3</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">...</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">12</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">13</a>
        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">14</a>
    </div>
</div>

@endsection