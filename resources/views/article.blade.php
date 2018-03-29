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
<div class="container" style="margin-top: 60px">
	<div class="row">
		<div class="col-sm-7">
			<img src="/thumbnails/{{$article->article_thumbnail}}" class="img-fluid img-thumbnail" alt="Responsive image">
			<h1>{{$article->article_title}}</h1>
			<p class="lead">{{$article->article_summary}}</p>
			<hr>

			<div class="float-left"><img src="/profile/{{$article->author->prof_pic}}" width="50" height="50" class="rounded" style="margin-right: 10px"></div>
          <h6><strong>{{ $article->author->first_name.' '.$article->author->last_name}}</strong></h6>
          <h7 class="mb-2 text-muted">Date Published: {{ date_create($article->publish_datetime)->format('M d Y, h:i a')}}</h7>
          <hr>
          {!!$article->article_full!!} 
          <br>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-primary rate @if($rt == 1) active @endif">
                    <span class="fas fa-thumbs-up">
                    <input type="radio" value="1" name="options" id="option1" autocomplete="off"> Like (<span class="counter">{{$rate->where('rate',1)->count()}}</span>)
                </label></span>
                <label class="btn btn-outline-secondary rate @if($rt == 2) active @endif">
                    <span class="fas fa-thumbs-down">
                    <input type="radio" value="2" name="options" id="option2" autocomplete="off"> Dislike (<span class="counter">{{$rate->where('rate',2)->count()}}</span>)
                </label></span>
                <label class="btn btn-outline-danger rate @if($rt == 3) active @endif">
                    <span class="fas fa-heart">
                    <input type="radio" value="3" name="options" id="option3" autocomplete="off"> Love (<span class="counter">{{$rate->where('rate',3)->count()}}</span>)
                </label></span>
                <label class="btn btn-outline-warning rate @if($rt == 4) active @endif">
                    <span class="fas fa-smile">
                    <input type="radio" value="4" name="options" id="option4" autocomplete="off"> Happy (<span class="counter">{{$rate->where('rate',4)->count()}}</span>)
                </label></span>
                <label class="btn btn-outline-info rate @if($rt == 5) active @endif">
                    <span class="fas fa-frown">
                    <input type="radio" value="5" name="options" id="option5" autocomplete="off"> Sad (<span class="counter">{{$rate->where('rate',5)->count()}}</span>)
                </label></span>
            </div>
			<form method="POST" action="/addComment">
				{{csrf_field()}}
				<input type="hidden" name="aid" value="{{$article->article_id}}"> 
			    <div class="form-group">
			        <textarea id="comment" rows="6" class="form-control" name="comment" required></textarea>
			    </div>
			    <div class="form-group">
			        <button type="submit" class="btn btn-success btn-lg btn-block">POST COMMENT</button>
			    </div>
			</form>

            <h4><b>Comments:</b></h4>
            @if(count($comments) == 0)
            	<center><h3>No Comments Available</h3></center>
           	@else 
	            @foreach($comments->all() as $comment)
	                <p><span class="lead">{{ $comment->comment }}</span> <br>
	               	
	               	<small>
	               		Posted by: {{ $comment->author->first_name.' '.$comment->author->last_name }}<br>
	               		Date posted: {{  date_create($comment->created_at)->format('M d, Y h:i a') }}
	               	</small>
	               	</p>
	                <hr/>
	            @endforeach
           	@endif

		</div>
		<!-- <div class="col-sm-5">
			<div class="card">
			  <h5 class="card-header">Rate this article</h5>
			  <div class="card-body"> 
			
			    <ol> 
			    </ol> 
			  </div>

			</div>
		</div> -->
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){


    $('.rate').click(function(){ 
        var rate = $(this).find('input').val();
        $.ajax({
            url : '/saveRating',
			type: 'get',
            data : { 
                rate : rate,
                articleid : {{$article->article_id}},
            },
            success:function(response){ 
                if (response == 0) {
                    $('input[name=options][value='+rate+']').next().html(Number($('input[name=options][value='+rate+']').next().text()) + 1);
                } else {
                    $('input[name=options][value='+rate+']').next().html(Number($('input[name=options][value='+rate+']').next().text()) + 1);
                    $('input[name=options][value='+response+']').next().html(Number($('input[name=options][value='+response+']').next().text()) - 1);
                }
            }
        });
    });
 });
</script>
@endsection