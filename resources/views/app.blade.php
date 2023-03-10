<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Workplace</title>
		@vite
	</head>
	<body class="bgimg">
		@inertia
	</body>
</html>

<style>
    .bgimg {
        background-image: url('/assets/bg.png');
        background-repeat: no-repeat;
        background-size:100%;
    }
</style>

