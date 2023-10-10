@extends ('partial.mainnota')

@section('container')
<form method="post" action="{{ Route('tambah_info_keuangan') }}">
    @csrf
    <div class="md:grid md:grid-cols-3 md:space-x-8">
        <section class="my-4 space-y-4">
            <p class="block py-4 text-base font-semibold text-gray-900">
                Usaha
            </p>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900">Pendapatan / Omset Usaha per Bulan</label>
                <input name="omset" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <p class="text-sm font-semibold">
                Biaya Usaha
            </p>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Gaji Karyawan</label>
                <input name="biaya_gaji" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Bahan Baku</label>
                <input name="biaya_bahan_baku" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Produksi Barang</label>
                <input name="biaya_produksi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Transportasi Usaha</label>
                <input name="biaya_transportasi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Usaha Lain-Lain</label>
                <input name="biaya_usaha_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900 border-t-2 border-black pt-3 max-w-md">Total Biaya</label>
                <input name="total_biaya" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900">Laba (Rugi) Usaha</label>
                <input name="laba_rugi_usaha" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </section>
        
        <section class="my-4 space-y-4">
            <p class="block py-4 text-base font-semibold text-gray-900">
                Biaya Umum
            </p>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900">Biaya Listrik / Telepon / PDAM</label>
                <input name="biaya_rt_listrik" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Transportasi</label>
                <input name="biaya_rt_transportasi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Sekolah</label>
                <input name="biaya_rt_sekolah" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Makan</label>
                <input name="biaya_rt_makan"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Pemeliharaan</label>
                <input name="biaya_rt_pemeliharaan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lain-Lain</label>
                <input name="biaya_rt_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900 border-t-2 border-black pt-3 max-w-md">Total Biaya</label>
                <input name="total_biaya_rt" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <p class="block text-base font-semibold text-gray-900">
                Pendapatan dan Biaya Lain-Lain
            </p>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pendapatan Lain-Lain</label>
                <input name="pendapatan_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            
        </section>
        
        <section class="my-4 space-y-4">
            <p class="block py-4 text-base font-semibold text-gray-900">
                Angsuran
            </p>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900">Bank Umum</label>
                <input name="angs_bank_umum" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">BPR</label>
                <input name="angs_bpr" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Leasing</label>
                <input name="angs_leasing" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Koperasi</label>
                <input name="angs_koperasi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Lain-Lain</label>
                <input name="angs_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-semibold text-gray-900 border-t-2 border-black pt-3 max-w-md">Total</label>
                <input name="total_angsuran" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lain-Lain</label>
                <input name="biaya_angsuran_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div class=" pt-6">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
            </div>
        </section>
    </div>
<form>
@endsection