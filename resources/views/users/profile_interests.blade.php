@extends('users/sidebarlayout')
@section('container1')
<section>
<div class="row">
                            <div class="col-md-12 db-sec-com">
                                <h2 class="db-tit">Interest request</h2>
                                <div class="db-pro-stat">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Edid profile</a></li>
                                          <li><a class="dropdown-item" href="#">View profile</a></li>
                                          <li><a class="dropdown-item" href="#">Plan change</a></li>
                                          <li><a class="dropdown-item" href="#">Download invoice now</a></li>
                                        </ul>
                                    </div>
                                    <div class="db-inte-main">
                                       
                                          <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                              <a class="nav-link active" data-bs-toggle="tab" href="#home">New requests</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" data-bs-toggle="tab" href="#menu1">Accept request</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" data-bs-toggle="tab" href="#menu2">Denay request</a>
                                            </li>
                                          </ul>
                                          <!-- Tab panes -->
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <div class="db-inte-prof-list">
            <ul>
                @foreach($interest as $data)
                @if($data->status==0)
                <li>

                    <div class="db-int-pro-1"> <img src="{{asset('public/images/uploads')}}/{{json_decode($data->getUserImg->images)[0]}}" alt=""> <span class="badge bg-primary user-pla-pat">Platinum user</span></div>
                    <div class="db-int-pro-2">
                        <h5>{{$data->getUser->name}}</h5> 
                        <ol class="poi">
                            <li>City: <strong>{{$data->getProfile->city}}</strong></li>
                            <li>Age: <strong>{{$data->getProfile->age}}</strong></li>
                            <li>Height: <strong>{{$data->getProfile->height}} cm</strong></li>
                            <li>Job: <strong>{{$data->getProfile->joboccu}}</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: {{date('h:i a, d M Y',strtotime($data->Created_at))}}</li>
                        </ol>
                        <a href="{{url('/user/profile_detail_view')}}/{{$data->getUser->id}}" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <a href="{{url('user/accept-interest')}}/{{$data->id}}"><button type="button" class="btn btn-success btn-sm">Accept</button></a>
                        <a href="{{url('user/deny-interest')}}/{{$data->id}}"><button type="button" class="btn btn-outline-danger btn-sm">Denay</button></a>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
        <div class="db-inte-prof-list">
             <ul>
                @foreach($interest as $data)
                @if($data->status==2)
                <li>

                    <div class="db-int-pro-1"> <img src="{{asset('public/images/uploads')}}/{{json_decode($data->getUserImg->images)[0]}}" alt=""> <span class="badge bg-primary user-pla-pat">Platinum user</span></div>
                    <div class="db-int-pro-2">
                        <h5>{{$data->getUser->name}}</h5> 
                        <ol class="poi">
                            <li>City: <strong>{{$data->getProfile->city}}</strong></li>
                            <li>Age: <strong>{{$data->getProfile->age}}</strong></li>
                            <li>Height: <strong>{{$data->getProfile->height}} cm</strong></li>
                            <li>Job: <strong>{{$data->getProfile->joboccu}}</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: {{date('h:i a, d M Y',strtotime($data->Created_at))}}</li>
                        </ol>
                       <a href="{{url('/user/profile_detail_view')}}/{{$data->getUser->id}}" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        
                        <a href="{{url('user/deny-interest')}}/{{$data->id}}"><button type="button" class="btn btn-outline-danger btn-sm">Denay</button></a>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
        <div class="db-inte-prof-list">
            <ul>
                @foreach($interest as $data)
                @if($data->status==3)
                <li>

                    <div class="db-int-pro-1"> <img src="{{asset('public/images/uploads')}}/{{json_decode($data->getUserImg->images)[0]}}" alt=""> <span class="badge bg-primary user-pla-pat">Platinum user</span></div>
                    <div class="db-int-pro-2">
                        <h5>{{$data->getUser->name}}</h5> 
                        <ol class="poi">
                            <li>City: <strong>{{$data->getProfile->city}}</strong></li>
                            <li>Age: <strong>{{$data->getProfile->age}}</strong></li>
                            <li>Height: <strong>{{$data->getProfile->height}} cm</strong></li>
                            <li>Job: <strong>{{$data->getProfile->joboccu}}</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: {{date('h:i a, d M Y',strtotime($data->Created_at))}}</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <a href="{{url('user/accept-interest')}}/{{$data->id}}"><button type="button" class="btn btn-success btn-sm">Accept</button></a>
                        
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
  </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</section>
   
@endsection