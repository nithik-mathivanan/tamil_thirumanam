@extends('users/layout')
@section('container')
    <section>
        <div class="profi-pg profi-ban">
            <div class="">
                <div class="">
                    
                    <div class="profile">
                        <div class="pg-pro-big-im">
                            <div class="s1">
                                <img src="{{asset('public/images/uploads/')}}/{{json_decode($profile->getImages->images)[0]}}" loading="lazy" class="pro" alt="">
                            </div>
                            <div class="s3">
                                <a href="#!" class="cta fol cta-chat">Chat now</a>
                                @if($interest_status==0)
                                    <a href="{{url('user/send-interest')}}/{{$profile->user_id}}"><span class="cta cta-sendint" data-toggle="modal" data-target="#sendInter">Send
                                    interest</span></a>
                                @elseif($interest_status =='send')
                                     <a href="#"><span class="cta cta-sendint" data-toggle="modal" data-target="#sendInter">
                                    Interest Sent <i class="fa fa-check"></i></span></a>
                                @elseif($interest_status =='recieved')
                                <a href="{{url('user/profile_interests')}}"><span class="cta cta-sendint" data-toggle="modal" data-target="#sendInter">
                                    Interest recieved <i class="fa fa-envelope"></i></span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="profi-pg profi-bio">
                        <div class="lhs">
                            <div class="pro-pg-intro">
                                <h1>{{$profile->fullname}}</h1>
                                <div class="pro-info-status">
                                    <!-- <span class="stat-1"><b>100</b> viewers</span>
                                    <span class="stat-2"><b>Available</b> online</span> -->
                                </div>
                                <ul>
                                    <li>
                                        <div>
                                            <img src="{{asset('/users_assets/images/icon/pro-city.png')}}" loading="lazy" alt="">
                                            <span>City: <strong>{{$profile->city}}</strong></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="{{asset('/users_assets/images/icon/pro-age.png')}}" loading="lazy" alt="">
                                            <span>Age: <strong>{{$profile->age}}</strong></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="{{asset('/users_assets/images/icon/pro-city.png')}}" loading="lazy" alt="">
                                            <span>Height: <strong>{{$profile->height}} cm</strong></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="{{asset('/users_assets/images/icon/pro-city.png')}}" loading="lazy" alt="">
                                            <span>Job: <strong>{{$profile->joboccu}}</strong></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- PROFILE ABOUT -->
                            <div class="pr-bio-c pr-bio-abo">
                                <h3>About</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. </p>
                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text.</p>
                            </div>
                            <!-- END PROFILE ABOUT -->
                            <!-- PROFILE ABOUT -->
                            <div class="pr-bio-c pr-bio-gal" id="gallery">
                                <h3>Photo gallery</h3>
                                <div id="image-gallery">
                                    @foreach(json_decode($profile->getImages->images) as $data)
                                    <div class="pro-gal-imag">
                                        <div class="img-wrapper">
                                            <a href="#!"><img src="{{asset('public/images/uploads/')}}/{{$data}}" class="img-responsive" alt=""></a>
                                            <div class="img-overlay"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            <!-- END PROFILE ABOUT -->
                            <!-- PROFILE ABOUT -->
                           
                            <!-- END PROFILE ABOUT -->
                            <!-- PROFILE ABOUT -->
                            <div class="pr-bio-c pr-bio-info">
                                <h3>Personal information</h3>
                                <ul>
                                    <li><b>Name:</b> {{$profile->fullname}}</li>
                                    <li><b>Fatheres name:</b> {{$profile->father_name}}</li>
                                   
                                    <li><b>Age:</b> {{$profile->age}}</li>
                                    <li><b>Date of birth:</b>{{date('d-m-Y',strtotime($profile->dob))}}</li>
                                    <li><b>Height:</b>{{$profile->height}} cm</li>
                                    <li><b>Weight:</b>{{$profile->weight}} Kg</li>
                                    <li><b>Degree:</b> {{$profile->education}}</li>
                                    <li><b>Religion:</b> {{$profile->getReligion->religion}}</li>
                                    <li><b>Profession:</b> {{$profile->job_type}}</li>
                                    <li><b>Company:</b> {{$profile->company_name}}</li>
                                    <li><b>Position:</b>{{$profile->joboccu}}</li>
                                    <li><b>Salary:</b> {{$profile->salary}} p.a</li>
                                </ul>
                            </div>
                            <!-- END PROFILE ABOUT -->
                            <!-- PROFILE ABOUT -->
                            <div class="pr-bio-c pr-bio-hob">
                                <h3>Hobbies</h3>
                                <ul>
                                    @foreach(explode(',',$profile->hobbies) as $hobbie)
                                    <li><span>{{$hobbie}}</span></li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                            <!-- END PROFILE ABOUT -->
                            <!-- PROFILE ABOUT -->
                            <div class="pr-bio-c menu-pop-soci pr-bio-soc">
                                @if($profile->facebook!=null || $profile->linkedIn!=null || $profile->youtube!=null || $profile->instagram!=null)
                                <h3>Social media</h3>
                                <ul>
                                    @if($profile->facebook!=null)
                                    <li><a href="{{$profile->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    @endif
                                     @if($profile->linkedIn!=null)
                                    <li><a href="{{$profile->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    @endif
                                     @if($profile->youtube!=null)
                                    <li><a href="{{$profile->youtube}}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    @endif
                                     @if($profile->instagram!=null)
                                    <li><a href="{{$profile->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    @endif
                                </ul>
                                @endif
                            </div>
                            <!-- END PROFILE ABOUT -->


                        </div>

                        <!-- PROFILE lHS -->
                        <div class="rhs">
                            <!-- HELP BOX -->
                            <div class="prof-rhs-help">
                                <div class="inn">
                                    <h3>Tell us your Needs</h3>
                                    <p>Tell us what kind of service or experts you are looking.</p>
                                    <a href="sign-up.html">Register for free</a>
                                </div>
                            </div>
                            <!-- END HELP BOX -->
                            <!-- RELATED PROFILES -->
                            <div class="slid-inn pr-bio-c wedd-rel-pro">
                                <h3>Related profiles</h3>
                                <ul class="slider3">
                                    <li>
                                        <div class="wedd-rel-box">
                                            <div class="wedd-rel-img">
                                                <img src="images/profiles/men6.jpg" alt="">
                                                <span class="badge badge-success">21 Years old</span>
                                            </div>
                                            <div class="wedd-rel-con">
                                                <h5>Christine</h5>
                                                <span>City: <b>New York City</b></span>
                                            </div>
                                            <a href="profile-details.html" class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wedd-rel-box">
                                            <div class="wedd-rel-img">
                                                <img src="images/profiles/men7.jpg" alt="">
                                                <span class="badge badge-success">21 Years old</span>
                                            </div>
                                            <div class="wedd-rel-con">
                                                <h5>Christine</h5>
                                                <span>City: <b>New York City</b></span>
                                            </div>
                                            <a href="profile-details.html" class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wedd-rel-box">
                                            <div class="wedd-rel-img">
                                                <img src="images/profiles/men8.jpg" alt="">
                                                <span class="badge badge-success">21 Years old</span>
                                            </div>
                                            <div class="wedd-rel-con">
                                                <h5>Christine</h5>
                                                <span>City: <b>New York City</b></span>
                                            </div>
                                            <a href="profile-details.html" class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wedd-rel-box">
                                            <div class="wedd-rel-img">
                                                <img src="images/profiles/men9.jpg" alt="">
                                                <span class="badge badge-success">21 Years old</span>
                                            </div>
                                            <div class="wedd-rel-con">
                                                <h5>Christine</h5>
                                                <span>City: <b>New York City</b></span>
                                            </div>
                                            <a href="profile-details.html" class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wedd-rel-box">
                                            <div class="wedd-rel-img">
                                                <img src="images/profiles/men10.jpg" alt="">
                                                <span class="badge badge-success">21 Years old</span>
                                            </div>
                                            <div class="wedd-rel-con">
                                                <h5>Christine</h5>
                                                <span>City: <b>New York City</b></span>
                                            </div>
                                            <a href="profile-details.html" class="fclick"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- END RELATED PROFILES -->
                        </div>
                        <!-- END PROFILE lHS -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PROFILE -->

    

    <!--- CHAT CONVERSATION BOX START --->
    <div class="chatbox">
        <span class="comm-msg-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>

        <div class="inn">
            <form name="new_chat_form" method="post">
                <div class="s1">
                    <img src="images/profiles/2.jpg" class="intephoto2" alt="">
                    <h4><b>Angelina Jolie</b>,</h4>
                    <span class="avlsta avilyes">Available online</span>
                </div>
                <div class="s2 chat-box-messages">
                    <span class="chat-wel">Start a new chat!!! now</span>
                    <div class="chat-con">
                        <div class="chat-lhs">Hi</div>
                        <div class="chat-rhs">Hi</div>
                    </div>
                    <!--<span>Start A New Chat!!! Now</span>-->
                </div>
                <div class="s3">
                    <input type="text" name="chat_message" placeholder="Type a message here.." required="">
                    <button id="chat_send1" name="chat_send" type="submit">Send <i class="fa fa-paper-plane-o"
                            aria-hidden="true"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection