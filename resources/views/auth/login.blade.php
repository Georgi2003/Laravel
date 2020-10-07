@extends('layout.default')

@section('title', 'Login')

@section('log')
	<form method = "POST" action = "./login"> 	  			
		{{csrf_field()}}
		<input type = "text" name = "first_name" placeholder = "Потребителско име">
		<br>
		<input type = "text" name = "last_name" placeholder = "Парола"> 	
		<br>	 	
		<input type = "submit" name = "submit">
		<br>
	</form>
@endsection
 