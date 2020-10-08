@extends('layout.default')

@section('title', 'Login')

@section('log')
	<form method="post" action = "./update/1"> 
    	{{csrf_field()}}
		<h3>Актуализирайте данните си</h3>
		<input type = "number" name = "phone" placeholder = "Въведете телефон">
		<br>
		<input type = "text" name = "address" placeholder = "Въведете адрес">
		<br>
		<input type = "text" name = "job_title" placeholder = "Въведете длъжност">
		<br>
		<input type = "submit" name = "submit" value = "Актуализирай">	
	</form>
@endsection