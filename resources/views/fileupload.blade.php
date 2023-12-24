File upload

<form action="upload"  method="POST"  enctype="multipart/form-data">
    @csrf
<input type="file"  name='fisier'/>
<input type="submit"  value="sus"></input>
</form>