@extends('superadmin.layout')
@section('content')
@section('title','Tamil Thirumanam | Dashboard')
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Employment</h4>
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
										<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModel" data-whatever="@mdo">Create Employment</button>
									</div>
									<div class="card-body">
										
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Employment</th>
													<th scope="col">Action</th>
													<th scope="col">Edit</th>
													<th scope="col">Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												@foreach($employment as $data)
												<tr>
													<td>1</td>
													<td>{{$data->employment}}</td>
													<td>
														<div class="group">
														@if($data->status==0)
															<input class="toggle toggle-switch" id="switch{{$i}}{{$i}}" value="{{$data->id}}" checked type="checkbox"/>
														    <label class="toggle-btn" for="switch{{$i}}{{$i}}"></label>
														@else
														   <input class="toggle toggle-switch" id="switch{{$i}}{{$i}}" value="{{$data->id}}" type="checkbox"/>
														    <label class="toggle-btn" for="switch{{$i}}{{$i}}"></label>
														@endif
														</div>
													</td>
													<td>
														<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModel" data-whatever="@mdo" onclick="edit({{$data->id}})"><i class="fa fa-pencil"></i></button>
													</td>
													<td>
														<a href="{{url('admin/employment/delete')}}/{{$data->id}}">
                                                        <button class="btn btn-sm btn-warning"><i class="fa fa-trash"></i></button>
                                                        </a>
													</td>
												</tr>
												<?php $i++; ?>
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
					<form method="post" action="{{route('store-employment')}}">
						{{csrf_field()}}
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Create Employment</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       
				
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Employment</label>
					            <input class="form-control" name="employment" placeholder="Enter Employment" required>
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

<!-- Edit Model -->
				<div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<form method="post" action="{{route('update-employment')}}">
						{{csrf_field()}}
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Employment</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       	<input type="hidden" id="id" name="id" >
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Employment</label>
					            <input class="form-control" name="employment" id="employment" placeholder="Enter Employment Name" required>
					          </div>
					       
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Update</button>
					      </div>
					    </div>
					  </div>
					  </form>
					</div>

					<script type="text/javascript">

						function edit(id){
							$.ajax({
			                    url:"{{url('admin/employment/edit')}}/"+id,
			                    type:'GET',
			                   	success:function(response){
			                   		console.log(response);
			                    	$('#id').val(response.id);
			                    	$('#employment').val(response.employment)
			                   	}
			                   });
						}
						$(document).ready(function() {
							  	$('.toggle-switch').click(function() {
							  	var id = $(this).val();

								if($(this).prop('checked')) {
								        $.ajax({
						                    url:"{{url('admin/employment/status')}}/"+id+'/0',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
													  title: 'employment Activated!!',
													  text: 'employment status changed successfully',
													  icon: 'success',
													  confirmButtonText: 'OK'
													});
						                   	}
						                   });
								    }else {
								        $.ajax({
						                    url:"{{url('admin/employment/status')}}/"+id+'/1',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
												  title: 'employment Deactivated!!!',
												  text: 'employment status changed successfully..',
												  icon: 'error',
												  confirmButtonText: 'OK'
												});
						                   	}
						                   });
								    }
								});
						});
					</script>

				@stop