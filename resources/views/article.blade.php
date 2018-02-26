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
.bg-sad {
    background-color: #4C6676;
}
.bg-gray {
    background-color: gray;
}
.circular {
    padding: .5em!important;
    line-height: 1em;
    text-align: center;
    border-radius: 500rem;
    vertical-align: baseline;
    margin: 0 .14285714em;
	display: inline-block;
	text-transform: none;
    font-weight: 700;
    border: 0 solid transparent;
    transition: background .1s ease;
	min-width: 0;
    min-height: 0;
    overflow: hidden;
    width: .5em;
    height: .5em; 
}
.circular.black {
    background-color: #1b1c1d!important;
    border-color: #1b1c1d!important;
    color: #fff!important; 
}
.circular.red, .bg-red {
    background-color: #e60000!important;
    border-color: #e60000!important;
    color: #fff!important; 
}	
.circular.cry, .bg-cry {
    background-color: #0040ff!important;
    border-color: #0040ff!important;
    color: #fff!important; 
}	
.circular.sad, .bg-sad {
    background-color: #4C6676!important;
    border-color: #4C6676!important;
    color: #fff!important; 
}	
.circular.gray, .bg-gray {
    background-color: #404040!important;
    border-color: #404040!important;
    color: #fff!important; 
}	
.circular.happy, .bg-happy {
    background-color: #00ff00!important;
    border-color: #00ff00!important;
    color: #fff!important; 
}	
.circular.laugh, .bg-laugh {
    background-color: #ffff00!important;
    border-color: #ffff00!important;
    color: #fff!important; 
}	
</style>
@endsection

@section('content')
<input type="hidden" name="articleid" value="{{$article->article_id}}">
<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-sm-7">
			<img src="/thumbnails/{{$article->article_thumbnail}}" class="img-fluid img-thumbnail" alt="Responsive image">
			<h1>{{$article->article_title}}</h1>
			<p class="lead">{{$article->article_summary}}</p>
			<hr>

			<div class="float-left"><img src="/profile/{{$article->author->prof_pic}}" width="50" height="50" class="rounded" style="margin-right: 10px"></div>
          <h6><strong>{{ $article->author->first_name.' '.$article->author->last_name}}</strong></h6>
          <h7 class="mb-2 text-muted">Published {{ date_create($article->publish_datetime)->format('M d Y, h:i a')}}</h7>
          <hr>
          {!!$article->article_full!!}
		</div>
		<div class="col-sm-5">
			<div class="card">
			  <h5 class="card-header">Rate this article</h5>
			  <div class="card-body">
			    <!-- <h5 class="card-title">Special title treatment</h5> -->
			    <p class="card-text">
			    	<center><div style=" position: relative;text-align: center;">
			    		<div id="divrate"></div>
			    		@if(!isset($_COOKIE['userid']))
			    		<p class="text lead" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">Login to rate this article</p>
			    		@endif
			    	</div></center>
			    </p>
			    <ol>
			    	<li><a class="circular red"></a> Angry </li>
			    	<li><a class="circular sad"></a> Sad </li>
			    	<li><a class="circular cry"></a> Crying </li>
			    	<li><a class="circular gray"></a> Don't Care </li>
			    	<li><a class="circular happy"></a> Happy </li>
			    	<li><a class="circular laugh"></a> Laughing </li>
			    </ol>
			    Overall Rating:
				<div class="progress">
				  <div class="progress-bar bg-sad w-25" role="progressbar"></div>
				  <div class="progress-bar bg-cry w-25" role="progressbar"></div>
				</div>
			  </div>
			  <div class="card-footer text-center font-weight-normal">
			  	@if(!isset($rate))
			  		People are Divided in this Article
			  	@elseif($rate->rate == 2)
			  		This Article Makes People Disappointed 
			  	@elseif($rate->rate == 3)
			  		This Article Makes People Crying 
			  	@elseif($rate->rate == 4)
			  		This Article Makes People Don't Care 
			  	@elseif($rate->rate == 5)
			  		This Article Makes People Happy 
			  	@elseif($rate->rate == 6)
			  		This Article Makes People Laughing 
			  	@elseif($rate->rate == 1)
			  		This Article Makes People Angry 
			  	@endif
			  </div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){

	var emotionsArray = ['angry','disappointed','crying','meh', 'happy', 'laughing'];
      $("#divrate").emotionsRating({
        count: 6,
        emotionSize: 60,
        bgEmotion: 'happy',
        emotions: emotionsArray,
        color: '#FF0066',
	});
	$('#divrate').click(function(e){	
		if ($.cookie('userid')) {
			$.ajax
			({
				url: '/saveRating',
				type: 'post',
				data: {
					_token: "{{ Session::token() }}",
					user: $.cookie('userid'),
					articleid: $('input[name=articleid]').val(),
					rate: $('input[name=rating]').val(),
				},
				success:function(response){
					// alert(response);
				}
			});
		} 
	});
	if ($.cookie('userid')) {
		$.ajax
		({
			url: '/getRating',
			type: 'get',
			data: { 
				user: $.cookie('userid'),
				articleid: $('input[name=articleid]').val(),
			},
			success:function(response){
	 			$('#divrate').find(".emotion-style").eq(response-1).click();
			}
		});
	} else {
		$('#divrate').css('pointer-events','none').css('filter','blur(2px)');
	}
 });
</script>
@endsection