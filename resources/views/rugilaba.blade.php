@extends ('partial.mainnota')

@section('container')
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8 ">
                <form method="post" action="/dashboard/rugilaba/tambah" id="laba_rugi_form" class="flex flex-col">
                    @csrf
                    <input readonly name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg ">

                        <table class=" divide-y divide-gray-20 w-full table-auto overflow-auto whitespace-normal">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-2 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                        Nomor
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                        Uraian
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 w-72 text-sm font-bold text-center rtl:text-right text-black-500">
                                        I
                                    </th>
                                    <th scope="col"
                                        class=" py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                        % Kenaikan
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 w-72 text-sm font-bold text-center rtl:text-right text-black-500">
                                        II
                                    </th>
                                    <th scope="col"
                                        class=" py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                        % Kenaikan
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 w-72 text-sm font-bold text-center rtl:text-right text-black-500">
                                        III
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-20">
                                <tr>
                                    <td class="px-4 py-1 font-medium whitespace-nowrap">
                                        <i class="text-sm font-bold text-center text-gray-600"></i>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>

                                    <td class="px-4 py-1 whitespace-nowrap flex">
                                        @if ($rugi_laba_nasabah != null)
                                            <input readonly type="date" name="tgl_periode"
                                                class="text-sm font-normal text-center text-gray-600 border-none p-0 mx-auto"
                                                value="{{ $rugi_laba_nasabah->TGL_PERIODE->format('Y-m-d') ?? date('Y-m-d') }}"
                                                required>
                                        @else
                                            <input type="date" name="tgl_periode"
                                                class="text-sm font-normal text-center text-gray-600 border-none p-0 mx-auto"
                                                required>
                                        @endif
                                    </td>
                                    <td class=" py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-1 whitespace-nowrap">
                                        <p class="text-sm font-semibold text-center text-gray-600">06/08/2016</p>
                                    </td>
                                    <td class=" py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="penjualan_bersih" id="penjualan_bersih"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8"
                                            value="{{ $rugi_laba_nasabah->PENJUALAN_BERSIH ?? 0 }}">
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_penjualan_bersih_1" id="kenaikan_penjualan_bersih_1"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_penjualan_bersih_2" id="kenaikan_penjualan_bersih_2"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="hpp" id="hpp"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8"
                                            value="{{ $rugi_laba_nasabah->HPP ?? 0 }}">
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_hpp_1" id="kenaikan_hpp_1"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_hpp_2" id="kenaikan_hpp_2"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="laba_kotor" id="laba_kotor"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8" readonly>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="total_biaya_ops_nonops" id="total_biaya_ops_nonops"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8"
                                            value="{{ $rugi_laba_nasabah->BIAYA_HIDUP ?? 0 }}">
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_biaya_ops_nonops_1" id="kenaikan_biaya_ops_nonops_1"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>

                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_biaya_ops_nonops_2" id="kenaikan_biaya_ops_nonops_2"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>

                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="laba_kotor_ops" id="laba_kotor_ops"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8" readonly>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="angsuran_bank_lain" id="angsuran_bank_lain"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8"
                                            value="{{ $rugi_laba_nasabah->PENYUSUTAN ?? 0 }}">
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_angsuran_bank_lain_1" id="kenaikan_angsuran_bank_lain_1"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_angsuran_bank_lain_2" id="kenaikan_angsuran_bank_lain_2"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="laba_bersih_operasional" id="laba_bersih_operasional"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8" readonly>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="pendapatan_lain" id="pendapatan_lain"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8"
                                            value="{{ $rugi_laba_nasabah->PENDAPATAN_LAIN ?? 0 }}">
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_pendapatan_lain_1" id="kenaikan_pendapatan_lain_1"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_pendapatan_lain_2" id="kenaikan_pendapatan_lain_2"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="biaya_lain" id="biaya_lain"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8"
                                            value="{{ $rugi_laba_nasabah->BIAYA_LAIN ?? 0 }}">
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_biaya_lain_1" id="kenaikan_biaya_lain_1"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_biaya_lain_2" id="kenaikan_biaya_lain_2"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="ebit" id="ebit"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8" readonly>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="biaya_margin" id="biaya_margin"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8"
                                            value="{{ $rugi_laba_nasabah->BIAYA_BUNGA ?? 0 }}"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_biaya_margin_1" id="kenaikan_biaya_margin_1"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_biaya_margin_2" id="kenaikan_biaya_margin_2" 
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="biaya_pajak" id="biaya_pajak"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8"
                                            value="{{ $rugi_laba_nasabah->BIAYA_PAJAK ?? 0 }}" readonly>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_biaya_pajak_1" id="kenaikan_biaya_pajak_1"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input name="kenaikan_biaya_pajak_2" id="kenaikan_biaya_pajak_2"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0"value=0>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
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
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <input readonly name="eait" id="eait"
                                            class="text-sm font-normal text-center text-gray-600 border-none p-0 ml-8" readonly>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"></p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <br>
                    {{-- @if ($rugi_laba_nasabah == null)
                <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 justify-items-end ml-auto">Simpan</button>
            @else
                <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 justify-items-end ml-auto">Simpan Perubahan</button>
            @endif --}}
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/labarugi.js') }}"></script>
    @if (session('message'))
        <script>
            alert('Berhasil menyimpan data!')
        </script>
    @endif
@endsection
