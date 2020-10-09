@extends('layout.default')

@section('title', 'Login')

@section('log')
	<form method="post" action = "/employees/{{$employee->id}}"> 
    	{{csrf_field()}}
    	@method('PUT')

    	Актуализирай телефон:
    	<br>
		<input type = "number" name = "phone" placeholder = "Въведете телефон" value="{{$employee->phone}}">
		<br>
		Актуализирай адрес:
		<br>
		<input type = "text" name = "address" placeholder = "Въведете адрес" value="{{$employee->address}}">
		<br>
		Актуализирай длъжност:
		<br>
		<input type = "text" name = "job_title" placeholder = "Въведете длъжност" value="{{$employee->job_title}}">
		<br>
		<input type = "submit" name = "submit" value="Запази">	
	</form>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul id = "error">
	            @foreach ($errors->all() as $error)
	                <li>
	                	<h3  style="text-align: center;">{{$error}}</h3>
	                </li>
	            @endforeach
	        </ul>
	    </div>
	@endif
@endsection
