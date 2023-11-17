
<nav class="bg-white border-gray-200 dark:bg-gray-900 fixed w-full z-50 border-b-2">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center">
          <img src="{{ asset('img/logo.png') }}" class="h-12 mr-3" alt="BPRS Logo" />
          <p class=" font-bold">BPRS Baktimakmur Indah</p>
      </a>
      <button data-collapse-toggle="navbar-defaultnota" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-defaultnota">

        {{-- <div class="mt-4 bg-gradient-to-tl from-emerald-400 via-green-200 to-lime-100 rounded-md p-2 drop-shadow-lg">
            <p class="text-left text-xs font-bold">
                User ID : <span class="font-normal">Mandiri</span>
            </p>
            <p class="text-left text-xs font-bold">
                Nama : <span class="font-normal">Mandiri Supervisor</span>
            </p>
            <p class="text-left text-xs font-bold">
                Level : <span class="font-normal">Supervisor</span>
            </p>
        </div> --}}

        <div class="mt-3">
            <nav class="-mx-3 space-y-3 relative">
                <div class="flex justify-center pt-2">
                <form class="flex flex-row max-w-fit px-3 justify-center m-0" method="get" action="{{ route('search-id') }}">   
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class=" min-w-min">
                        @if($nasabah!= null)
                        <input type="text" name="id" value="{{ $nasabah->ID_NASABAH }}" id="simple-search" class="bg-gray-50 max-w-[160px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="" required>
                        @else
                            <input type="text" name="id" id="simple-search" class="bg-gray-50 max-w-[160px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Cari Nota" required>
                        @endif
                    </div>
                    <button type="submit" class="p-2 ml-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
                </div>
    
                <div class="mx-3 text-xs text-center">
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
                    @if($nasabah == null)
                    
                    <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')">
                        <span class="mx-2 text-sm font-normal">Detail Data Entry</span>
                    </a>
    
                    <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')">
                        <span class="mx-2 text-sm font-normal">Fasilitas Existing</span>
                    </a>

                    <a  type="button" class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                        <span class="mx-2 text-sm font-normal">Analisa 5C</span>
                    </a>

                    <div id="drop-5c" class="w-full space-y-1"> 
                        <div class="grid">
                            <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')">
                                <span class="mx-2 ml-6 text-sm font-normal">Capacity</span>
                            </a>
                            <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')">
                                <span class="mx-2 ml-6 text-sm font-normal">Collateral</span>
                            </a>
                            <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')">
                                <span class="mx-2 ml-6 text-sm font-normal">Condition</span>
                            </a>
                            <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')">
                                <span class="mx-2 ml-6 text-sm font-normal">Capital</span>     
                            </a>
                            <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#" onClick="alert('Silakan masukkan ID Nasabah terlebih dahulu!')">
                                <span class="mx-2 ml-6 text-sm font-normal">Character</span>  
                            </a>
                        </div>
                    </div>
    
                    <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/infokeuangan">
                        <span class="mx-2 text-sm font-normal">Info Keuangan</span>
                    </a>
    
                    <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/limitkredit">
                        <span class="mx-2 text-sm font-normal">Perhitungan Limit Kredit</span>
                    </a>
    
                    <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                        <span class="mx-2 text-sm font-normal">Rugi Laba</span>
                    </a>
    
                    <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                        <span class="mx-2 text-sm font-normal">Neraca</span>
                    </a>
    
                    <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                        <span class="mx-2 text-sm font-normal">Rekomendasi</span>
                    </a>
    
                    <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                        <span class="mx-2 text-sm font-normal">Daftar Angunan</span>
                    </a>
                </div>
                @else
                <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/danolisa/{{ $nasabah->ID_NASABAH }}">
                    <span class="mx-2 text-sm font-normal">Detail Data Entry</span>
                </a>

                <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/fasilitasexisting/{{ $nasabah->ID_NASABAH }}">
                    <span class="mx-2 text-sm font-normal">Fasilitas Existing</span>
                </a>

                <a  type="button" class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                    <span class="mx-2 text-sm font-normal">Analisa 5C</span>
                </a>

                <div id="drop-5c" class="w-full space-y-1"> 
                    <div class="grid">
                        <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5capacity/{{ $nasabah->ID_NASABAH }}">
                            <span class="mx-2 ml-6 text-sm font-normal">Capacity</span>
                        </a>
                        <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5collateral/{{ $nasabah->ID_NASABAH }}">
                            <span class="mx-2 ml-6 text-sm font-normal">Collateral</span>
                        </a>
                        <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5condition/{{ $nasabah->ID_NASABAH }}">
                            <span class="mx-2 ml-6 text-sm font-normal">Condition</span>
                        </a>
                        <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5capital/{{ $nasabah->ID_NASABAH }}">
                            <span class="mx-2 ml-6 text-sm font-normal">Capital</span>     
                        </a>
                        <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="/dashboard/5character/{{ $nasabah->ID_NASABAH }}">
                            <span class="mx-2 ml-6 text-sm font-normal">Character</span>  
                        </a>
                    </div>
                </div>

                <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                    <span class="mx-2 text-sm font-normal">Info Keuangan</span>
                </a>

                <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                    <span class="mx-2 text-sm font-normal">Perhitungan Limit Kredit</span>
                </a>

                <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                    <span class="mx-2 text-sm font-normal">Rugi Laba</span>
                </a>

                <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                    <span class="mx-2 text-sm font-normal">Neraca</span>
                </a>

                <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                    <span class="mx-2 text-sm font-normal">Rekomendasi</span>
                </a>

                <a class="flex items-center py-1 px-1 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-green-800 hover:text-white" href="#">
                    <span class="mx-2 text-sm font-normal">Daftar Angunan</span>
                </a>

                @endif
                <div id="exit" class="space-y-2 pt-2">
    
                    <a class="flex items-center px-2 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-orange-600 hover:text-white" href="#">
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
                            <button class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-red-600 hover:text-white">
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
        
      </div>
    </div>
  </nav>
  