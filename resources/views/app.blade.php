<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Workplace</title>
        <script src="https://kit.fontawesome.com/df9f7c369a.js" crossorigin="anonymous"></script>
		@vite
	</head>
	<body class="bgimg">
		@inertia
	</body>
</html>

<style>
    .bgimg {
        background-image: url('/assets/bg.png');
        background-size:100%;
    }
</style>

