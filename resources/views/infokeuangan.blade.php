@extends ('partial.mainnota')

@section('container')

<div class="md:grid md:grid-cols-3 md:space-x-8">
    <section class="my-4 space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Usaha
        </p>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900">Pendapatan / Omset Usaha per Bulan</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <p class="text-sm font-semibold">
            Biaya Usaha
        </p>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Gaji Karyawan</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Bahan Baku</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Produksi Barang</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Transportasi Usaha</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Usaha Lain-Lain</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900 border-t-2 border-black pt-3 max-w-md">Total Biaya</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900">Laba (Rugi) Usaha</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
    </section>
    
    <section class="my-4 space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Biaya Umum
        </p>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900">Biaya Listrik / Telepon / PDAM</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Transportasi</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Sekolah</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Makan</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Pemeliharaan</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lain-Lain</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900 border-t-2 border-black pt-3 max-w-md">Total Biaya</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <p class="block text-base font-semibold text-gray-900">
            Pendapatan dan Biaya Lain-Lain
        </p>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pendapatan Lain-Lain</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        
    </section>
    
    <section class="my-4 space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Angsuran
        </p>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900">Bank Umum</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">BPR</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Leasing</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Koperasi</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Lain-Lain</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900 border-t-2 border-black pt-3 max-w-md">Total</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lain-Lain</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
    </section>
</div>

@endsection