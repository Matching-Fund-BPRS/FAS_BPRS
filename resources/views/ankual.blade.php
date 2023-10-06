@extends ('partial.mainnota')

@section('container')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

<form method="post" action="{{ Route('tambah_ankual') }}">
    @csrf
    <section id="permohonan" class="my-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            A. Aspek Legalitas
        </p>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Pemohon</label>
                <input name="legalitas_pemohonan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor</label>
                <input name="legalitas_pemohon_no" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Masa Laku</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_masa_laku_pemohon" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Pendirian Usaha</label>
                <input name="legalitas_pendirian_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor</label>
                <input name="legalitas pendirian_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Terbit</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_terbit" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Usaha (Izin-Izin)</label>
                <input name="legalitas_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor</label>
                <input name="legalitas_usaha_nomor" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Masa Laku</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_masa_laku_usaha" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

        <div class="flex space-x-4 border-b p-3">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Lain</label>
                <input name="legalitas_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor</label>
                <input name="legalitas_lain_nomor" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Terbit</label>
                <div class="relative max-w-[220px]" id="tglperm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="tanggal_terbit_legalitas_lain" datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                </div>
            </div> 
        </div>

    </section>

    <div class="md:flex md:flex-row mb-4 md:justify-between">
        <div class="w-full">
            <section id="pemasaran" class="my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-gray-900">
                    B. Aspek Pemasaran
                </p>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Pesaing</label>
                    <input name="jumlah_pesaing" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Reputasi dengan Pelanggan</label>
                    <input name="reputasi_pelanggan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Pelanggan</label>
                    <input name="jumlah_pelanggan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Prospek Usaha</label>
                    <input name="prospek_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Kebutuhan Masyarakat teerhadap Produk</label>
                    <input name="kebutuhan_masyarakat" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>       
            </section>
        </div>
        
        <div class="w-full">
            <section id="pemasaran" class="my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-gray-900">
                    C. Aspek Manajemen
                </p>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Kejujuran</label>
                    <input name="kejujuran" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Kemauan Bekerja Keras</label>
                    <input name="kemauan_bekerja_keras" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Reputasi dengan Rekan Bisnis</label>
                    <input name="reputasi_rekan_bisnis"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>         
            </section>
        </div>
    </div>

    <section class="my-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            D. Aspek Teknis
        </p>
        <div class="md:flex md:flex-row mb-4 md:justify-between">
            <div class="space-y-4 w-full">
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Utilitas Kapasitas Usaha</label>
                    <input name="utilitas_kapasitas_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pengadaan Bahan Baku</label>
                    <input name="pengadaan_bahan_baku" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Reputasi dengan Supplier</label>
                    <input name="reputasi_supplier" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>
        
            <div class="space-y-4 w-full">
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Ketergantungan terhadap Supplier</label>
                    <input name="ketergantungan_supplier" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Spesifikasi Produk</label>
                    <input name="spesifikasi_produk" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Lama Usaha</label>
                    <input name="lama_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>
        </div>
    </section>

    <div>
        <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Catatan</label>
        <textarea name="catatan" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
    </div>


    <div class=" pt-6">
        <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
    </div>
<form>
@endsection
