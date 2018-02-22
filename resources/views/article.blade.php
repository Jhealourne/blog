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
		<div class="col-sm-7">
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
		<div class="col-sm-5">
			<div class="card">
			  <h5 class="card-header">Rate this article</h5>
			  <div class="card-body">
			    <!-- <h5 class="card-title">Special title treatment</h5> -->
			    <p class="card-text"><center><div id="divrate"></div></center></p>
			    <ol>
			    	<li>Angry</li>
			    	<li>Disappointed</li>
			    	<li>Crying</li>
			    	<li>Meh</li>
			    	<li>Happy</li>
			    	<li>Laughing</li>
			    </ol>
			  </div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','.emoji-rating',function(){
			alert();
		});
  	$.ajax
      ({
      	url: '/saveRating',
      	type: 'post',
      	data: {
      		_token: "{{ Session::token() }}",
      		user: $.cookie('userid'),
      		// rate: $('input[name=rating]').val()
      	},
      	success:function(response){
      		alert();
      	}
      });
	});
</script>
@endsection