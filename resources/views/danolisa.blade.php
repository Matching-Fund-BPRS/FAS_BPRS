@extends ('partial.main')

@section('container')

<section class=" max-w-screen-xl h-fit">
    <h2 class="text-lg font-medium text-gray-80">Customers</h2>

    <p class="mt-1 text-sm text-gray-500">These companies have purchased in the last 12 months.</p>

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

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    CIF
                                </th>

                                <th scope="col" class="px-4 py-3.5 w-72 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Nama
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Tgl Permohonan
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Tgl Analisa
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Jenis Fasilitas
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Plafond
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    User ID
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-20">
                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-bold text-center text-gray-600">0000001</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">02</p>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">Agus Sugiharto</p>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">06/08/2015</p>
                                </td>

                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">07/08/2015</p>
                                </td>

                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">Musyarakah</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">19.000.000</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">mandiri</p>
                                </td>  

                                {{-- <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>
                                    </button>
                                </td> --}}
                            </tr>

                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-bold text-center text-gray-600">0000002</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">02</p>
                                </td>
                                <td class="px-4 py-4 whitespace-normal">
                                        <p class="text-sm font-normal text-center text-gray-600">Jeremy de Coro al Tente Subagyo Maulana Ishaq</p>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">17/08/2015</p>
                                </td>

                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">17/08/2016</p>
                                </td>

                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">Muhasabah</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">66.000.000</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">mandiri</p>
                                </td>  

                                {{-- <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>
                                    </button>
                                </td> --}}
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center mt-6">

        <div class="items-center hidden md:flex gap-x-3">
            <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md bg-blue-100/60">1</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">2</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">3</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">...</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">12</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">13</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">14</a>
        </div>

    </div>
</section>

  @endsection