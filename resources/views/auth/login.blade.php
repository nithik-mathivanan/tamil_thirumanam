@extends('users/layout')
@section('container')
 
<body>
<section>
        <div class="login">
            <div class="container">
                @if(session()->has('message')!=null)
                <div class="alert alert-success">
                            {{session('message')}}
                            </div>
                <div class="row">
                @else
                @endif

                    <div class="inn">
                        <div class="lhs">
                            <div class="tit">
                                <h2>Now <b>Find <br> your life partner</b> Easy and fast.</h2>
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
                                    <h1>Login in to TamilThirumanam</h1>
                                    <p>Not a member? <a href="{{url('/user/signup')}}">Sign up now</a></p>
                                </div>
                                <div class="form-login">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="lb">Email:</label>
                                            <input type="email" class="form-control"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Password:</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        </div>
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="agree"> Remember
                                                me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Log in</button>
                                        @if(session()->has('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('error')}}    
                                        </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
        <!-- end page -->

     
        
    </body>


@endsection