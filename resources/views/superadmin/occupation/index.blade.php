@extends('superadmin.layout')
@section('content')
@section('title','Tamil Thirumanam | Dashboard')
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Occupation</h4>
						<div class="row table-content">
							<div class="col-md-8">
								<div class="flash-section">
								@if( Session::has( 'success' ))
									     <div class="flash-message">{{ Session::get( 'success' ) }}</div>
								@endif
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">List / Add / Edit / Delete</div>
										<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModel" data-whatever="@mdo">Create Occupation</button>
									</div>
									<div class="card-body">
										
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Oaccupation</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach($occupation as $data)
												<tr>
													<td>1</td>
													<td>{{$data->occupation}}</td>
													
													<td><button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button></td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
<!-- Pop Up Model -->
				<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<form method="post" action="{{route('store-occupation')}}">
						{{csrf_field()}}
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Create Occupation</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       
				
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Occupation</label>
					            <input class="form-control" name="occupation" placeholder="Enter Occupation" required>
					          </div>
					       
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Create</button>
					      </div>
					    </div>
					  </div>
					  </form>
					</div>
				@stop