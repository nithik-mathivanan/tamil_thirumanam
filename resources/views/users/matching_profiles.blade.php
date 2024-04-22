@extends('users/layout')
@section('container')

<style type="text/css">
    .profile-label:hover{
        background-color: green;
        color: white;
    }
</style>
 
<body>
 <section>
        <div class="all-pro-head">
            <div class="container">
                <div class="row">
                    <h1>Lakhs of Happy Marriages</h1>
                    <a href="sign-up.html">Join now for Free <i class="fa fa-handshake-o" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!--FILTER ON MOBILE VIEW-->
        <div class="fil-mob fil-mob-act">
            <h4>Profile filters <i class="fa fa-filter" aria-hidden="true"></i> </h4>
        </div>
    </section>
    <!-- END -->

    <!-- START -->
    <section>
        <div class="all-weddpro all-jobs all-serexp chosenini">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 fil-mob-view">
                        <span class="filter-clo">+</span>
                        <!-- START -->
                        <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-search" aria-hidden="true"></i>Select Religion</h4>
                            <div class="form-group">
                                <select class="chosen-select">
                                    <option value="">Religion</option>
                                    <option value="">Any</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="jain">Jain</option>
                                    <option value="christian">Christian</option>
                                </select>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- START -->
                        <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-clock-o" aria-hidden="true"></i>Age</h4>
                            <div class="form-group">
                                <select class="chosen-select">
                                    <option value="">Select age</option>
                                    <option value="18to23">18 to 23</option>
                                    <option value="24to29">24 to 29</option>
                                    <option value="30to35">30 to 35</option>
                                    <option value="36to41">36 to 41</option>
                                    <option value="42to50">42 to 50</option>
                                </select>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- START -->
                        <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-bell-o" aria-hidden="true"></i>Select Caste</h4>
                            <div class="form-group">
                                <select class="chosen-select">
                                    <option>Caste</option>
                                    <option value="">Any</option>
                                    @foreach($matching_profile as $pro)
                                    <option value="{{$pro->caste}}">{{$pro->caste}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- START -->
                        <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-map-marker" aria-hidden="true"></i>Location</h4>
                            <div class="form-group">
                                <select class="chosen-select" name="addjbmaincate">
                                    <option>Location</option>
                                    <option value="">Any</option>
                                    <@foreach($matching_profile as $pro)
                                    <option value="{{$pro->district}}">{{$pro->district}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- START -->
                         <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Occupation</h4>
                            <div class="form-group">
                                <select class="chosen-select">
                                    <option value="">Select</option>
                                    <option value="business">Business</option>
                                    <option value="private">Private</option>
                                    <option value="government">Government</option>
                                    <option value="jobless">Jobless</option>
                                </select>
                            </div>
                        </div>
                        <!-- END -->

                        <!-- START -->
                        <div class="filt-com lhs-rati lhs-ver lhs-cate">
                            <h4><i class="fa fa-shield" aria-hidden="true"></i>Profile</h4>
                            <ul>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="" name="expert_veri" class="rating_check" id="exver1"
                                            checked>
                                        <label for="exver1">All</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="" name="expert_veri" class="rating_check"
                                            id="exver2">
                                        <label for="exver2">Premium</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="" name="expert_veri" class="rating_check"
                                            id="exver3">
                                        <label for="exver3">Free</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- END -->
                        <!-- START -->
                        <div class="filt-com filt-send-query">
                            <div class="send-query">
                                <h5>What are you looking for?</h5>
                                <p>We will help you to arrage the best match to you.</p>
                                <a href="#!" data-toggle="modal" data-target="#expfrm">Send your queries</a>
                            </div>
                        </div>
                        <!-- END -->
                    </div>
                    <div class="col-md-9">
                        <div class="short-all">
                            <div class="short-lhs">
                                Showing profiles
                            </div>
                            <div class="short-rhs">
                                <ul>
                                    <li>
                                        Sort by:
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <select class="chosen-select">
                                                <option value="">Most relative</option>
                                                <option value="Men">Date listed: Newest</option>
                                                <option value="Men">Date listed: Oldest</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sort-grid sort-grid-1">
                                            <i class="fa fa-th-large" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sort-grid sort-grid-2 act">
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="all-list-sh">
                        @foreach($match as $list)                            
                            <ul>                                
                               
                                <li>
                                    <div class="all-pro-box user-avil-onli" data-useravil="avilyes"
                                        data-aviltxt="Available online">
                                        <!--PROFILE IMAGE-->
                                        <div class="pro-img">
                                            
                                         
                                            <a href="#">
                                                <img src="{{asset('public/images/uploads/')}}/{{json_decode($list->getImages->images)[0]}}" alt="">
                                            </a>
                                           
                                           <!--  <div class="pro-ave" title="User currently available">
                                                <span class="pro-ave-yes"></span>
                                            </div>
                                            <div class="pro-avl-status">
                                                <h5>Available Online</h5>
                                            </div>
                                            <div class="pro-avl-status">
                                                <span class="marqu">Last login 10 mins ago | I'll be available on 10:00
                                                    AM</span>
                                            </div> -->
                                        </div>
                                        <!--END PROFILE IMAGE-->

                                        <!--PROFILE NAME-->
                                        <div class="pro-detail">
                                            <h4><a href="#">{{$list->fullname}}</a></h4>
                                            <div class="pro-bio">
                                                <span>{{$list->education}}</span>
                                                <span>{{$list->job_type}}</span>
                                                <span>{{$list->age}} Yeard old</span>
                                                <span>Height: {{$list->height}}cm </span>
                                            </div>
                                            <div class="links">
                                                <span  class="profile-label">Chat now</span>
                                                <a href="#!" class="profile-label">WhatsApp</a>
                                                
                                                <a class="profile-label" href="{{url('/user/profile_detail_view')}}/{{$list->user_id}}">More detaiils</a>
                                            </div>
                                        </div>
                                        <!--END PROFILE NAME-->
                                        <!--SAVE-->
                                        <span class="enq-sav" data-toggle="tooltip"
                                            title="Click to save this provile."><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                        <!--END SAVE-->
                                    </div>
                                </li>
                               
                                
                                
                            </ul>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->


    <!-- INTEREST POPUP -->
    <div class="modal fade" id="sendInter">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                @foreach($matching_profile as $list)
                @if($profileid == $list->rand_id)
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title seninter-tit">Send interest to <span class="intename2">{{$list->fullname}}</span></h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body seninter">
                    <div class="lhs">
                        <img src="images/profiles/1.jpg" alt="" class="intephoto2">
                    </div>
                    <div class="rhs">
                        <h4>Permissions: <span class="intename2">{{$list->fullname}}</span> Can able to view your details</h4>
                    </div>
                </div>
                @endif
                <form action="{{route('matching_profiles.expressinterests', $list->id)}}" method="post">
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Send interest</button>
                    
                </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END INTEREST POPUP -->

    <!-- CHAT CONVERSATION BOX START -->
    <div class="chatbox">
        <span class="comm-msg-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>

        <div class="inn">
            <form name="new_chat_form" method="post">
                <div class="s1">
                    <img src="images/user/2.jpg" class="intephoto2" alt="">
                    <h4><b class="intename2">Julia</b>,</h4>
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
</body>

@endsection