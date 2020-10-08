@extends('layout.default')

@section('title', 'Employees')

@section('log')
<h1>{{$message}}</h1>
<table align="center" style="border:1px solid black;">
	<thead>
		<tr>
			<th>id</th>
			<th>Име</th>
			<th>Телефон</th>
			<th>Адрес</th>
			<th>Длъжност</th>
		</tr>
	</thead>
	<tbody>
		@foreach($allEmployees as $employee)
		<tr>
			<td>{{$employee->id}}</td>
			<td>{{$employee->first_name}} {{$employee->last_name}}</td>
			<td>{{$employee->phone}}</td>
			<td>{{$employee->address}}</td>
			<td>{{$employee->job_title}}</td>
			<td><button id = "delete"><a style = "text-decoration: none; color: black;" href = "{{url('delete/')}}/{{$employee->id}}">Изтрий служител</a></button></td>
			<td><button><a style = "text-decoration: none; color: black;" href = "{{url('employees')}}/{{$employee->id}}/edit">Актуализирай</a></button></td>
		</tr>
		@endforeach
	</tbody>
</table>
	<button><a style = "text-decoration: none; color: black;" href = "{{url('registerEmployee')}}">Добави нов служител</a></button>

	@if($log == true)
		<button><a style = "text-decoration: none; color: black;" href = "{{url('update')}}">Актуализация</a></button><br><br>
	@endif
@endsection