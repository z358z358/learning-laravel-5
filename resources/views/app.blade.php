<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ url( elixir('css/all.css') ) }}">
</head>
<body>
	@include('partials.nav')

	<div class="container">
		@include('flash::message')

		@yield('content')
	</div>

	<script src="{{ url( elixir('js/all.js') ) }}" type="text/javascript"></script>
	<script type="text/javascript">
		$('#flash-overlay-modal').modal();
		//$('div.alert').not('.alert-important').delay(3000).slideUp();
	</script>

	@yield('footer')
</body>
</html>