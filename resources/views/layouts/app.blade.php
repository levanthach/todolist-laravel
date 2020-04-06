<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laravel - QuizStart - ToDoList</title>
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
	 <div class="container">
        <nav class="navbar navbar-default">
            <!-- Navbar Contents -->
        </nav>
    </div>
    <div class="container">
    	 @yield('content')
    </div>
   
</body>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</html>