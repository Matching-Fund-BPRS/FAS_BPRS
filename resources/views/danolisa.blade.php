@extends ('partial.main')

@section('container')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<section class=" max-w-screen-xl h-fit">
    <div style="float:right">
        {{-- <form method="get" action="" class="flex">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class=" min-w-min">
                <input type="text" name="id" id="simple-search" class="bg-gray-50 max-w-[160px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Cari Nota" required>
            </div>
            <button type="submit" class="p-2 ml-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form> --}}
    </div>
    <h2 class="text-lg font-medium text-gray-80">Customers</h2>
    <br>
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden">

                    <table class=" divide-y divide-gray-20 w-full table-auto overflow-auto whitespace-normal" id="tabel_nasabah" style="display: none;">
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
    
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-20">
                            @foreach($all_nasabah as $nasabah)
                            <tr onclick="window.location='/dashboard/detailnota?id={{ $nasabah->ID_NASABAH }}';" class="hover:bg-gray-100 cursor-pointer">
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-bold text-center text-gray-600">{{ $nasabah->ID_NASABAH }}</p>
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
                                    <p class="text-sm font-normal text-center text-gray-600" type="currency">{{ $nasabah->LIMIT_KREDIT }}</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">{{ $nasabah->USER_ID }}</p>
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
    {{-- <div class="flex justify-center">
        {{ $all_nasabah->links() }}
    </div> --}}
</section>
    <script src="{{ asset('js/danolisa.js') }}"></script>
  @endsection