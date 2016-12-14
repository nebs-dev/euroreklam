<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Euroreklam Klime</title>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div id="frontend_app">

      @include('frontend.partials.header')
      @include('frontend.partials.sidebar')

      @yield('content')

      @include('frontend.partials.footer')

    </div>

    <script>
      window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
    <script type="text/javascript" src="/js/frontend/frontend_app.js"></script>
    @yield('js')

  </body>
  </html>
