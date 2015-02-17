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
		@include('flash::message')

		@yield('content')
	</div>

	<script src="//code.jquery.com/jquery.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		$('#flash-overlay-modal').modal();
		//$('div.alert').not('.alert-important').delay(3000).slideUp();
	</script>

	@yield('footer')
</body>
</html>