<form method="post" action="{{ Route('login') }}">
    @csrf
    <input name="email" type="email" placeholder="Email">
    <input name="password" type="password" placeholder="Password">
    <button type="submit"> login </button>
</form>
<a href="/register"> ke register </a>

@if(session('message'))
    <script> 
        alert('Daftar berhasil, silakan login!')
    </script>
@endif