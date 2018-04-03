@extends('layouts.web')

@section('title','Profile')

@section('content')

<h1 class="h1 text-center"><img src="/profile/{{$author->prof_pic}}" width="70" height="70" class="rounded" style="margin-right: 10px">{{ $author->first_name.' '.$author->last_name}}</h1>

<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Latest</a>
        </li>
      </ul>

    @foreach($article as $art)
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <div class="float-left"><img src="/profile/{{$author->prof_pic}}" width="50" height="50" class="rounded" style="margin-right: 10px"></div>
              <h6><strong>{{ $author->first_name.' '.$author->last_name}}</strong></h6>
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
                <a class="btn btn-info" href="/AuthorProfile/Edit/{{$art->article_id}}"><i class="oi oi-pencil"></i></a>
                <a class="btn btn-danger" href="/AuthorProfile/Delete/{{$art->article_id}}"><i class="oi oi-trash"></i></a>
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
</div>


@endsection