<!DOCTYPE HTML>  
<html>	
	<head>
		<title>Магазин</title>
		<link rel = "stylesheet" href = "{{asset('css/default.css')}}"></link>
		
		<link href = "{{asset('img/avatar.jpg')}}" rel = "shortcut icon" type="image/x-icon">
	</head>

	<body>
		<div class = "header">
			<h1>{{$nameTitle}}</h1>
		</div>  
		<ul>		
			<li style = "float: right;"><a href = "{{url('account')}}">Информация</a></li>
			<li style = "float: right;"><a href = "{{url('employees')}}">Служители</a></li>			
			<li style = "float: right;"><a href = "{{url('register')}}">Регистрация</a></li>
			<li style = "float: right;"><a href = "{{url('login')}}">Вход</a></li>
		</ul>
		<br>
		<img src = "{{asset('img/avatar_accaunt.gif')}}" style="width: 300px; height:300px"> 
	    <div class="container">
	        @yield('log')
	    </div>
	</body>
</html>