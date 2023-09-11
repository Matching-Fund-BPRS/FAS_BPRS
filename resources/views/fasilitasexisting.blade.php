@extends ('partial.mainnota')

@section('container')

<section class="md:grid md:grid-cols-4 space-x-8 ">
    <div class="space-y-4">
        <p class=" block py-4 text-base font-semibold text-gray-900">
            Sandi BI
        </p>
        <div class="flex justify-center space-x-2">
            <div>
                <label for="jenisperm" class="block mb-2 text-xs font-medium text-gray-900">Sektor Ekonomi</label>
                <input type="text" id="jenisperm" class=" max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
            </div>
            <div>
                <label for="penggunaan" class="block mb-2 text-xs font-medium text-gray-900">Penggunaan</label>
                <input type="text" id="penggunaan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex justify-center space-x-2">
            <div>
                <label for="golongan_debitur" class="block mb-2 text-xs font-medium text-gray-900">Golongan Debitur</label>
                <input type="text" id="golongan_debitur" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
    
            <div>
                <label for="sifat" class="block mb-2 text-xs font-medium text-gray-900">Sifat</label>
                <input type="text" id="sifat" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex justify-center space-x-2">
            <div>
                <label for="golongan_penjamin" class="block mb-2 text-xs font-medium text-gray-900">Golongan Penjamin</label>
                <input type="text" id="golongan_penjamin" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            
            <div>
                <label for="tujuan_penggunaan" class="block mb-2 text-xs font-medium text-gray-900">Tujuan Penggunaan</label>
                <input type="text" id="tujuan_penggunaan" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex justify-center space-x-2">
            <div>
                <label for="golongan_piutang" class="block mb-2 text-xs font-medium text-gray-900">Golongan Piutang</label>
                <input type="text" id="golongan_piutang" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Sifat Plafond</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div> 
        </div>
       
    </div>
    <div class="space-y-4">
        <p class=" block py-4 text-base font-semibold text-gray-900">
            Sandi SID
        </p>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Sektor Ekonomi</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div> 
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Penggunaan</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div> 
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pembiayaan</label>
            <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
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

<div class="flex flex-col mt-6">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                <table class=" divide-y divide-gray-20 w-full table-fixed overflow-auto whitespace-normal">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Nomor Nota
                            </th>

                            <th scope="col" class="px-4 py-3.5 w-72 text-sm font-normal text-center rtl:text-right text-gray-500">
                                Nama
                            </th>

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


                        <tr>
                            <td class="px-4 py-4 font-medium whitespace-nowrap">
                                    <p class="text-sm font-bold text-center text-gray-600">22</p>
                            </td>
                            <td class="px-4 py-4 whitespace-normal">
                                    <p class="text-sm font-normal text-center text-gray-600">Jeremy de Coro al Tente Subagyo Maulana Ishaq</p>
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">Mandiri</p>
                            </td>

                            <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">Konsumsi</p>
                            </td>

                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">6.000.000</p>
                            </td>
                            
                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">6.234.550</p>
                            </td>
                            
                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">2/9/2023</p>
                            </td>  

                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">1</p>
                            </td>
                            
                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">0</p>
                            </td> 

                            <td class="px-4 py-4 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td> 

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection