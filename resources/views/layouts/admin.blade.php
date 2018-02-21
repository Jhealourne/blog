<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Admin</title>

  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.0/css/bootstrap.min.css"> -->
  <link href="{{asset('bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <link href="{{asset('design2.css')}}" rel="stylesheet" >
  <link href="{{asset('open-iconic-master/font/css/open-iconic-bootstrap.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src='/tinymce/js/tinymce/tinymce.min.js'></script> -->
  <script src="{{asset('textboxio-client/textboxio/textboxio.js')}}"></script>

  <style type="text/css">
    .row{
      margin-top: 40px;
    }
  </style>
  @yield('style')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.dropdown-toggle').dropdown();
    });
  </script>
</head>
<body>

  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mb-0 h1" href="/">NewsBeat xD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/Admin/Category">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Admin/Category">Keywords</a>
        </li>
    </div>
    <div class="btn btn-outline-warning" onclick="location.href='/logout'">Logout</div>
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
    

  @yield('script')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- <script src="{{asset('bootstrap-4.0.0-beta.2/assets/js/vendor/jquery-slim.min.js')}}"></script> -->
    <script>window.jQuery || document.write('<script src="bootstrap-4.0.0-beta.2/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{asset('bootstrap-4.0.0-beta.2/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js')}}"></script>
  </body>
</html>
