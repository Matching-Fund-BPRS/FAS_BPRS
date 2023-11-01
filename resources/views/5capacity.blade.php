@extends ('partial.mainnota')

@section('container')

<form method="post" action="{{ route('postCapacity') }}">
    @csrf
    <section id="capacity" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Capacity
        </p>

            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Manajemen SDM</label>
                <select name="manajemen_sdm" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Gaji Karyawan Sering Telat dan Tidak Ada Bonus</option>
                    <option value="CA">Gaji Karyawan Kadang Kadang Telat</option>
                    <option value="FR">Gaji Karyawan Kurang Lancar dan Ada Bonus</option>
                    <option value="FR">Gaji Karyawan Lancar</option>
                    <option value="FR">Gaji Karyawan Lancar dan Ada Bonus</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Kemampuan Pengelolaan</label>
                <select name="kemampuan_pengelolaan" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Perusahaan Mengalami Kerugian Jauh Dari Nilai Titiik Impas</option>
                    <option value="CA">Perusahan Mengalami Sedikit Kerugian Dari Nilai Titik Impas</option>
                    <option value="FR">Laba Perusahaan Mencapai Titik Impas</option>
                    <option value="FR">Laba Sesuai Target</option>
                    <option value="FR">Laba Lebih Dari Target Yang Ditentukan</option>
                </select>
            </div>

            <div>
                <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Net Profit Margin</label>
                <input name="net_profit_margin" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            
            <div>
                <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">DSCR</label>
                <input name="dscr" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>

            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Utilisasi Kapasitas Usaha</label>
                <select name="utilisasi_kapasitas_usaha" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                </select>
            </div>
        
            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Lama Usaha</label>
                <select name="lama_usaha" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
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