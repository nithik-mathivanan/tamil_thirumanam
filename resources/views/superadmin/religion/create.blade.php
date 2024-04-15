@extends('superadmin.layout')
@section('content')
@section('title','Tamil Thirumanam | Dashboard')
	<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Forms</h4>
						<div class="row table-content">
							<div class="col-md-8">
								<div class="card" style="width:60%">
									<div class="card-header">
										<div class="card-title">CREATE RELIGION</div>
									</div>
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
									<form action="{{route('store-religion')}}"   method="post" enctype="multipart/form-data" >
                                            {{csrf_field()}}
									<div class="card-body">
										<div class="form-group">
											<label >RELIGION NAME</label>
											<input type="religion" required class="form-control" name="religion" id="religion" placeholder="Enter Religion">
											
										</div>
										
										<div class="card-action">
											<button type="submit" class="btn btn-success">Submit</button>
											
										</div>
									</div>
								  </form>	
								</div>
								
							</div>
						</div>
					</div>
				</div>	
					@stop