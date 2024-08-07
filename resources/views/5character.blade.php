@extends ('partial.mainnota')

@section('container')
@if($character_nasabah == null)
<form method="post" action="{{ route('postCharacter') }}">
    <section id="character" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-black">
            @csrf
            Aspek Character
        </p>
        <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
        <div class= "min-w-xl">
            <label for="cw_tanggung" class="block mb-2 text-xs font-medium text-black">Tanggung Jawab</label>
            <select name="cw_tanggung" id="cw_tanggung" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Tanggung Jawab</option>
                <option value="1">Kurang bertanggung Jawab dan Memiliki Reputasi yang Kurang Baik</option>
                <option value="2">Kurang Bertanggung Jawab</option>
                <option value="3"> Cukup Bertanggung Jawab</option>
                <option value="4">Bertanggung Jawab</option>
                <option value="5">Sangat Bertanggung Jawab dan Memiliki Reputasi yang Baik</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_terbuka" class="block mb-2 text-xs font-medium text-black">Keterbukaan</label>
            <select name="cw_terbuka" id="cw_terbuka" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Keterbukaan</option>
                <option value="1">Tidak Terbuka dan Cenderung Menyembunyikan Informasi Perusahaan</option>
                <option value="2">Penyampaian informasi tentang perusahaan kurang lengkap</option>
                <option value="3">Penyampaian informasi tentang perusahaan cukup lengkap</option>
                <option value="4">Penyampaian informasi tentang perusahaan lengkap</option>
                <option value="5">Penyampaian informasi tentang perusahaan secara lengkap dan sukarela</option>
               
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_disiplin" class="block mb-2 text-xs font-medium text-black">Kedisiplinan</label>
            <select name="cw_disiplin" id="cw_disiplin" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Kedisiplinan</option>
                <option value="1">Tidak ada bukti disiplin dalam penggunaan dana atau pemenuhan kewajiban keuangan (Tidak disiplin)</option>
                <option value="2">Beberapa aspek pengelolaan dana dan kewajiban keuangan mungkin belum sesuai standar (Kurang disiplin)</option>
                <option value="3">Kewajiban keuangan dipenuhi dan dana digunakan secara bertanggung jawab </option>
                <option value="4">Penggunaan dana dan pemenuhan kewajiban keuangan dilakukan dengan baik dan sesuai aturan (Disiplin)</option>
                <option value="5"> Sangat Disiplin dalam Melaksanakan Peraturan Perusahaan</option>

            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_janji" class="block mb-2 text-xs font-medium text-black">Menepati Janji</label>
            <select name="cw_janji" id="cw_janji" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Menepati Janji</option>
                <option value="1">Perusahan tidak tepat janji</option>
                <option value="2">Perusahan kadang tepat janji</option>
                <option value="3">Perusahan tepat janji</option>
                <option value="4">Perusahan sering tepat janji</option>
                <option value="5">Perusahaan selalu menepati janji terhadap pihak yang berhubungan dengan perusahaan dan pihak lainnya</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="pu_integritas" class="block mb-2 text-xs font-medium text-black">Integritas dan Reputasi</label>
            <select name="pu_integritas" id="pu_integritas" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Integritas dan Reputasi</option>
                <option value="1">Tidak jujur dan koperatif</option>
                <option value="2">Track record cukup baik, relasi sedikit, cukup koperatif </option>
                <option value="3">Track record baik dan kurang koperatif</option>
                <option value="4">Track record baik dan cukup koperatif</option>
                <option value="5">Track record baik dan koperatif</option>
               
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="pu_account_behavior" class="block mb-2 text-xs font-medium text-black">Account Behaviour</label>
            <select name="pu_account_behavior" id="pu_account_behavior" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Account Behaviour</option>
                <option value="1">Bermasalah</option>
                <option value="2">Pernah menunggak, mutasi rek atif</option>
                <option value="3">Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek tidak aktif</option>
                <option value="4">Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek kurang aktif</option>
                <option value="5">Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek aktif</option>

            </select>
        </div>

        <div class= "min-w-xl">
            <label for="man_kemauan" class="block mb-2 text-xs font-medium text-black">Kemauan Bekerja Keras</label>
            <select name="man_kemauan" id="man_kemauan" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Kemauan Bekerja Keras</option>
                <option value="1">Sulit memberikan keterangan atau dokumen</option>
                <option value="2"> Kurang antusias dalam memberikan keterangan atau dokumen</option>
                <option value="3">Membantu dalam setiap tahapan proses kredit</option>
            </select>
        </div>
        
        <div class= "min-w-xl">
            <label for="man_kejujuran" class="block mb-2 text-xs font-medium text-black">Kejujuran</label>
            <select name="man_kejujuran" id="man_kejujuran" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Kejujuran</option>
                <option value="1">Pernyataan banyak bertentangan dengan hasil verifikasi</option>
                <option value="2">Pernyataan tidak sesuai dengan hasil verifikasi</option>
                <option value="3">Pernyataan sesuai dengan hasil verifikasi</option>
            </select>
        </div>
        
        <div class= "min-w-xl">
            <label for="man_reputasi" class="block mb-2 text-xs font-medium text-black">Reputasi dengan Rekan Bisnis</label>
            <select name="man_reputasi" id="man_reputasi" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Reputasi dengan Rekan Bisnis</option>
                <option value="1"> Sulit memberikan perilaku dan bisnis yang disukai dan dijadikan panutan </option>
                <option value="2">Tidak ada keluhan dari rekan bisnis</option>
                <option value="3">Memberikan perilaku dan bisnis yang disukai dan dijadikan panutan</option>
            </select>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
            <p class="text-base">
            Hasil : <span class="text-blue-700 font-bold"> {{ number_format(($output * 100), 2) . '%' }} </span>
            </p>
        </div>
    </section>
</form>
@else
<form method="post" action="/dashboard/5character/{{ $nasabah->ID_NASABAH }}/edit">
    <section id="character" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-black">
            @csrf
            Aspek Character
        </p>
        <div class= "min-w-xl">
            <label for="cw_tanggung" class="block mb-2 text-xs font-medium text-black">Tanggung Jawab</label>
            <select name="cw_tanggung" id="cw_tanggung" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Tanggung Jawab</option>
                <option value="1" @if($character_nasabah->CW_TANGGUNG == 1) selected @endif > Kurang bertanggun Jawab dan Memiliki Reputasi yang Kurang Baik</option>
                <option value="2" @if($character_nasabah->CW_TANGGUNG == 2) selected @endif >Kurang Bertanggung Jawab</option>
                <option value="3" @if($character_nasabah->CW_TANGGUNG == 3) selected @endif > Cukup Bertanggung Jawab</option>
                <option value="4" @if($character_nasabah->CW_TANGGUNG == 4) selected @endif >Bertanggung Jawab</option>
                <option value="5" @if($character_nasabah->CW_TANGGUNG == 5) selected @endif >Sangat Bertanggung Jawab dan Memiliki Reputasi yang Baik</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_terbuka" class="block mb-2 text-xs font-medium text-black">Keterbukaan</label>
            <select name="cw_terbuka" id="cw_terbuka" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Keterbukaan</option>
                <option value="1" @if($character_nasabah->CW_TERBUKA == 1) selected @endif>Tidak Terbuka dan Cenderung Menyembunyikan Informasi Perusahaan</option>
                <option value="2" @if($character_nasabah->CW_TERBUKA == 2) selected @endif>Penyampaian informasi tentang perusahaan kurang lengkap</option>
                <option value="3" @if($character_nasabah->CW_TERBUKA == 3) selected @endif>Penyampaian informasi tentang perusahaan cukup lengkap</option>
                <option value="4" @if($character_nasabah->CW_TERBUKA == 4) selected @endif>Penyampaian informasi tentang perusahaan lengkap</option>
                <option value="5" @if($character_nasabah->CW_TERBUKA == 5) selected @endif>Penyampaian informasi tentang perusahaan secara lengkap dan sukarela</option>
               
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_disiplin" class="block mb-2 text-xs font-medium text-black">Kedisiplinan</label>
            <select name="cw_disiplin" id="cw_disiplin" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Kedisiplinan</option>
                <option value="1" @if($character_nasabah->CW_DISIPLIN == 1) selected @endif>Tidak ada bukti disiplin dalam penggunaan dana atau pemenuhan kewajiban keuangan (Tidak disiplin)</option>
                <option value="2" @if($character_nasabah->CW_DISIPLIN == 2) selected @endif>Beberapa aspek pengeloaan dana dan kewajiban keuangan mungkin tidak sesuai standar (Kurang disiplin)</option>
                <option value="3" @if($character_nasabah->CW_DISIPLIN == 3) selected @endif>Kewajiban keuangan dipenuhi dan dana digunakan secara bertanggung jawab</option>
                <option value="4" @if($character_nasabah->CW_DISIPLIN == 4) selected @endif>Penggunaan dana dan pemenuhan kewajiban keuangan dilakukan dengan baik dan sesuai aturan (Disiplin)</option>
                <option value="5" @if($character_nasabah->CW_DISIPLIN == 5) selected @endif>Tangat Disiplin dalam Melaksanakan Peraturan Perusahaan</option> 

            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_janji" class="block mb-2 text-xs font-medium text-black">Menepati Janji</label>
            <select name="cw_janji" id="cw_janji" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Menepati Janji</option>
                <option value="1" @if($character_nasabah->CW_JANJI == 1) selected @endif>Perusahan tidak tepat janji</option>
                <option value="2" @if($character_nasabah->CW_JANJI == 2) selected @endif>Perusahan kadang tepat janji</option>
                <option value="3" @if($character_nasabah->CW_JANJI == 3) selected @endif>Perusahan tepat janji</option>
                <option value="4" @if($character_nasabah->CW_JANJI == 4) selected @endif>Perusahan sering tepat janji</option>
                <option value="5" @if($character_nasabah->CW_JANJI == 5) selected @endif>Perusahan selalu tepat janji terhadap pihak yang berhungan dengan perusahan</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="pu_integritas" class="block mb-2 text-xs font-medium text-black">Integritas dan Reputasi</label>
            <select name="pu_integritas" id="pu_integritas" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Integritas dan Reputasi</option>
                <option value="1" @if($character_nasabah->PU_INTEGRITAS == 1) selected @endif>Tidak jujur dan koperatif</option>
                <option value="2" @if($character_nasabah->PU_INTEGRITAS == 2) selected @endif>Track record cukup baik, relasi sedikit, cukup koperatif </option>
                <option value="3" @if($character_nasabah->PU_INTEGRITAS == 3) selected @endif>Track record baik dan kurang koperatif</option>
                <option value="4" @if($character_nasabah->PU_INTEGRITAS == 4) selected @endif>Track record baik dan cukup koperatif</option>
                <option value="5" @if($character_nasabah->PU_INTEGRITAS == 5) selected @endif>Track record baik dan koperatif</option>
               
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="pu_account_behavior" class="block mb-2 text-xs font-medium text-black">Account Behaviour</label>
            <select name="pu_account_behavior" id="pu_account_behavior" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Account Behaviour</option>
                <option value="1" @if($character_nasabah->PU_ACCOUNT_BEHAVIOR == 1) selected @endif>Bermasalah</option>
                <option value="2" @if($character_nasabah->PU_ACCOUNT_BEHAVIOR == 2) selected @endif>Pernah menunggak, mutasi rek atif</option>
                <option value="3" @if($character_nasabah->PU_ACCOUNT_BEHAVIOR == 3) selected @endif>Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek tidak atif</option>
                <option value="4" @if($character_nasabah->PU_ACCOUNT_BEHAVIOR == 4) selected @endif>Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek kurang atif</option>
                <option value="5" @if($character_nasabah->PU_ACCOUNT_BEHAVIOR == 5) selected @endif>Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek atif</option>

            </select>
        </div>

        <div class= "min-w-xl">
            <label for="man_kemauan" class="block mb-2 text-xs font-medium text-black">Kemauan Bekerja Keras</label>
            <select name="man_kemauan" id="man_kemauan" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Kemauan Bekerja Keras</option>
                <option value="1" @if($character_nasabah->MAN_KEMAUAN == 1) selected @endif>Sulit memberikan keterangan atau dokumen</option>
                <option value="2" @if($character_nasabah->MAN_KEMAUAN == 2) selected @endif> Kurang antusias dalam memberikan keterangan atau dokumen</option>
                <option value="3" @if($character_nasabah->MAN_KEMAUAN == 3) selected @endif>Membantu dalam setiap tahapan proses kredit</option>
            </select>
        </div>
        
        <div class= "min-w-xl">
            <label for="man_kejujuran" class="block mb-2 text-xs font-medium text-black">Kejujuran</label>
            <select name="man_kejujuran" id="man_kejujuran" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Kejujuran</option>
                <option value="1" @if($character_nasabah->MAN_KEJUJURAN == 1) selected @endif>Pernyataan banyak bertentangan dengan hasil verifikasi</option>
                <option value="2" @if($character_nasabah->MAN_KEJUJURAN == 2) selected @endif>Pernyataan tidak sesuai dengan hasil verifikasi</option>
                <option value="3" @if($character_nasabah->MAN_KEJUJURAN == 3) selected @endif>Pernyataan sesuai dengan hasil verifikasi</option>
            </select>
        </div>
        
        <div class= "min-w-xl">
            <label for="man_reputasi" class="block mb-2 text-xs font-medium text-black">Reputasi dengan Rekan Bisnis</label>
            <select name="man_reputasi" id="man_reputasi" class=" bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="">Tentukan analisa Reputasi dengan Rekan Bisnis</option>
                <option value="1" @if($character_nasabah->MAN_REPUTASI == 1) selected @endif> Sulit memberikan perilaku dan bisnis yang disukai dan dijadikan panutan </option>
                <option value="2" @if($character_nasabah->MAN_REPUTASI == 2) selected @endif>Tidak ada keluhan dari rekan bisnis</option>
                <option value="3" @if($character_nasabah->MAN_REPUTASI == 3) selected @endif>Memberikan perilaku dan bisnis yang disukai dan dijadikan panutan</option>
            </select>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
            <p class="text-base">
                Hasil : <span class="text-blue-700 font-bold"> {{ number_format(($output * 100), 2) . '%' }} </span>
            </p>
        </div>
    </section>
</form>
@endif

@if(session('message'))
    <script>
        alert("Data berhasil disimpan!")
    </script>
@endif

@endsection
