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
                                    Nomor Survey
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    CIF
                                </th>
                                <th scope="col" class="px-4 py-3.5 w-72 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Nama
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Tanggal Permohonan
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Tanggal Analisa
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
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Action
                                </th> 
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-20">
                            @foreach($all_nasabah as $nasabah)
                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-bold text-center text-gray-600">{{ $nasabah->NO_SURVEY }}</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap">
                                    @if($nasabah->CIF != null)
                                    <p class="text-sm font-normal text-center text-gray-600">{{ $nasabah->CIF }}</p>
                                    @else
                                    <p class="text-sm font-normal text-center text-gray-600"> - </p>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">{{ $nasabah->NAMA }}</p>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"> {{ date('d-m-Y', strtotime($nasabah->TGL_PERMOHONAN)) }}</p>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600"> {{ date('d-m-Y', strtotime($nasabah->TGL_ANALISA)) }}</p>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    @switch($nasabah->SIFAT)
                                    @case(1)
                                    <p class="text-sm font-normal text-center text-gray-600">Murabahah</p>
                                    @break
                                    @case(2)
                                    <p class="text-sm font-normal text-center text-gray-600">Musyarakah</p>
                                    @break
                                    @case(3)
                                    <p class="text-sm font-normal text-center text-gray-600">Mudarabah</p>
                                    @break
                                    @case(4)
                                    <p class="text-sm font-normal text-center text-gray-600">Ijarah</p>
                                    @break
                                    @case(5)
                                    <p class="text-sm font-normal text-center text-gray-600">Rahn</p>
                                    @break
                                    @case(6)
                                    <p class="text-sm font-normal text-center text-gray-600">Qord</p>
                                    @break
                                    @endswitch
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">{{ $nasabah->LIMIT_KREDIT }}</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">{{ $nasabah->ID_NASABAH }}</p>
                                </td>  

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>
                                    </button>
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
    <div>
        {{ $all_nasabah->links() }}
    </div>
</section>

  @endsection