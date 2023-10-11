@extends ('partial.mainnota')

@section('container')

@if($limit_kredit_nasabah == null)
<form method="post" action="{{ Route('tambah_limit_kredit') }}">
    @csrf
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
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Omset / Pendapatan Usaha</label>
                            <input name="omset" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Harga Pokok Penjualan (HPP)</label>
                            <input name="hpp" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Kotor</label>
                            <input name="laba_kotor" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Total Biaya Ops dan Non Ops</label>
                            <input name="total_biaya_ops_nonops" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Kotor Operasional</label>
                            <input name="laba_kotor_operasional" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Angsuran Bank Lain</label>
                            <input name="angsuran_bank_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Bersih Operasional</label>
                            <input name="laba_bersih_operasional" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>
                
                    <div class=" my-4 space-y-4">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pendapatan Lain</label>
                            <input name="pendapatan_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lain</label>
                            <input name="biaya_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">EBIT</label>
                            <input name="ebit" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Margin</label>
                            <input name="biaya_margin" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Pajak</label>
                            <input name="biaya_pajak" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">EAIT (Laba Bersih)</label>
                            <input name="laba_bersih"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
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
                        <input name="margin"  type="text" id="jawaktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                        <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                            % per Bulan
                        </p>
                    </div>
                </div>
                
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Angsuran</label>
                    <input name="angsuran" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">RPC</label>
                    <input name="rpc" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            
                <div class=" pt-6">
                    <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                </div>

                <p id="keputusan" class="block py-4 text-base font-semibold text-gray-900">
                    Keputusan : <span class=" text-blue-700"> - </span>
                </p>
            </div>
    </div>
</form>
@else
<form method="post" action="/dashboard/limitkredit/{{ $nasabah->ID_NASABAH }}/edit">
    @csrf
    <div class="">
        <div>
            <section id="permohonan_nasabah" class=" my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-gray-900">
                    Permohonan Nasabah
                </p>
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Limit Pembiayaan</label>
                    <input value="{{ $limit_kredit_nasabah->LIMIT_KREDIT }}" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            
                <div class="">
                    <label for="jawaktu" class="block mb-2 text-xs font-medium text-gray-900">Jangka Waktu</label>
                    <div class="flex flex-row">
                        <input value="{{ $limit_kredit_nasabah->JANGKA_WAKTU }}" name="jangka_waktu"  type="text" id="jawaktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
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
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Omset / Pendapatan Usaha</label>
                            <input value="{{ $limit_kredit_nasabah->OMSET }}" name="omset" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Harga Pokok Penjualan (HPP)</label>
                            <input value="{{ $limit_kredit_nasabah->HPP }}" name="hpp" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Kotor</label>
                            <input name="laba_kotor" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Total Biaya Ops dan Non Ops</label>
                            <input name="total_biaya_ops_nonops" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Kotor Operasional</label>
                            <input name="laba_kotor_operasional" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Angsuran Bank Lain</label>
                            <input value="{{ $limit_kredit_nasabah->ANGS_BANK_LAIN }}" name="angsuran_bank_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Laba Bersih Operasional</label>
                            <input name="laba_bersih_operasional" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>
                
                    <div class=" my-4 space-y-4">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Pendapatan Lain</label>
                            <input value="{{ $limit_kredit_nasabah->PEND_LAIN }}" name="pendapatan_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lain</label>
                            <input value="{{ $limit_kredit_nasabah->BIAYA_LAIN }}" name="biaya_lain" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">EBIT</label>
                            <input name="ebit" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Margin</label>
                            <input name="biaya_margin" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Biaya Pajak</label>
                            <input name="biaya_pajak" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">EAIT (Laba Bersih)</label>
                            <input name="laba_bersih"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
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
                        <input name="margin"  type="text" id="jawaktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                        <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                            % per Bulan
                        </p>
                    </div>
                </div>
                
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Angsuran</label>
                    <input value="{{ $limit_kredit_nasabah->ANGSURAN }}" name="angsuran" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                
                <div>
                    <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">RPC</label>
                    <input value="{{ $limit_kredit_nasabah->RPC }}"name="rpc" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            
                <div class=" pt-6">
                    <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
                </div>

                <p id="keputusan" class="block py-4 text-base font-semibold text-gray-900">
                    Keputusan : <span class=" text-blue-700">APPROVED</span>
                </p>
            </div>
    </div>
</form>
@endif
@endsection