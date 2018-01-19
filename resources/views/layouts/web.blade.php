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
  <link href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <link href="design2.css" rel="stylesheet" >
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <!-- <script src='/tinymce/js/tinymce/tinymce.min.js'></script> -->
  <script src="/textboxio-client/textboxio/textboxio.js"></script>
<!--   <script>
// tinymce.init({
//   selector: "textarea",  // change this value according to your HTML
//   toolbar: "image",
//   plugins: "image imagetools",
//   imagetools_cors_hosts: ['mydomain.com', 'otherdomain.com'],
//   imagetools_proxy: 'proxy.php'
// });
    tinymce.init({
      selector: 'textarea',
      height: 500,
      plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools wordcount"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image",
      // imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ]
    });
  </script> -->

  <style type="text/css">
    .row{
      margin-top: 40px;
    }
  </style>
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

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
      </ul>
    </div>
    @if(!Auth::check())
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
    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">
      var editor = textboxio.replace('#mytextarea');
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-4.0.0-beta.2/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-4.0.0-beta.2/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>