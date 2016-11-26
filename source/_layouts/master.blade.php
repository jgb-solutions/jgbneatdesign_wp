<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $name . ' - ' . $description }}</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
<link rel="stylesheet" href="css/app.css">
</head>

<body>
   @yield('main')

	@include('_partials.footer')

	@include('_partials.menus.off-canvas')

	<script src="js/app.js"></script>
</body>
</html>