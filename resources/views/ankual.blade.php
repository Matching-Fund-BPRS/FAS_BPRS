@extends ('partial.mainnota')

@section('container')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

<section id="permohonan" class="my-4">
    <p class="block py-4 text-base font-semibold text-gray-900">
        A. Aspek Legalitas
    </p>

    <div class="flex space-x-4 border-b p-3">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Pemohon</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div> 
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Masa Laku</label>
            <div class="relative max-w-[220px]" id="tglperm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
            </div>
        </div> 
    </div>

    <div class="flex space-x-4 border-b p-3">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Pendirian Usaha</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div> 
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Terbit</label>
            <div class="relative max-w-[220px]" id="tglperm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
            </div>
        </div> 
    </div>

    <div class="flex space-x-4 border-b p-3">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Usaha (Izin-Izin)</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div> 
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Masa Laku</label>
            <div class="relative max-w-[220px]" id="tglperm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
            </div>
        </div> 
    </div>

    <div class="flex space-x-4 border-b p-3">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Lain</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div> 
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nomor</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900">Tanggal Terbit</label>
            <div class="relative max-w-[220px]" id="tglperm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input datepicker datepicker-autohide type="text" class="p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
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
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Reputasi dengan Pelanggan</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Pelanggan</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Prospek Usaha</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Kebutuhan Masyarakat teerhadap Produk</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
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
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Kemauan Bekerja Keras</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Reputasi dengan Rekan Bisnis</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
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
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pengadaan Bahan Baku</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Reputasi dengan Supplier</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
    
        <div class="space-y-4 w-full">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Ketergantungan terhadap Supplier</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Spesifikasi Produk</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Lama Usaha</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
    </div>
    
</section>

<div>
    <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Catatan</label>
    <textarea id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Keterangan..."></textarea>        
</div>

@endsection
