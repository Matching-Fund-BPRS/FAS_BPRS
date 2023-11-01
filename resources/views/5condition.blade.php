@extends ('partial.mainnota')

@section('container')

<form method="post" action="{{ route('postCondition') }}">
    @csrf
    <section id="condition" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Condition
        </p>

            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Pengadaan barang Baku</label>
                <select name="pengadaan_barang_baku" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Pelanggan</label>
                <select name="jumlah_pelanggan" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Pesaing</label>
                <select name="jumlah_pesaing" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
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
        
            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Kecakapan dalam Berusaha</label>
                <select name="kecakapan_dalam_berusaha" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Faktor Eksternal</label>
                <select name="faktor_eksternal" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
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