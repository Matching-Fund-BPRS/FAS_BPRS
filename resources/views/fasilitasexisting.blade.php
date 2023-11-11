@extends ('partial.mainnota')

@section('container')
@if($data_bisid_nasabah == null)
<form method="post" action="{{ Route('tambah_bisid') }}">
    @csrf
    <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
    <section class="md:grid md:grid-cols-4 space-x-8 ">
        <div class="space-y-4">
            <p class=" block py-4 text-base font-semibold text-gray-900">
                Sandi BI
            </p>
            <div class="flex justify-center space-x-2">
                <div>
                    <label for="jenisperm" class="block mb-2 text-xs font-medium text-gray-900">Sektor Ekonomi</label>
                    <input name="sektor_ekonomi_bi" type="text" id="jenisperm" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
                <div>
                    <label for="penggunaan" class="block mb-2 text-xs font-medium text-gray-900">Penggunaan</label>
                    <input name="penggunaan_bi" type="text" id="penggunaan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="flex justify-center space-x-2">
                <div>
                    <label for="golongan_debitur" class="block mb-2 text-xs font-medium text-gray-900">Golongan Debitur</label>
                    <input name="golongan_debitur_bi" type="text" id="golongan_debitur" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
        
                <div>
                    <label for="sifat" class="block mb-2 text-xs font-medium text-gray-900">Sifat</label>
                    <input name="sifat_bi" type="text" id="sifat" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="flex justify-center space-x-2">
                <div>
                    <label for="golongan_penjamin" class="block mb-2 text-xs font-medium text-gray-900">Golongan Penjamin</label>
                    <input name="golongan_penjamin_bi" type="text" id="golongan_penjamin" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                
                <div>
                    <label for="tujuan_penggunaan" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
                    <input name="tujuan_penggunaan_bi" type="text" id="tujuan_penggunaan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>
            

            <div class="flex justify-center space-x-2">
                <div>
                    <label for="golongan_piutang" class="block mb-2 text-xs font-medium text-gray-900">Golongan Piutang</label>
                    <input name="golongan_piutang_bi" type="text" id="golongan_piutang" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Sifat Plafond</label>
                    <input name="sifat_plafond_bi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div> 
            </div>
        
        </div>
        
        <div class="space-y-4">
            <p class=" block py-4 text-base font-semibold text-gray-900">
                Sandi SID
            </p>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Sektor Ekonomi</label>
                <input name="sektor_ekonomi_sid" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Penggunaan</label>
                <input name="penggunaan_sid" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pembiayaan</label>
                <input name="pembiayaan_sid" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div class=" pt-6">
                <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
            </div>
        </div>
        
        <div class="col-span-2">

            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
        
                            <table class=" divide-y divide-gray-20 w-full table-fixed overflow-auto whitespace-normal">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="w-72 px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                            Keterangan
                                        </th>
        
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                            Cabang
                                        </th>
        
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                            Pusat
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-20">
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">Modal Inti</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">200.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">200.000</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">Modal Pelengkap</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">1.000.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">1.000.000</p>
                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">BMPD Perorangan</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">500.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">500.000</p>
                                        </td>
                                    </tr>
                                                        
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">BMPD Kelompok</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">300.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">300.000</p>
                                        </td>
                                    </tr>
                                                        
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">BMPD Terkait</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">200.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">200.000</p>
                                        </td>
                                    </tr>
                                                        
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">Prosentasi Plafon Diajukan</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">20</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">20</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</form>
@else
<form method="post" action="/dashboard/fasilitasexisting/{{ $nasabah->ID_NASABAH }}/edit">
    @csrf
    <section class="md:grid md:grid-cols-4 space-x-8 ">
        <div class="space-y-4">
            <p class=" block py-4 text-base font-semibold text-gray-900">
                Sandi BI
            </p>
            <div class="flex justify-center space-x-2">
                <div>
                    <label for="jenisperm" class="block mb-2 text-xs font-medium text-gray-900">Sektor Ekonomi</label>
                    <input value="{{ $data_bisid_nasabah->SEKTOR_EKONOMI_BI }}" name="sektor_ekonomi_bi" type="text" id="jenisperm" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                </div>
                <div>
                    <label for="penggunaan" class="block mb-2 text-xs font-medium text-gray-900">Penggunaan</label>
                    <input value="{{ $data_bisid_nasabah->PENGGUNAAN_BI }}" name="penggunaan_bi" type="text" id="penggunaan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="flex justify-center space-x-2">
                <div>
                    <label for="golongan_debitur" class="block mb-2 text-xs font-medium text-gray-900">Golongan Debitur</label>
                    <input value="{{ $data_bisid_nasabah->GOL_DEB_BI }}" name="golongan_debitur_bi" type="text" id="golongan_debitur" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
        
                <div>
                    <label for="sifat" class="block mb-2 text-xs font-medium text-gray-900">Sifat</label>
                    <input value="{{ $data_bisid_nasabah->SIFAT_BI }}" name="sifat_bi" type="text" id="sifat" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>

            <div class="flex justify-center space-x-2">
                <div>
                    <label for="golongan_penjamin" class="block mb-2 text-xs font-medium text-gray-900">Golongan Penjamin</label>
                    <input value="{{ $data_bisid_nasabah->GOL_PENJAMIN_BI }}" name="golongan_penjamin_bi" type="text" id="golongan_penjamin" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                
                <div>
                    <label for="tujuan_penggunaan" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
                    <input value="{{ $data_bisid_nasabah->TUJUAN_BI }}" name="tujuan_penggunaan_bi" type="text" id="tujuan_penggunaan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            </div>
            

            <div class="flex justify-center space-x-2">
                <div>
                    <label for="golongan_piutang" class="block mb-2 text-xs font-medium text-gray-900">Golongan Piutang</label>
                    <input value="{{ $data_bisid_nasabah->GOL_PIUTANG_BI }}" name="golongan_piutang_bi" type="text" id="golongan_piutang" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Sifat Plafond</label>
                    <input value="{{ $data_bisid_nasabah->SIFAT_PLAFOND }}" name="sifat_plafond_bi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div> 
            </div>
        
        </div>
        
        <div class="space-y-4 grid grid-cols-1">
            <p class=" block py-4 text-base font-semibold text-gray-900">
                Sandi SID
            </p>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Sektor Ekonomi</label>
                <input value="{{ $data_bisid_nasabah->SEK_EKO_SID }}" name="sektor_ekonomi_sid" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Penggunaan</label>
                <input value="{{ $data_bisid_nasabah->PENGGUNAAN_SID }}" name="penggunaan_sid" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pembiayaan</label>
                <input value="{{ $data_bisid_nasabah->PEMBIAYAAN_SID }}" name="pembiayaan_sid" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            
            <div class="flex justify-between items-end">
                <div class="">
                    <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
                </div>
                <div class="">
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2">Tambah Riwayat</button>
                </div>
            </div>

        </div>
        
        <div class="col-span-2">

            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
        
                            <table class=" divide-y divide-gray-20 w-full table-fixed overflow-auto whitespace-normal">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="w-72 px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                            Keterangan
                                        </th>
        
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                            Cabang
                                        </th>
        
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                            Pusat
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-20">
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">Modal Inti</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">200.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">200.000</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">Modal Pelengkap</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">1.000.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">1.000.000</p>
                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">BMPD Perorangan</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">500.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">500.000</p>
                                        </td>
                                    </tr>
                                                        
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">BMPD Kelompok</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">300.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">300.000</p>
                                        </td>
                                    </tr>
                                                        
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">BMPD Terkait</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">200.000</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">200.000</p>
                                        </td>
                                    </tr>
                                                        
                                    <tr>
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-gray-600">Prosentasi Plafon Diajukan</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">20</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-gray-600">20</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</form>
@endif
<div class="flex flex-col mt-6">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                <table class=" divide-y divide-gray-20 w-full table-fixed overflow-auto whitespace-normal">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Bank
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Jenis
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Plafond
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Baki Debet
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Jatuh Tempo
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Kol
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Tunggakan
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Lama Tunggakan
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-20">
                        @foreach($data_fasilitas_existing as $data)
                        <tr>
                            <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">{{ $data->BANK }}</p>
                            </td>

                            <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">{{ $data->JENIS_KREDIT }}</p>
                            </td>

                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ number_format($data->PLAFOND, 0, ',', '.') }}</p>
                            </td>
                            
                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ number_format($data->BAKI_DEBET, 0, ',', '.') }}</p>
                            </td>
                            
                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ date('d-m-Y', strtotime($data->TGL_JATUH_TEMPO)) }}</p>
                            </td>  

                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ $data->KOL }}</p>
                            </td>
                            
                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ number_format($data->TUNGGAKAN, 0, ',', '.') }}</p>
                            </td> 

                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ $data->LAMA_TUNGGAKAN }}</p>
                            </td> 

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<br>

