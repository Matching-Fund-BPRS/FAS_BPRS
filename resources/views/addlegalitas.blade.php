@extends ('partial.mainnota')

@section('container')

<p class="block py-4 text-base font-semibold text-black">
    Aspek Legalitas
</p>

<div class="lg:grid lg:grid-cols-2">
    <section class="my-4 space-y-4 max-w-lg">
        <p class="block py-4 text-sm font-semibold text-black">
            Legalitas Usaha (Ijin-ijin)
        </p>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-black">NPWP</label>
            <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-black dark:text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-black">TDP</label>
            <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-black dark:text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-black">SITU/ SIPTU</label>
            <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-black dark:text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-black">Ijin HO</label>
            <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-black dark:text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
    </section>
    
    <section class="my-4 space-y-4 max-w-lg">
        <p class="block py-4 text-sm font-semibold text-black">
            Legalitas Lain-lain
        </p>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-black">KTP Suami/Istri</label>
            <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-black dark:text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-black">Kartu Keluarga</label>
            <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-black dark:text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
        <div>
            <label for="omset" class="block mb-2 text-xs font-semibold text-black">Surat Nikah</label>
            <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-xs text-black dark:text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
    </section>
</div>

<div style="float:left">
    <button type="submit" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
</div>

@endsection