@extends ('partial.mainnota')

@section('container')
<form method="POST" action="/dashboard/5syariah/tambah">
    @csrf
    <section id="syariah" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Syariah
        </p>
        <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
            <div class= "min-w-xl">
                <label for="cu_pasokan" class="block mb-2 text-xs font-medium text-gray-900">Sertifikasi</label>
                <select name="sertifikasi" id="cu_pasokan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($syariah_nasabah != null)
                        <option {{ $syariah_nasabah->SY_SERTIFIKASI_HALAL == 1 ? 'selected' : ''}} value="1"> Tidak menentu </option>
                        <option {{ $syariah_nasabah->SY_SERTIFIKASI_HALAL == 2 ? 'selected' : ''}} value="2"> Supplier terbatas </option>
                    @else
                        <option value="1"> Memiliki sertifikat halal </option>
                        <option value="2"> Tidak memiliki sertifikat halal </option>
                    @endif
                </select>
            </div>

            <div>
                <label for="cb_dscr" class="block mb-2 text-xs font-medium text-gray-900">Persentase Hutang Berbasis Bunga</label>
                <div class="flex items-center">
                <input value="{{ $syariah_nasabah->SY_JUMLAH_HUTANG ?? 0}}" name="jumlah_hutang" type="number" max="100" id="cb_dscr" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                    %
                </p>
                </div>
            </div>

            <div>
                <label for="cb_dscr" class="block mb-2 text-xs font-medium text-gray-900">Presentase Pendapatan Non Halal</label>
                <div class="flex items-center">
                    <input value="{{ $syariah_nasabah->SY_PRESENTASE_NON_SYARIAH ?? 0}}" name="presentase" type="number" max="100" type="text" id="cb_dscr" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        %
                    </p>
                </div>
                
            </div>

            <div class= "min-w-xl">
                <label for="pem_kebutuhan" class="block mb-2 text-xs font-medium text-gray-900">Akad usaha</label>
                <select name="akad_usaha" id="pem_kebutuhan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($syariah_nasabah == null)
                        <option value="1">Transaksi Menggunakan Akad Yang Bertentangan Dengan Syariah </option>
                        <option value="2">Transaksi Menggunakan Akad Yang Tidak Bertentangan Dengan Syariah </option>
                    @else
                        <option {{ $syariah_nasabah->SY_AKAD_USAHA == 1 ? 'selected' : ''}} value="1">Transaksi Menggunakan Akad Yang Bertentangan Dengan Syariah </option>
                        <option {{ $syariah_nasabah->SY_AKAD_USAHA == 2 ? 'selected' : ''}} value="2">Transaksi Menggunakan Akad Yang Tidak Bertentangan Dengan Syariah </option>
                    @endif
                </select>
            </div>
        
            <div class= "min-w-xl">
                <label for="cu_kecakapan" class="block mb-2 text-xs font-medium text-gray-900">Jenis Barang Usaha</label>
                <select name="jenis_barang_usaha" id="cu_kecakapan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($syariah_nasabah == null)
                        <option value="1">Barang atau jasa yang di produksi mengandung hal hal yang bertentang dengan prinsip syariah</option>
                        <option value="2">Barang atau jasa yang di produksi tidak mengandung hal hal yang bertentang dengan prinsip syariah</option>
                    @else
                        <option {{ $syariah_nasabah->SY_JENIS_BARANG == 1 ? 'selected' : ''}} value="1">Barang atau jasa yang di produksi mengandung hal hal yang bertentang dengan prinsip syariah</option>
                        <option {{ $syariah_nasabah->SY_JENIS_BARANG == 1 ? 'selected' : ''}} value="2">Barang atau jasa yang di produksi tidak mengandung hal hal yang bertentang dengan prinsip syariah</option>
                    @endif
                </select>
            </div>



            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold"> {{ number_format(($scoring_syariah * 100), 2) . '%' }}</span>
                </p>
            </div>
    </section>
</form>

@if(session('message'))
<script>
    alert('Berhasil menyimpan data!')
</script>
@endif

@endsection