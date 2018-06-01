<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>App</title>
  </head>
  <body>
    @include('templates.partials.nav')
    <div class="container">
      @yield('content')
    </div>
    <footer>Footer</footer>
  </body>
</html>
