@extends('layouts.admin')

@section('content')

<h1 class="h1 text-center">Articles</h1>

<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Latest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">All</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>

    @foreach($article as $art)
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <div class="float-left"><img src="/profile/{{$art->prof_pic}}" width="50" height="50" class="rounded" style="margin-right: 10px"></div>
              <h6><strong>{{ $art->first_name.' '.$art->last_name}}</strong></h6>
              <h7 class="mb-2 text-muted">Published {{ date_create($art->publish_datetime)->format('M d Y, h:i a')}}</h7>
            </div>
            @if($art->article_thumbnail != "")
            <img class="card-img-top" src="/thumbnails/{{$art->article_thumbnail}}" alt="Card image cap" height="300">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{$art->article_title}}</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
              <p class="card-text">{{$art->article_summary}}</p>
            </div>
            <div class="card-footer text-muted">
              <a class="btn btn-success" href="/Article/{{$art->article_id}}">Read more</a>
              <div class="float-right">
                <a class="btn btn-danger" href="/Admin/Article/Delete/{{$art->article_id}}"><i class="oi oi-trash"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>
    <div class="col">

    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      {{$article->links()}}
    </div>
</div>


@endsection