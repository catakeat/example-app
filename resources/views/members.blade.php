<html>
    <header>
</header>
<body>


<form method="POST"  action="add">
    @csrf
<input type="text"  name="prenume"  placehoolder="prenume">
<input type="text"  name="nume" placeholder="nume">
<input type="email"  name="email"  placeholder="email">
<button type="submit">Go </button>
</form>

@if(isset($members))

<table>
<thead>
<th>ID</th>
<th>Prenume</th>
<th>Nume</th>
<th>Email</th>
<th>Operatii</th>
</thead>
@foreach($members as $member)
<tr>
    <td>{{$member->id}}</td>
    <td>{{$member->prenume}}</td>
    <td>{{$member->nume}}</td>
    <td>{{$member->email}}</td>
    <td>
        <a href="/delete/{{$member->id}}">Sterge</a><br>
        <a href="/update/{{$member->id}}">Update</a> 
</td>
    <td></td>
</tr>
@endforeach
</table>
@endif
</body>
</html>