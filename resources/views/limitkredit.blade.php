@extends ('partial.mainnota')

@section('container')

<div class="">
    <div>
        <section id="permohonan_nasabah" class=" my-4 space-y-4">
            <p class="block py-4 text-base font-semibold text-gray-900">
                Permohonan Nasabah
            </p>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Limit Pembiayaan</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        
            <div class="">
                <label for="jawaktu" class="block mb-2 text-xs font-medium text-gray-900">Jangka Waktu</label>
                <div class="flex flex-row">
                    <input name="jangka_waktu"  type="text" id="jawaktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        Bulan
                    </p>
                </div>
            </div>
        
            <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Jenis Pembiayaan</label>
                <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Murabahah</option>
                    <option value="CA">Musyarakah</option>
                    <option value="FR">Mudarabah</option>
                    <option value="FR">Ijaroh</option>
                    <option value="FR">Rahn</option>
                    <option value="FR">Qord</option>
                </select>
            </div>
        
        </section>
        
        <section id="dakeu_nasabah" class=" ">
        
            <p class="block py-4 text-base font-semibold text-gray-900">
                Data Keuangan Nasabah
            </p>
            <div class="my-4 space-y-4 md:grid md:grid-cols-2">
                <div class="my-4 space-y-4">
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Ofset / Pendapatan Usaha</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Harga Pokok Penjualan</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Kotor</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Total Biaya Ops dan Non Ops</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Kotor Operasional</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Angsuran Bank Lain</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Bersih Operasional</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                </div>
            
                <div class=" my-4 space-y-4">
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pendapatan Lain</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lain</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">EBIT</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Margin</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Pajak</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                    <div>
                        <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">EAIT (Laba Bersih)</label>
                        <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                </div>   
            </div>

            
        </section>
    </div>
    
        <div class=" space-y-4 my-auto justify-center">
            <p class="block py-4 text-base font-semibold text-gray-900">
                Repayment Capacity
            </p>
            <div class="">
                <label for="jawaktu" class="block mb-2 text-xs font-medium text-gray-900">Margin</label>
                <div class="flex flex-row">
                    <input name="jangka_waktu"  type="text" id="jawaktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                        % per Bulan
                    </p>
                </div>
            </div>
            
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Angsuran</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">RPC</label>
                <input type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        
            <p class="block py-4 text-base font-semibold text-gray-900">
                Keputusan : <span class=" text-blue-700">APPROVED</span>
            </p>
        </div>

    
</div>


@endsection