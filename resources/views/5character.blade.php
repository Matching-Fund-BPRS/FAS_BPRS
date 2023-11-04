@extends ('partial.mainnota')

@section('container')

<form method="post" action="{{ route('postCharacter') }}">
    <section id="character" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            @csrf
            Aspek Character
        </p>
        <div class= "min-w-xl">
            <label for="cw_tanggung" class="block mb-2 text-xs font-medium text-gray-900">Tanggung Jawab</label>
            <select name="cw_tanggung" id="cw_tanggung" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Sangat Tidak Bertanggung Jawab</option>
                <option value="2">Kurang Bertanggung Jawab</option>
                <option value="3">Netral dalam tanggung Jawab</option>
                <option value="4">Bertanggung Jawab</option>
                <option value="5">Sangat Bertanggung Jawab</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_terbuka" class="block mb-2 text-xs font-medium text-gray-900">Keterbukaan</label>
            <select name="cw_terbuka" id="cw_terbuka" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Penyampaian informasi tentang perusahaan tidak ada</option>
                <option value="2">Penyampaian informasi tentang perusahaan kurang lengkap</option>
                <option value="3">Penyampaian informasi tentang perusahaan cukup lengkap</option>
                <option value="4">Penyampaian informasi tentang perusahaan lengkap</option>
                <option value="5">Penyampaian informasi tentang perusahaan sangat lengkap</option>
               
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_disiplin" class="block mb-2 text-xs font-medium text-gray-900">Kedisiplinan</label>
            <select name="cw_disiplin" id="cw_disiplin" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Tidak ada bukti disiplin dalam penggunaan dana atau pemenuhan kewajiban keuangan (Tidak disiplin)</option>
                <option value="2">Beberapa aspek pengelolaan dana dan kewajiban keuangan mungkin belum sesuai standar (Kurang disiplin)</option>
                <option value="3">Kewajiban keuangan dipenuhi dan dana digunakan secara bertanggung jawab (Netral)</option>
                <option value="4">Penggunaan dana dan pemenuhan kewajiban keuangan dilakukan dengan baik dan sesuai aturan (Disiplin)</option>
                <option value="5">Penggunaan dana sangat efisien (Sangat disiplin)</option>

            </select>
        </div>

        <div class= "min-w-xl">
            <label for="cw_janji" class="block mb-2 text-xs font-medium text-gray-900">Menepati Janji</label>
            <select name="cw_janji" id="cw_janji" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Perusahan tidak tepat janji</option>
                <option value="2">Perusahan kadang tepat janji</option>
                <option value="3">Perusahan tepat janji</option>
                <option value="4">Perusahan sering tepat janji</option>
                <option value="5">Perusahan selalu tepat janji</option>
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="pu_integritas" class="block mb-2 text-xs font-medium text-gray-900">Integritas dan Reputasi</label>
            <select name="pu_integritas" id="pu_integritas" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Tidak jujur dan koperatif</option>
                <option value="2">Track record cukup baik, relasi sedikit, cukup koperatif </option>
                <option value="3">Track record baik, Hubungan dengan bowheer baik, kurang koperatif</option>
                <option value="4">Track record baik, Hubungan dengan bowheer baik, cukup koperatif</option>
                <option value="5">Track record baik, Hubungan dengan bowheer baik, koperatif</option>
               
            </select>
        </div>

        <div class= "min-w-xl">
            <label for="pu_account_behavior" class="block mb-2 text-xs font-medium text-gray-900">Account Behaviour</label>
            <select name="pu_account_behavior" id="pu_account_behavior" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Bermasalah</option>
                <option value="2">Pernah menunggak, mutasi rek atif</option>
                <option value="3">Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek tidak atif</option>
                <option value="4">Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek kurang atif</option>
                <option value="5">Bebas blacklist BI. BG/Cek tidak pernah ditolak, Mutasi rek atif</option>

            </select>
        </div>

        <div class= "min-w-xl">
            <label for="man_kemauan" class="block mb-2 text-xs font-medium text-gray-900">Kemauan Bekerja Keras</label>
            <select name="man_kemauan" id="man_kemauan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Sulit memberikan keterangan atau dokumen</option>
                <option value="2"> Kurang antusias dalam memberikan keterangan atau dokumen</option>
                <option value="3">Membantu dalam setiap tahapan proses kredit</option>
            </select>
        </div>
        
        <div class= "min-w-xl">
            <label for="man_kejujuran" class="block mb-2 text-xs font-medium text-gray-900">Kejujuran</label>
            <select name="man_kejujuran" id="man_kejujuran" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1">Pernyataan banyak bertentangan dengan hasil verifikasi</option>
                <option value="2">Pernyataan tidak sesuai dengan hasil verifikasi</option>
                <option value="3">Pernyataan sesuai dengan hasil verifikasi</option>
            </select>
        </div>
        
        <div class= "min-w-xl">
            <label for="man_reputasi" class="block mb-2 text-xs font-medium text-gray-900">Reputasi dengan Rekan Bisnis</label>
            <select name="man_reputasi" id="man_reputasi" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1"> Sulit memberikan perilaku dan bisnis yang disukai dan dijadikan panutan </option>
                <option value="2">Tidak ada keluhan dari rekan bisnis</option>
                <option value="FR">Memberikan perilaku dan bisnis yang disukai dan dijadikan panutan</option>
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