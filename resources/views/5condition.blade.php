@extends ('partial.mainnota')

@section('container')

@if($condition_nasabah == null)
<form method="post" action="{{ route('postCondition') }}">
    @csrf
    <section id="condition" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Condition
        </p>
            <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
            <div class= "min-w-xl">
                <label for="cu_pasokan" class="block mb-2 text-xs font-medium text-gray-900">Pengadaan barang Baku</label>
                <select name="cu_pasokan" id="cu_pasokan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Tidak menentu </option>
                    <option value="2"> Supplier terbatas </option>
                    <option value="3"> Mudah didapat </option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="cu_konsumen" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Pelanggan</label>
                <select name="cu_konsumen" id="cu_konsumen" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Lebih sedikit dari usaha sejenis </option>
                    <option value="2"> Sama dari usaha sejenis </option>
                    <option value="3"> Diatas dari usaha sejenis </option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="pem_ketergantungan" class="block mb-2 text-xs font-medium text-gray-900">Prospek Usaha</label>
                <select name="pem_ketergantungan" id="pem_ketergantungan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Prospek Usaha Cukup Baik </option>
                    <option value="2"> Prospek Usaha Cukup Baik dan Berkembang </option>
                    <option value="3"> Prospek Usaha Sangat Baik dan Berkembang Pesat </option>


                </select>
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
                    Hasil : <span class="text-blue-700 font-bold">APPROVED</span>
                </p>
            </div>
    </section>
