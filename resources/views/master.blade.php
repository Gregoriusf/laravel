
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Newbie project</title>

    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="//cdnjs.cloudflare.
    com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.
    com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <style type="text/css">
      .help-block {
        color: red;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" name="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#">CRUD</a>

        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('blog.index')}}">Home</a></li>
            <li><a href="#"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="{{URL::to('/signout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
          @yield('content')
        </div>
      </div>
    </div>

    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  </body>
</html>
