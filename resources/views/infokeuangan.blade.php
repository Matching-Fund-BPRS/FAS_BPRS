@extends ('partial.mainnota')

@section('container')

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
@endsection