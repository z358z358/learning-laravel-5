<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url( elixir('css/all.css') ) }}">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>

	@yield('footer')
</body>
</html>