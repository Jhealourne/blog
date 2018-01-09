<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>HOMEPAGE</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <link href="design2.css" rel="stylesheet" >
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

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
    <a class="navbar-brand" href="#">NewsBeat xD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
  <!--       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
      </ul>

      <div>
        <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">Launch demo modal</button>  
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="exampleModalLabel">Login</h5>
            </div>
          <div class="modal-body">
      ...
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>  
        </div>
      </div>

      <div class="btn btn-outline-primary" onclick="location.href='/Signin'">Sign-in</div>
      <div class="btn btn-outline-primary" onclick="location.href='/Signup'">Sign-up</div>
      </div><!--button div-->
   
  </nav>

<!--   <div class="container">
    <div class="row">
      <div class="col-sm" style="background-color: yellow">
        One of three columns
      </div>
      <div class="col-sm" style="background-color: blue">
        One of three columns
      </div>
      <div class="col-sm" style="background-color: red">
        One of three columns
      </div>
    </div>
  </div> -->

  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div><!--/carouselcontainer-->

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card-deck">
          <div class="card ">
            <img class="card-img-top" src="img/cigarette.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">tobacco excise tax</h4>
                <p class="card-text">Labor, farmers appeal to bicam on tobacco excise tax</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="img/Duterte-Marawi.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">extend martial law for 1 more year</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="img/Human-rights.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Human Rights</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
          </div>
        </div>      
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card-deck">
          <div class="card ">
            <img class="card-img-top" src="img/cigarette.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">tobacco excise tax</h4>
                <p class="card-text">Labor, farmers appeal to bicam on tobacco excise tax</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="img/Duterte-Marawi.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">extend martial law for 1 more year</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="img/Human-rights.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Human Rights</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
          </div>
        </div>      
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <li class="media">
              <img class="mt-0 mb-1" src="img/marawi.jpg" alt="marawi" style="width:200px">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Marawi</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            </li>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <li class="media">
              <img class="mt-0 mb-1" src="img/marawi.jpg" alt="marawi" style="width:200px">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Marawi</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            </li>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <li class="media">
              <img class="mt-0 mb-1" src="img/marawi.jpg" alt="marawi" style="width:200px">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Marawi</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            </li>
          </div>
        </a>
      </div>
    </div>
  </div>

<div class="container-fluid" style="background-color: lightgray; border-top: 1px solid; margin-top: 40px">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-4.0.0-beta.2/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-4.0.0-beta.2/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
