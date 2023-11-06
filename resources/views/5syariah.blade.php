@extends ('partial.mainnota')

@section('container')

<section id="syariah" class="my-4 max-w-xl space-y-4">
    <p class="block py-4 text-base font-semibold text-gray-900">
        Aspek Syariah
    </p>
        <input name="id" value="" type="hidden">
        <div class= "min-w-xl">
            <label for="cu_pasokan" class="block mb-2 text-xs font-medium text-gray-900">Sertifikasi</label>
            <select name="cu_pasokan" id="cu_pasokan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1"> Tidak menentu </option>
                <option value="2"> Supplier terbatas </option>
            </select>
        </div>

        <div>
            <label for="cb_dscr" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Hutang</label>
            <input name="cb_dscr" type="text" id="cb_dscr" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>

        <div>
            <label for="cb_dscr" class="block mb-2 text-xs font-medium text-gray-900">Presentase Non-Syariah</label>
            <div class="flex items-center">
                <input name="cb_dscr" type="text" id="cb_dscr" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                    %
                </p>
            </div>
            
        </div>

        <div class= "min-w-xl">
            <label for="pem_kebutuhan" class="block mb-2 text-xs font-medium text-gray-900">Kebutuhan Masyarakat Terhadap Produk</label>
            <select name="pem_kebutuhan" id="pem_kebutuhan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Diperlukan Hanya pada Waktu Tertentu</option>
                <option value="2">Diperlukan Tinggi pada Waktu Tertentu</option>
                <option value="3">Diatas Sepanjang Tahun</option>
            </select>
        </div>
    
        <div class= "min-w-xl">
            <label for="cu_kecakapan" class="block mb-2 text-xs font-medium text-gray-900">Kecakapan dalam Berusaha</label>
            <select name="cu_kecakapan" id="cu_kecakapan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Sangat Tidak Cakap dalam Berusaha</option>
                <option value="2">Kurang Cakap dalam Berusaha</option>
                <option value="3">Netral / Sedang dalam Kecakapan Berusaha</option>
                <option value="4">Cakap dalam Berusaha</option>
                <option value="5">Sangat Cakap dalam Berusaha</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cu_eksternal" class="block mb-2 text-xs font-medium text-gray-900">Faktor Eksternal</label>
            <select name="cu_eksternal" id="cu_eksternal" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Risiko Faktor Eksternal Perusahaan Sangat Tinggi</option>
                <option value="2">Risiko Faktor Eksternal Perusahaan Tinggi</option>
                <option value="3">Risiko Faktor Eksternal Perusahaan Sedang</option>
                <option value="4">Risiko Faktor Eksternal Perusahaan Rendah</option>
                <option value="5">Risiko Faktor Eksternal Perusahaan Sangat Rendah</option>

            </select>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
            <p class="text-base">
                Hasil : <span class="text-blue-700 font-bold"></span>
            </p>
        </div>
</section>

@endsection