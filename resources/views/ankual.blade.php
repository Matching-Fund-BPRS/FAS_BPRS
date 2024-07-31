@extends ('partial.mainnota')

@section('container')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>
@if($ankual_nasabah == null)
<form method="post" action="{{ Route('tambah_ankual') }}">
    @csrf
    <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
    <section id="permohonan" class="my-4">
        <p class="block py-4 text-base font-semibold text-black">
            A. Aspek Legalitas
        </p>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Legalitas Pemohon</label>
                <input name="legalitas_pemohon" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Nomor</label>
                <input name="legalitas_pemohon_no" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Masa Laku</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_masa_laku_pemohon" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Legalitas Pendirian Usaha</label>
                <input name="legalitas_pendirian_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Nomor</label>
                <input name="legalitas_pendirian_usaha_no" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal Terbit</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_terbit" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Legalitas Usaha (Izin-Izin)</label>
                <input name="legalitas_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Nomor</label>
                <input name="legalitas_usaha_nomor" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Masa Laku</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_masa_laku_usaha" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Legalitas Lain</label>
                <input name="legalitas_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Nomor</label>
                <input name="legalitas_lain_nomor" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal Terbit</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_terbit_legalitas_lain" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

    </section>

    <div class="md:flex md:flex-row mb-4 md:justify-between">
        <div class="w-full">
            <section id="pemasaran" class="my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-black">
                    B. Aspek Pemasaran
                </p>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Jumlah Pesaing</label>
                    <input name="jumlah_pesaing" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Reputasi dengan Pelanggan</label>
                    <input name="reputasi_pelanggan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Jumlah Pelanggan</label>
                    <input name="jumlah_pelanggan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Prospek Usaha</label>
                    <input name="prospek_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Kebutuhan Masyarakat teerhadap Produk</label>
                    <input name="kebutuhan_masyarakat" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>       
            </section>
        </div>
        
        <div class="w-full">
            <section id="pemasaran" class="my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-black">
                    C. Aspek Manajemen
                </p>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Kejujuran</label>
                    <input name="kejujuran" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Kemauan Bekerja Keras</label>
                    <input name="kemauan_bekerja_keras" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Reputasi dengan Rekan Bisnis</label>
                    <input name="reputasi_rekan_bisnis"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>         
            </section>
        </div>
    </div>

    <section class="my-4">
        <p class="block py-4 text-base font-semibold text-black">
            D. Aspek Teknis
        </p>
        <div class="md:flex md:flex-row mb-4 md:justify-between">
            <div class="space-y-4 w-full">
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Utilitas Kapasitas Usaha</label>
                    <input name="utilitas_kapasitas_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Pengadaan Bahan Baku</label>
                    <input name="pengadaan_bahan_baku" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Reputasi dengan Supplier</label>
                    <input name="reputasi_supplier" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>
        
            <div class="space-y-4 w-full">
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Ketergantungan terhadap Supplier</label>
                    <input name="ketergantungan_supplier" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Spesifikasi Produk</label>
                    <input name="spesifikasi_produk" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Lama Usaha</label>
                    <input name="lama_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>
        </div>
    </section>

    <div>
        <label for="ketpeng" class="block mb-2 text-xs font-semibold text-black  ">Catatan</label>
        <textarea name="catatan" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
    </div>


    <div class=" pt-6">
        <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
    </div>
