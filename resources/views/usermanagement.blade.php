@extends ('partial.main')

@section('container')

<div class="flex flex-col mt-6">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                <table class=" divide-y divide-gray-20 w-full table-auto overflow-auto whitespace-normal">
                    <thead class="bg-gray-50">
                        <tr>

                            <th scope="col" class="px-2 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Nama
                            </th>

                            <th scope="col" class="px-2 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Email
                            </th>
                            <th scope="col" class="px-4 py-3.5 w-72 text-sm font-bold text-center rtl:text-right text-black-500">
                                Level User
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Create Date
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Status
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black-500">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-20">
                        @foreach($user_data as $user)
                        <tr>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ $user->name }}</p>
                            </td>
                            <td class="px-4 py-1 whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ $user->email }}</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                            @if($user->level == 0)
                                <p class="text-sm font-normal text-center text-gray-600">Operator</p>
                            @elseif($user->level == 1)
                                <p class="text-sm font-normal text-center text-gray-600">Supervisor</p>
                            @endif
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                                <p class="text-sm font-normal text-center text-gray-600">{{ $user->created_at }}</p>
                            </td>
                            <td class="px-12 py-4 font-medium whitespace-nowrap">
                            @if($user->isActive)
                                <p class="text-sm font-normal text-center text-gray-600">Active</p>
                            @else()
                                <p class="text-sm font-normal text-center text-gray-600">Non-Active</p>
                            @endif
                            </td>
                            <td class="align-center py-2 font-medium whitespace-nowrap">
                                <div class="flex space-x-1 ">
                                    {{-- <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Reset Password</button> --}}
                                    <form method="post" action="{{ route('delete-user') }}">
                                        @method('delete')
                                        @csrf
                                        <input name="id" value="{{ $user->id }}" type="hidden">
                                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete User</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<div class="flex space-x-4 mt-8">
    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add User</button>
</div>

<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-sm md:max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b border-gray-200 rounded-t dark:border-gray-600">
                <h3 class="text-xl font-bold text-gray-700 dark:text-white">
                    Add User
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="post" action="{{ Route('tambah_user') }}">
                @csrf
                <div class="p-4 space-y-4">
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Name</label>
                        <input name="name" type="text" placeholder="Nama" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
        
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Email</label>
                        <input name="email" type="email" placeholder="Email" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
        
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Password</label>
                        <input name="password" type="password" placeholder="Password" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
        
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Confirm Password</label>
                        <input name="confirm-password" type="password" placeholder="Confirm Password" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
        
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Level User</label>
        
                    <div class=" flex space-x-3">
                        <div class="flex my-auto items-center">
                            <input name="level" value ="1" id="default-radio-2" type="radio" name="default-radio" class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ml-2 text-xs font-medium text-gray-500 dark:text-gray-300">Supervisor</label>
                        </div>
                            
                        <div class="flex my-auto items-center">
                                <input name="level" value="0" id="default-radio-2" type="radio"  name="default-radio" class=" my-auto w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-xs font-medium text-gray-500 dark:text-gray-300">Operator</label>
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
<div class="flex justify-center">
    {{ $user_data->links() }}
</div>

@if(session('message'))
    <script>
        alert('Berhasil menambahkan user!')
    </script>
@endif

@endsection