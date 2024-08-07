@extends ('partial.mainnota')

@section('container')
<section class="md:grid md:grid-cols-4 space-x-8 ">
@if($rekomendasi_nasabah == null)
<form id="rekomendasi_form" method="post" action="{{ Route('tambah_rekomendasi') }}" class="col-span-2">
    @csrf

    <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
    <div class=" my-4 space-y-4">
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Plafond</label>
            <input name="plafond"type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" value="{{ $nasabah->LIMIT_KREDIT }}" required>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-black">Akad Pembiayaan</label>
            <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1" {{ $nasabah->SIFAT == 1 ? 'selected' : '' }}>Murabahah</option>
                <option value="2" {{ $nasabah->SIFAT == 2 ? 'selected' : '' }}>Musyarakah</option>
                <option value="3" {{ $nasabah->SIFAT == 3 ? 'selected' : '' }}>Mudarabah</option>
                <option value="4" {{ $nasabah->SIFAT == 4 ? 'selected' : '' }}>Ijaroh</option>
                <option value="5" {{ $nasabah->SIFAT == 5 ? 'selected' : '' }}>Rahn</option>
                <option value="6" {{ $nasabah->SIFAT == 6 ? 'selected' : '' }}>Qord</option>
            </select>
        </div>
        <div class= "min-w-xl" id="input_ebit">
            <label for="countries" class="block mb-2 text-xs font-medium text-black">Ebit</label>
            <input class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" name="ebit" value="{{ $ebit }}" readonly>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Jenis Permohonan</label>
           
            <select name="jenis_permohonan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1" {{ $nasabah->JENIS_PERMOHONAN == 1 ? 'selected' : '' }}>Tambahan</option>
                <option value="2" {{ $nasabah->JENIS_PERMOHONAN == 2 ? 'selected' : '' }}>Perpanjangan</option>
                <option value="3" {{ $nasabah->JENIS_PERMOHONAN == 3 ? 'selected' : '' }}>Tambahan dan Perpanjangan</option>
            </select>
        </div>

        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Tujuan Penggunaan</label>
           
            <select name="tujuan_penggunaan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1" {{ $nasabah->TUJUAN == 1 ? 'selected' : '' }}>Modal Kerja</option>
                <option value="2" {{ $nasabah->TUJUAN == 2 ? 'selected' : '' }}>Investasi</option>
                <option value="3" {{ $nasabah->TUJUAN == 3 ? 'selected' : '' }}>Konsumsi</option>
            </select>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Tipe Angsuran</label>
           
            <select name="tipe_angsuran" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1" >Flat</option>
                <option value="2" >Menurun</option>
            </select>
        </div>
        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Margin</label>
                <div class="flex flex-row">
                    <input name="margin" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " value="{{ $nasabah->BUNGA ?? 0 }}" required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        % per Bulan
                    </p>
                </div>
            </div>

            <div class="" id="input_bayar_pokok">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Bayar Pokok</label>
                <div class="flex flex-row">
                    <input value="0" name="bayar_pokok" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        kali
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Jangka Waktu</label>
                <div class="flex flex-row">
                    <input name="jangka_waktu" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " value="{{ $nasabah->JANGKA_WAKTU ?? 0 }}" required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        Bulan
                    </p>
                </div>
            </div>

            <div class="" id="input_bagi_hasil_bank">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Bagi Hasil Bank</label>
                <div class="flex flex-row">
                    <input value="{{ $nasabah->BASIL_BANK ?? 0 }}" name="bagi_hasil_bank" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        %
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Angsuran Total / Bulan</label>
                <div class="flex flex-row">
                    <input name="angsuran_bulan" readonly type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        
                    </p>
                </div>
            </div>

            <div class="" id="input_bagi_hasil_mudharib">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Bagi Hasil Mudharib</label>
                <div class="flex flex-row">
                    <input value="{{ $nasabah->BASIL_DEB ?? 0 }}" name="bagi_hasil_mudharib" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " readonly required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        %
                    </p>
                </div>
            </div>
        </div>
        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Angsuran Pokok</label>
                <input name="angsuran_pokok" readonly type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Angsuran Margin</label>
                <input name="angsuran_bunga" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Provisi</label>
                <input name="provisi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Biaya Notaris</label>
                <input name="biaya_notaris" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Administrasi</label>
                <input name="administrasi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Biaya Asuransi</label>
                <input name="biaya_asuransi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Biaya Materai</label>
                <input name="biaya_materai" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Biaya Lainnya</label>
                <input name="biaya_lainnya" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
        <div class=" pt-6">
            <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
        </div>
    </div>
