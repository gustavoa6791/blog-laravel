

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Proyecto web</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body>
		<div class="container px-3 mx-auto">
			<header class="flex justify-between items-center py-2">
				<div class="flex items-center flex-grow gap-4">
					<a href="{{ route('home') }}">
						<img src="{{ Vite::asset('resources/images/coding.png') }}" class="h-12">
					</a>
					<form action="{{ route('home') }}" class="flex-grow" method="GET">
						<input type="text" name="search" placeholder="Buscar" value="{{ request('search') }}" 
						class="border border-gray-200 rounded py-2 px-4 w-1/2"
						>
					</form>
				</div>

				@auth
				<a href="{{ route('dashboard') }}">Dashboard</a>
				@else
				<a href="{{ route('login') }}">Login</a>
				@endif
			</header>

			<div id="separator" class="opacity-60 h-px mb-4"></div>

			@yield('content')

			<p class="py-16">
			<img src="{{ Vite::asset('resources/images/coding.png') }}" class="h-12 mx-auto">
			</p>
		</div>
	</body>
</html>