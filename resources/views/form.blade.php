@if($errors->any())
<ul>
@foreach($errors->all() as $eroare)
<li>{{$eroare}}</li>
@endforeach
@endif
</ul>
<form  action="users"  method="POST">
@csrf
<input type="text"  name="username"  placeholder="enter user id"/>  <br><br>
<span  style='color:red'>@error('username'){{$message}}@enderror</span><br><br>
<input type="password"  name="userpassword"  placeholder="Enter pwd">
<span  style='color:red'>@error('userpassword'){{$message}}@enderror</span>
<input type="submit"> Login </input>
</form>