</form>
@else
<form method="post" action="/dashboard/5condition/{{ $nasabah->ID_NASABAH  }}/edit" >
    @csrf
    <section id="condition" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Condition
        </p>
            <div class= "min-w-xl">
                <label for="cu_pasokan" class="block mb-2 text-xs font-medium text-gray-900">Pengadaan barang Baku</label>
                <select name="cu_pasokan" id="cu_pasokan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                   @if($condition_nasabah->CU_PASOKAN == 1)
                    <option value="1" selected> Tidak menentu </option>
                    <option value="2"> Supplier terbatas </option>
                    <option value="3"> Mudah didapat </option>
                    @elseif($condition_nasabah->CU_PASOKAN == 2)
                    <option value="1"> Tidak menentu </option>
                    <option value="2" selected> Supplier terbatas </option>
                    <option value="3"> Mudah didapat </option>
                    @elseif($condition_nasabah->CU_PASOKAN == 3)
                    <option value="1"> Tidak menentu </option>
                    <option value="2" > Supplier terbatas </option>
                    <option value="3" selected> Mudah didapat </option>
                    @else
                    <option value="1"> Tidak menentu </option>
                    <option value="2" > Supplier terbatas </option>
                    <option value="3"> Mudah didapat </option>
                    @endif
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="cu_konsumen" class="block mb-2 text-xs font-medium text-gray-900">Jumlah Pelanggan</label>
                <select name="cu_konsumen" id="cu_konsumen" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($condition_nasabah->CU_KONSUMEN == 1)
                    <option value="1" selected> Lebih sedikit dari usaha sejenis </option>
                    <option value="2"> Sama dari usaha sejenis </option>
                    <option value="3"> Diatas dari usaha sejenis </option>
                    @elseif($condition_nasabah->CU_KONSUMEN == 2)
                    <option value="1" > Lebih sedikit dari usaha sejenis </option>
                    <option value="2" selected> Sama dari usaha sejenis </option>
                    <option value="3"> Diatas dari usaha sejenis </option>
                    @elseif($condition_nasabah->CU_KONSUMEN == 3)
                    <option value="1"> Lebih sedikit dari usaha sejenis </option>
                    <option value="2"> Sama dari usaha sejenis </option>
                    <option value="3" selected> Diatas dari usaha sejenis </option>
                    @else
                    <option value="1" > Lebih sedikit dari usaha sejenis </option>
                    <option value="2"> Sama dari usaha sejenis </option>
                    <option value="3"> Diatas dari usaha sejenis </option>
                    @endif
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="pem_ketergantungan" class="block mb-2 text-xs font-medium text-gray-900">Prospek Usaha</label>
                <select name="pem_ketergantungan" id="pem_ketergantungan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($condition_nasabah->PEM_KETERGANTUNGAN == 1)
                    <option value="1" selected> Prospek Usaha Cukup Baik </option>
                    <option value="2"> Prospek Usaha Cukup Baik dan Berkembang </option>
                    <option value="3"> Prospek Usaha Sangat Baik dan Berkembang Pesat </option>
                    @elseif($condition_nasabah->PEM_KETERGANTUNGAN == 2)
                    <option value="1"> Prospek Usaha Cukup Baik </option>
                    <option value="2" selected> Prospek Usaha Cukup Baik dan Berkembang </option>
                    <option value="3"> Prospek Usaha Sangat Baik dan Berkembang Pesat </option>
                    @elseif($condition_nasabah->PEM_KETERGANTUNGAN == 3)
                    <option value="1"> Prospek Usaha Cukup Baik </option>
                    <option value="2"> Prospek Usaha Cukup Baik dan Berkembang </option>
                    <option value="3" selected> Prospek Usaha Sangat Baik dan Berkembang Pesat </option>
                    @else
                    <option value="1"> Prospek Usaha Cukup Baik </option>
                    <option value="2"> Prospek Usaha Cukup Baik dan Berkembang </option>
                    <option value="3"> Prospek Usaha Sangat Baik dan Berkembang Pesat </option>
                    @endif

                </select>
            </div>

            <div class= "min-w-xl">
                <label for="pem_kebutuhan" class="block mb-2 text-xs font-medium text-gray-900">Kebutuhan Masyarakat Terhadap Produk</label>
                <select name="pem_kebutuhan" id="pem_kebutuhan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($condition_nasabah->PEM_KEBUTUHAN == 1)
                    <option value="1" selected>Diperlukan Hanya pada Waktu Tertentu</option>
                    <option value="2">Diperlukan Tinggi pada Waktu Tertentu</option>
                    <option value="3">Diatas Sepanjang Tahun</option>
                    @elseif($condition_nasabah->PEM_KEBUTUHAN == 2)
                    <option value="1">Diperlukan Hanya pada Waktu Tertentu</option>
                    <option value="2" selected>Diperlukan Tinggi pada Waktu Tertentu</option>
                    <option value="3">Diatas Sepanjang Tahun</option>
                    @elseif($condition_nasabah->PEM_KEBUTUHAN == 3)
                    <option value="1">Diperlukan Hanya pada Waktu Tertentu</option>
                    <option value="2">Diperlukan Tinggi pada Waktu Tertentu</option>
                    <option value="3" selected>Diatas Sepanjang Tahun</option>
                    @else
                    <option value="1">Diperlukan Hanya pada Waktu Tertentu</option>
                    <option value="2">Diperlukan Tinggi pada Waktu Tertentu</option>
                    <option value="3">Diatas Sepanjang Tahun</option>
                    @endif
                </select>
            </div>
        
            <div class= "min-w-xl">
                <label for="cu_kecakapan" class="block mb-2 text-xs font-medium text-gray-900">Kecakapan dalam Berusaha</label>
                <select name="cu_kecakapan" id="cu_kecakapan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($condition_nasabah->CU_KECAKAPAN == 1)
                    <option value="1" selected>Sangat Tidak Cakap dalam Berusaha</option>
                    <option value="2">Kurang Cakap dalam Berusaha</option>
                    <option value="3">Netral / Sedang dalam Kecakapan Berusaha</option>
                    <option value="4">Cakap dalam Berusaha</option>
                    <option value="5">Sangat Cakap dalam Berusaha</option>
                    @elseif($condition_nasabah->CU_KECAKAPAN == 2)
                    <option value="1">Sangat Tidak Cakap dalam Berusaha</option>
                    <option value="2" selected>Kurang Cakap dalam Berusaha</option>
                    <option value="3">Netral / Sedang dalam Kecakapan Berusaha</option>
                    <option value="4">Cakap dalam Berusaha</option>
                    <option value="5">Sangat Cakap dalam Berusaha</option>
                    @elseif($condition_nasabah->CU_KECAKAPAN == 3)
                    <option value="1">Sangat Tidak Cakap dalam Berusaha</option>
                    <option value="2">Kurang Cakap dalam Berusaha</option>
                    <option value="3" selected>Netral / Sedang dalam Kecakapan Berusaha</option>
                    <option value="4">Cakap dalam Berusaha</option>
                    <option value="5">Sangat Cakap dalam Berusaha</option>
                    @elseif($condition_nasabah->CU_KECAKAPAN == 4)
                    <option value="1">Sangat Tidak Cakap dalam Berusaha</option>
                    <option value="2">Kurang Cakap dalam Berusaha</option>
                    <option value="3">Netral / Sedang dalam Kecakapan Berusaha</option>
                    <option value="4" selected>Cakap dalam Berusaha</option>
                    <option value="5">Sangat Cakap dalam Berusaha</option>
                    @elseif($condition_nasabah->CU_KECAKAPAN == 5)
                    <option value="1">Sangat Tidak Cakap dalam Berusaha</option>
                    <option value="2">Kurang Cakap dalam Berusaha</option>
                    <option value="3">Netral / Sedang dalam Kecakapan Berusaha</option>
                    <option value="4">Cakap dalam Berusaha</option>
                    <option value="5" selected>Sangat Cakap dalam Berusaha</option>
                    @else
                    <option value="1">Sangat Tidak Cakap dalam Berusaha</option>
                    <option value="2">Kurang Cakap dalam Berusaha</option>
                    <option value="3">Netral / Sedang dalam Kecakapan Berusaha</option>
                    <option value="4">Cakap dalam Berusaha</option>
                    <option value="5">Sangat Cakap dalam Berusaha</option>
                    @endif
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="cu_eksternal" class="block mb-2 text-xs font-medium text-gray-900">Faktor Eksternal</label>
                <select name="cu_eksternal" id="cu_eksternal" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    @if($condition_nasabah->CU_EKSTERNAL == 1)
                    <option value="1" selected>Risiko Faktor Eksternal Perusahaan Sangat Tinggi</option>
                    <option value="2">Risiko Faktor Eksternal Perusahaan Tinggi</option>
                    <option value="3">Risiko Faktor Eksternal Perusahaan Sedang</option>
                    <option value="4">Risiko Faktor Eksternal Perusahaan Rendah</option>
                    <option value="5">Risiko Faktor Eksternal Perusahaan Sangat Rendah</option>
                    @elseif($condition_nasabah->CU_EKSTERNAL == 2)
                    <option value="1">Risiko Faktor Eksternal Perusahaan Sangat Tinggi</option>
                    <option value="2" selected>Risiko Faktor Eksternal Perusahaan Tinggi</option>
                    <option value="3">Risiko Faktor Eksternal Perusahaan Sedang</option>
                    <option value="4">Risiko Faktor Eksternal Perusahaan Rendah</option>
                    <option value="5">Risiko Faktor Eksternal Perusahaan Sangat Rendah</option>
                    @elseif($condition_nasabah->CU_EKSTERNAL == 3)
                    <option value="1">Risiko Faktor Eksternal Perusahaan Sangat Tinggi</option>
                    <option value="2">Risiko Faktor Eksternal Perusahaan Tinggi</option>
                    <option value="3" selected>Risiko Faktor Eksternal Perusahaan Sedang</option>
                    <option value="4">Risiko Faktor Eksternal Perusahaan Rendah</option>
                    <option value="5">Risiko Faktor Eksternal Perusahaan Sangat Rendah</option>
                    @elseif($condition_nasabah->CU_EKSTERNAL == 4)
                    <option value="1">Risiko Faktor Eksternal Perusahaan Sangat Tinggi</option>
                    <option value="2">Risiko Faktor Eksternal Perusahaan Tinggi</option>
                    <option value="3">Risiko Faktor Eksternal Perusahaan Sedang</option>
                    <option value="4" selected>Risiko Faktor Eksternal Perusahaan Rendah</option>
                    <option value="5">Risiko Faktor Eksternal Perusahaan Sangat Rendah</option>
                    @elseif($condition_nasabah->CU_EKSTERNAL == 5)
                    <option value="1">Risiko Faktor Eksternal Perusahaan Sangat Tinggi</option>
                    <option value="2">Risiko Faktor Eksternal Perusahaan Tinggi</option>
                    <option value="3">Risiko Faktor Eksternal Perusahaan Sedang</option>
                    <option value="4">Risiko Faktor Eksternal Perusahaan Rendah</option>
                    <option value="5" selected>Risiko Faktor Eksternal Perusahaan Sangat Rendah</option>
                    @else
                    <option value="1">Risiko Faktor Eksternal Perusahaan Sangat Tinggi</option>
                    <option value="2">Risiko Faktor Eksternal Perusahaan Tinggi</option>
                    <option value="3">Risiko Faktor Eksternal Perusahaan Sedang</option>
                    <option value="4">Risiko Faktor Eksternal Perusahaan Rendah</option>
                    <option value="5">Risiko Faktor Eksternal Perusahaan Sangat Rendah</option>
                    @endif
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
@endif

@if(session('message-edit'))
<script>
    alert('Berhasil memperbarui data!')
</script>
@elseif(session('message-add'))
<script>
    alert('Berhasil menambahkan data!')
</script>
@endif

@endsection