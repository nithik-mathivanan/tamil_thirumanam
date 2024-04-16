@extends('users/layout')
@section('container')
 
<body>
<section>
        <div class="login">
            <div class="container">
                @if(session()->has('message'))
                <div class="alert alert-success">
                            {{session('message')}}
                            </div>
                <div class="row">
                @endif

                    <div class="inn">
                        <div class="lhs">
                            <div class="tit">
                                <h2>Now <b>Find your life partner</b> Easy and fast.</h2>
                            </div>
                            <div class="im">
                                <img src="{{asset('users_assets/images/login-couple.png')}}" alt="">
                            </div>
                            <div class="log-bg">&nbsp;</div>
                        </div>
                        <div class="rhs">
                            
                            <div>
                                <div class="form-tit">
                                    <h4>Start for free</h4>
                                    <h1>Sign up to TamilThirumanam</h1>
                                    <p>Already a member? <a href="{{url('/user')}}">Login</a></p>
                                </div>
                                <div class="form-login">
                                    <form action="{{route('signup.manage_signup_process')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="lb">Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter your full name"
                                                name="name">
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Profile Created by:</label>
                                            <select class="form-select chosen-select" data-placeholder="Select Your Profile" name="mprofile_by" id="mprofile_by"required> 
                                            <option value="">Select</option>
                                            @foreach($profile as $profile)
                                                <option value="{{$profile->id}}">{{$profile->created_by}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Email:</label>
                                           
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email" name="email" value="{{old('email')}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Phone:</label>
                                            <div class="row">
                                                <div class=" col-md-3">
                                                    <select class="form-control" name="country_code" required>
                                                        <option value="">Code</option>
                                                        @foreach($country_code as $data)
                                                         <option value="{{$data->phonecode}}">{{$data->iso3}} ({{$data->phonecode}})</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class=" col-md-9">
                                                    <input type="text" class="form-control col-md-9" id="phone"
                                                    placeholder="Enter phone number" name="phone" maxlength="10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Password:</label>
                                            <input type="password" class="form-control" id="pwd"
                                                placeholder="Enter password" name="password">
                                        </div>
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="agree" required> Creating
                                                an account means you’re okay with our <a href="#!">Terms of Service</a>,
                                                Privacy Policy, and our default Notification Settings.
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Create Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

@endsection