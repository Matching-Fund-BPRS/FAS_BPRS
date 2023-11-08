@extends ('partial.mainnota')

@section('container')

<form method="post" action="{{ Route('tambah_limit_kredit') }}" id="limit_kredit_form">
    @csrf
    <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
    <div class="">
        <div>
            <section id="permohonan_nasabah" class=" my-4 space-y-4">
                <p class="block py-4 text-base font-semibold text-gray-900">
                    Permohonan Nasabah
                </p>
                <div>
                    <label for="limit_kredit" class="block mb-2 text-xs font-medium text-gray-900">Limit Pembiayaan</label>
                    <input type="text" name="limit_kredit" id="limit_kredit" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                    value="{{ $limit_kredit_nasabah->LIMIT_KREDIT ?? 0 }}" required>
                </div>
            
                <div class="">
                    <label for="jawaktu" class="block mb-2 text-xs font-medium text-gray-900">Jangka Waktu</label>
                    <div class="flex flex-row">
                        <input name="jangka_waktu"  type="text" id="jangka_waktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " 
                        value="{{ $limit_kredit_nasabah->JANGKA_WAKTU ?? 0 }}" required>
                        <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                            Bulan
                        </p>
                    </div>
                </div>
            
                <div class= "min-w-xl">
                    <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Jenis Pembiayaan</label>
                    <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        @if($limit_kredit_nasabah != null)
                            <option value="1" {{ $limit_kredit_nasabah->JENIS == 1 ? 'selected' : '' }}>Murabahah</option>
                            <option value="2" {{ $limit_kredit_nasabah->JENIS == 2 ? 'selected' : '' }}>Musyarakah</option>
                            <option value="3" {{ $limit_kredit_nasabah->JENIS == 3 ? 'selected' : '' }}>Mudarabah</option>
                            <option value="4" {{ $limit_kredit_nasabah->JENIS == 4 ? 'selected' : '' }}>Ijaroh</option>
                            <option value="5" {{ $limit_kredit_nasabah->JENIS == 5 ? 'selected' : '' }}>Rahn</option>
                            <option value="6" {{ $limit_kredit_nasabah->JENIS == 6 ? 'selected' : '' }}>Qord</option>
                        @else
                        <option value="1" >Murabahah</option>
                        <option value="2" >Musyarakah</option>
                        <option value="3" >Mudarabah</option>
                        <option value="4" >Ijaroh</option>
                        <option value="5" >Rahn</option>
                        <option value="6" >Qord</option>
                        @endif
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
                            <label for="omset" class="block mb-2 text-xs font-medium text-gray-900">Omset / Pendapatan Usaha</label>
                            <input name="omset" type="text" id="omset" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->OMSET ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="hpp" class="block mb-2 text-xs font-medium text-gray-900">Harga Pokok Penjualan (HPP)</label>
                            <input name="hpp" type="text" id="hpp" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->HPP ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="laba_kotor" class="block mb-2 text-xs font-medium text-gray-900">Laba Kotor</label>
                            <input name="laba_kotor" type="text" id="laba_kotor" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                             required>
                        </div>
                    
                        <div>
                            <label for="total_biaya" class="block mb-2 text-xs font-medium text-gray-900">Total Biaya Ops dan Non Ops</label>
                            <input name="total_biaya_ops_nonops" type="text" id="total_biaya" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->BIAYA_HIDUP ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="laba_kotor_ops" class="block mb-2 text-xs font-medium text-gray-900">Laba Kotor Operasional</label>
                            <input name="laba_kotor_operasional" type="text" id="laba_kotor_ops" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="angsuran_lain" class="block mb-2 text-xs font-medium text-gray-900">Angsuran Bank Lain</label>
                            <input name="angsuran_bank_lain" type="text" id="angsuran_lain" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->ANGS_BANK_LAIN ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="laba_bersih_ops" class="block mb-2 text-xs font-medium text-gray-900">Laba Bersih Operasional</label>
                            <input name="laba_bersih_operasional" type="text" id="laba_bersih_ops" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>
                
                    <div class=" my-4 space-y-4">
                        <div>
                            <label for="pendapatan_lain" class="block mb-2 text-xs font-medium text-gray-900">Pendapatan Lain</label>
                            <input name="pendapatan_lain" type="text" id="pendapatan_lain" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->PEND_LAIN ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="biaya_lain" class="block mb-2 text-xs font-medium text-gray-900">Biaya Lain</label>
                            <input name="biaya_lain" type="text" id="biaya_lain" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->BIAYA_LAIN ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="ebit" class="block mb-2 text-xs font-medium text-gray-900">EBIT</label>
                            <input name="ebit" type="text" id="ebit" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="biaya_margin" class="block mb-2 text-xs font-medium text-gray-900">Biaya Margin</label>
                            <input name="biaya_margin" type="text" id="biaya_margin" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="biaya_pajak" class="block mb-2 text-xs font-medium text-gray-900">Biaya Pajak</label>
                            <input name="biaya_pajak" type="text" id="biaya_pajak" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                            value="0" required>
                        </div>
                    
                        <div>
                            <label for="eait" class="block mb-2 text-xs font-medium text-gray-900">EAIT (Laba Bersih)</label>
                            <input name="laba_bersih"type="text" id="eait" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
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
                    <label for="margin" class="block mb-2 text-xs font-medium text-gray-900">Margin</label>
                    <div class="flex flex-row">
                        <input name="margin"  type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " 
                        value="{{ $limit_kredit_nasabah->BUNGA_KREDIT ?? 0 }}" required>
                        <p class=" ml-3 my-auto place-item-center text-xs font-medium text-gray-500">
                            % per Bulan
                        </p>
                    </div>
                </div>
                
                <div>
                    <label for="angsuran" class="block mb-2 text-xs font-medium text-gray-900">Angsuran</label>
                    <input name="angsuran" type="text" id="angsuran" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
                
                <div>
                    <label for="rpc" class="block mb-2 text-xs font-medium text-gray-900">RPC</label>
                    <input name="rpc" type="text" id="rpc" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                </div>
            
                <div class=" pt-6">
                    <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                </div>

                {{-- <p id="keputusan" class="block py-4 text-base font-semibold text-gray-900">
                    Keputusan : <span class=" text-blue-700">APPROVED</span>
                </p> --}}
            </div>
    </div>

<form>

<script src="{{ asset('js/limitkredit.js') }}"></script>
@endsection