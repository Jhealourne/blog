@extends('layouts.admin')

@section('content')

<div class="container" style="margin-top: 50px">
	<div class="row">
		<div class="col">
			<table class="table table-striped">
				<caption>List of Categories</caption>
				<thead class="thead-dark">
					<th>Category Name</th>
					<th style="width: 20%">Actions</th>
				</thead>
				<tbody>
					<tr>
						<td>Category Name</td>
						<td>
							<button type="button" class="btn btn-info"><i class="oi oi-pencil"></i></button>
							<button type="button" class="btn btn-danger"><i class="oi oi-trash"></i></button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection

@section('script')


@endsection