<!doctype html>
<html lang="en">
  <head>
@include('partials._head')
</head>
  <body>
@include('partials._nav')
<div class="container">
@include('partials._messages')

<div class="row" style="min-height: 600px">
  @yield('content')
</div>
@include('partials._footer')

</div>

   @include('partials._javascript')
 
@yield('scripts')
</body>
</html>