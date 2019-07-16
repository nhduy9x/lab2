<form action="{{route('nhap')}}" method="post">
	@csrf
	<input type="text" name="name" placeholder="name"><br>
	<input type="text" name="age" placeholder="age"><br>
	<input type="text" name="address" placeholder="address"><br>
	<input type="text" name="lop" placeholder="lop"><br>
	<input type="submit" value="submit"><br>
</form>