</form>
@else
<form method="post" action="/dashboard/ankual/{{ $nasabah->ID_NASABAH }}/edit">
    @csrf
    <section id="permohonan" class="my-4">
        <p class="block py-4 text-base font-semibold text-black">
            A. Aspek Legalitas
        </p>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Legalitas Pemohon</label>
                <input value="{{ $ankual_nasabah->LEG_PEMOHON }}" name="legalitas_pemohon" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Nomor</label>
                <input value="{{ $ankual_nasabah->LEG_PEMOHON_NO }}" name="legalitas_pemohon_no" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Masa Laku</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_masa_laku_pemohon" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Legalitas Pendirian Usaha</label>
                <input value="{{ $ankual_nasabah->LEG_PENDIRIAN }}" name="legalitas_pendirian_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Nomor</label>
                <input value="{{ $ankual_nasabah->LEG_PENDIRIAN_NO }}" name="legalitas_pendirian_usaha_no" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal Terbit</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_terbit" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Legalitas Usaha (Izin-Izin)</label>
                <input value="{{ $ankual_nasabah->LEG_USAHA }}" name="legalitas_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Nomor</label>
                <input value="{{ $ankual_nasabah->LEG_USAHA_NO }}" name="legalitas_usaha_nomor" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Masa Laku</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_masa_laku_usaha" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Legalitas Lain</label>
                <input value="{{ $ankual_nasabah->LEG_LAIN1 }}" name="legalitas_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Nomor</label>
                <input value="{{ $ankual_nasabah->LEG_LAIN1_NO }}" name="legalitas_lain_nomor" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-black">Tanggal Terbit</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_terbit_legalitas_lain" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

    </section>

    <div class="md:flex md:flex-row mb-4 md:justify-between">
        <div class="w-full">
            <section id="pemasaran" class="my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-black">
                    B. Aspek Pemasaran
                </p>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Jumlah Pesaing</label>
                    <input value="{{ $ankual_nasabah->PEM_PESAING }}" name="jumlah_pesaing" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Reputasi dengan Pelanggan</label>
                    <input value="{{ $ankual_nasabah->PEM_REPUTASI }}" name="reputasi_pelanggan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Jumlah Pelanggan</label>
                    <input value="{{ $ankual_nasabah->PEM_PELANGGAN }}" name="jumlah_pelanggan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Prospek Usaha</label>
                    <input value="{{ $ankual_nasabah->PEM_KETERGANTUNGAN }}" name="prospek_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Kebutuhan Masyarakat teerhadap Produk</label>
                    <input value="{{ $ankual_nasabah->PEM_KEBUTUHAN }}" name="kebutuhan_masyarakat" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>       
            </section>
        </div>
        
        <div class="w-full">
            <section id="pemasaran" class="my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-black">
                    C. Aspek Manajemen
                </p>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Kejujuran</label>
                    <input value="{{ $ankual_nasabah->MAN_KEJUJURAN }}" name="kejujuran" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Kemauan Bekerja Keras</label>
                    <input value="{{ $ankual_nasabah->MAN_KEMAUAN }}" name="kemauan_bekerja_keras" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Reputasi dengan Rekan Bisnis</label>
                    <input value="{{ $ankual_nasabah->MAN_REPUTASI }}" name="reputasi_rekan_bisnis"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>         
            </section>
        </div>
    </div>

    <section class="my-4">
        <p class="block py-4 text-base font-semibold text-black">
            D. Aspek Teknis
        </p>
        <div class="md:flex md:flex-row mb-4 md:justify-between">
            <div class="space-y-4 w-full">
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Utilitas Kapasitas Usaha</label>
                    <input value="{{ $ankual_nasabah->TEH_UTILISASI }}" name="utilitas_kapasitas_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Pengadaan Bahan Baku</label>
                    <input value="{{ $ankual_nasabah->TEH_PENGADAAN }}" name="pengadaan_bahan_baku" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Reputasi dengan Supplier</label>
                    <input value="{{ $ankual_nasabah->TES_REPUTASI }}" name="reputasi_supplier" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>
        
            <div class="space-y-4 w-full">
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Ketergantungan terhadap Supplier</label>
                    <input value="{{ $ankual_nasabah->TEH_KETERGANTUNGAN }}" name="ketergantungan_supplier" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Spesifikasi Produk</label>
                    <input value="{{ $ankual_nasabah->TEH_SPESIFIKASI }}" name="spesifikasi_produk" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Lama Usaha</label>
                    <input value="{{ $ankual_nasabah->TEH_LAMA_USAHA }}" name="lama_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>
        </div>
    </section>

    <div>
        <label for="ketpeng" class="block mb-2 text-xs font-semibold text-black  ">Catatan</label>
        <textarea name="catatan" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
    </div>


    <div class=" pt-6">
        <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
    </div>
<form>
@endif

@if(session('success-edit'))
    <script>
        alert('Data berhasil diperbarui!')
    </script>
@elseif(session('success-add'))
<script>
    alert('Data berhasil ditambahkan!')
</script>
@endif

@endsection
