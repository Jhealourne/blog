<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="news-logo.ico">

    <title>SIGNIN</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    
    <link rel="icon" href="{!! asset('img/blur.png') !!}"/>
    
    <style type="text/css">
      body{
        background-image: url("/img/blur.png");
        background-repeat: no-repeat;
        background-size: cover;
          }

       ::-webkit-input-placeholder{
         font-style: italic;
          }
        h3{
          font-style: italic;
        }
        .center{
        margin: 0 auto;
        width:80% /* value of your choice which suits your alignment */
        }
    </style>
  </head>

<body>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand mb-0 h1" href="/">NewsBeat xD</a>      
  </nav>
  <legend>Signin</legend>
      <div class="container" style="margin-top: 100px">
        <div class="row">
        <img src="news-logo.jpg" alt="INSERT LOGO" style="height: 300px" >
        <div class="col-md-offset-2 col-md-8" style="margin-left: auto">
          <form class="form-horizontal" method="post" action="/login">
           {{ csrf_field() }}
            <h3>Sign in to NewsBeat</h3>
            <br></br>
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="username" placeholder="Please Enter your Username " name="username" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12"> 
                  <input type="password" class="form-control" id="pwd" placeholder="Please Enter your Password" name="password" required>
                </div>
              </div>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-info" name="login">Log In <i class="fa fa-sign-in" aria-hidden="true"></i></button>
              </div>
              <div class="bottom text-center">
                New here ? <a href="{{ route('Signup') }}"><b>Join Us</b></a>
              </div>		
          </form>
          </div>
           </div>
        </div>

</body>
</html>
