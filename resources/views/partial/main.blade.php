<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPRS Baktimakmur Indah</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <style>
        /* Ganti warna latar belakang tombol "Choose Files" menjadi abu-abu */
        input[type="file"]::-webkit-file-upload-button {
            background-color: #cbd5e0; /* Sesuaikan warna abu-abu yang diinginkan */
            border: 1px solid #a0aec0; /* Sesuaikan warna border yang diinginkan */
            color: #4a5568; /* Sesuaikan warna teks yang diinginkan */
            padding: 0.5rem 1rem; /* Sesuaikan padding yang diinginkan */
            border-radius: 0.375rem; /* Sesuaikan radius border yang diinginkan */
            transition: background-color 0.3s ease; /* Efek transisi ketika dihover */
            margin-left:0.1rem   
        }
    
        input[type="file"]::-webkit-file-upload-button:hover {
            background-color: #a0aec0; /* Sesuaikan warna abu-abu saat dihover */
        }
    </style>
</head>
<body class="flex">
    <div class="flex">

        <div class="min-h-screen min-w-fit hidden md:inline">

        @include('partial.sidebar')

        </div>

        <div class="md:hidden mb-32 md:mb-0">
            @include('partial.navbar')
        </div>
        
        <div class="md:p-8 p-4 mt-20 md:mt-0 w-full h-full relative">
            @yield('container')
        </div>

    </div>

</body>
</html>