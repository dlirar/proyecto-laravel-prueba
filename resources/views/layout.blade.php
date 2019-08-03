<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Aprendible')</title>
</head>
<body>

	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">Acerca de</a></li>
			<li><a href="/portfolio">Portafolio</a></li>
			<li><a href="/contact">Contacto</a></li>
		</ul>
	</nav>

	@yield('content')

</body>
</html>