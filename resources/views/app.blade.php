<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>How To Install Vue 3 in Laravel 9 with Vite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	@vite('resources/css/app.css')
</head>
<body>
	<div class="min-h-screen bg-gradient-to-r from-indigo-500 to-fuchsia-500">
		<nav class="text-white fixed w-full z-20 top-0 shadow-lg">
			<div class="container mx-auto flex items-center justify-between px-6 py-3">
				<div class="flex items-center">
				<a href="#">
					<i class="fa-solid fa-ghost text-white text-lg"></i>
				</a>
				<h1 class="ml-4 text-xl font-medium">IPH3NG</h1>
				</div>
				<div class="flex items-center">
				<a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-fuchsia-600">Contact Me</a>
				</div>
			</div>
		</nav>

		<div class="home">
			@include('pages.home')
		</div>

		<div class="about">
			@include('pages.about')
		</div>

		<div class="skills">
			@include('pages.skills')
		</div>

		<div class="portfolio">
			@include('pages.portfolio')
		</div>

		<div class="footer">
			@include('pages.footer')
		</div>

	</div>

	@vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>