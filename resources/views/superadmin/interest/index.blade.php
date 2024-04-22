@extends('superadmin.layout')
@section('content')
@section('title','Tamil Thirumanam | Dashboard')
<style type="text/css">

 </style>
<div class="content">
	<div class="container-fluid">
		<h4 class="page-title" id="ddd">Interest</h4>
		<div class="row table-content">
			<div class="col-md-8">
				<div class="flash-section">
				@if( Session::has( 'success' ))
					     <div class="flash-message">{{ Session::get( 'success' ) }}</div>
				@endif
				</div>
				<div class="card">
					<div class="card-header">
						<div class="card-title">List</div>
						
					</div>
					<div class="card-body">
						
						<table class="table table-striped mt-3">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">User Name</th>
									<th scope="col" >Interest On</th>
									<th scope="col" >Date Time</th>
									<th scope="col" >Status</th>
									<th scope="col" >Action</th>
									
								</tr>
							</thead>
							<tbody>
								<?php $i=1;?>
								@foreach($interest as $data)
								<tr>
									<td>{{$i}}</td>
									<td>{{$data->getUser->name}}</td>
									<td>{{$data->interestOn->fullname}}</td>
									<td>{{date('h:i a, d M Y',strtotime($data->Created_at))}}</td>
									<td>
										<div class="group">
										@if($data->status==0)
											<p class="status-lable bg-warning text-light">Pending</p>
										@elseif($data->status==1)
										   	<p class="status-lable bg-dark text-light">Deleted</p>
										@elseif($data->status==2)
										   	<p class="status-lable bg-success text-light">Accepted</p>
										@elseif($data->status==3)
										   	<p class="status-lable bg-danger text-light">Rejected</p>
										@endif
										</div>
									</td>
									<td>
										<a href="{{url('admin/interest/view')}}/{{$data->id}}"><button class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></button></a>
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
				
<!-- Create Model -->
			<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					    <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Interest Details</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					    </div>
					    <div class="modal-body">
					      	<div class="form-group">
				            <label for="message-text" class="col-form-label">Job Type</label>
				            <input class="form-control" name="jobtype" placeholder="Enter Job Type" required>
				          </div>
				      	</div>
					    <div class="modal-footer">
					       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					       <button type="submit" class="btn btn-primary">Create</button>
					    </div>
					    </div>
					  </div>
			</div>		
				<script type="text/javascript">
					
						function view(id){
							
							$.ajax({
			                    url:"{{url('admin/interest/view')}}/"+id,
			                    type:'GET',
			                   	success:function(response){
			                   		console.log(response);
			                    	
			                   	}
			                   });
						}
				</script>			
@stop
