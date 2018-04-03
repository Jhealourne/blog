@extends('layouts.web')

@section('title',$ctgry->category_name)

@section('content')
  <div class="container" style="margin-top: 100px">
  	<div class="row">
      <h4 class="display-4 lead">{{$ctgry->category_name}}</h4>
  	</div>
    <div class="row">
		<div class="col-sm-12">
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
          	<div style="position: absolute;bottom: 10px; right: 20px; font-weight: lighter;">Date Published: {{date_create($art->publish_datetime)->format('M d, Y h:i a')}}</div>
	        </a>
	        @endforeach 
	      </div>
	    </div>
    </div>
    <div class="row">
    	<div class="col-sm-12" >
    		{{$article->links()}}
    	</div>
    </div>
  </div>
@endsection
