@extends ('partial.mainnota')

@section('container')

<form method="post" action="{{ route('postCapital') }}">
    @csrf
    <section id="capital" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Capital
        </p>

            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Kualitas Laporan Keuangan</label>
                <select name="sifat" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                </select>
            </div>

            <div class="flex space-x-4">
                <div>
                    <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Debt Asset Ratio</label>
                    <input name="debt_asset_ratio" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
        
                <div>
                    <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Debt Equity Ratio</label>
                    <input name="debt_equity_ratio" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Long Debt Equity Ratio</label>
                    <input name="long_debt_equity_ratio" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="flex space-x-4">
                <div>
                    <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Nilai Asset</label>
                    <input name="nilai_asset" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Operational Income / Sales %</label>
                    <input name="operational_income_sales" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
        
                <div>
                    <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Repayment Capacity (RPC) %</label>
                    <input name="rpc" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="">
                <div class="">
                    <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">EBIT / Interest %</label>
                    <input name="ebit" type="text" id="omset" class=" max-w-[200px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
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