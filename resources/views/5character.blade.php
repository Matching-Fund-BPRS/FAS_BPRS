@extends ('partial.mainnota')

@section('container')

<form method="post" action="{{ route('postCharacter') }}">
    <section id="character" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            @csrf
            Aspek Character
        </p>
        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Tanggung Jawab</label>
            <select name="tanggung_jawab" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Keterbukaan</label>
            <select name="keterbukaan" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Kedisiplinan</label>
            <select name="kedisiplinan" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Menepati Janji</label>
            <select name="menepati_janji" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Integritas dan Reputasi</label>
            <select name="integritas_reputasi" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Account Behaviour</label>
            <select name="account_behaviour" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Kemauan Bekerja Keras</label>
            <select name="kemauan_bekerja_keras" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>
        
        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Kejujuran</label>
            <select name="kejujuran" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>
        
        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Reputasi dengan Rekan Bisnis</label>
            <select name="reputasi_rekan_bisnis" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
            </select>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
            <p class="text-base">
                Hasil : <span class="text-blue-700 font-bold"> - </span>
            </p>
        </div>
    </section>
</form>

@endsection