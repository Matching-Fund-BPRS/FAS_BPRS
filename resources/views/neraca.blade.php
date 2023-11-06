@extends ('partial.mainnota')

@section('container')

<div class="flex flex-col mt-6">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 border border-gray-200">
                        <p class="text-sm font-semibold text-center text-gray-600">No.</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <p class="text-sm font-semibold text-center text-gray-600">Uraian</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <p class="text-sm font-semibold text-center text-gray-600">I</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <p class="text-sm font-semibold text-center text-gray-600">II</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <p class="text-sm font-semibold text-center text-gray-600">III</p>
                    </div>
                </div>   

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="col-span-2 border border-gray-200">
                        <p class="text-sm font-semibold text-center text-gray-600">Tanggal</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <p class="text-sm font-semibold text-center text-gray-600">06/08/2015</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center"> 
                        <p class="text-sm font-semibold text-center text-gray-600">06/08/2015</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <p class="text-sm font-semibold text-center text-gray-600">06/08/2015</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="col-span-2 border border-gray-200">
                        <p class="text-sm font-semibold text-center text-gray-600">AKTIVA</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>
                
                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600">1.</p>
                    </div >
                    <div class="">
                        <p class="text-sm font-semibold text-center text-gray-600">Aktiva Lancar</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>
                
                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Kas</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>
                
                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Piutang Dagang</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>  

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Persediaan</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>  

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-semibold text-center text-gray-600">Subtotal</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>
                
                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-semibold text-center text-gray-600">2.</p>
                    </div>
                    <div class="">
                        <p class="text-sm font-semibold text-center text-gray-600">Aktiva Tetap</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>
                
                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Tanah</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>
                
                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Gedung</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>  

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Penyusutan</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>  

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-normal text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Peralatan</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-normal text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Penyusutan</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>
                
                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32 ">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-semibold text-center text-gray-600">Subtotal</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class=" col-span-2">
                        <p class="text-sm font-semibold text-center text-gray-600">PASIVA</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600">1.</p>
                    </div >
                    <div class="">
                        <p class="text-sm font-semibold text-center text-gray-600">Kewajiban</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Hutang Jangka Pendek</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Hutang Jangka Panjang</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-semibold text-center text-gray-600">Subtotal</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600">1.</p>
                    </div >
                    <div class="">
                        <p class="text-sm font-semibold text-center text-gray-600">Modal</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Modal / Saham</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Laba Ditahan</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-normal text-center text-gray-600">Laba Berjalan</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-normal text-center text-gray-600">
                    </div>
                </div>

                <div class="grid grid-cols-5 border border-gray-200">
                    <div class="w-32">
                        <p class="text-sm font-semibold text-center text-gray-600"></p>
                    </div>
                    <div class="">
                        <p class="text-sm font-semibold text-center text-gray-600">Subtotal</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                    <div class="border border-gray-200 flex justify-center">
                        <input class="text-sm font-semibold text-center text-gray-600">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection