@extends('layouts.admin')

@section('content')
<div class="container">
	<h4 class="display-4 font-weight-bold">Category</h4>
	<div class="row">
		<div class="col">
			<button type="button" class="btn btn-success" id="add">ADD <i class="oi oi-plus"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table table-striped">
				<caption>List of Categories</caption>
				<thead class="thead-dark">
					<th>Category Name</th>
					<th style="width: 20%">Actions</th>
				</thead>
				<tbody>
					@foreach($ctgry as $ctgry)
					<tr>
						<td>{{$ctgry->category_name}}</td>
						<td>
							<button type="button" class="btn btn-info edit" value="{{$ctgry->category_id}}"><i class="oi oi-pencil"></i></button>
							<button type="button" class="btn btn-danger del" value="{{$ctgry->category_id}}"><i class="oi oi-trash"></i></button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>
<div class="modal fade" id="del">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>Delete?</p>
      </div>
      <div class="modal-footer">
        <form method="post" action="/delCategory">
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
		$('#add').click(function(){
	        $('#addModal form').trigger('reset').attr('action','/addCategory');
	        $('#addModal .modal-title').text('Add Category');
			$('#addModal').modal();
		});
		$('.edit').click(function(){
	        $('#addModal form').trigger('reset').attr('action','/editCategory');
	        $('#addModal .modal-title').text('Edit Category');
			$.ajax
			({
				url: '/getCategory',
				type: 'get',
				data: { cid : $(this).val() },
				success:function(response){
					$('input[name=id]').val(response.category_id);
					$('input[name=ctgry]').val(response.category_name);
				},
				complete:function(){
					$('#addModal').modal();
				}
			});
		});
		$('.del').click(function(){
	        $('#del form input[name=id]').val($(this).val());
	        $('#del').modal();
		});
	});
</script>

@endsection