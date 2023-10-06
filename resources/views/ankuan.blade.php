@extends ('partial.mainnota')

@section('container')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

<section id="permohonan" class="my-4">
    <p class="block py-4 text-base font-semibold text-gray-900">
        A. Aspek Agunan dan Asuransi
    </p>

    <div class="md:flex md:flex-row mb-4 md:justify-between">
        <div class="space-y-4 w-full">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Kepemilikan</label>
                <input name="kepemilikan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nilai Agunan</label>
                <input name="nilai_agunan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pengikatan</label>
                <input name="pengikatan"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
    
        <div class="space-y-4 w-full">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Marketability</label>
                <input name="marketability"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Penguasaan</label>
                <input name="penguasaan" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Asuransi</label>
                <input name="asuransi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
        <div class=" pt-6">
            <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
        </div>
    </div>
    
</section>

<section class="my-4">
    <p class="block py-4 text-base font-semibold text-gray-900">
        B. Tabel Agunan dan Asuransi
    </p>
    <div class="md:flex md:flex-row mb-4 md:justify-between">
        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
        
                        <table class=" divide-y divide-gray-20 w-full table-fixed overflow-auto whitespace-normal">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Jenis
                                    </th>
        
                                    <th scope="col" class="px-4 py-3.5 w-80 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Bukti Milik
                                    </th>
        
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Keterangan
                                    </th>
        
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Nilai
                                    </th>
        
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                        Save Margin
                                    </th>
        
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-20">
                                @foreach($data_tabel_agunan_asuransi as $data)
                                <tr>
                                    @if($data->JENIS != null)
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                            <p class="text-sm font-bold text-center text-gray-600">{{ $data->JENIS }}</p>
                                    </td>
                                    @else
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-bold text-center text-gray-600">-</p>
                                    </td>
                                    @endif

                                    @if($data->BUKTI_MILIK != null)
                                    <td class="px-4 py-4 whitespace-normal">
                                            <p class="text-sm font-normal text-center text-gray-600">{{ $data->BUKTI_MILIK }}</p>
                                    </td>
                                    @else
                                    <td class="px-4 py-4 whitespace-normal">
                                        <p class="text-sm font-normal text-center text-gray-600">-</p>
                                    </td>
                                    @endif

                                    @if($data->KET != null)
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">{{ $data->KET }}</p>
                                    </td>
                                    @else
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">-</p>
                                    </td>
                                    @endif
        
                                    <td class="px-4 py-4 whitespace-nowrap">
                                            <p class="text-sm font-normal text-center text-gray-600">{{ $data->NILAI }}</p>
                                    </td>
        
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">{{ $data->SAVE_MARGIN }}</p>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        {{ $data_tabel_agunan_asuransi->links() }}
    </div>
</section>

<form method="post" action="{{ Route('tambah_resiko') }}">
    @csrf
    <section class="space-y-4 my-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Analisa Resiko
        </p>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">1. Resiko</label>
            <textarea name="resiko" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Resiko..."></textarea>        
        </div>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">2. Mitigasi Resiko</label>
            <textarea name="mitigasi_resiko" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Mitigasi Resiko..."></textarea>        
        </div>

        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Catatan Usulan</label>
            <textarea name="catatan_usulan" id="ketpeng" rows="4" class=" block p-2.5 w-full h-10 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Usulan..."></textarea>        
        </div>
        <div class=" pt-6">
            <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
        </div>  
    </section>
</form>
@endsection
