@extends ('partial.mainnota')

@section('container')

<form method="post" action="{{ Route('tambah_limit_kredit') }}" id="limit_kredit_form">
    @csrf
    <input readonly name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
    <div class="">
        <div>
            <section id="permohonan_nasabah" class=" my-4 space-y-4 grid grid-cols-2">
                <div class="space-y-4 my-auto justify-center">
                    <p class="block py-4 text-base font-semibold text-black">
                        Permohonan Nasabah
                    </p>
                    <div>
                        <label for="limit_kredit" class="block mb-2 text-xs font-medium text-black">Limit Pembiayaan</label>
                        <input readonly type="text" name="limit_kredit" id="limit_kredit" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                        value="{{ $nasabah->LIMIT_KREDIT ?? 0 }}" required>
                    </div>
                
                    <div class="">
                        <label for="jawaktu" class="block mb-2 text-xs font-medium text-black">Jangka Waktu</label>
                        <div class="flex flex-row">
                            <input readonly name="jangka_waktu"  type="text" id="jangka_waktu" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " 
                            value="{{ $nasabah->JANGKA_WAKTU ?? 0 }}" required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                Bulan
                            </p>
                        </div>
                    </div>
                
                    <div class= "min-w-xl">
                        <label for="countries" class="block mb-2 text-xs font-medium text-black">Jenis Pembiayaan</label>
                        <select disabled id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            @if($limit_kredit_nasabah != null)
                                <option value="1" {{ $nasabah->JENIS_PERMOHONAN == 1 ? 'selected' : '' }}>Murabahah</option>
                                <option value="2" {{ $nasabah->JENIS_PERMOHONAN == 2 ? 'selected' : '' }}>Musyarakah</option>
                                <option value="3" {{ $nasabah->JENIS_PERMOHONAN == 3 ? 'selected' : '' }}>Mudarabah</option>
                                <option value="4" {{ $nasabah->JENIS_PERMOHONAN == 4 ? 'selected' : '' }}>Ijaroh</option>
                                <option value="5" {{ $nasabah->JENIS_PERMOHONAN == 5 ? 'selected' : '' }}>Rahn</option>
                                <option value="6" {{ $nasabah->JENIS_PERMOHONAN == 6 ? 'selected' : '' }}>Qord</option>
                            @else
                            <option value="1" >Murabahah</option>
                            <option value="2" >Musyarakah</option>
                            <option value="3" >Mudarabah</option>
                            <option value="4" >Ijaroh</option>
                            <option value="5" >Rahn</option>
                            <option value="6" >Qord</option>
                            @endif
                        </select>
                        <input type="hidden" name="jenis_permohonan" value="{{ $nasabah->JENIS_PERMOHONAN ?? 0 }}">
                    </div>
                </div>
                <div class=" space-y-4 my-auto justify-center">
                    <p class="block py-4 text-base font-semibold text-black">
                        Repayment Capacity
                    </p>
                    <div class="">
                        <label for="margin" class="block mb-2 text-xs font-medium text-black">Margin</label>
                        <div class="flex flex-row">
                            <input readonly  name="margin"  type="text" id="margin" class=" z-10 max-w-[80px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " 
                            value="{{ $nasabah->BUNGA ?? 0 }}" required>
                            <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                                % per Bulan
                            </p>
                        </div>
                    </div>
                    
                    <div>
                        <label for="angsuran" class="block mb-2 text-xs font-medium text-black">Angsuran</label>
                        <input readonly name="angsuran" type="text" id="angsuran" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                    
                    <div>
                        <label for="rpc" class="block mb-2 text-xs font-medium text-black">RPC</label>
                        <input readonly name="rpc" type="text" id="rpc" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    </div>
                
                </div>
            
            </section>
            
            <section id="dakeu_nasabah" class=" ">
            
                <p class="block py-4 text-base font-semibold text-black">
                    Data Keuangan Nasabah
                </p>
                <div class="my-4 space-y-4">
                    <div class="my-4 space-y-4">
                        <div>
                            <label for="omset" class="block mb-2 text-xs font-medium text-black">Omset / Pendapatan Usaha</label>
                            <input readonly  name="omset" type="text" id="omset" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->OMSET ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="hpp" class="block mb-2 text-xs font-medium text-black">Harga Pokok Penjualan (HPP)</label>
                            <input readonly name="hpp" type="text" id="hpp" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->HPP ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="laba_kotor" class="block mb-2 text-xs font-medium text-black">Laba Kotor</label>
                            <input readonly name="laba_kotor" type="text" id="laba_kotor" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                             required>
                        </div>
                    
                        <div>
                            <label for="total_biaya" class="block mb-2 text-xs font-medium text-black">Total Biaya Ops dan Non Ops</label>
                            <input readonly name="total_biaya_ops_nonops" type="text" id="total_biaya" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->BIAYA_HIDUP ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="laba_kotor_ops" class="block mb-2 text-xs font-medium text-black">Laba Kotor Operasional</label>
                            <input readonly name="laba_kotor_operasional" type="text" id="laba_kotor_ops" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="angsuran_lain" class="block mb-2 text-xs font-medium text-black">Angsuran Bank Lain</label>
                            <input readonly name="angsuran_bank_lain" type="text" id="angsuran_lain" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->ANGS_BANK_LAIN ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="laba_bersih_ops" class="block mb-2 text-xs font-medium text-black">Laba Bersih Operasional</label>
                            <input readonly name="laba_bersih_operasional" type="text" id="laba_bersih_ops" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>
                
                    <div class=" my-4 space-y-4">
                        <div>
                            <label for="pendapatan_lain" class="block mb-2 text-xs font-medium text-black">Pendapatan Lain</label>
                            <input readonly name="pendapatan_lain" type="text" id="pendapatan_lain" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->PEND_LAIN ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="biaya_lain" class="block mb-2 text-xs font-medium text-black">Biaya Lain</label>
                            <input readonly name="biaya_lain" type="text" id="biaya_lain" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" 
                            value="{{ $limit_kredit_nasabah->BIAYA_LAIN ?? 0 }}" required>
                        </div>
                    
                        <div>
                            <label for="ebit" class="block mb-2 text-xs font-medium text-black">EBIT</label>
                            <input readonly name="ebit" type="text" id="ebit" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="biaya_margin" class="block mb-2 text-xs font-medium text-black">Biaya Margin</label>
                            <input readonly name="biaya_margin" type="text" id="biaya_margin" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="biaya_pajak" class="block mb-2 text-xs font-medium text-black">Biaya Pajak</label>
                            <input value="{{ $rugi_laba_nasabah->BIAYA_PAJAK ?? 0 }}" name="biaya_pajak" type="text" id="biaya_pajak" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    
                        <div>
                            <label for="eait" class="block mb-2 text-xs font-medium text-black">EAIT (Laba Bersih)</label>
                            <input readonly name="laba_bersih"type="text" id="eait" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>   
                </div>

                <div class=" pt-6">
                    <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                </div>
            </section>
        </div>
        

    </div>

<form>

<script src="{{ asset('js/limitkredit.js') }}"></script>
@endsection