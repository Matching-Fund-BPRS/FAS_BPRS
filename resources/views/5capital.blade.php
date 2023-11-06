@extends ('partial.mainnota')

@section('container')
@if($capital_nasabah == null)
<form method="post" action="{{ route('postCapital') }}">
    @csrf
    <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
    <section id="capital" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Capital
        </p>

            {{-- <div class= "min-w-xl">
                <label for="" class="block mb-2 text-xs font-medium text-gray-900">Kualitas Laporan Keuangan</label>
                <select name="sifat" id="" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Laporan Keuangan Sederhana dan Tidak Tepat Waktu</option>
                    <option value="CA">Laporang Keuangan Sederhana dan Tepat Waktu</option>
                    <option value="FR">Laporan Keuangan Lengkap dan Tidak Tepat Waktu</option>
                    <option value="CA">Laporan Keuangan Lengkap dan Tepat Waktu</option>
                    <option value="FR">Laporan Keuangan Audited, Lengkap, dan Tepat Waktu</option>
                </select>
            </div> --}}

            <div class="flex space-x-4">
                <div>
                    <label for="cm_dar" class="block mb-2 text-xs font-medium text-gray-900">Debt Asset Ratio</label>
                    <input name="cm_dar" type="text" id="cm_dar" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
        
                <div>
                    <label for="cm_der" class="block mb-2 text-xs font-medium text-gray-900">Debt Equity Ratio</label>
                    <input name="cm_der" type="text" id="cm_der" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="cm_lder" class="block mb-2 text-xs font-medium text-gray-900">Long Debt Equity Ratio</label>
                    <input name="cm_lder" type="text" id="cm_lder" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="flex space-x-4">
                <div>
                    <label for="pk_asset" class="block mb-2 text-xs font-medium text-gray-900">Nilai Asset</label>
                    <input name="pk_asset" type="text" id="pk_asset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pk_income_sales" class="block mb-2 text-xs font-medium text-gray-900">Operational Income / Sales %</label>
                    <input name="pk_income_sales" type="text" id="pk_income_sales" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
        
                <div>
                    <label for="rpc" class="block mb-2 text-xs font-medium text-gray-900">Repayment Capacity (RPC) %</label>
                    <input name="rpc" type="text" id="rpc" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="">
                <div class="">
                    <label for="pk_ebit" class="block mb-2 text-xs font-medium text-gray-900">EBIT / Interest %</label>
                    <input name="pk_ebit" type="text" id="pk_ebit" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>


            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">{{ number_format(($output * 100), 2) . '%' }}</span>
                </p>
            </div>
    </section>
</form>
@else
<form method="post" action="/dashboard/5capital/{{ $nasabah->ID_NASABAH }}/edit">
    @csrf
    <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
    <section id="capital" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Capital
        </p>
            <div class="flex space-x-4">
                <div>
                    <label for="cm_dar" class="block mb-2 text-xs font-medium text-gray-900">Debt Asset Ratio</label>
                    <input value="{{ $capital_nasabah->CM_DAR }}" name="cm_dar" type="text" id="cm_dar" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
        
                <div>
                    <label for="cm_der" class="block mb-2 text-xs font-medium text-gray-900">Debt Equity Ratio</label>
                    <input value="{{ $capital_nasabah->CM_DER }}" name="cm_der" type="text" id="cm_der" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="cm_lder" class="block mb-2 text-xs font-medium text-gray-900">Long Debt Equity Ratio</label>
                    <input value="{{ $capital_nasabah->CM_LDER }}" name="cm_lder" type="text" id="cm_lder" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="flex space-x-4">
                <div>
                    <label for="pk_asset" class="block mb-2 text-xs font-medium text-gray-900">Nilai Asset</label>
                    <input value="{{ $capital_nasabah->PK_ASET }}" name="pk_asset" type="text" id="pk_asset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pk_income_sales" class="block mb-2 text-xs font-medium text-gray-900">Operational Income / Sales %</label>
                    <input value="{{ $capital_nasabah->PK_INCOME_SALES }}" name="pk_income_sales" type="text" id="pk_income_sales" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
        
                <div>
                    <label for="rpc" class="block mb-2 text-xs font-medium text-gray-900">Repayment Capacity (RPC) %</label>
                    <input value="{{ $capital_nasabah->RPC }}" name="rpc" type="text" id="rpc" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="">
                <div class="">
                    <label for="pk_ebit" class="block mb-2 text-xs font-medium text-gray-900">EBIT / Interest %</label>
                    <input value="{{ $capital_nasabah->PK_EBIT }}" name="pk_ebit" type="text" id="pk_ebit" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>


            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">{{ number_format(($output * 100), 2) . '%' }}</span>
                </p>
            </div>
    </section>
</form>
@endif

@if(session('message'))
<script>
    alert('Berhasil memperbarui data!')
</script>
@elseif(session('message-add'))
<script>
    alert('Berhasil menambahkan data!')
</script>
@endif

@endsection