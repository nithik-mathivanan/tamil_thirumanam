@extends('superadmin.layout')
@section('content')
@section('title','Tamil Thirumanam | Dashboard')
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Relegion</h4>
						<div class="row table-content">
							<div class="col-md-8">
								
								<div class="card">
									<div class="card-header">
										<div class="card-title">List / Edit</div>
										<a href="{{route('create-religion')}}"><button class="btn btn-primary" style="float:right;">Create Religion</button></a>
									</div>
									<div class="card-body">
								@if ($errors->any())
                                 @foreach ($errors->all() as $error)
                                     <div class="text-danger font-weight-bold" style="background-color:#dfb0b0;padding: 8px;border-radius: 2px">         {{$error}}
                                     </div>
                                 @endforeach
                                @endif
                                @if(session()->has('message'))
                                    <div class="alert alert-success font-weight-bold text-dark">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">ID</th>
													
													<th scope="col">Religion</th>
													
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
											  <?php $i=1; ?>
                                               @foreach($religion as $data)
												<tr>
													<td>{{$i}}</td>
													
													<td>{{$data->religion}}</td>
													<td> 
												    @if($data->status==0)

												    <a href="{{url('admin/religion/active')}}/{{$data->id}}">
                                                   <button class="btn btn-sm btn-success" type="button" title="Active" value="{{$data->id}}" id="active" name="status"><i class="fa fa-check"></i></button></a>
                                                   @else
                                                   	<a href="{{url('admin/religion/in_active')}}/{{$data->id}}">

                                                   		<button class="btn btn-sm btn-danger" type="button" title="InActive" value="{{$data->id}}" class="inactive" name="status"><i class="fa fa-close"></i></button>
                                                   	</a>
                                                   @endif

														<a href="{{url('admin/religion/edit')}}/{{$data->id}}">
                                                        <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                                                        </a>
                                                     <a href="{{url('admin/religion/delete')}}/{{$data->id}}">
                                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                        </a>
                                                    </td>
												</tr>
												 <?php $i++ ?> 
                                                  @endforeach
												
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>

	<!-- <script type="text/javascript">
     	$(document).ready(function(){
     		$('#active').click(function(){
              var id = $(this).val();
              
              console.log(id);
            
               $.ajax({
                    url:"{{url('superadmin/religion/active')}}/"+id,
                    type:'GET',
                    success:function(response){
                    window.location.reload();
                   }
                   });

     		});
        $('.inactive').click(function(){
              var id = $(this).val();
              
              console.log(id);
               $.ajax({
                     url:"{{url('superadmin/religion/in_active')}}/"+id,
                    type:'GET',
                  success:function(response){
                    window.location.reload();
                   }
                   });
        });
     	});
     </script> -->
				@stop