@extends('layouts.web')

@section('title','Homepage')

@section('content')
 <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      @foreach($carousel as $csl)
        <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" @if($loop->first) class="active" @endif></li>
      @endforeach
      </ol>
      <div class="carousel-inner">
      @foreach($carousel as $csl)
        <div class="carousel-item @if($loop->first) active @endif">
          <img src="thumbnails/{{$csl->article_thumbnail}}" alt="First slide" style="filter: brightness(50%);">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>{{$csl->article_title}}</h1>
              <p>{{$csl->article_summary}}</p>
              <p><a class="btn btn-lg btn-primary" href="/Article/{{$csl->article_id}}" role="button">Read More</a></p>
            </div>
          </div>
        </div>
      @endforeach
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
        <a href="/Article/{{$art->article_id}}" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <li class="media">
              <img class="mt-0 mb-1 img-thumbnail" src="/thumbnails/{{$art->article_thumbnail}}" alt="" style="width:200px;height:160px ; margin-right: 10px">
                <div class="media-body">
                  <h5 class="mt-2 mb-1">{{$art->article_title}}</h5>
                  <p>{{$art->article_summary}}</p>
            </li>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>


@endsection