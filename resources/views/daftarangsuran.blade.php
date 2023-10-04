@extends ('partial.mainnota')

@section('container')

<div class="space-y-2 px-12">
    <p class=" text-xl font-bold text-center my-8">
        DAFTAR ANGSURAN
    </p>
    
    <table class="text-sm">
        <tr>
            <td>
                Plafond 
            </td>
            <td>
                :   Rp. xxx.xxx.xxx
            </td>
        </tr>

        <tr>
            <td>
                Jangka Waktu
            </td>
            <td>
                :   x Bulan
            </td>
        </tr>

        <tr>
            <td>
                Margin 
            </td>
            <td>
                :   % Per Bulan
            </td>
        </tr>
    </table>

</div>

<div class="flex flex-col mt-6">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                <table class=" divide-y divide-gray-20 w-full table-auto overflow-auto whitespace-normal">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-2 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Nomor
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Pokok Pinjaman
                            </th>

                            <th scope="col" class="px-4 py-3.5 w-72 text-sm font-bold text-center rtl:text-right text-black-500">
                                Angsuran Pokok
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Angsuran Margin
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Total Angsuran
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-20">

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">1</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">2</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">3</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600"></p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-bold text-center text-gray-600">Total</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">xxx.xxx.xxx</p>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection