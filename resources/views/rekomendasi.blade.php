@extends ('partial.mainnota')

@section('container')

<div class=" my-4 space-y-4">

    <div>
        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Plafond</label>
        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
    </div>

    <div class= "min-w-xl">
        <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sifat</label>
        <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
            <option value="US">Murabahah</option>
            <option value="CA">Musyarakah</option>
            <option value="FR">Mudarabah</option>
            <option value="FR">Ijaroh</option>
            <option value="FR">Rahn</option>
            <option value="FR">Qord</option>
        </select>
    </div>

    <div>
        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Jenis Permohonan</label>
        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
    </div>

    <div>
        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
    </div>

    <div class="grid grid-cols-2 max-w-md space-x-4">
        <div class="">
            <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Margin</label>
            <div class="flex flex-row">
                <input type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                    % per Bulan
                </p>
            </div>
        </div>

        <div class="">
            <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bayar Pokok</label>
            <div class="flex flex-row">
                <input type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
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
                <input type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                    Bulan
                </p>
            </div>
        </div>

        <div class="">
            <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bagi Hasil Bank</label>
            <div class="flex flex-row">
                <input type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
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
                <input type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                    
                </p>
            </div>
        </div>

        <div class="">
            <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Bagi Hasil Mudharib</label>
            <div class="flex flex-row">
                <input type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                    %
                </p>
            </div>
        </div>
    </div>

    <div class="flex space-x-4">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Provisi</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Notaris</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
    </div>

    <div class="flex space-x-4">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Administrasi</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Asuransi</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
    </div>

    <div class="flex space-x-4">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Materai</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lainnya</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>
    </div>

</div>



@endsection