</form>
@else
<form id="rekomendasi_form" method="post" action="/dashboard/rekomendasi/{{ $nasabah->ID_NASABAH }}/edit" class="col-span-2">
    @csrf
    
    <div class=" my-4 space-y-4">

        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Plafond</label>
            <input value="{{ $rekomendasi_nasabah->LIMIT_KREDIT }}" name="plafond" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
        </div>

        <div class= "min-w-xl">
            <label for="countries" class="block mb-2 text-xs font-medium text-black">Akad Pembiayaan</label>
            <select name="sifat" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 1) selected @endif value="1">Murabahah</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 2) selected @endif value="2">Musyarakah</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 3) selected @endif value="3">Mudarabah</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 4) selected @endif value="4">Ijaroh</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 5) selected @endif value="5">Rahn</option>
                <option @if($rekomendasi_nasabah->SIFAT_KREDIT == 6) selected @endif value="6">Qord</option>
            </select>
        </div>
        <div class= "min-w-xl" id="input_ebit">
            <label for="countries" class="block mb-2 text-xs font-medium text-black">Ebit</label>
            <input class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" name="ebit" value="{{ $ebit }}" readonly>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Jenis Permohonan</label>
           
            <select name="jenis_permohonan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1" {{ $rekomendasi_nasabah->JENIS_PERMOHONAN == 1 ? 'selected' : '' }}>Tambahan</option>
                <option value="2" {{ $rekomendasi_nasabah->JENIS_PERMOHONAN == 2 ? 'selected' : '' }}>Perpanjangan</option>
                <option value="3" {{ $rekomendasi_nasabah->JENIS_PERMOHONAN == 3 ? 'selected' : '' }}>Tambahan dan Perpanjangan</option>
            </select>
        </div>

        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Tujuan Penggunaan</label>
           
            <select name="tujuan_penggunaan" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1" {{ $rekomendasi_nasabah->TUJUAN == 1 ? 'selected' : '' }}>Modal Kerja</option>
                <option value="2" {{ $rekomendasi_nasabah->TUJUAN == 2 ? 'selected' : '' }}>Investasi</option>
                <option value="3" {{ $rekomendasi_nasabah->TUJUAN == 3 ? 'selected' : '' }}>Konsumsi</option>
            </select>
        </div>
        <div>
            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Tipe Angsuran</label>
           
            <select name="tipe_angsuran" id="countries" class=" max-w-md bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                <option value="1" >Flat</option>
                <option value="2" >Menurun</option>
            </select>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Margin</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->BUNGA }}" name="margin" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        % per Bulan
                    </p>
                </div>
            </div>

            <div class="" id="input_bayar_pokok">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Bayar Pokok</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->BAYAR_POKOK }}" name="bayar_pokok" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        kali
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Jangka Waktu</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->JANGKA_WAKTU }}" name="jangka_waktu" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        Bulan
                    </p>
                </div>
            </div>

            <div class="" id="input_bagi_hasil_bank">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Bagi Hasil Bank</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->BASIL_BANK }}" name="bagi_hasil_bank"type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        %
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 max-w-md space-x-4">
            <div class="">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Angsuran Total / Bulan</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->ANGSURAN }}" name="angsuran_bulan" readonly type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        
                    </p>
                </div>
            </div>

            <div class="" id="input_bagi_hasil_mudharib">
                <label for="margin" class="block mb-2 text-xs font-medium text-black">Bagi Hasil Mudharib</label>
                <div class="flex flex-row">
                    <input value="{{ $rekomendasi_nasabah->BASIL_DEB }}" name="bagi_hasil_mudharib" type="text" id="margin" class=" z-10 max-w-[100px] shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "  readonly required>
                    <p class=" ml-3 my-auto place-item-center text-xs font-medium text-black">
                        %
                    </p>
                </div>
            </div>
        </div>
        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Angsuran Pokok</label>
                <input name="angsuran_pokok" readonly value="{{ intval($rekomendasi_nasabah->LIMIT_KREDIT / $rekomendasi_nasabah->JANGKA_WAKTU) }}" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Angsuran Margin</label>
                <input name="angsuran_bunga" value="{{ intval($rekomendasi_nasabah->LIMIT_KREDIT * $rekomendasi_nasabah->BUNGA / 100) }}" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Provisi</label>
                <input value="{{ $rekomendasi_nasabah->PROVISI }}" name="provisi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Biaya Notaris</label>
                <input value="{{ $rekomendasi_nasabah->NOTARIS }}" name="biaya_notaris" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Administrasi</label>
                <input value="{{ $rekomendasi_nasabah->ADMINISTRASI }}"name="administrasi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Biaya Asuransi</label>
                <input value="{{ $rekomendasi_nasabah->ASURANSI }}" name="biaya_asuransi" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>

        <div class="flex space-x-4">
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Biaya Materai</label>
                <input value="{{ $rekomendasi_nasabah->MATERAI }}" name="biaya_materai" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-black">Biaya Lainnya</label>
                <input value="{{ $rekomendasi_nasabah->LAINNYA }}" name="biaya_lainnya" type="text" id="sifat_plafond" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
        </div>
        <div class=" pt-6">
            <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
        </div>
    </div>
