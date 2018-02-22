<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.0/css/bootstrap.min.css"> -->
  <link href="{{asset('bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <link href="{{asset('design2.css')}}" rel="stylesheet" >
  <link href="{{asset('open-iconic-master/font/css/open-iconic-bootstrap.css')}}" rel="stylesheet">

  <style type="text/css">
    .row{
      margin-top: 40px;
    }
  </style>
  @yield('style')
</head>
<body>

  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mb-0 h1" href="/">NewsBeat xD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($variable as $var)
            <a class="dropdown-item" href="/Category/{{$var->category_id}}">{{$var->category_name}}</a>
            @endforeach
          </div>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
    @if(!Auth::check() || Auth::user()->usertype == '1')
    <div>
      <div class="btn btn-outline-primary" onclick="location.href='/Signin'">Sign-in</div>
      <div class="btn btn-outline-secondary" onclick="location.href='/Signup'">Sign-up</div>
    </div>
    @else
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
      <li class="nav-item dropdown">
        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->username }}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
          <a class="dropdown-item" href="/WriteArticle">Write an article</a>
          <a class="dropdown-item" href="/AuthorProfile">Profile</a>
          <a class="dropdown-item" href="/ManageArticle">Manage article</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/Settings">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li>
    </ul>
    @endif
  </nav>
<div style="min-height: 500px">
@yield('content')
</div>

<div class="container-fluid" style="background-color: lightgray; border-top: 1px solid; bottom: 0px; margin-top: 50px">
  <div class="container" style="padding: 10px">
  <!--   <div class="row">
      <div class="col"> -->
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
   <!--    </div>
    </div> -->
  </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="{{asset('bootstrap-4.0.0-beta.2/assets/js/vendor/jquery-slim.min.js')}}"></script> -->
    <script>window.jQuery || document.write('<script src="bootstrap-4.0.0-beta.2/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{asset('bootstrap-4.0.0-beta.2/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('textboxio-client/textboxio/textboxio.js')}}"></script>
    <script src="{{asset('emotion-ratings-master/emotion-rating.min.js')}}"></script>
    <script src="{{asset('jquery-cookie-master/src/jquery.cookie.js')}}"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.dropdown-toggle').dropdown();
      var emotionsArray = ['angry','disappointed','crying','meh', 'happy', 'laughing'];
      // or a single one
      // var emotionsArray = ['happy'];
      $("#divrate").emotionsRating({
        count: 6,
        emotionSize: 60,
        bgEmotion: 'happy',
        emotions: emotionsArray,
        color: '#FF0066' //the color must be expressed with a css code
      });
    });

  </script>


    @yield('script')
  </body>
</html>
