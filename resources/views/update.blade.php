<html>
    <header>
</header>
<body>

Update this object
<form method="POST"  action="/update">
    @csrf
    <input type="hidden"  name="id"  value="{{$member->id}}">
<input type="text"  name="prenume"  value="{{$member->prenume}}"  placehoolder="prenume">
<input type="text"  name="nume"  value="{{$member->nume}}" placeholder="nume">
<input type="email"  name="email"  placeholder="email"  value="{{$member->email}}">
<button type="submit">Update </button>
</form>

</body>
</html>