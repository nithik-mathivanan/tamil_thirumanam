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
                <li>
                    <div class="db-int-pro-1"> <img src="images/profiles/men1.jpg" alt=""> <span class="badge bg-primary user-pla-pat">Platinum user</span></div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5> 
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
                <li>
                    <div class="db-int-pro-1"> <img src="images/profiles/men2.jpg" alt=""> <span class="badge bg-primary user-pla-gold">Gold user</span></div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5> 
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
                <li>
                    <div class="db-int-pro-1"> <img src="images/profiles/men3.jpg" alt=""> <span class="badge bg-primary user-pla-free">Free user</span></div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5> 
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
                <li>
                    <div class="db-int-pro-1"> <img src="images/profiles/men4.jpg" alt=""> </div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5> 
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
        <div class="db-inte-prof-list">
            <ul>
                <li>
                    <div class="db-int-pro-1"> <img src="images/profiles/men5.jpg" alt=""> </div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5> 
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                            <li>Accept on: 3:000 PM, 21 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
        <div class="db-inte-prof-list">
            <ul>
                <li>
                    <div class="db-int-pro-1"> <img src="images/profiles/men1.jpg" alt=""> </div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5> 
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                            <li>Denay on: 3:000 PM, 21 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                    </div>
                </li>
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