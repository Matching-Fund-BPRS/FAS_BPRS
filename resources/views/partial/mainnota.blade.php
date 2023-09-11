<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <div class="flex">

        <div class="min-h-screen min-w-fit sticky">
            @include('partial.sidebarnota')
        </div>
        
        <div class="md:p-8 p-4 w-full h-full">
            @yield('container')
        </div>

    </div>

</body>
</html>