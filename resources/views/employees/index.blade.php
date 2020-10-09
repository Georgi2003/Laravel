@extends('layout.default')

@section('title', 'Employees')

@section('log')
<h1>{{$message}}</h1>
<table align="center" style="border:1px solid black;">
	<thead>
		<tr>
			<th>№</th>
			<th>Име</th>
			<th>Телефон</th>
			<th>Адрес</th>
			<th>Длъжност</th>
			<th>Изтрий служител</th>
			<th>Актуализирай</th>
		</tr>
	</thead>
	<tbody>
		@foreach($allEmployees as $employee)
		<tr>
			<td>{{$num++}}</td>
			<td>{{$employee->first_name}} {{$employee->last_name}}</td>
			<td>{{$employee->phone}}</td>
			<td>{{$employee->address}}</td>
			<td>{{$employee->job_title}}</td>
			<td>
				<form method="post" action="{{url('employees/')}}/{{$employee->id}}">
					@csrf
					@method('DELETE')
					<button style = "text-decoration: none; color: black;" href = "">Изтрий служител</button>
				</form> 
			</td>
			<td><button><a style = "text-decoration: none; color: black;" href = "{{url('employees')}}/{{$employee->id}}/edit">Актуализирай</a></button></td>
		</tr>
		@endforeach
	</tbody>
</table>
	<button><a style = "text-decoration: none; color: black;" href = "{{url('employees')}}/create">Добави нов служител</a></button>

	@if($log == true)
		<button><a style = "text-decoration: none; color: black;" href = "{{url('update')}}">Актуализация</a></button><br><br>
	@endif
@endsection