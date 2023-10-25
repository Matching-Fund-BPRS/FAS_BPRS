@extends ('partial.mainnota')

@section('container')

<div class="flex flex-col mt-6">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                <form method="post" action="" id="laba_rugi_form">
                <table class=" divide-y divide-gray-20 w-full table-auto overflow-auto whitespace-normal">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-2 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Nomor
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Uraian
                            </th>

                            <th scope="col" class="px-4 py-3.5 w-72 text-sm font-bold text-center rtl:text-right text-black-500">
                                I
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                II
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                III
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-20">
                        <tr>
                            <td class="px-4 py-1 font-medium whitespace-nowrap">
                                    <i class="text-sm font-bold text-center text-gray-600"></i>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                    <p class="text-sm font-semibold text-center text-gray-600">06/08/2015</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                    <p class="text-sm font-semibold text-center text-gray-600">06/08/2016</p>
                            </td>

                            <td class="px-4 py-1 whitespace-nowrap">
                                    <p class="text-sm font-semibold text-center text-gray-600">06/08/2017</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">1</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">Penjualan Bersih</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="penjualan_bersih" id="penjualan_bersih" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input type="number">
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">2</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">Harga Pokok Penjualan</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="hpp" id="hpp" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">3</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-bold text-center text-gray-600">Laba Kotor (1-2)</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="laba_kotor" id="laba_kotor" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">4</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-bold text-center text-gray-600">Biaya Ops dan Non Ops</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="total_biaya_ops_nonops" id="total_biaya_ops_nonops" class="text-sm font-normal text-center text-gray-600 border-none p-0"></p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">5</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-bold text-center text-gray-600">Laba Kotor Operasional</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="laba_kotor_ops" id="laba_kotor_ops" class="text-sm font-normal text-center text-gray-600 border-none p-0"></p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">6</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">Angsuran Bank Lain</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="angsuran_bank_lain" id="angsuran_bank_lain" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">7</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-bold text-center text-gray-600">Laba Bersih Operasional</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="laba_bersih_operasional" id="laba_bersih_operasional" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">8</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">Pendapatan Lainnya</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="pendapatan_lain" id="pendapatan_lain" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">9</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">Biaya Lainnya</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="biaya_lain" id="biaya_lain" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">10</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-bold text-center text-gray-600">EBIT</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="ebit" id="ebit" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">11</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">Biaya Margin</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="biaya_margin" id="biaya_margin" class="text-sm font-normal text-center text-gray-600 border-none p-0"></p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">12</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">Biaya Pajak</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="biaya_pajak" id="biaya_pajak" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">13</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-bold text-center text-gray-600">EAIT</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <input type="number" name="eait" id="eait" class="text-sm font-normal text-center text-gray-600 border-none p-0"></input>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                        </tr>

                    </tbody>
                </table>


                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/labarugi.js') }}"></script>
@endsection