</form>
@endif
<div class="col-span-2">
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                    <table class=" divide-y divide-gray-20 w-full table-fixed overflow-auto whitespace-normal">
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col" class=" px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black0">
                                    Aspek
                                </th>

                                <th scope="col" colspan="2" class="px-4 py-3.5 text-sm font-bold text-center rtl:text-right text-black0">
                                    Nilai
                                </th>

                                

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-20">
                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-semibold text-center text-black">Character</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap" colspan="2"> 
                                        <p class="text-sm font-normal text-center text-black">{{ number_format(($scoring->CHARACTER ?? 0)*100, 2). ' %' }}</p>
                                </td>
                               
                            </tr>

                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-semibold text-center text-black">Capacity</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap" colspan="2">
                                        <p class="text-sm font-normal text-center text-black">{{ number_format(($scoring->CAPACITY ?? 0) *100 , 2). ' %' }}</p>
                                </td>
                            </tr>
                
                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-semibold text-center text-black">Condition</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap" colspan="2">
                                        <p class="text-sm font-normal text-center text-black">{{ number_format(($scoring->CONDITION ?? 0)*100 , 2). ' %' }}</p>
                                </td>
                            </tr>
                                                
                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-semibold text-center text-black">Capital</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap" colspan="2">
                                        <p class="text-sm font-normal text-center text-black">{{ number_format(($scoring->CAPITAL ?? 0)*100 , 2). ' %' }}</p>
                                </td>
                            </tr>
                                                
                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-semibold text-center text-black">Collateral</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap" colspan="2">
                                        <p class="text-sm font-normal text-center text-black">{{ number_format(($scoring->COLLATERAL ?? 0)*100 , 2). ' %' }}</p>
                                </td>
                            </tr>
                                                
                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-semibold text-center text-black">Syariah</p>
                                </td>
                                <td class="px-12 py-4 font-medium whitespace-nowrap" colspan="2">
                                        <p class="text-sm font-normal text-center text-black">{{ number_format(($scoring->SYARIAH ?? 0) *100 , 2). ' %' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-semibold text-center text-black">Grade Risiko</p>
                                </td>
                                <td class="py-4" colspan="2">
                                        <p class="text-sm font-normal text-center text-black" id="hasil">
                                            @if($predicted == 1)
                                                A: Rendah
                                            @elseif($predicted == 2)
                                                A-: Cukup Rendah
                                            @elseif($predicted == 3)
                                                B: Sedang
                                            @elseif($predicted == 4)
                                               B-: Cukup Tinggi
                                            @elseif($predicted == 5)
                                                C: Tinggi
                                            @else
                                                Tidak dapat dianalisis
                                            @endif
                                        </p>
                                </td>
                            </tr>
                            {{-- <script>
                                let hasil = document.getElementById('hasil');
                                let scoringValue = {{ number_format(($scoring->SCORING ?? 0) * 100, 2) ?? 0 }};
                                hasil.innerHTML = get_score(scoringValue);
                            
                                function get_score(scoring) {
                                    console.log(scoring);
                            
                                    if (scoring < 28) {
                                        return "D";
                                    } else if (scoring >= 28 && scoring < 36) {
                                        return "C-";
                                    } else if (scoring >= 36 && scoring < 44) {
                                        return "C";
                                    } else if (scoring >= 44 && scoring < 52) {
                                        return "C+";
                                    } else if (scoring >= 52 && scoring < 60) {
                                        return "B-";
                                    } else if (scoring >= 60 && scoring < 68) {
                                        return "B";
                                    } else if (scoring >= 68 && scoring < 76) {
                                        return "B+";
                                    } else if (scoring >= 76 && scoring < 84) {
                                        return "A-";
                                    } else if (scoring >= 84 && scoring < 92) {
                                        return "A";
                                    } else {
                                        return "A+";
                                    }
                                }
                            </script> --}}
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
</section>
<script src="{{ asset('js/rekomendasi.js') }}"></script>

@if(session('success-edit'))
    <script>
        alert("Data berhasil diperbarui!")    
    </script>
@endif

@if(session('success-add'))
    <script>
        alert("Data berhasil ditambahkan!")    
    </script>
@endif


@endsection