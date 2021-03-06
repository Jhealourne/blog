@extends('layouts.web')

@section('title','Edit')

@section('content')
  <div class="container" style="margin-bottom: 100px">
    <div class="row">
      <div class="col-sm-10">
        <form method="post" action="/editArticle" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{$article->article_id}}">
          <div class="form-group">
            <label for="exampleFormControlFile1">Choose thumbnail</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="thumbnail">
          </div>
          <div class="form-group"> 
            <label>Title</label>
            <input type="text" class="form-control form-control-lg" placeholder="Title" name="title" value="{{$article->article_title}}">
          </div>
          <div class="form-group"> 
            <label>Summary</label>
            <input type="text" class="form-control" placeholder="Summary" name="summary" value="{{$article->article_summary}}">
          </div>
          <div class="form-group"> 
            <label>Category</label>
            <select class="form-control" name="ctgry" value="{{$article->category_id}}">
              @foreach($ctgry as $ctgry)
              <option value="{{$ctgry->category_id}}">{{$ctgry->category_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Article</label>
            <textarea class="form-control" id="mytextarea" placeholder="Write your article....." rows="10" name="article">{{$article->article_full}}</textarea>
          </div>

          <button type="submit" class="btn btn-success">Save</button>
        </form>
      </div>
      <div class="col">
        <div class="container">

        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
   <script type="text/javascript">

// var config = {
//     images : {
//         upload : {
//             url : '/savePic',
//             basePath : '/img',
//             data : {
//               _token: "{{ Session::token() }}",
//             },
//            dataType: "json",
//            type: 'post'
//         }
//     }
// };
      var editor = textboxio.replace('#mytextarea');
    </script>
@endsection