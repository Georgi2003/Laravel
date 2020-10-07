@extends('layout.default')

@section('title', 'Login')

@section('log')
	<form method="post" action = "./update"> 
    	{{csrf_field()}}
    	<h3>Потвърдете самоличността си</h3>
    	<input type = "text" name = "first_name" placeholder = "Въведете име">
		<br>
		<input type = "text" name = "last_name" placeholder = "Въведете фамилия">
		<br>
		<h3>Актуализирайте данните си</h3>
		<input type = "number" name = "phone" placeholder = "Въведете телефон">
		<br>
		<input type = "text" name = "address" placeholder = "Въведете адрес">
		<br>
		<input type = "text" name = "job_title" placeholder = "Въведете длъжност">
		<br>
		<input type = "submit" name = "submit">	
	</form>
@endsection