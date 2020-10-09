@extends('layout.default')

@section('title', 'Login')

@section('log')
	<form method="post" action = "/employees/{{$employee->id}}"> 
    	{{csrf_field()}}
    	@method('PUT')

		<input type = "number" name = "phone" placeholder = "Въведете телефон" value="{{$employee->phone}}">
		<br>
		<input type = "text" name = "address" placeholder = "Въведете адрес" value="{{$employee->address}}">
		<br>
		<input type = "text" name = "job_title" placeholder = "Въведете длъжност" value="{{$employee->job_title}}">
		<br>
		<input type = "submit" name = "submit" value="Запази">	
	</form>
@endsection
