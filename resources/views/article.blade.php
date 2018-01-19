@extends('layouts.web')

@section('title',$article->article_title)

@section('style')
<style type="text/css">
hr { 
  border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
}
</style>
@endsection

@section('content')

<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-sm-8">
			<img src="/thumbnails/{{$article->article_thumbnail}}" class="img-fluid img-thumbnail" alt="Responsive image">
			<h1>{{$article->article_title}}</h1>
			<p class="lead">{{$article->article_summary}}</p>
			<hr>
			<div class="float-left"><img src="/profile/{{$article->prof_pic}}" width="50" height="50" class="rounded" style="margin-right: 10px"></div>
          <h6><strong>{{ $article->first_name.' '.$article->last_name}}</strong></h6>
          <h7 class="mb-2 text-muted">Published {{ date_create($article->publish_datetime)->format('M d Y, h:i a')}}</h7>
          <hr>
          {!!$article->article_full!!}
		</div>
		<div class="col-sm-2">
			
		</div>
	</div>
</div>



@endsection