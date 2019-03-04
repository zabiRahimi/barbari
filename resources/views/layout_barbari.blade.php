<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/barbari/header_barbari.css">
    <link rel="stylesheet" href="/css/barbari/profile_barbari.css">

  </head>
  <body  >

    <div class="">
      @include('barbari.header_barbari')
    </div>
    <div class="content"id="continer_barbari">
      @yield('content')
    </div>


    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript">$(document).pjax('.a_barbari','#continer_barbari');</script>
    @yield('js')
  </body>
</html>
