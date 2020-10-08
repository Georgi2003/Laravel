@extends('layout.default')

@section('title', 'Login')

@section('log')
	<form method="post" action = "/employees/{{$employee->id}}"> 
    	{{csrf_field()}}
    	@method('PUT')
		<input type = "text" name = "first_name" placeholder = "Въведете име" value="{{$employee->first_name}}">
		<br>
		<input type = "text" name = "last_name" placeholder = "Въведете фамилия">
		<br>
		<input type = "number" name = "phone" placeholder = "Въведете телефон">
		<br>
		<input type = "text" name = "address" placeholder = "Въведете адрес">
		<br>
		<input type = "text" name = "job_title" placeholder = "Въведете длъжност">
		<br>
		<input type = "submit" name = "submit" value="Запази">	
	</form>
@endsection
