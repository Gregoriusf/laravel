
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Newbie project</title>

    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <style type="text/css">
      .help-block {
        color: red;
      }
    </style>
  </head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FORM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{URL::to('/main')}}">main</a></li>

      @if(Auth::user())

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

      @else

      <li><a href="{{URL::to('/signup')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>


      @endif

    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
      @yield('content')
    </div>
  </div>

  <!--  <div class="container">
      <div class="header clearfix">
          @yield('header')
      </div>

      <div class="jumbotron">
        @yield('sidebar-up')
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          @yield('sidebar-left')
        </div>

        <div class="col-lg-6">
          @yield('sidebar-right')
        </div>
      </div>

      <footer class="footer">
        @yield('footer')
      </footer>

    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
  </body>
</html>
