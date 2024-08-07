
@extends ('partial.main')

@section('container')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>


    <ul
        class="flex flex-wrap text-sm font-medium text-center text-black border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
        <li class="mr-2">
            <a href="#" aria-current="page"
                class=" active inline-block p-4 text-green-600 bg-gray-100 rounded-t-lg dark:bg-gray-800 dark:text-green-500">Perorangan</a>
        </li>
        <li class="mr-2">
            @if ($nasabah != null)
                <a href="/dashboard/detaildataBU/{{ $nasabah->ID_NASABAH }}"
                    class="inline-block p-4 rounded-t-lg hover:text-black hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-black">Badan
                    Usaha</a>
            @else
                <a href="/dashboard/detaildataBU"
                    class="inline-block p-4 rounded-t-lg hover:text-black hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-black">Badan
                    Usaha</a>
            @endif
        </li>
    </ul>


    @if ($nasabah == null)
    <input name="id" value="null" type="hidden">
        <form method="POST" action="{{ Route('tambah_nasabah') }}">
            @csrf
            <section id="start" class="md:flex md:flex-row mb-4 md:justify-between">
                <div class="my-4 space-y-4 relative w-full">
                    <div>
                        <label for="cif" class="block mb-2 text-xs font-medium text-black">CIF Bank</label>
                        <input type="text" name="cif" id="cif"
                            class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                            placeholder="" required>
                    </div>

                    <div class="flex space-x-2">
                        <div>
                            <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal
                                Permohonan</label>
                            <div class="relative max-w-[220px]" id="tglperm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input name="tgl_permohonan" datepicker datepicker-autohide type="text"
                                    class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                    placeholder="Pilih Tanggal">
                            </div>
                        </div>

                        <div>
                            <label for="tglan" class="block mb-2 text-xs font-medium text-black">Tanggal
                                Analisa</label>
                            <div class="relative max-w-[220px]" id="tglan">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input name="tgl_analisa" datepicker datepicker-autohide type="text"
                                    class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                    placeholder="Pilih Tanggal">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 items-center w-full">
                    <div>
                        <label for="userid" name="user_id"class="block mb-2 text-xs font-medium text-black">User ID</label>
                        <input name="id_user" type="text" id="userid"
                            class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                            placeholder="" value="{{ auth()->user()->username }}" readonly required>
                    </div>
                </div>

            </section>

            <section id="permohonan" class="my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-black">
                    I. Data Permohonan Pembiayaan
                </p>

                <div class="md:flex md:flex-row space-y-4 md:space-y-0 mb-4 md:justify-between">
                    <div class="space-y-4 w-full">
                        <div>
                            <label for="limit" class="block mb-2 text-xs font-medium text-black">Limit Kredit yang
                                Dimohon</label>
                            <input name="limit_kredit" type="text" id="limit"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>

                        <div class="flex justify-between max-w-md">
                            <div class="">
                                <label for="jawaktu" class="block mb-2 text-xs font-medium text-black">Jangka Waktu yang
                                    Dimohon</label>
                                <div class="flex flex-row">
                                    <input name="jangka_waktu" type="text" id="jawaktu"
                                        class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        required>
                                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                        Bulan
                                    </p>
                                </div>
                            </div>

                            <div class="">
                                <label for="margin" class="block mb-2 text-xs font-medium text-black">Margin</label>
                                <div class="flex flex-row">
                                    <input name="margin" value=1 type="text" id="margin"
                                        class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        required>
                                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                        % per Bulan
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class= "min-w-xl">
                            <label for="countries" class="block mb-2 text-xs font-medium text-black">Akad
                                Pembiayaan</label>
                            <select name="sifat" id="countries"
                                class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Murabahah</option>
                                <option value="2">Musyarakah</option>
                                <option value="3">Mudarabah</option>
                                <option value="4">Ijaroh</option>
                                <option value="5">Rahn</option>
                                <option value="6">Qord</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-4 relative w-full">
                        <div class= "">
                            <label for="countries" class="block mb-2 text-xs font-medium text-black">Jenis
                                Permohonan</label>
                            <select name="jenis_permohonan" id="countries"
                                class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Baru</option>
                                <option value="2">Tambahan</option>
                                <option value="3">Tambahan dan Perpanjangan</option>
                            </select>
                        </div>

                        <div class= "">
                            <label for="countries" class="block mb-2 text-xs font-medium text-black">Tujuan
                                Penggunaan</label>
                            <select name="tujuan" id="countries"
                                class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Modal Kerja</option>
                                <option value="2">Investasi</option>
                                <option value="3">Konsumsi</option>
                            </select>
                        </div>

                        <div>
                            <label for="ketpeng"
                                class="block mb-2 text-xs font-medium text-black ">Keterangan
                                Penggunaan</label>
                            <textarea name="keterangan_tujuan" id="ketpeng" rows="4"
                                class=" max-w-md block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Tulis Keterangan..."></textarea>
                        </div>
                    </div>
                </div>
            </section>

            <section id="datadiri" class="my-4 space-y-4">
                <p class=" block py-4 text-base font-semibold text-black">
                    II. Data Diri Nasabah
                </p>

                <div class="md:flex md:flex-row mb-4 md:justify-between">
                    <div class="my-4 space-y-4 w-full">
                        <div>
                            <label for="jenisperm" class="block mb-2 text-xs font-medium text-black">Nama
                                Debitur</label>
                            <input name="nama_debitur" type="text" id="jenisperm"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>

                        <div>
                            <label for="countries" class="block mb-2 text-xs font-medium text-black">Status
                                Pernikahan</label>
                            <select name="status_perkawinan" id="countries"
                                class="max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Belum Menikah</option>
                                <option value="2">Menikah</option>
                                <option value="3">Duda</option>
                                <option value="4">Janda</option>
                            </select>
                        </div>

                        <div class="flex flex-row space-x-2 max-w-md">
                            <div>
                                <label for="tujuanpeng" class="block mb-2 text-xs font-medium text-black">Tempat
                                    Lahir</label>
                                <input name="tempat_lahir" type="text" id="tujuanpeng"
                                    class=" max-w-sm shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>
                            <div>
                                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal
                                    Lahir</label>
                                <div class="relative max-w-[150px]" id="tglperm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="tgl_lahir" datepicker datepicker-autohide type="text"
                                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                        placeholder="Pilih Tanggal">
                                </div>
                            </div>
                            <div class="my-auto space-y-2">
                                <div class="flex my-auto items-center">
                                    <input name="gender" value ="L" id="default-radio-2" type="radio"
                                        name="default-radio"
                                        class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2"
                                        class="ml-2 text-xs font-medium text-black dark:text-black">Laki-Laki</label>
                                </div>
                                <div class="flex my-auto items-center">
                                    <input name="gender" value="P" id="default-radio-2" type="radio"
                                        name="default-radio"
                                        class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2"
                                        class="ml-2 text-xs font-medium text-black dark:text-black">Perempuan</label>
                                </div>
                            </div>

                        </div>

                        <div class="flex space-x-2 max-w-md">
                            <div>
                                <label for="ktp" class="block mb-2 text-xs font-medium text-black">Nomor
                                    KTP</label>
                                <input name="no_ktp" type="text" id="ktp"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>
                            <div>
                                <label for="tglktp" class="block mb-2 text-xs font-medium text-black">Masa
                                    Berlaku</label>
                                <div class="flex space-x-2">
                                    <div class="flex">
                                        <input name="tgl_berlaku_ktp" id="default-radio-2" type="radio" value=""
                                            name="default-radio"
                                            class=" my-auto mr-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <div class="relative max-w-[180px] " id="tglktp">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input datepicker name="tgl_berlaku_ktp" datepicker-autohide type="text"
                                                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="Pilih Tanggal">
                                        </div>
                                    </div>
                                    <div class="flex my-auto items-center">
                                        <input name="tgl_berlaku_ktp" id="default-radio-2" type="radio"
                                            name="default-radio"
                                            class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2"
                                            class="ml-2 text-xs font-medium text-black dark:text-black">Seumur
                                            Hidup</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="alamatktp"
                                class="block mb-2 text-xs font-medium text-black ">Alamat Sesuai
                                KTP</label>
                            <textarea name="alamat_ktp" id="alamatktp" rows="4"
                                class=" max-w-md block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Tulis Keterangan..."></textarea>
                        </div>
                    </div>

                    <div class="my-4 space-y-4 w-full">
                        <div class="flex space-x-2 w-full justify-between max-w-md">
                            <div>
                                <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nomor Telepon
                                    Pribadi</label>
                                <input name="nomor_telepon" type="text" id="nokan"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>

                            <div>
                                <label for="nokan" class="block mb-2 text-xs font-medium text-black">Nomor Telepon
                                    Kantor</label>
                                <input name="nomor_telepon_kantor" type="text" id="nokan"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 ">
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-between max-w-md">
                            <div class= "min-w-xl">
                                <label for="countries" class="block mb-2 text-xs font-medium text-black">Status Tempat
                                    Tinggal</label>
                                <select name="status_tempat_tinggal" id="countries"
                                    class=" md:min-w-[300px] min-w-[200px] bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                    <option value="1">Milik Sendiri</option>
                                    <option value="2">Milik Keluarga/Ortu</option>
                                    <option value="3">Instansi</option>
                                    <option value="4">Kontrak</option>
                                    <option value="5">Kredit</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="margin" class="block mb-2 text-xs font-medium text-black">Lama
                                    Tinggal</label>
                                <div class="flex flex-row">
                                    <input name="lama_tinggal" type="text" id="margin"
                                        class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        required>
                                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                        Tahun
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-between max-w-md">
                            <div class= "">
                                <label for="countries" class="block mb-2 text-xs font-medium text-black">Tingkat
                                    Pendidikan</label>
                                <select name="tingkat_pendidikan" id="countries"
                                    class=" md:min-w-[300px] min-w-[200px] bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                    <option value="1">Sekolah Dasar</option>
                                    <option value="2">SMP</option>
                                    <option value="3">SMA</option>
                                    <option value="4">S1</option>
                                    <option value="5">S2</option>
                                    <option value="6">S3</option>
                                    <option value="7">Tidak Sekolah</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="margin" class="block mb-2 text-xs font-medium text-black">Jumlah
                                    Tanggungan</label>
                                <div class="flex flex-row">
                                    <input name="jumlah_tanggungan" type="text" id="margin"
                                        class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        required>
                                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
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
                        <p class=" block py-4 text-base font-semibold text-black">
                            III. Data Diri Suami / Istri
                        </p>
                        <div>
                            <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nama Suami /
                                Istri</label>
                            <input name="nama_pasangan" type="text" id="nokan"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>

                        <div class="flex justify-between max-w-md">
                            <div>
                                <label for="tujuanpeng" class="block mb-2 text-xs font-medium text-black">Tempat
                                    Lahir</label>
                                <input name="tempat_lahir_pasangan" type="text" id="tujuanpeng"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>
                            <div>
                                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal
                                    Lahir</label>
                                <div class="relative max-w-[220px]" id="tglperm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="tanggal_lahir_pasangan" datepicker datepicker-autohide type="text"
                                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                        placeholder="Pilih Tanggal">
                                </div>
                            </div>

                        </div>

                        <div>
                            <label for="alamatktp"
                                class="block mb-2 text-xs font-medium text-black ">Alamat Sesuai
                                KTP</label>
                            <textarea name="alamat_ktp_pasangan" id="alamatktp" rows="4"
                                class=" max-w-md block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Tulis Keterangan..."></textarea>
                        </div>

                        <div class=" flex max-w-md justify-between">
                            <div>
                                <label for="noprib" class="block mb-2 text-xs font-medium text-black">Profesi Suami /
                                    Istri</label>
                                <select name="profesi_pasangan" type="text" id="nokan"
                                    class=" md:min-w-[250px] min-w-[200px]shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                                    <option value="1">Ibu Rumah Tangga</option>
                                    <option value="2">Pegawai BUMN/BUMD</option>
                                    <option value="3">Pegawai Negeri Sipil</option>
                                    <option value="4">TNI/Polri</option>
                                    <option value="5">Pegawai Swasta</option>
                                    <option value="6">Profesional</option>
                                    <option value="7">Wiraswasta</option>
                                    <option value="8">Tidak Bekerja</option>
                                </select>
                            </div>

                            <div>
                                <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nomor Telepon /
                                    HP</label>
                                <input name="nomor_telepon_pasangan" type="text" id="nokan"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="space-y-4 relative w-full">
                    <section id="emergency" class="my-4 space-y-4 max-w-md">
                        <p class=" block py-4 text-base font-semibold text-black">
                            IV. Data Emergency Contact (Keluarga Tidak Serumah)
                        </p>

                        <div>
                            <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nama
                                Lengkap</label>
                            <input name="nama_kontak_darurat" type="text" id="nokan"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>

                        <div>
                            <label for="noprib" class="block mb-2 text-xs font-medium text-black">Hubungan
                                Keluarga</label>
                            <select name="hub_keluarga" type="text" id="nokan"
                                class=" md:min-w-[250px] min-w-[200px]shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                                <option value="1">Anak Kandung</option>
                                <option value="2">Orang Tua</option>
                                <option value="3">Saudara Kandung</option>
                                <option value="4">Saudara Tidak Sekandung</option>
                                <option value="5">Rekan Kerja</option>
                                <option value="6">Tetangga</option>
                            </select>
                        </div>

                        

                    </section>
                    <section>
                        <div>
                            <label for="alamatktp"
                                class="block mb-2 text-xs font-medium text-black ">Alamat Sesuai
                                KTP</label>
                            <textarea name="alamat_ktp_kontak_darurat" id="alamatktp" rows="4"
                                class=" max-w-xl block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Tulis Keterangan..."></textarea>
                        </div>

                        <div>
                            <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nomor Telepon /
                                HP</label>
                            <input name="nomor_telepon_kontak_darurat" type="text" id="nokan"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>
                    </section>
                </div>
            </section>

            <section id="bun" class="my-4 space-y-4">
                <p class=" block py-4 text-base font-semibold text-black">
                    V. Data Bidang Usaha Nasabah
                </p>

                <div>
                    <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nama Badan Usaha</label>
                    <input name="nama_badan_usaha" type="text" id="nokan"
                        class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                        required>
                </div>

                <div class="flex max-w-md justify-between space-x-2">
                    <div>
                        <label for="noprib" class="block mb-2 text-xs font-medium text-black">Sektor Usaha</label>
                        <select name="bidang_usaha" type="text" id="nokan"
                            class=" md:min-w-[200px] min-w-[200px]shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                            required>
                            <option value="1">Industri</option>
                            <option value="2">Jasa</option>
                            <option value="3">Kontraktor</option>
                            <option value="4">Pegawai</option>
                            <option value="5">Perdagangan</option>
                            <option value="6">Pertanian</option>
                        </select>
                    </div>

                    <div>
                        <label for="noprib" class="block mb-2 text-xs font-medium text-black">Bidang Usaha</label>
                        <input name="sub_usaha" type="text" id="nokan"
                            class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                            required>
                    </div>

                    <div class="">
                        <label for="jawaktu" class="block mb-2 text-xs font-medium text-black">Jumlah Karyawan</label>
                        <div class="flex flex-row">
                            <input name="jumlah_karyawan" type="text" id="jawaktu"
                                class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                Orang
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="alamatktp" class="block mb-2 text-xs font-medium text-black ">Alamat
                        Usaha</label>
                    <textarea name="alamat_usaha" id="alamatktp" rows="4"
                        class=" max-w-md block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="Tulis Keterangan..."></textarea>
                </div>

                <div>
                    <label for="noprib" class="block mb-2 text-xs font-medium text-black">Status Bidang Usaha</label>
                    <select name="status_bidang_usaha" type="text" id="nokan"
                        class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                        required>
                        <option value="1">Milik Sendiri</option>
                        <option value="2">Milik Keluarga/Ortu</option>
                        <option value="3">Instansi/Lembaga</option>
                        <option value="4">Kontrak</option>
                        <option value="5">Kredit</option>
                    </select>
                </div>

                <div class="flex justify-between max-w-md">
                    <div>
                        <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal Mulai
                            Usaha</label>
                        <div class="relative max-w-[220px]" id="tglperm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input name="tgl_mulai_usaha" datepicker datepicker-autohide type="text"
                                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Pilih Tanggal">
                        </div>
                    </div>

                    <div>
                        <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Menjadi Nasabah
                            Sejak</label>
                        <div class="relative max-w-[220px]" id="tglperm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input name="menjadi_nasabah_sejak" datepicker datepicker-autohide type="text"
                                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Pilih Tanggal">
                        </div>
                    </div>
                </div>

            </section>

            <div class=" pt-6">
                <button type="submit"
                    class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
            </div>
        </form>
    @else
        <form method="POST" action="/dashboard/detaildata/{{ $nasabah->ID_NASABAH }}/edit">
            @csrf
            <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
            <section id="start" class="md:flex md:flex-row mb-4 space-x-4 md:justify-between">
                <div class="my-4 space-y-4 relative w-full">
                    <div>
                        <label for="cif" class="block mb-2 text-xs font-medium text-black">CIF Bank</label>
                        <input value="{{ $nasabah->CIF }}" type="text" name="cif" id="cif"
                            class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                            placeholder="" required>
                    </div>

                    <div class="flex space-x-2">
                        <div>
                            <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal
                                Permohonan</label>
                            <div class="relative max-w-[220px]" id="tglperm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input value="{{ date('d-m-Y', strtotime($nasabah->TGL_PERMOHONAN)) }}"
                                    name="tgl_permohonan" datepicker datepicker-autohide type="text"
                                    class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                    placeholder="Pilih Tanggal">
                            </div>
                        </div>

                        <div>
                            <label for="tglan" class="block mb-2 text-xs font-medium text-black">Tanggal
                                Analisa</label>
                            <div class="relative max-w-[220px]" id="tglan">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input value={{ date('d-m-Y', strtotime($nasabah->TGL_ANALISA)) }} name="tgl_analisa"
                                    datepicker datepicker-autohide type="text"
                                    class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                    placeholder="Pilih Tanggal">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 items-center w-full">
                    <div>
                        <label for="userid" name="user_id"class="block mb-2 text-xs font-medium text-black">User ID</label>
                        <input value={{ auth()->user()->username }} name="id_user" type="text" id="userid"
                            class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                            readonly placeholder="" required>
                    </div>
                </div>

            </section>

            <section id="permohonan" class="my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-black">
                    I. Data Permohonan Pembiayaan
                </p>

                <div class="md:flex md:flex-row space-y-4 space-x-4 md:space-y-0 mb-4 md:justify-between">
                    <div class="space-y-4 w-full">
                        <div>
                            <label for="limit" class="block mb-2 text-xs font-medium text-black">Limit Kredit yang
                                Dimohon</label>
                            <input value={{ $nasabah->LIMIT_KREDIT }} name="limit_kredit" type="text" id="limit"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>

                        <div class="flex justify-between max-w-md">
                            <div class="">
                                <label for="jawaktu" class="block mb-2 text-xs font-medium text-black">Jangka Waktu
                                    yang Dimohon</label>
                                <div class="flex flex-row">
                                    <input value={{ $nasabah->JANGKA_WAKTU }} name="jangka_waktu" type="text"
                                        id="jawaktu"
                                        class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        required>
                                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                        Bulan
                                    </p>
                                </div>
                            </div>

                            <div class="">
                                <label for="margin" class="block mb-2 text-xs font-medium text-black">Margin</label>
                                <div class="flex flex-row">
                                    <input disabled value=1.5s type="text" id="margin"
                                        class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        required>
                                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                        % per Bulan
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class= "min-w-xl">
                            <label for="countries" class="block mb-2 text-xs font-medium text-black">Akad
                                Pembiayaan</label>
                            <select name="sifat" id="countries"
                                class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Murabahah</option>
                                <option value="2">Musyarakah</option>
                                <option value="3">Mudarabah</option>
                                <option value="4">Ijaroh</option>
                                <option value="5">Rahn</option>
                                <option value="6">Qord</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-4 relative w-full">
                        <div class= "">
                            <label for="countries" class="block mb-2 text-xs font-medium text-black">Jenis
                                Permohonan</label>
                            <select name="jenis_permohonan" id="countries"
                                class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Baru</option>
                                <option value="2">Tambahan</option>
                                <option value="3">Tambahan dan Perpanjangan</option>
                            </select>
                        </div>

                        <div class= "">
                            <label for="countries" class="block mb-2 text-xs font-medium text-black">Tujuan
                                Penggunaan</label>
                            <select name="tujuan" id="countries"
                                class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Modal Kerja</option>
                                <option value="2">Investasi</option>
                                <option value="3">Konsumsi</option>
                            </select>
                        </div>

                        <div>
                            <label for="ketpeng"
                                class="block mb-2 text-xs font-medium text-black ">Keterangan
                                Penggunaan</label>
                            <textarea name="keterangan_tujuan" id="ketpeng" rows="4"
                                class=" max-w-md block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Tulis Keterangan...">{{ $nasabah->KET_TUJUAN }}</textarea>
                        </div>
                    </div>
                </div>
            </section>

            <section id="datadiri" class="my-4 space-y-4">
                <p class=" block py-4 text-base font-semibold text-black">
                    II. Data Diri Nasabah
                </p>

                <div class="md:flex md:flex-row space-x-4 mb-4 md:justify-between">
                    <div class="my-4 space-y-4 w-full">
                        <div>
                            <label for="jenisperm" class="block mb-2 text-xs font-medium text-black">Nama
                                Debitur</label>
                            <input value="{{ $nasabah->NAMA }}" name="nama_debitur" type="text" id="jenisperm"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>

                        <div>
                            <label for="countries" class="block mb-2 text-xs font-medium text-black">Status
                                Pernikahan</label>
                            <select name="status_perkawinan" id="countries"
                                class="max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Belum Menikah</option>
                                <option value="2">Menikah</option>
                                <option value="3">Duda</option>
                                <option value="4">Janda</option>
                            </select>
                        </div>

                        <div class="flex flex-row space-x-2 max-w-md">
                            <div>
                                <label for="tujuanpeng" class="block mb-2 text-xs font-medium text-black">Tempat
                                    Lahir</label>
                                <input value="{{ $nasabah->TEMPAT_LAHIR }}" name="tempat_lahir" type="text"
                                    id="tujuanpeng"
                                    class=" max-w-sm shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>
                            <div>
                                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal
                                    Lahir</label>
                                <div class="relative max-w-[150px]" id="tglperm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="tgl_lahir" datepicker datepicker-autohide type="text"
                                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                        placeholder="Pilih Tanggal">
                                </div>
                            </div>
                            <div class="my-auto space-y-2">
                                <div class="flex my-auto items-center">
                                    <input name="gender" value ="L" id="default-radio-2" type="radio"
                                        name="default-radio"
                                        class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2"
                                        class="ml-2 text-xs font-medium text-black dark:text-black">Laki-Laki</label>
                                </div>
                                <div class="flex my-auto items-center">
                                    <input name="gender" value="P" id="default-radio-2" type="radio"
                                        name="default-radio"
                                        class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2"
                                        class="ml-2 text-xs font-medium text-black dark:text-black">Perempuan</label>
                                </div>
                            </div>

                        </div>

                        <div class="flex space-x-2 max-w-md">
                            <div>
                                <label for="ktp" class="block mb-2 text-xs font-medium text-black">Nomor
                                    KTP</label>
                                <input value="{{ $nasabah->NO_KTP }}"name="no_ktp" type="text" id="ktp"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>
                            <div>
                                <label for="tglktp" class="block mb-2 text-xs font-medium text-black">Masa
                                    Berlaku</label>
                                <div class="flex space-x-2">
                                    <div class="flex">
                                        <input name="tgl_berlaku_ktp" id="default-radio-2" type="radio" value=""
                                            name="default-radio"
                                            class=" my-auto mr-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <div class="relative max-w-[180px] " id="tglktp">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input datepicker datepicker-autohide type="text"
                                                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="Pilih Tanggal">
                                        </div>
                                    </div>
                                    <div class="flex my-auto items-center">
                                        <input name="tgl_berlaku_ktp" value="null" id="default-radio-2" type="radio"
                                            name="default-radio"
                                            class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2"
                                            class="ml-2 text-xs font-medium text-black dark:text-black">Seumur
                                            Hidup</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="alamatktp"
                                class="block mb-2 text-xs font-medium text-black ">Alamat Sesuai
                                KTP</label>
                            <textarea value="{{ $nasabah->ALAMAT }}" name="alamat_ktp" id="alamatktp" rows="4"
                                class=" max-w-md block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Tulis Keterangan..."> {{ $nasabah->ALAMAT }}</textarea>
                        </div>
                    </div>

                    <div class="my-4 space-y-4 w-full">
                        <div class="flex space-x-2 w-full justify-between max-w-md">
                            <div>
                                <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nomor Telepon
                                    Pribadi</label>
                                <input value="{{ $nasabah->NO_TELP }}" name="nomor_telepon" type="text"
                                    id="nokan"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>

                            <div>
                                <label for="nokan" class="block mb-2 text-xs font-medium text-black">Nomor Telepon
                                    Kantor</label>
                                <input value="{{ $nasabah->NO_KANTOR }}" name="nomor_telepon_kantor" type="text"
                                    id="nokan"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 ">
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-between max-w-md">
                            <div class= "min-w-xl">
                                <label for="countries" class="block mb-2 text-xs font-medium text-black">Status Tempat
                                    Tinggal</label>
                                <select name="status_tempat_tinggal" id="countries"
                                    class=" md:min-w-[300px] min-w-[200px] bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                    <option value="1">Milik Sendiri</option>
                                    <option value="2">Milik Keluarga/Ortu</option>
                                    <option value="3">Instansi</option>
                                    <option value="4">Kontrak</option>
                                    <option value="5">Kredit</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="margin" class="block mb-2 text-xs font-medium text-black">Lama
                                    Tinggal</label>
                                <div class="flex flex-row">
                                    <input value="{{ $nasabah->LAMA_TINGGAL }}" name="lama_tinggal" type="text"
                                        id="margin"
                                        class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        required>
                                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                        Tahun
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex space-x-2 justify-between max-w-md">
                            <div class= "">
                                <label for="countries" class="block mb-2 text-xs font-medium text-black">Tingkat
                                    Pendidikan</label>
                                <select name="tingkat_pendidikan" id="countries"
                                    class=" md:min-w-[300px] min-w-[200px] bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                    <option value="1">Sekolah Dasar</option>
                                    <option value="2">SMP</option>
                                    <option value="3">SMA</option>
                                    <option value="4">S1</option>
                                    <option value="5">S2</option>
                                    <option value="6">S3</option>
                                    <option value="7">Tidak Sekolah</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="margin" class="block mb-2 text-xs font-medium text-black">Jumlah
                                    Tanggungan</label>
                                <div class="flex flex-row">
                                    <input value="{{ $nasabah->JUMLAH_TANGGUNGAN }}" name="jumlah_tanggungan"
                                        type="text" id="margin"
                                        class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        required>
                                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                        Orang
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="3and4" class="md:flex md:flex-row mb-4 space-x-4 md:justify-between">
                <div class="space-y-4 space-x-4 w-full">
                    <section id="suami_istri" class="my-4 space-y-4">
                        <p class=" block py-4 text-base font-semibold text-black">
                            III. Data Diri Suami / Istri
                        </p>
                        <div>
                            <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nama Suami /
                                Istri</label>
                            <input value="{{ $nasabah->NAMA_PASANGAN }}" name="nama_pasangan" type="text"
                                id="nokan"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 ">
                        </div>

                        <div class="flex justify-between max-w-md">
                            <div>
                                <label for="tujuanpeng" class="block mb-2 text-xs font-medium text-black">Tempat
                                    Lahir</label>
                                <input value="{{ $nasabah->TEMPAT_LAHIR_PASANGAN }}" name="tempat_lahir_pasangan"
                                    type="text" id="tujuanpeng"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>
                            <div>
                                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal
                                    Lahir</label>
                                <div class="relative max-w-[220px]" id="tglperm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="tanggal_lahir_pasangan" datepicker datepicker-autohide type="text"
                                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                        placeholder="Pilih Tanggal">
                                </div>
                            </div>

                        </div>

                        <div>
                            <label for="alamatktp"
                                class="block mb-2 text-xs font-medium text-black ">Alamat Sesuai
                                KTP</label>
                            <textarea name="alamat_ktp_pasangan" id="alamatktp" rows="4"
                                class=" max-w-md block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Tulis Keterangan...">{{ $nasabah->ALAMAT_PASANGAN }} </textarea>
                        </div>

                        <div class=" flex max-w-md justify-between">
                            <div>
                                <label for="noprib" class="block mb-2 text-xs font-medium text-black">Profesi Suami /
                                    Istri</label>
                                <select name="profesi_pasangan" type="text" id="nokan"
                                    class=" md:min-w-[250px] min-w-[200px]shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                                    <option value="1">Ibu Rumah Tangga</option>
                                    <option value="2">Pegawai BUMN/BUMD</option>
                                    <option value="3">Pegawai Negeri Sipil</option>
                                    <option value="4">TNI/Polri</option>
                                    <option value="5">Pegawai Swasta</option>
                                    <option value="6">Profesional</option>
                                    <option value="7">Wiraswasta</option>
                                    <option value="8">Tidak Bekerja</option>
                                </select>
                            </div>

                            <div>
                                <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nomor Telepon /
                                    HP</label>
                                <input value="{{ $nasabah->NO_TELP_PASANGAN }}"name="nomor_telepon_pasangan"
                                    type="text" id="nokan"
                                    class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                    required>
                            </div>
                        </div>

                </div>
                <div class="space-y-4 relative w-full">
                    <section id="emergency" class="my-4 space-y-4 max-w-md">
                        <p class=" block py-4 text-base font-semibold text-black">
                            IV. Data Emergency Contact (Keluarga Tidak Serumah)
                        </p>

                        <div>
                            <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nama
                                Lengkap</label>
                            <input value="{{ $nasabah->NAMA_EC }}" name="nama_kontak_darurat" type="text"
                                id="nokan"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>

                        <div>
                            <label for="noprib" class="block mb-2 text-xs font-medium text-black">Hubungan
                                Keluarga</label>
                            <select name="hub_keluarga" type="text" id="nokan"
                                class=" md:min-w-[250px] min-w-[200px]shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                                <option value="1">Anak Kandung</option>
                                <option value="2">Orang Tua</option>
                                <option value="3">Saudara Kandung</option>
                                <option value="4">Saudara Tidak Sekandung</option>
                                <option value="5">Rekan Kerja</option>
                                <option value="6">Tetangga</option>
                            </select>
                        </div>
                        <div>
                            <label for="alamatktp"
                                class="block mb-2 text-xs font-medium text-black ">Alamat Sesuai
                                KTP</label>
                            <textarea name="alamat_ktp_kontak_darurat" id="alamatktp" rows="4"
                                class=" max-w-xl block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Tulis Keterangan...">
                        {{ $nasabah->ALAMAT_EC }}
                    </textarea>
                        </div>

                        <div>
                            <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nomor Telepon /
                                HP</label>
                            <input value ="{{ $nasabah->NO_TELP_EC }}" name="nomor_telepon_kontak_darurat"
                                type="text" id="nokan"
                                class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                        </div>
                </div>

            </section>

            <section id="bun" class="my-4 space-y-4">
                <p class=" block py-4 text-base font-semibold text-black">
                    V. Data Bidang Usaha Nasabah
                </p>

                <div>
                    <label for="noprib" class="block mb-2 text-xs font-medium text-black">Nama Badan Usaha</label>
                    <input value="{{ $nasabah->NAMA_BADAN_USAHA }}" name="nama_badan_usaha" type="text"
                        id="nokan"
                        class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                        required>
                </div>

                <div class="flex max-w-md justify-between space-x-2">
                    <div>
                        <label for="noprib" class="block mb-2 text-xs font-medium text-black">Sektor Usaha</label>
                        <select name="bidang_usaha" type="text" id="nokan"
                            class=" md:min-w-[200px] min-w-[200px]shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                            required>
                            <option value="1">Industri</option>
                            <option value="2">Jasa</option>
                            <option value="3">Kontraktor</option>
                            <option value="4">Pegawai</option>
                            <option value="5">Perdagangan</option>
                            <option value="6">Pertanian</option>
                        </select>
                    </div>

                    <div>
                        <label for="noprib" class="block mb-2 text-xs font-medium text-black">Bidang Usaha</label>
                        <input value="{{ $nasabah->BIDANG_USAHA }}" name="sub_usaha" type="text" id="nokan"
                            class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                            required>
                    </div>

                    <div class="">
                        <label for="jawaktu" class="block mb-2 text-xs font-medium text-black">Jumlah Karyawan</label>
                        <div class="flex flex-row">
                            <input value ="{{ $nasabah->JUMLAH_KARY }}" name="jumlah_karyawan" type="text"
                                id="jawaktu"
                                class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                Orang
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="alamatktp" class="block mb-2 text-xs font-medium text-black ">Alamat
                        Usaha</label>
                    <textarea name="alamat_usaha" id="alamatktp" rows="4"
                        class=" max-w-md block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="Tulis Keterangan..."> {{ $nasabah->ALAMAT_USAHA }}</textarea>
                </div>

                <div>
                    <label for="noprib" class="block mb-2 text-xs font-medium text-black">Status Bidang Usaha</label>
                    <select name="status_bidang_usaha" type="text" id="nokan"
                        class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 "
                        required>
                        <option value="1">Milik Sendiri</option>
                        <option value="2">Milik Keluarga/Ortu</option>
                        <option value="3">Instansi/Lembaga</option>
                        <option value="4">Kontrak</option>
                        <option value="5">Kredit</option>
                    </select>
                </div>

                <div class="flex justify-between max-w-md">
                    <div>
                        <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal Mulai
                            Usaha</label>
                        <div class="relative max-w-[220px]" id="tglperm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input name="tgl_mulai_usaha" datepicker datepicker-autohide type="text"
                                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Pilih Tanggal">
                        </div>
                    </div>

                    <div>
                        <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Menjadi Nasabah Sejak</label>
                        <div class="relative max-w-[220px]" id="tglperm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input name="menjadi_nasabah_sejak" datepicker datepicker-autohide type="text"
                                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Pilih Tanggal">
                        </div>
                    </div>
                </div>
            </section>

            <div class=" pt-6">
                <button type="submit"
                    class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan
                    Perubahan</button>
            </div>

        </form>
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
    @if (session('success-add'))
        <script>
            alert("Data berhasil ditambah!")
        </script>
    @endif

    @if (session('success-edit'))
        <script>
            alert("Data berhasil diedit!")
        </script>
    @endif
@endsection
