<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>
	<meta name="description" content="">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> 
  
	<!-- 
	<link rel="stylesheet" type="text/css" href="/css/app.css"> 	
	-->
	<link rel="stylesheet" href="/css/normalize.css">	
	<link rel="stylesheet" type="text/css" href="/css/main.css">
   
	
</head>

	
<body>
  
<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" 
	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<defs>
		<symbol id="icon-home" viewBox="0 0 32 32">
			<title>home</title>
			<path d="M32 18.451l-16-12.42-16 12.42v-5.064l16-12.42 16 12.42zM28 18v12h-8v-8h-8v8h-8v-12l12-9z"></path>
		</symbol>		
		<symbol id="icon-menu3" viewBox="0 0 44 32">
			<title>menu3</title>
			<path d="M0 6h28v6h-28v-6zM0 14h28v6h-28v-6zM0 22h28v6h-28v-6z"></path>
			<path d="M31 14l6 6 6-6z"></path>
		</symbol>
		<symbol id="icon-phone" viewBox="0 0 32 32">
			<title>phone</title>
			<path d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"></path>
		</symbol>		
		<symbol id="icon-heart" viewBox="0 0 32 32">
			<title>heart</title>
			<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
		</symbol>		
		<symbol id="icon-checkmark" viewBox="0 0 32 32">
			<title>checkmark</title>
			<path d="M27 4l-15 15-7-7-5 5 12 12 20-20z"></path>
		</symbol>
		
		<symbol id="icon-facebook" viewBox="0 0 32 32">
			<title>facebook</title>
			<path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
		</symbol>
		<symbol id="icon-coin-pound" viewBox="0 0 32 32">
		<title>coin-pound</title>
		<path d="M15 2c-8.284 0-15 6.716-15 15s6.716 15 15 15c8.284 0 15-6.716 15-15s-6.716-15-15-15zM15 29c-6.627 0-12-5.373-12-12s5.373-12 12-12c6.627 0 12 5.373 12 12s-5.373 12-12 12z"></path>
		<path d="M19 22h-7v-4h3c0.552 0 1-0.448 1-1s-0.448-1-1-1h-3v-1c0-1.654 1.346-3 3-3 1.068 0 2.064 0.575 2.599 1.501 0.277 0.478 0.888 0.641 1.366 0.365s0.641-0.888 0.365-1.366c-0.892-1.542-2.551-2.499-4.331-2.499-2.757 0-5 2.243-5 5v1h-1c-0.552 0-1 0.448-1 1s0.448 1 1 1h1v6h9c0.552 0 1-0.448 1-1s-0.448-1-1-1z"></path>
		</symbol>
		<symbol id="icon-facebook" viewBox="0 0 32 32">
			<title>facebook</title>
			<path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
		</symbol>			
	</defs>
</svg>
      
	@include('shared.navbar')
	

	@yield('content')
	

	
	@include('shared.footer')
	
	
</body>
</html>
