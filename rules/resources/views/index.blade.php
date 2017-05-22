@extends('layouts.app')

@section('content')

<div class="page-header">
    <div class="row">
		<h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-check-square" aria-hidden="true"></i>&nbsp;&nbsp;Submissions</h1>

		<div class="col-xs-12 col-sm-8">
			<div class="row">
				<hr class="visible-xs no-grid-gutter-h">
			    <div class="visible-xs clearfix form-group-margin"></div>
			</div>
		</div>
	</div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="table-light">
									<div class="table-header">
										<div class="table-caption">
											Light Table
										</div>
									</div>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Larry</td>
												<td>the Bird</td>
												<td>@twitter</td>
										  </tr>
										</tbody>
									</table>
									<div class="table-footer">
										Footer
									</div>
								</div>
    </div>
</div>

@endsection

@section('script')

@endsection