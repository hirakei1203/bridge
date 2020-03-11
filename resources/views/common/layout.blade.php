<!-- <DOCTYPE html> -->
<html>
  <head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- css,scssの呼び出し -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <!-- <bootstrapの呼び出し> -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- jsファイルの呼び出し -->
  <!-- <script src="js/common.js" type="text/javascript"></script> -->
  </head>

    <body>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
     <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    </nav>

    <div class="container-fluid side-bar col-4">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  My patients
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  My dentists
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Dentists Ranking
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Contact to support
                </a>
              </li>
            </ul>
          </div>
        </nav>   
       </div>
      </div>  

    @yield('content')
    </body>

</html>


