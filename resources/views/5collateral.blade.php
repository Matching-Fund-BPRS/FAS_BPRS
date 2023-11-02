@extends ('partial.mainnota')

@section('container')


<form method="post" action="{{ route('postCollateral') }}">
    @csrf
    <section id="collateral" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Collateral
        </p>

            <div class= "min-w-xl">
                <label for="ca_nilai_agunan" class="block mb-2 text-xs font-medium text-gray-900">Nilai Agunan</label>
                <select name="ca_nilai_agunan" id="ca_nilai_agunan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Lebih kecil dari plafond</option>
                    <option value="2">Nilai Agunan sama dengan plafond</option>
                    <option value="3">Lebih besar dari plafond</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="pa_dokumen" class="block mb-2 text-xs font-medium text-gray-900">Dokumen dan Pengikatan</label>
                <select name="pa_dokumen" id="pa_dokumen" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Dok Lengkap, Nilai Agunan lebih kecil dari limit, diikat dibawah tangan </option>
                    <option value="2">Dok Lengkap, Nilai Agunan sama dengan limit, diikat dibawah tangan</option>
                    <option value="3">Dok Lengkap, Nilai Agunan lebih besar dari limit, diikat dibawah tangan</option>
                    <option value="4">Dok Lengkap, Nilai Agunan sama dengan limit, diikat notarial</option>
                    <option value="5">Dok Lengkap, Nilai Agunan lebih besar dari limit, diikat notarial</option>
                </select>
            </div>

            {{-- <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sertifikasi Klasifikasi</label>
                <select name="sertifikasi_klasifikasi" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                </select>
            </div> --}}

            <div class= "min-w-xl">
                <label for="leg_usaha" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Usaha (Izin-Izin)</label>
                <select name="leg_usaha" id="leg_usaha" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Tidak ada</option>
                    <option value="2"> Surat Keterangan Usaha</option>
                    <option value="3">SIUP</option>
                </select>
            </div>
        
            {{-- <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Asuransi</label>
                <select name="asuransi" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Tidak diasuransikan</option>
                    <option value="2"> Asuransi Jiwa</option>
                    <option value="3">Asuransi Pembiayaan</option>
                    <option value="4">Asuransi Jiwa dan Kerugian</option>
                </select>
            </div> --}}

            <div class= "min-w-xl">
                <label for="pengikatan" class="block mb-2 text-xs font-medium text-gray-900">Pengikatan</label>
                <select name="pengikatan" id="pengikatan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Tidak diikat sama sekali </option>
                    <option value="2">Diikat dibawah tangan</option>
                    <option value="3">Diikat notarial</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="marketability" class="block mb-2 text-xs font-medium text-gray-900">Marketability</label>
                <select name="marketability" id="marketability" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Cukup Marketable</option>
                    <option value="2">Marketable</option>
                    <option value="3">Sangat Marketable</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="kepemilikan" class="block mb-2 text-xs font-medium text-gray-900">Kepemilikan</label>
                <select name="kepemelikan" id="kepemilikan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Pihak satu derajat</option>
                    <option value="2">Pihak ketiga</option>
                    <option value="3">Milik sendiri</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="penguasaan" class="block mb-2 text-xs font-medium text-gray-900">Penguasaan</label>
                <select name="penguasaan" id="penguasaan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Tidak Ditempati</option>
                    <option value="2">Disewakan</option>
                    <option value="3">Ditempati sendiri</option>
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