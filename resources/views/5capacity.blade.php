@extends ('partial.mainnota')

@section('container')

@if($capacity_nasabah == null)
<form method="post" action="{{ route('postCapacity') }}">
    @csrf
    <section id="capacity" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Capacity
        </p>
        <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
            <div class= "min-w-xl">
                <label for="cb_manajemen_sdm" class="block mb-2 text-xs font-medium text-gray-900">Manajemen Keuangan</label>
                <select name="cb_manajemen_sdm" id="cb_manajemen_sdm" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Tidak Memiliki sistem Pencatan  keuangan , Tidak Memiliki karyawan dalam bidang pencatatan keuangan</option>
                    <option value="2">Memiliki Sistem Pencatan keuangan yang  baik, Tidak memliki karywan dalam bidang pencatatan keuangan</option>
                    <option value="3">Memiliki Sisem Pencattan keuangan yang Baik,Membuat Laporan Keuangan Secara Periodik, Tidak Memiliki karyawan dalam bidang pencatatan keuangan</option>
                    <option value="4">Memiliki Sistem pencatatan keuangan yang baik, Membuat laporan Keuangan Secara Periodik, dan Memiliki karyawan yang ahli dalam bidang pencatatan keuangan</option>
                    <option value="5">Memiliki Sistem pencatatan keuangan yang baik, Membuat laporan keuangan secara periodik dan di audit oleh akuntan publik, serta Memiliki karyawan yang ahli dalam bidang pencatatan keuangan</option> 
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="cb_pengelolaan" class="block mb-2 text-xs font-medium text-gray-900">Kemampuan Pengelolaan</label>
                <select name="cb_pengelolaan" id="cb_pengelolaan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Pengelolaan perusahaan masih sangat tergantung pada pemilik secara individu dan banyak melibatkan keluarga</option>
                    <option value="2">Pengeloalan perusahaan tergantung dengan pengelolaan individu dan tidak melibatkan banyak keluarga</option>
                    <option value="3">Pengelolan perusahan tidak tergantung dengan individu </option>
                    <option value="4">Pengelolaan perusahaan menggunakan manajemen yang profesional</option>
                    <option value="5">perusahaan dikelola dengan menggunakan tenaga manajemen profesional dan modern</option>
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
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">{{ number_format(($output * 100), 2) . '%' }}</span>
                </p>
            </div>
    </section>
</form>
@else
<form method="post" action="/dashboard/5capacity/{{ $nasabah->ID_NASABAH }}/edit">
    @csrf
    <section id="capacity" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Capacity
        </p>

            <div class= "min-w-xl">
                <label for="cb_manajemen_sdm" class="block mb-2 text-xs font-medium text-gray-900">Manajemen Keuangan</label>
                <select name="cb_manajemen_sdm" id="cb_manajemen_sdm" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($capacity_nasabah->CB_MANAJEMEN_SDM == 1) selected @endif value="1">Tidak Memiliki sistem Pencatan  keuangan , Tidak Memiliki karyawan dalam bidang pencatatan keuangan</option>
                    <option @if($capacity_nasabah->CB_MANAJEMEN_SDM == 2) selected @endif value="2"> Memiliki Sistem Pencatan keuangan yang  baik, Tidak memliki karywan dalam bidang pencatatan keuangan</option>
                    <option @if($capacity_nasabah->CB_MANAJEMEN_SDM == 3) selected @endif value="3"  > Memiliki Sisem Pencattan keuangan yang Baik,Membuat Laporan Keuangan Secara Periodik, Tidak Memiliki karyawan dalam bidang pencatatan keuangan</option>
                    <option @if($capacity_nasabah->CB_MANAJEMEN_SDM == 4) selected @endif value="4"> Memiliki Sistem pencatatan keuangan yang baik, Membuat laporan Keuangan Secara Periodik, dan Memiliki karyawan yang ahli dalam bidang pencatatan keuangan</option>
                    <option @if($capacity_nasabah->CB_MANAJEMEN_SDM == 5) selected @endif value="5"> Memiliki Sistem pencatatan keuangan yang baik, Membuat laporan keuangan secara periodik dan di audit oleh akuntan publik, serta Memiliki karyawan yang ahli dalam bidang pencatatan keuangan</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="cb_pengelolaan" class="block mb-2 text-xs font-medium text-gray-900">Kemampuan Pengelolaan</label>
                <select name="cb_pengelolaan" id="cb_pengelolaan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($capacity_nasabah->CB_PENGELOLAAN == 1) selected @endif value="1"> Pengelolaan perusahaan masih sangat tergantung pada pemilik secara individu dan banyak melibatkan keluarga </option>
                    <option @if($capacity_nasabah->CB_PENGELOLAAN == 2) selected @endif  value="2"> Pengelolaan perusahaan tergantung dengan pengelolaan individu dan tidak melibatkan banyak keluarga </option>
                    <option @if($capacity_nasabah->CB_PENGELOLAAN == 3) selected @endif  value="3"> Pengelolaan perusahaaan tergantung dengan pengelolaan individu dan melibatkan banyak keluarga </option>
                    <option @if($capacity_nasabah->CB_PENGELOLAAN == 4) selected @endif  value="4"> Pengelolaan perusahaan menggunakan manajemen yang profesional</option>
                    <option @if($capacity_nasabah->CB_PENGELOLAAN == 5) selected @endif  value="5"> Pengelolaan perusahaaan menggunakan manajemen yang profesional dan modern</option>
                </select>
            </div>

            {{-- <div>
                <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Net Profit Margin</label>
                <input name="net_profit_margin" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> --}}
            
            <div>
                <label for="cb_dscr" class="block mb-2 text-xs font-medium text-gray-900">DSCR</label>
                <input value="{{ $capacity_nasabah->CB_DSCR }}" name="cb_dscr" type="text" id="cb_dscr" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" readonly required>
            </div>

            <div class= "min-w-xl">
                <label for="teh_utilisasi" class="block mb-2 text-xs font-medium text-gray-900">Utilisasi Kapasitas Usaha</label>
                <select name="teh_utilisasi" id="teh_utilisasi" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($capacity_nasabah->TEH_UTILISASI == 1) selected @endif value="1">Kurang dari 50%</option>
                    <option @if($capacity_nasabah->TEH_UTILISASI == 2) selected @endif value="2">50% - 75%</option>
                    <option @if($capacity_nasabah->TEH_UTILISASI == 3) selected @endif value="3">Lebih dari 75%</option>
                </select>
            </div>
        
            <div class= "min-w-xl">
                <label for="teh_lama_usaha" class="block mb-2 text-xs font-medium text-gray-900">Lama Usaha</label>
                <select name="teh_lama_usaha" id="teh_lama_usaha" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($capacity_nasabah->TEH_LAMA_USAHA == 1) selected @endif value="1">2 Tahun</option>
                    <option @if($capacity_nasabah->TEH_LAMA_USAHA == 2) selected @endif value="2">4 Tahun</option>
                    <option @if($capacity_nasabah->TEH_LAMA_USAHA == 3) selected @endif value="3"> > 4 Tahun</option>
                </select>
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">{{ number_format(($output * 100), 2) . '%' }}</span>
                </p>
            </div>
    </section>
</form>
@endif
@if($result_message != null)
    <script>
        alert("{{ $result_message }}")
    </script>
@endif
@endsection