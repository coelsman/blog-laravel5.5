<!doctype html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	<header>
		@include('layouts.header')
	</header>
	<div class="clearfix">
		@yield('content')

		<footer class="row"></footer>
	</div>

	@include('layouts.footer')
</body>
</html>