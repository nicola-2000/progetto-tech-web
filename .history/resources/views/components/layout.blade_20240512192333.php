<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script>
        let links = document.querySelectorAll('.nav-link');
for(let i=0; i<links.length; i++){
  links[i].addEventListener('click', function() {
    for(let j=0; j<links.length; j++)
      links[j].classList.remove('active');
    this.classList.add('active');
  });
}
    </script>
</head>
<body>
    <x-navbar>

    </x-navbar>
    {{$slot}}
</body>
</html>