@extends ('partial.mainnota')

@section('container')

<p class="block py-4 text-base font-semibold text-gray-900">
    Aspek Legalitas
</p>

<div class="lg:grid lg:grid-cols-2">
    <section class="my-4 space-y-4 max-w-lg">
        <p class="block py-4 text-sm font-semibold text-gray-900">
            Legalitas Usaha (Ijin-ijin)
        </p>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-gray-900">NPWP</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-gray-900">TDP</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-gray-900">SITU/ SIPTU</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-gray-900">Ijin HO</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
    </section>
    
    <section class="my-4 space-y-4 max-w-lg">
        <p class="block py-4 text-sm font-semibold text-gray-900">
            Legalitas Lain-lain
        </p>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-gray-900">KTP Suami/Istri</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-gray-900">Kartu Keluarga</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-gray-900">Surat Nikah</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
    </section>
</div>

<div style="float:left">
    <button type="submit" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
</div>

@endsection