<!doctype html>
<html>
<head>
	@include('cms.layouts.head')
</head>
<body>
	<div class="clearfix">
		@yield('content')

		<footer class="row"></footer>
	</div>

	@include('cms.layouts.footer')
</body>
</html>