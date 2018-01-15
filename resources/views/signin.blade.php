<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SIGNIN</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <style type="text/css">
      body{
        background-image: url("/img/signinbg1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
          }
     
        
      .container{
        border-radius: 10px;
        background-color:#ffcc66;
        width:40%; 
        margin-top: 100px;
        padding: 50px;
        position: absolute;
        filter: opacity(90%);
        margin-left: 100px;
        height: 50%;
        
      }
    </style>
  </head>

<body>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">NewsBeat xD</a>
        
  </nav>
<title>Signin</title>
<div class="container">

  <form class="form-horizontal" method="post" action="/login">
  <h3>Sign in to NewsBeat</h3>
  <h4><small>All fields are required</small></h4>
    <div class="form-group">
      <div class="col-sm-12">
        <input type="Email Address" class="form-control" id="username" placeholder="Email Address" name="username">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-12"> 
        <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
      </div>
    </div>
  
    <div class="col-sm-10">
       <button type="submit" class="btn btn-info" name="login">Log In</button>
    </div>
    <div class="bottom text-center">
                New here ? <a href="{{ route('Signup') }}"><b>Join Us</b></a>
    </div>
  </form>
  
</div>

</body>
</html>