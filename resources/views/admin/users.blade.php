@extends('layouts.admin')

@section('content')

<div class="container">
	<h4 class="display-4 font-weight-bold">Users</h4>
<!-- 	<div class="row">
		<div class="col">
			<button type="button" class="btn btn-success" id="add">ADD <i class="oi oi-plus"></i></button>
		</div>
	</div> -->
	<div class="row">
		<div class="col">
			<table class="table table-striped">
				<caption>List of Users</caption>
				<thead class="thead-dark">
					<th>Username</th>
					<th>Name</th>
					<th style="width: 20%">Actions</th>
				</thead>
				<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{$user->username}}</td>
					<td>{{$user->author->display_name}}</td>
					<td>
						<!-- <button class="btn btn-info" type="button" value="{{$user->id}}"><i class="oi oi-pencil"></i></button> -->
						<button class="btn btn-danger del" type="button" value="{{$user->id}}"><i class="oi oi-trash"></i></button>
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/addCategory">
        	{{csrf_field()}}
        	<input type="hidden" name="id">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category Name:</label>
            <input type="text" class="form-control" name="ctgry">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
        </form>
    </div>
  </div>
</div> -->
<div class="modal fade" id="del">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>Delete?</p>
      </div>
      <div class="modal-footer">
        <form method="post" action="/delUser">
        	{{csrf_field()}}
        	<input type="hidden" name="id">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(function(){
	$('.del').click(function(){
		$('#del').modal();
		$('#del form input[name=id]').val($(this).val());
	});
});
</script>
@endsection