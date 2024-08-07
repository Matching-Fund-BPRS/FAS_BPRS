<aside class="md:block top-0 sticky hidden min-h-screen px-5 pt-8 bg-white border-r">
    <div>
        
    </div>
    <div class="flex justify-center">
        <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="" class="w-auto h-20">
        </a>
    </div>
    <p class="my-2 text-center font-bold">
        BPRS Baktimakmur Indah    
    </p>
    
    <div class="mt-3">
        <nav class="-mx-3 space-y-3 relative">
            <form method="get" action="{{ route('search-id') }}" class="flex flex-row max-w-fit px-3">   
                <label for="simple-search" class="sr-only">Search</label>
                <div class=" min-w-min">
                    @if($nasabah!= null)
                        <input type="text" name="id" value="{{ $nasabah->ID_NASABAH }}" id="simple-search" class="bg-gray-50 max-w-[160px] border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="" required>
                    @else
                        <input type="text" name="id" id="simple-search" class="bg-gray-50 max-w-[160px] border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Cari Nota" required>
                    @endif
                </div>
                <button type="submit" class="p-2 ml-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

            <div class="mx-3 text-xs space-y-1 ">
                <p class=" font-semibold">
                    @if($nasabah!=null)
                    {{ $nasabah->NAMA }}
                    @else
                    Nama Nasabah
                    @endif
                </p>
                <p class=" border-b pb-2 grid grid-cols-1 max-w-[200px]">
                    @if($nasabah!=null)
                    {{ $nasabah->ALAMAT }}
                    @else
                    Alamat Nasabah
                    @endif
                </p>
            </div>


            <div class="space-y-1">
                @if($nasabah != null)
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/detaildata/{{ $nasabah->ID_NASABAH  }}">
                        <span class="mx-2 text-sm font-normal">Detail Data</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/fasilitasexisting/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Fasilitas Existing</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/infokeuangan/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Info Keuangan</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/limitkredit/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Perhitungan Limit Kredit</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/rugilaba/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Laba Rugi</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/neraca/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Neraca</span>
                    </a>

                    {{-- <a data-collapse-toggle="drop-5c" type="button" class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                        <span class="mx-2 text-sm font-normal">Analisa 5C</span>
                    </a> --}}
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5character/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Character</span>  
                    </a>
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5capacity/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Capacity</span>
                    </a>
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5condition/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Condition</span>
                    </a>
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5capital/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Capital</span>     
                    </a>
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5collateral/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Collateral</span>
                    </a>
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5syariah/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Syariah</span>  
                    </a>
                    <div id="drop-5c" class="hidden w-full space-y-1"> 
                        <div class="grid">
                           
                        </div>
                    </div>



                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/rekomendasi/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Rekomendasi</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/daftarangsuran/{{ $nasabah->ID_NASABAH }}">
                        <span class="mx-2 text-sm font-normal">Daftar Angsuran</span>
                    </a>

                @else
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/detaildata">
                        <span class="mx-2 text-sm font-normal">Detail Data</span>
                    </a>
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Fasilitas Existing</span>
                    </a>
                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Info Keuangan</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Perhitungan Limit Kredit</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white"onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Laba Rugi</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white"onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Neraca</span>
                    </a>
                    {{-- <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Analisa Kualitatif</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Analisa Kuantitatif</span>
                    </a> --}}

                    <a data-collapse-toggle="drop-5c" type="button" class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                        <span class="mx-2 text-sm font-normal">Analisa 5C</span>
                    </a>

                    <div id="drop-5c" class="hidden w-full space-y-1"> 
                        <div class="grid">
                            <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                                <span class="mx-2 ml-6 text-sm font-normal">Character</span>  
                            </a>
                            <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                                <span class="mx-2 ml-6 text-sm font-normal">Capacity</span>
                            </a>
                            <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                                <span class="mx-2 ml-6 text-sm font-normal">Condition</span>
                            </a>
                            <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                                <span class="mx-2 ml-6 text-sm font-normal">Capital</span>     
                            </a>
                            <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                                <span class="mx-2 ml-6 text-sm font-normal">Collateral</span>
                            </a>
                            <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                                <span class="mx-2 ml-6 text-sm font-normal">Syariah</span>  
                            </a>
                        </div>
                    </div>

                    

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Rekomendasi</span>
                    </a>

                    <a class="flex items-center py-1 px-1 text-black transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')" href="#">
                        <span class="mx-2 text-sm font-normal">Daftar Angsuran</span>
                    </a>
                @endif


            </div>

            
            <div id="exit" class="space-y-2 pt-2">

                <a class="flex items-center px-2 py-2 text-black transition-colors duration-300 transform rounded-lg hover:bg-orange-600 hover:text-white" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M9 15l6 -6"></path>
                        <path d="M11 9h4v4"></path>
                    </svg>

                    <span class="mx-2 text-sm font-medium">Keluar</span>
                </a>

                <form action="{{ Route('logout')}}" method="post">
                    @csrf
                        <button class="flex items-center px-3 py-2 text-black transition-colors duration-300 transform rounded-lg hover:bg-red-600 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                <path d="M9 12h12l-3 -3"></path>
                                <path d="M18 15l3 -3"></path>
                            </svg>
                                <span class="mx-2 text-sm font-medium">Log Off</span>
                        </button>
                    </form>
            </div>

        </nav>
    </div>
</aside>