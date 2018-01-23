<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../../../favicon.ico">

      <title>Sign Up</title>

      <!-- Bootstrap core CSS -->
      <link href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <link  rel="icon" type="image/ico" href = "icon.ico">
<link  rel="icon" type="image/ico" href = "icon.ico">

      <link href="design2.css" rel="stylesheet" >
      <link href="open-iconic-master/font/css/open-iconic-foundation.css" rel="stylesheet">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      
</head>
<body>

<div class="page-header">
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">NewsBeat xD</a>     
  </nav>

	<h1><center><strong>Sign-Up</strong></center></h1>
  <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

</div><!-- /.container -->

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <form class="well form-horizontal" action="/register" method="post"  id="contact_form" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <label class="col-sm-10 control-label">First Name</label>  
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
              </div>
            </div>
          </div>

    <!-- Text input-->

          <div class="form-group">
            <label class="col-sm-10 control-label" >Last Name</label> 
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-10 control-label" >Display Name</label> 
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="display_name" placeholder="Display Name" class="form-control"  type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-10 control-label">Username</label>  
            <div class="col-sm-10 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="user_name" placeholder="Username" class="form-control"  type="text">
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

          <!-- Select Basic -->

          <!-- Success message -->
       <!--    <div class="alert alert-success" role="alert" id="success_message">Success<i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> -->

          <!-- Button -->
          <div class="form-group">
            <label class="col-sm-10 control-label"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </div>
          </div>
      </div>

      <div class="col-sm-auto">
        <div class="form-group">
          <label for="profilepic">Example file input</label>
          <input type="file" class="form-control-file" id="profilepic" name="picture">
        </div>
        
        <img src="/profile-icon.png" class="img-thumbnail rounded profile" width="400" height="400">
      </div>
    </div>
    
        </form>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#profilepic").change(function(event){
       var input = $(event.currentTarget);
       var file = input[0].files[0];
       var reader = new FileReader();
       reader.onload = function(e){
           image_base64 = e.target.result;
           $('.profile').attr("src", image_base64);
       };
       reader.readAsDataURL(file);
    });
  });
</script>
</body>