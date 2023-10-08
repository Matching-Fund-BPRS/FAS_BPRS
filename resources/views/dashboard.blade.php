@extends ('partial.main')

@section('container')
@if(session('message'))
    <script>
        alert("Selamat datang di website BPRS Batimakmur Indah!")
    </script>
@endif
@endsection