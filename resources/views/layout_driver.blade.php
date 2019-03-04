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
    <link rel="stylesheet" href="/css/driver/driver_panel.css">
    <link rel="stylesheet" href="/css/driver/show_all_bar.css">
    <link rel="stylesheet" href="/css/driver/profile_driver.css">
    @yield('css')
  </head>
  <body  >

    <div class="">
      @include('driver.header_driver')
    </div>
    <div class="content"id="continer_driver">
      @yield('content')
    </div>


    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript">
      $(document).pjax('.a_driver','#continer_driver');
    </script>
    @yield('js')
  </body>
</html>
