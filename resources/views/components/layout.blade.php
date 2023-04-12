<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Prova Database</title>
  </head>
  <body>

    <x-navbar/>
    @if (session('message'))
      <div class="alert alert-success">
        {{session('message')}}
      </div>
    @endif
    <div class="min-vh-100">
      {{$slot}}
    </div>
    

    <x-footer/>

  </body>
</html>