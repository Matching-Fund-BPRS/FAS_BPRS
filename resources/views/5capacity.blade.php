@extends ('partial.mainnota')

@section('container')

<form method="post" action="{{ route('postCapacity') }}">
    @csrf
    <section id="capacity" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Capacity
        </p>

            <div class= "min-w-xl">
                <label for="cb_manajemen_sdm" class="block mb-2 text-xs font-medium text-gray-900">Manajemen SDM</label>
                <select name="cb_manajemen_sdm" id="cb_manajemen_sdm" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Gaji Karyawan Sering Telat dan Tidak Ada Bonus</option>
                    <option value="2">Gaji Karyawan Kadang Kadang Telat</option>
                    <option value="3">Gaji Karyawan Kurang Lancar dan Ada Bonus</option>
                    <option value="4">Gaji Karyawan Lancar</option>
                    <option value="5">Gaji Karyawan Lancar dan Ada Bonus</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="cb_pengelolaan" class="block mb-2 text-xs font-medium text-gray-900">Kemampuan Pengelolaan</label>
                <select name="cb_pengelolaan" id="cb_pengelolaan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Perusahaan Mengalami Kerugian Jauh Dari Nilai Titiik Impas</option>
                    <option value="2">Perusahan Mengalami Sedikit Kerugian Dari Nilai Titik Impas</option>
                    <option value="3">Laba Perusahaan Mencapai Titik Impas</option>
                    <option value="4">Laba Sesuai Target</option>
                    <option value="5">Laba Lebih Dari Target Yang Ditentukan</option>
                </select>
            </div>

            {{-- <div>
                <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Net Profit Margin</label>
                <input name="net_profit_margin" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> --}}
            
            <div>
                <label for="cb_dscr" class="block mb-2 text-xs font-medium text-gray-900">DSCR</label>
                <input name="cb_dscr" type="text" id="cb_dscr" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>

            <div class= "min-w-xl">
                <label for="teh_utilisasi" class="block mb-2 text-xs font-medium text-gray-900">Utilisasi Kapasitas Usaha</label>
                <select name="teh_utilisasi" id="teh_utilisasi" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Kurang dari 50%</option>
                    <option value="2">50% - 75%</option>
                    <option value="3">Lebih dari 75%</option>
                </select>
            </div>
        
            <div class= "min-w-xl">
                <label for="teh_lama_usaha" class="block mb-2 text-xs font-medium text-gray-900">Lama Usaha</label>
                <select name="teh_lama_usaha" id="teh_lama_usaha" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">2 Tahun</option>
                    <option value="2">4 Tahun</option>
                    <option value="3"> > 4 Tahun</option>
                </select>
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">APPROVED</span>
                </p>
            </div>
    </section>
</form>
@endsection