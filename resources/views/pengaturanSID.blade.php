@extends ('partial.main')

@section('container')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<ul
class="flex flex-wrap text-sm font-medium text-center text-black border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
<li class="mr-2">
    <a href="/dashboard/pengaturanBI" aria-current="page"
        class="inline-block p-4 rounded-t-lg hover:text-black hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-black">Ref BI</a>
</li>
<li class="mr-2">
        <a href="/dashboard/pengaturanSID"
            class="active inline-block p-4 text-green-600 bg-gray-100 rounded-t-lg dark:bg-gray-800 dark:text-green-500 ">Ref SID</a>
</li>
<li class="mr-2">
    <a href="/dashboard/pengaturanBank"
        class="inline-block p-4 rounded-t-lg hover:text-black hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-black">Ref Bank</a>
</li>
</ul>


<section class="">
    <div class="space-y-4 col-span-1">
        <div class="flex py-4 justify-between">
            <div class="my-auto">
                <p class=" block text-base font-semibold text-black">
                    Sandi SID
                </p>
            </div>
            <div class="my-auto">
                <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2">Tambah Ref</button>
            </div>
        </div>

        <div class="col-span-2">

            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
        
                            <table class=" divide-y divide-gray-20 w-full table-auto overflow-auto whitespace-normal hidden" id="reff_sid">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class=" px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-black">
                                            Jenis
                                        </th>
        
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-black">
                                            Sandi
                                        </th>
        
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-black">
                                            Keterangan
                                        </th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-black">
                                            Status
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-20">
                                    @php
                                        function getJenis($sandi)
                                        {
                                            switch ($sandi) {
                                                case '7':
                                                    return 'Sektor Ekonomi';
                                                    break;
                                                
                                                case '8':
                                                    return 'Penggunaan';
                                                    break;
                                                case '14':
                                                    return 'Pembiayaan';
                                                    break;
                                                default:
                                                    return 'Lainnya';
                                            }
                                        };
                                    @endphp
                                    @foreach ($reff_sid as $ref )
                                        
                                    <tr onclick="
                                    document.getElementById('openPopup-{{ $ref->JENIS }}-{{ $ref->SANDI }}').click()
                                    " class="cursor-pointer" >
                                        <td class="px-4 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-semibold text-center text-black">{{getJenis($ref->JENIS)}}</p>
                                        </td>
                                        <td class="px-12 py-4 font-medium whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-black">{{$ref->SANDI}}</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-black">{{$ref->KETERANGAN}}</p>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                                <p class="text-sm font-normal text-center text-black">{{$ref->DELETED == 0 ? 'Aktif' : 'Nonaktif'}}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
</section>


  
  <!-- Main modal -->
  <div id="defaultModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <form class="relative p-4 w-96 max-w-2xl max-h-full" method="post" action="{{ route('post_SID') }}">
        @csrf  
        <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-black  ">
                      Tambah Ref
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                <div>
                    <label for="" class="block mb-2 text-xs font-medium text-black">Jenis</label>
                    <select name="jenis" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        <option value="7">Sektor Ekonomi</option>
                        <option value="8">Penggunaan</option>
                        <option value="14">Pembiayaan</option>
                    </select>
                </div>
                <div>
                    <label for="" class="block mb-2 text-xs font-medium text-black">Sandi</label>
                    <input name="sandi" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="" class="block mb-2 text-xs font-medium text-black">Keterangan</label>
                    <input name="keterangan" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
                  <button data-modal-hide="defaultModal" type="button" class="ms-3 text-black bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-black focus:z-10 dark:bg-gray-700 dark:text-black dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Keluar</button>
              </div>
          </div>
        </form>
  </div>
  
  @foreach ( $reff_sid as $ref)
    <button type="button" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 hidden" data-modal-target="defaultModal-{{ $ref->JENIS }}-{{ $ref->SANDI }}" data-modal-toggle="defaultModal-{{ $ref->JENIS }}-{{ $ref->SANDI }}" id="openPopup-{{ $ref->JENIS }}-{{ $ref->SANDI }}"></button>
    
    <div id="defaultModal-{{ $ref->JENIS }}-{{ $ref->SANDI }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <form class="relative p-4 w-96 max-w-2xl max-h-full" method="post" action="{{ route('post_SID') }}">
            @csrf
            <input name="old_jenis" value="{{ $ref->JENIS }}" type="hidden">
            <input name="old_sandi" value="{{ $ref->SANDI }}" type="hidden">  
            <input name="old_keterangan" value="{{ $ref->KETERANGAN }}" type="hidden"> 
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-black  ">
                        Edit Ref
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal-{{ $ref->JENIS }}-{{ $ref->SANDI }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                  <div>
                      <label for="" class="block mb-2 text-xs font-medium text-black">Jenis</label>
                      <select id="edit_jenis" name="jenis" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        <option value="7" {{ $ref->JENIS == 7 ? 'selected' : '' }}>Sektor Ekonomi</option>
                        <option value="8" {{ $ref->JENIS == 8 ? 'selected' : '' }}>Penggunaan</option>
                        <option value="14" {{ $ref->JENIS == 14 ? 'selected' : '' }}>Pembiayaan</option>
                      </select>
                  </div>
                  <div>
                      <label for="" class="block mb-2 text-xs font-medium text-black">Sandi</label>
                      <input id="edit_keterangan" name="sandi" value="{{ $ref->SANDI }}"  type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                  </div>
                  <div>
                      <label for="" class="block mb-2 text-xs font-medium text-black">Keterangan</label>
                      <input id="edit_sandi" name="keterangan" value="{{ $ref->KETERANGAN }}" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                  </div>
                </div>
                <!-- Modal footer -->
                <d<div class="flex justify-between items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <div class="flex">
                      <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
                    <button data-modal-hide="defaultModal-{{ $ref->JENIS }}-{{ $ref->SANDI }}" type="button" class="ms-3 text-black bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-black focus:z-10 dark:bg-gray-700 dark:text-black dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Keluar</button>
                    </div>
                    <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" onclick="$('#delete_bi_{{ $ref->JENIS }}_{{ $ref->SANDI }}').submit()">Ubah Status</button>
                </div>
            </div>
        </form>
        <form action="{{ route('delete_BI') }}" method="post" class="relative p-4 w-96 max-w-2xl max-h-full hidden" id="delete_bi_{{ $ref->JENIS }}_{{ $ref->SANDI }}">
          @method('DELETE')
          @csrf
          <input name="jenis" value="{{ $ref->JENIS }}" type="hidden">
          <input name="sandi" value="{{ $ref->SANDI }}" type="hidden">
      </form>
    </div>
    @endforeach
<br>
<script>
    $(document).ready( function () {
      $('#reff_sid').DataTable();
      $('#reff_sid').removeClass('hidden')
      document.getElementsByName('reff_sid_length')[0].classList.add('w-24')
      })
  </script>
</div>
<br>

    @if(session('success-add'))
    <script>
      alert('Berhasil menambahkan data!')
    </script>
    @elseif(session('success-edit'))
    <script>
      alert('Berhasil memperbarui data!')
    </script>
    @endif
@endsection