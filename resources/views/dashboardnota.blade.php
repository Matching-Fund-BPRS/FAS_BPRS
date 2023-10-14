@extends ('partial.mainnota')
@if($state == "not-found")
<script>
    alert('Data nasabah tidak ditemukan!')
</script>
@elseif($state == "empty")
<script>
    alert('Silahkan masukkan ID Nasabah!')
</script>
@endif
@section('container')
@endsection