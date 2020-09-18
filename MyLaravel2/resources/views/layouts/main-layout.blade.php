<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Boolean</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    @include('partials.header')


    <div class="container">

      @yield('content')

      <div id="lunghe">
        <h2>LE LUNGHE</h2>
      </div>


      <div id="corte">
        <h2>LE CORTE</h2>
      </div>


      <div id="cortissime">
        <h2>LE CORTISSIME</h2>
      </div>


    </div>


   @include('partials.footer')


  </body>
</html>
