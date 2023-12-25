@extends ('partial.main')

@section('container')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<section class=" max-w-screen-xl h-fit">
    <div class="" style="float: left">
        <h1 class="text-2xl font-bold">Cetak Dokumen</h1>
    </div>
    <div style="float:right">
        <form method="post" action="{{ route('downloadLaporan') }}" class="flex items-center">
            @csrf
            <label for="simple-search" class="sr-only">Search</label>
            <div class=" min-w-min">
                <input type="hidden" value="" name="json_kenaikan_labarugi">
                <input type="hidden" value="" name="json_kenaikan_neraca">
                <script>
                    function getFromStorage() {
                    const keys = [
                        "kenaikan_penjualan_bersih_1",
                        "kenaikan_penjualan_bersih_2",
                        "kenaikan_hpp_1",
                        "kenaikan_hpp_2",
                        "kenaikan_biaya_ops_nonops_1",
                        "kenaikan_biaya_ops_nonops_2",
                        "kenaikan_angsuran_bank_lain_1",
                        "kenaikan_angsuran_bank_lain_2",
                        "kenaikan_pendapatan_lain_1",
                        "kenaikan_pendapatan_lain_2",
                        "kenaikan_biaya_lain_1",
                        "kenaikan_biaya_lain_2",
                    ];

                    let storedData = localStorage.getItem("persenLabaRugi");

                    if (storedData) {
                        storedData = JSON.parse(storedData);

                        // Set the input json_kenaikan to the stored data
                        document.getElementsByName("json_kenaikan_labarugi")[0].value = JSON.stringify(storedData);
                        

                        console.log("Data retrieved from storage:", storedData);
                    } else {
                        console.log("No data found in storage.");
                        let object = {
                            "kenaikan_penjualan_bersih_1": "10",
                            "kenaikan_penjualan_bersih_2": "10",
                            "kenaikan_hpp_1": "10",
                            "kenaikan_hpp_2": "10",
                            "kenaikan_biaya_ops_nonops_1": "10",
                            "kenaikan_biaya_ops_nonops_2": "10",
                            "kenaikan_angsuran_bank_lain_1": "10",
                            "kenaikan_angsuran_bank_lain_2": "10",
                            "kenaikan_pendapatan_lain_1": "10",
                            "kenaikan_pendapatan_lain_2": "10",
                            "kenaikan_biaya_lain_1": "10",
                            "kenaikan_biaya_lain_2": "10"
                        };

                        localStorage.setItem("persenLabaRugi", JSON.stringify(object));

                        document.getElementsByName("json_kenaikan_labarugi")[0].value = JSON.stringify(object);
                    }
                    }

                    function getFromStorageNeraca() {
                    const keys = [
                        "kenaikan_kas_1",
                        "kenaikan_kas_2",
                        "kenaikan_piutang_dagang_1",
                        "kenaikan_piutang_dagang_2",
                        "kenaikan_persediaan_1",
                        "kenaikan_persediaan_2",
                        "kenaikan_tanah_1",
                        "kenaikan_tanah_2",
                        "kenaikan_gedung_1",
                        "kenaikan_gedung_2",
                        "kenaikan_penyusutan_gedung_1",
                        "kenaikan_penyusutan_gedung_2",
                        "kenaikan_peralatan_1",
                        "kenaikan_peralatan_2",
                        "kenaikan_penyusutan_peralatan_1",
                        "kenaikan_penyusutan_peralatan_2",
                        "kenaikan_hutang_jangka_pendek_1",
                        "kenaikan_hutang_jangka_pendek_2",
                        "kenaikan_hutang_jangka_panjang_1",
                        "kenaikan_hutang_jangka_panjang_2",
                        "kenaikan_laba_ditahan_1",
                        "kenaikan_laba_ditahan_2",
                        "kenaikan_laba_berjalan_1",
                        "kenaikan_laba_berjalan_2",
                    ];

                    let storedData = localStorage.getItem("persenNeraca");

                    if (storedData) {
                        storedData = JSON.parse(storedData);

                        // Set the input values based on stored data
                        document.getElementsByName("json_kenaikan_neraca")[0].value = JSON.stringify(storedData);

                        console.log("Data retrieved from storage:", storedData);
                    } else {
                        
                        let object = {
                            "kenaikan_kas_1": "10",
                            "kenaikan_kas_2": "10",
                            "kenaikan_piutang_dagang_1": "10",
                            "kenaikan_piutang_dagang_2": "10",
                            "kenaikan_persediaan_1": "10",
                            "kenaikan_persediaan_2": "10",
                            "kenaikan_tanah_1": "10",
                            "kenaikan_tanah_2": "10",
                            "kenaikan_gedung_1": "10",
                            "kenaikan_gedung_2": "10",
                            "kenaikan_penyusutan_gedung_1": "10",
                            "kenaikan_penyusutan_gedung_2": "10",
                            "kenaikan_peralatan_1": "10",
                            "kenaikan_peralatan_2": "10",
                            "kenaikan_penyusutan_peralatan_1": "10",
                            "kenaikan_penyusutan_peralatan_2": "10",
                            "kenaikan_hutang_jangka_pendek_1": "10",
                            "kenaikan_hutang_jangka_pendek_2": "10",
                            "kenaikan_hutang_jangka_panjang_1": "10",
                            "kenaikan_hutang_jangka_panjang_2": "10",
                            "kenaikan_laba_ditahan_1": "10",
                            "kenaikan_laba_ditahan_2": "10",
                            "kenaikan_laba_berjalan_1": "10",
                            "kenaikan_laba_berjalan_2": "10",
                        }

                        localStorage.setItem("persenNeraca", JSON.stringify(object));

                        document.getElementsByName("json_kenaikan_neraca")[0].value = JSON.stringify(object);
                    }
                    }
                    getFromStorage();
                    getFromStorageNeraca();
                </script>
                <input type="text"  name="ID_NASABAH" id="simple-search" class="bg-gray-50 max-w-[160px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Cari Nota" required>
            </div>
            <button type="submit" class="p-2 ml-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
    

    <br>
    {{-- <div class="flex justify-center">
        {{ $all_nasabah->links() }}
    </div> --}}
</section>
<section class="max-w-screen-xl h-fit">
    @if (session('download-url'))
    <div class="flex flex-col justify-center mt-80 gap-12 mx-auto">
        <h1 class="text-2xl font-bold">Laporan Dapat Diunduh Pada Link Berikut</h1>
        <div class="">
            <a href="{{ asset(session('download-url')) }}" class="mt-2 bg-gradient-to-tl from-emerald-400 via-green-200 to-lime-100 rounded-md p-4 drop-shadow-lg">Download</a>
        </div>
    </div>
    @endif
</section>

    <script src="{{ asset('js/danolisa.js') }}"></script>
  @endsection