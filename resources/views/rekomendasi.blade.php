@extends ('partial.mainnota')

@section('container')

@if($rekomendasi_nasabah == null)
<form method="post" action="{{ Route('tambah_rekomendasi') }}">
    @csrf
    <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
    <div class=" my-4 space-y-4">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Plafond</label>
            <input name="plafond"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sifat</label>
            <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Murabahah</option>
                <option value="2">Musyarakah</option>
                <option value="3">Mudarabah</option>
                <option value="4">Ijaroh</option>
                <option value="5">Rahn</option>
                <option value="6">Qord</option>
            </select>
        </div>

        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Jenis Permohonan</label>
           
            <select name="jenis_permohonan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Baru</option>
                <option value="2"> Tambahan </option>
                <option value="3"> Tambahan dan Perpanjangan </option>
            </select>
        </div>

        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
           
            <select name="tujuan_penggunaan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Modal Kerja</option>
                <option value="2">Investasi</option>
                <option value="3">Konsumsi</option>
            </select>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Margin</label>
                <div class="flex flex-row">
                    <input name="margin" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        % per Bulan
                    </p>
                </div>
            </div>

            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bayar Pokok</label>
                <div class="flex flex-row">
                    <input name="bayar_pokok" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        kali
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Jangka Waktu</label>
                <div class="flex flex-row">
                    <input name="jangka_waktu" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        Bulan
                    </p>
                </div>
            </div>

            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bagi Hasil Bank</label>
                <div class="flex flex-row">
                    <input name="bagi_hasil_bank"type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        %
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Angsuran / Bulan</label>
                <div class="flex flex-row">
                    <input name="angsuran_bulan" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        
                    </p>
                </div>
            </div>

            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bagi Hasil Mudharib</label>
                <div class="flex flex-row">
                    <input name="bagi_hasil_mudharib" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        %
                    </p>
                </div>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Provisi</label>
                <input name="provisi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Notaris</label>
                <input name="biaya_notaris" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Administrasi</label>
                <input name="administrasi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Asuransi</label>
                <input name="biaya_asuransi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Materai</label>
                <input name="biaya_materai" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lainnya</label>
                <input name="biaya_lainnya" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
        <div class=" pt-6">
            <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
        </div>
    </div>
</form>
@else
<form method="post" action="/dashboard/rekomendasi/{{ $nasabah->ID_NASABAH }}/edit">
    @csrf
    <div class=" my-4 space-y-4">

        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Plafond</label>
            <input value="{{ $rekomendasi_nasabah->LIMIT_KREDIT }}" name="plafond"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sifat</label>
            <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 1) selected @endif value="1">Murabahah</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 2) selected @endif value="2">Musyarakah</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 3) selected @endif value="3">Mudarabah</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 4) selected @endif value="4">Ijaroh</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 5) selected @endif value="5">Rahn</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 6) selected @endif value="6">Qord</option>
            </select>
        </div>

        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Jenis Permohonan</label>
            <input value="{{ $rekomendasi_nasabah->JENIS_PERMOHONAN }}" name="jenis_permohonan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>

        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
            <input value="{{ $rekomendasi_nasabah->TUJUAN }}" name="tujuan_penggunaan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Margin</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->BUNGA }}" name="margin" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        % per Bulan
                    </p>
                </div>
            </div>

            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bayar Pokok</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->BAYAR_POKOK }}" name="bayar_pokok" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        kali
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Jangka Waktu</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->JANGKA_WAKTU }}" name="jangka_waktu" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        Bulan
                    </p>
                </div>
            </div>

            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bagi Hasil Bank</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->BASIL_BANK }}" name="bagi_hasil_bank"type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        %
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Angsuran / Bulan</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->ANGSURAN }}" name="angsuran_bulan" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        
                    </p>
                </div>
            </div>

            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bagi Hasil Mudharib</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->BASIL_DEB }}" name="bagi_hasil_mudharib" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        %
                    </p>
                </div>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Provisi</label>
                <input value="{{ $rekomendasi_nasabah->PROVISI }}" name="provisi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Notaris</label>
                <input value="{{ $rekomendasi_nasabah->NOTARIS }}" name="biaya_notaris" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Administrasi</label>
                <input value="{{ $rekomendasi_nasabah->ADMINISTRASI }}"name="administrasi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Asuransi</label>
                <input value="{{ $rekomendasi_nasabah->ASURANSI }}" name="biaya_asuransi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Materai</label>
                <input value="{{ $rekomendasi_nasabah->MATERAI }}" name="biaya_materai" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lainnya</label>
                <input value="{{ $rekomendasi_nasabah->LAINNYA }}" name="biaya_lainnya" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
        <div class=" pt-6">
            <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
        </div>
    </div>
</form>
@endif

@if(session('success-edit'))
    <script>
        alert("Data berhasil diperbarui!")    
    </script>
@endif

@if(session('success-add'))
    <script>
        alert("Data berhasil ditambahkan!")    
    </script>
@endif


@endsection