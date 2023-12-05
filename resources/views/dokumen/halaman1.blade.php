<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <title>Document</title>
</head>
<body class=" px-16 py-12 bg-white">
  <h3 class="font-bold text-lg mr-20">PT BPR SYARIAH BAKTIMAKMUR INDAH</h3>
  <p class="mr-20">Ruko Graha Niaga Citra 6-7 Sidoarjo, Jl Raya Surabaya-Krian KM 29</p>

  <div class="w-full h-1 bg-black mt-2"></div>
  <div class="w-full mt-0.5 h-0.5 bg-gray-500"></div>

  <h1 class="text-center font-bold text-3xl mt-4">NOTA ANALISA PEMBIAYAAN JASA</h1>
  <img src="{{ asset('img/bismillah.png') }}" alt="" class="h-32 mx-auto">

  {{-- create grid 2x3 --}}
  <div class="grid grid-cols-4 gap-4 mt-2 mx-16">
    <p>CIF Bank</p>
    <p>: 00000002 </p>
  </div>
  <div class="grid grid-cols-4 gap-4 mt-2 mx-16">
    <p>TGL Permohonan</p>
    <p>: 00000002 </p>
    <p class="text-right">User ID </p>
    <p>: Mandiri </p>
  </div>
  <div class="grid grid-cols-4 gap-4 mt-2 mx-16">
    <p>TGL Analisa</p>
    <p>: 00000002 </p>
    <p class="text-right">Nama </p>
    <p>: Mandiri </p>
  </div>

    

</body>
</html>