{{-- ///////////////TAMBAH RIWAYAT POPUP/////////////////// --}}


<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-sm md:max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b border-gray-200 rounded-t dark:border-gray-600">
                <h3 class="text-xl font-bold text-gray-700 dark:text-white">
                    Tambah Riwayat
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('tambah_existing') }}" method="POST">
                @csrf
                <div class="p-4 space-y-4">
                    <input type="hidden" name="id" value="{{ $nasabah->ID_NASABAH }}">
                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="bank" class="block mb-2 text-xs font-medium text-gray-900">Bank</label>
                            <input name="bank" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
    
                        <div class= "">
                            <label for="jenis_kredit" class="block mb-2 text-xs font-medium text-gray-900">Jenis</label>
                            <select name="jenis_kredit" id="jenis_kredit" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="1">Modal Kerja</option>
                                <option value="2">Investasi</option>
                                <option value="3">Konsumsi</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Plafond</label>
                            <input name="plafond" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Baki Debet</label>
                            <input name="baki_debet" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>


                    <div class=" flex justify-center">
                        <div class="">
                            <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900 text-center">Jatuh Tempo</label>
                            <div class="relative max-w-[220px]" id="tglperm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input name="tgl_jatuh_tempo" datepicker datepicker-autohide type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                            </div>
                        </div>
                    </div>

                    <div class= "min-w-full">
                        <label for="kol" class="block mb-2 text-xs font-medium text-gray-900">Kol</label>
                        <select name="kol" id="kol" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Tunggakan</label>
                            <input name="tunggakan" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Lama Tunggakan</label>
                            <input name="lama_tunggakan" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>

                </div>
                                         
                <!-- Modal footer -->
                <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
                    <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Keluar</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- //////////////////TAMBAH RIWAYAT POPUP END///////////////// --}}


@if(session('success-add'))
<script>
    alert('Data berhasil ditambahkan!')
</script>
@elseif(session('success-edit'))
<script>
    alert('Data berhasil diperbarui!')
</script>
@endif


<div class="flex justify-center">
    {{ $data_fasilitas_existing->links() }}
</div>
@endsection