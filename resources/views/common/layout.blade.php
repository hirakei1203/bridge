<!-- <DOCTYPE html> -->
<html>
  <head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">

  <!-- jsファイルの呼び出し -->
  <script src="js/common.js" type="text/javascript"></script>
  </head>

  <body>
  @yield('content')
  </body>

</html>


<!-- cssの呼び出し -->
