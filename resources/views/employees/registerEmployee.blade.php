@extends('layout.default')

@section('title', 'Login')

@section('log')

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul id = "error">
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<form method="post" action = "/employees"> 
    	{{csrf_field()}}
		<input type = "text" name = "first_name" placeholder = "Въведете име">
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
