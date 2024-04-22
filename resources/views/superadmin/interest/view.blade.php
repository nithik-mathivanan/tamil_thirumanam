@extends('superadmin.layout')
@section('content')
@section('title','Tamil Thirumanam | Dashboard')
<style type="text/css">

 </style>
<div class="content">
	<div class="container-fluid">
		<h4 class="page-title" id="ddd"></h4>
		<div class="row table-content">
			<div class="col-md-10">
				<div class="flash-section">
				@if( Session::has( 'success' ))
					     <div class="flash-message">{{ Session::get( 'success' ) }}</div>
				@endif
				</div>
				<div class="card">
					<div class="card-header">
						<div class="card-title"><a href="{{url('admin/interest')}}"> Interest Info </a>
						@if($interest->status==0)
														<p class="status-lable bg-warning text-light">Pending</p>
													@elseif($interest->status==1)
										   				<p class="status-lable bg-dark text-light">Deleted</p>
													@elseif($interest->status==2)
										   				<p class="status-lable bg-success text-light">Accepted</p>
													@elseif($interest->status==3)
										   				<p class="status-lable bg-danger text-light">Rejected</p>
													@endif</div>
						
					</div>
					<div class="card-body">
						<div class="row">
								<div class="col-md-6">
									<div class="card mb-3">
										<div class="card-header">
											<h5 class="card-title mb-0">Interest From</h5>	
										</div>
										<div class="card-body text-center">
											<img src="{{asset('public/images/uploads')}}/{{json_decode($interest->getUserImg->images)[0]}}" alt="Christina Mason" class="img-fluid mb-2" width="128" height="128" />
											<h5 class="card-title mb-0">{{$interest->getUser->name}}</h5>
											<div class="text-muted mb-2">{{$interest->getProfile->joboccu}}</div>
											<div>
												<a class="btn btn-primary btn-sm" href="#">View Profile</a>
											</div>

											
										</div>
										
										
										<hr class="my-0" />
										<div class="card-body">
											<h5 class="h6 card-title">About</h5>
											<ul class="list-unstyled mb-0">
												<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <b>{{$interest->getProfile->city}}</b></li>

												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <b>{{$interest->getProfile->company_name}}</b></li>
												<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <b>{{$interest->getProfile->district}},{{$interest->getProfile->state}}</b></li>
												<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Age <b>{{$interest->getProfile->age}}</b></li>
											</ul>
										</div>
										<hr class="my-0" />
										<div class="card-body">
											<h5 class="h6 card-title">Social Media</h5>
											<ul class="list-unstyled mb-0">
												@if($interest->getProfile->youtube)
												<li class="mb-1"><a href="{{$interest->getProfile->youtube}}">YouTube</a></li>
												@endif
												@if($interest->getProfile->facebook)
												<li class="mb-1"><a href="{{$interest->getProfile->facebook}}">Facebook</a></li>
												@endif	
												@if($interest->getProfile->instagram)
												<li class="mb-1"><a href="{{$interest->getProfile->instagram}}">Instagram</a></li>
												@endif
												@if($interest->getProfile->linkedin)
												<li class="mb-1"><a href="{{$interest->getProfile->linkedin}}">LinkedIn</a></li>
												@endif
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card mb-3">
										<div class="card-header">
											<h5 class="card-title mb-0">Interest To</h5>
										</div>
										<div class="card-body text-center">
											<img src="{{asset('public/images/uploads')}}/{{json_decode($interest->TogetUserImg->images)[0]}}" alt="Christina Mason" class="img-fluid mb-2" width="128" height="128" />
											<h5 class="card-title mb-0">{{$interest->interestOn->fullname}}</h5>
											<div class="text-muted mb-2">{{$interest->interestOn->joboccu}}</div>
											<div>
												<a class="btn btn-primary btn-sm" href="#">View Profile</a>
											</div>

											
										</div>
										
										
										<hr class="my-0" />
										<div class="card-body">
											<h5 class="h6 card-title">About</h5>
											<ul class="list-unstyled mb-0">
												<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <b>{{$interest->interestOn->city}}</b></li>

												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <b>{{$interest->interestOn->company_name}}</b></li>
												<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <b>{{$interest->interestOn->district}},{{$interest->interestOn->state}}</b></li>
												<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Age <b>{{$interest->interestOn->age}}</b></li>
												
											</ul>
										</div>
										<hr class="my-0" />
										<div class="card-body">
											<h5 class="h6 card-title">Social Media</h5>
											<ul class="list-unstyled mb-0">
												@if($interest->interestOn->youtube)
												<li class="mb-1"><a href="{{$interest->getProfile->youtube}}">YouTube</a></li>
												@endif
												@if($interest->interestOn->facebook)
												<li class="mb-1"><a href="{{$interest->getProfile->facebook}}">Facebook</a></li>
												@endif	
												@if($interest->interestOn->instagram)
												<li class="mb-1"><a href="{{$interest->getProfile->instagram}}">Instagram</a></li>
												@endif
												@if($interest->interestOn->linkedin)
												<li class="mb-1"><a href="{{$interest->getProfile->linkedin}}">LinkedIn</a></li>
												@endif
											</ul>
										</div>
									</div>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			
@stop
