@extends('layouts.web')

@section('title','Homepage')

@section('content')
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
        @foreach($article as $art)
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <li class="media">
              <img class="mt-0 mb-1" src="thumbnails/{{$art->article_thumbnail}}" alt="marawi" style="width:200px; margin-right: 10px">
                <div class="media-body">
                  <h5 class="mt-2 mb-1">{{$art->article_title}}</h5>
                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.</p>
            </li>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>


@endsection