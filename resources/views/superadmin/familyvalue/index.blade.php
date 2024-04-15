@extends('superadmin.layout')
@section('content')
@section('title','Tamil Thirumanam | Dashboard')
<style type="text/css">
	
 .wrapper {
     background: #FFF;
     padding: 20px;
}
 h3 {
     display: block;
     width: 100%;
     text-align: center;
     font-size: 30px;
     color: #FFF;
     font-weight: 600;
     font-family: cursive;
     text-shadow: 0 0 46px coral;
}
 .group{
     margin: 15px;
}
 .toggle {
     display: none;
}
 .toggle, .toggle:after, .toggle:before, .toggle *, .toggle *:after, .toggle *:before, .toggle + .toggle-btn {
     box-sizing: border-box;
}
 .toggle::selection, .toggle:after::selection, .toggle:before::selection, .toggle *::selection, .toggle *:after::selection, .toggle *:before::selection, .toggle + .toggle-btn::selection {
     background: none;
}
 .toggle + .toggle-btn {
     outline: 0;
     display: block;
     width: 4em;
     height: 2em;
     position: relative;
     cursor: pointer;
     user-select: none;
}
 .toggle + .toggle-btn:after, .toggle + .toggle-btn:before {
     position: relative;
     display: block;
     content: "";
     width: 50%;
     height: 100%;
}
 .toggle + .toggle-btn:after {
     left: 0;
}
 .toggle + .toggle-btn:before {
     display: none;
}
 .toggle:checked + .toggle-btn:after {
     left: 50%;
}
 .toggle-switch + .toggle-btn {
     background: #f0f0f0;
     border-radius: 2em;
     padding: 2px;
     transition: all 0.4s ease;
}
 .toggle-switch + .toggle-btn:after {
     border-radius: 50%;
     background: #fff;
     transition: all 0.2s ease;
}
 .group:nth-child(1) .toggle-switch:checked + .toggle-btn {
     background: #388e3d;
}
 .group:nth-child(2) .toggle-switch:checked + .toggle-btn {
     background: #ff3547;
}
 .group:nth-child(3) .toggle-switch:checked + .toggle-btn {
     background: #3f51b5;
}
 .group:last-child .toggle-switch:checked + .toggle-btn {
     background:#f57c00;
}
 </style>
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title" id="ddd">Family Value</h4>
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
										<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModel" data-whatever="@mdo">Create Family Value</button>
									</div>
									<div class="card-body">
										
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Family Value</th>
													<th scope="col" >Action</th>
													<th scope="col" >Edit</th>
													<th scope="col" >Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												@foreach($familyvalue as $data)
												<tr>
													<td>{{$i}}</td>
													<td>{{$data->familyvalue}}</td>
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
														<a href="{{url('admin/familyvalue/delete')}}/{{$data->id}}">
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
				
<!-- Create Model -->
				<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<form method="post" action="{{route('store-familyvalue')}}">
						{{csrf_field()}}
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Family Value</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       
					     
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Family Value</label>
					            <input class="form-control" name="familyvalue" placeholder="Enter Family value" required>
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
					<form method="post" action="{{route('update-familyvalue')}}">
						{{csrf_field()}}
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Family Value</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       	<input type="hidden" id="id" name="id" >
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Family Value</label>
					            <input class="form-control" name="familyvalue" id="familystatus" placeholder="Enter Family value" required>
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
							console.log(id);
							$.ajax({
			                    url:"{{url('admin/familyvalue/edit')}}/"+id,
			                    type:'GET',
			                   	success:function(response){
			                   		console.log(response);
			                    	$('#id').val(response.id);
			                    	$('#familyvalue').val(response.familyvalue)
			                   	}
			                   });
						}
						$(document).ready(function() {
							  	$('.toggle-switch').click(function() {
							  	var id = $(this).val();

								if($(this).prop('checked')) {
								        $.ajax({
						                    url:"{{url('admin/familyvalue/status')}}/"+id+'/0',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
													  title: 'Familyvalue Activated!!',
													  text: 'Familyvalue status changed successfully',
													  icon: 'success',
													  confirmButtonText: 'OK'
													});
						                   	}
						                   });
								    }else {
								        $.ajax({
						                    url:"{{url('admin/familyvalue/status')}}/"+id+'/1',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
												  title: 'Familyvalue Deactivated!!!',
												  text: 'Familyvalue changed successfully..',
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
