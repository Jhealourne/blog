@extends('layouts.web')

@section('title','Settings')

@section('content')
<h1 class="h1 text-center">Settings</h1>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<form class="well form-horizontal" action="/updateprofile" method="post"  id="contact_form" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{$author->author_id}}">
          <div class="form-group">
            <label class="col-sm-10 control-label">First Name</label>  
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                <input  name="first_name" placeholder="First Name" class="form-control"  type="text" value="{{$author->first_name}}">
              </div>
            </div>
          </div>

    <!-- Text input-->

          <div class="form-group">
            <label class="col-sm-10 control-label" >Last Name</label> 
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="last_name" placeholder="Last Name" class="form-control"  type="text" value="{{$author->first_name}}">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-10 control-label" >Display Name</label> 
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="display_name" placeholder="Display Name" class="form-control"  type="text" value="{{$author->first_name}}">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-10 control-label">Username</label>  
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="user_name" placeholder="Username" class="form-control"  type="text" value="{{$author->username}}">
              </div>
            </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-sm-10 control-label" >Password</label> 
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="user_password" placeholder="Password" class="form-control"  type="password">
              </div>
            </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-sm-10 control-label" >Confirm Password</label> 
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
              </div>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-10 control-label">E-Mail</label>  
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
              </div>
            </div>
          </div>
          <!-- Text input-->
             
          <div class="form-group">
            <label class="col-sm-10 control-label">Contact No.</label>  
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="contact_no" placeholder="(639)" class="form-control" type="text">
              </div>
            </div>
          </div>

          <button class="btn btn-success" type="submit">Save</button>
          <button class="btn btn-error" type="button">Cancel</button>
      	
		</div>
		<div class="col-sm-6">
	        <div class="form-group">
	          <label for="profilepic">Profile Picture</label>
	          <input type="file" class="form-control-file" id="profilepic" name="picture">
	        </div>
	        
	        <img src="/profile/{{$author->prof_pic}}" class="img-thumbnail rounded profile" width="400" height="400">	
		</div>
		
		</form>
	</div>
</div>

@endsection