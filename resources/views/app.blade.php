<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
  </head>
  <body>
    <main class="container">
      <div id="app"></div>
    </main>
  </body>
</html>