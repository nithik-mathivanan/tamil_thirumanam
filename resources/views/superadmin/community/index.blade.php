@extends('superadmin.layout')
@section('content')
@section('title','Tamil Thirumanam | Dashboard')

<div class="content">
					<div class="container-fluid">
						<h4 class="page-title" id="ddd">Community</h4>
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
										<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModel" data-whatever="@mdo">Create Community</button>
									</div>
									<div class="card-body">
										
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Community</th>
													<th scope="col">Religion</th>
													<th scope="col">Action</th>
													<th scope="col">Edit</th>
													<th scope="col">Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												@foreach($community as $data)
												<tr>
													<td>{{$i}}</td>
													<td>{{$data->community}}</td>
													<td>{{$data->getReligion->religion}}</td>
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
														<a href="{{url('admin/community/delete')}}/{{$data->id}}">
                                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
				
<!-- Create Model -->
				<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<form method="post" action="{{route('store-community')}}">
						{{csrf_field()}}
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Create Community</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       
					          <div class="form-group">
					            <label  class="col-form-label">Religion:</label>
					            <select class="form-control" name="religion" required>
					            	<option>Select Religion</option>
					            	@foreach($religion as $data)
					            	<option value="{{$data->id}}">{{$data->religion}}</option>
					            	@endforeach
					            	
					            </select>
					          </div>
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Comunity Name</label>
					            <input class="form-control" name="community" placeholder="Enter Community Name" required>
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
					<form method="post" action="{{route('update-community')}}">
						{{csrf_field()}}
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Community</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       	<input type="hidden" id="community-id" name="community_id" >
					          <div class="form-group">
					            <label  class="col-form-label">Religion:</label>
					            <select class="form-control" name="religion" id="religion" required>
					            	<option>Select Religion</option>
					            	@foreach($religion as $data)
					            	<option value="{{$data->id}}">{{$data->religion}}</option>
					            	@endforeach
					            	
					            </select>
					          </div>
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Comunity Name</label>
					            <input class="form-control" name="community" id="community" placeholder="Enter Community Name" required>
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
			                    url:"{{url('admin/community/edit')}}/"+id,
			                    type:'GET',
			                   	success:function(response){
			                   		console.log(response);
			                    	$('#community-id').val(response.id);
			                    	$('#religion').val(response.religion);
			                    	$('#community').val(response.community)
			                   	}
			                   });
						}
						$(document).ready(function() {
							  	$('.toggle-switch').click(function() {
							  	var id = $(this).val();

								if($(this).prop('checked')) {
								        $.ajax({
						                    url:"{{url('admin/community/status')}}/"+id+'/0',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
													  title: 'Community Activated!!',
													  text: 'Communtiy status changed successfully',
													  icon: 'success',
													  confirmButtonText: 'OK'
													});
						                   	}
						                   });
								    }else {
								        $.ajax({
						                    url:"{{url('admin/community/status')}}/"+id+'/1',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
												  title: 'Community Deactivated!!!',
												  text: 'Communtiy status changed successfully..',
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
