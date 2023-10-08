<form method="post" action="{{ Route('register') }}">
    @csrf
    <input name="name" type="text" placeholder="Nama"> 
    <input name="email" type="email" placeholder="Email">
    <input name="password" type="password" placeholder="Password">
    <button type="submit"> Register </button>
</form>
<a href="/login"> ke login </a>