<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Photo Gallery</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <meta name="_token" content="{{csrf_token()}}" />
		<link href="{{ asset('app.css') }}" rel="stylesheet">
	</head>
	<body>

		<nav class="navigation">
			<div class="navigation__logo_box">
				<a href="/" class="navigation__logo">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168.35 139.53"><path d="M362.36,237c-.69-.38-16.85-8.77-43.77-13.85l-1-4.41A25.34,25.34,0,0,0,292.77,199h-24.2a25.37,25.37,0,0,0-24.79,19.68l-1,4.41c-26.93,5-43.08,13.47-43.77,13.85a4.64,4.64,0,0,0-2.49,4.1v54.89a40,40,0,0,0,39.91,39.91,4.66,4.66,0,0,0,0-9.32,30.63,30.63,0,0,1-30.59-30.59V244c5.59-2.56,20.37-8.6,41.6-12.26a4.66,4.66,0,0,0,3.73-3.52l1.72-7.42a16.08,16.08,0,0,1,15.71-12.46h24.2a16.06,16.06,0,0,1,15.7,12.46l1.73,7.42a4.61,4.61,0,0,0,3.73,3.52c21.16,3.66,36,9.7,41.6,12.26v51.95a30.63,30.63,0,0,1-30.59,30.59,4.66,4.66,0,0,0,0,9.32,40,40,0,0,0,39.91-39.91V241.05A4.58,4.58,0,0,0,362.36,237Z" transform="translate(-196.49 -199.01)" style="fill:#fff"/><path d="M211.75,227.42a4.32,4.32,0,0,0,1.45-.24c4.9-1.63,10-3.08,15.29-4.32a4.64,4.64,0,1,0-2.14-9c-5.49,1.31-10.91,2.83-16.08,4.52a4.64,4.64,0,0,0-3,5.87A4.75,4.75,0,0,0,211.75,227.42Z" transform="translate(-196.49 -199.01)" style="fill:#fff"/><path d="M280.69,231.22a53.66,53.66,0,1,0,53.64,53.67A53.7,53.7,0,0,0,280.69,231.22Zm0,98A44.34,44.34,0,1,1,325,284.86,44.38,44.38,0,0,1,280.69,329.22Z" transform="translate(-196.49 -199.01)" style="fill:#fff"/></svg>
				</a>
			</div>	

			<input class="navigation__checkbox" type="checkbox" id="navigation__toggle_checkbox">
			<label for="navigation__toggle_checkbox" class="navigation__label">
				<span class="navigation__humberger_icon"></span>
			</label>

			<div class="navigation__bg"></div>
			<div class="navigation__nav">
				<ul class="navigation__list">
					<li class="navigation__item"><a href="/" class="navigation__link">Home</a></li>
					<li class="navigation__item"><a href="https://omidhabedy.me" class="navigation__link" target="_blank">About</a></li>
					<li class="navigation__item"><a href="mailto:omidiskawous@gmail.com" class="navigation__link" target="_blank">Contact</a></li>
					<li class="navigation__item"><a href="https://github.com/HabedyOmid/Photo-Gallery" class="navigation__link" target="_blank">GitHub</a></li>
				</ul>
			</div>
		</nav>

		@yield('header')

		<main>
			@yield('content')
		</main>
		
		@yield('script')
	</body>
</html>