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
      @foreach($category as $cat)
      <div class="col-sm-4" style="margin-top: 50px">
        <div class="card-deck">
          <div class="card">
            <div class="card-header lead">
             {{$cat->category_name}}
            </div>
            <div class="list-group list-group-flush">
            @foreach($cat->article as $art)
              @if($loop->first)   
              <img class="card-img-top" src="/thumbnails/{{$art->article_thumbnail}}" alt="Card image cap" style="max-height: 250px; object-fit: cover;">
              <div class="card-body">
                <h4 class="card-title  font-weight-bold">{{$art->article_title}}</h4>
                <!-- <div class="font-weight-light text-right"><small>This Article Makes People Happy</small></div> -->
                <a href="/Article/{{$art->article_id}}" class="btn btn-outline-info float-right">Read More</a>
              </div>
              @else 
              <a href="/Article/{{$art->article_id}}" class="list-group-item text-truncate font-weight-light" style="color: black">{{$art->article_title}}</a>
              @endif
            @endforeach
              <button type="button" class="list-group-item text " style="color: black" onclick="location.href='/Category/{{$cat->category_id}}'"><i class="oi oi-caret-right"></i> More Articles</button>
            </div>
          </div>
        </div>      
      </div>
      @endforeach
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h4 class="display-4 lead">New Articles</h4>
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
        <div class="list-group-item list-group-item-action flex-column align-items-start">
          <center><a href="#">See all</a></center>
        </div>
      </div>
    </div>
  </div>


@endsection