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