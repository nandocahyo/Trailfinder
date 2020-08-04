<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.front_style')
    @stack('addon-style')
  </head>
  <body>
   @include('includes.navbar_alternate')
   
    @yield('content')

   @include('includes.front_footer')
   @stack('prepend-script')
   @include('includes.front_script')
   @stack('addon-script')
  </body>
</html>
