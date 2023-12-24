<h1> User Login </h1>

<form action="user"  method="POST">
@csrf
<input type="text"  name="user"  placeholder="user"/>
<input type="password"  name="parola"  placeholder="password"/>
<input type="submit"/>
</form>
