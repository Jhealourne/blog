@extends('layouts.author')


@section('title','Write')

@section('content')
  <div class="container" style="margin-bottom: 100px">
    <div class="row">
      <div class="col-sm-10">
        <form method="post" action="/saveArticle">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleFormControlFile1">Choose thumbnail</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="form-group"> 
            <label>Title</label>
            <input type="text" class="form-control form-control-lg" placeholder="Title" name="title">
          </div>
          <div class="form-group"> 
            <label>Summary</label>
            <input type="text" class="form-control" placeholder="Summary" name="summary">
          </div>
          <div class="form-group">
            <label>Article</label>
            <textarea class="form-control" id="mytextarea" placeholder="Write your article....." rows="10" name="article"></textarea>
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