@extends('users/layout')
@section('container')

<body>
<section>
        <div class="login">
            <div class="container">
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
                                @foreach($data as $list)
                                <div class="form-tit">
                                    <h4>Your Matrimony ID:- {{$list->rand_id}} </h4>
                                    <h1>Verify your Mobile Number</h1>
                                    <div class="form-login">
                                        <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
                                    <form>

                                        <div class="form-group">
                                            <label for="userIdInput" class="lb">ID:</label>
                                            <input type="text" class="form-control" id="userIdInput"
                                                name="cid" value="{{$list->rand_id}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Phone Number:</label>
                                            <input type="text" class="form-control" id="number"
                                                placeholder="+910000000000" name="phone" value="+91{{$list->phone}}" >

                                        </div>
                                        <div id="recaptcha-container"></div>
                                        <button type="button" onclick="phoneSendAuth();" class="btn btn-primary" >Get OTP</button>
                                        @endforeach
                                    </form>
                                         <div class="alert alert-success" id="successRegsiter" style="display: none;">
                                         </div>
                                    <form >
                                        <div class="col-md-6 form-group" id="verifydiv" style="margin-top: 20px;">
                                            </div>
                                         <label class="lb">OTP</label>
                                         <input type="text" class="form-control" id="verificationCode" placeholder="Enter Verification Code" name="otp">
                                        <button type="button"  onclick="codeverify();" class="btn btn-primary">Verify Code</button>
                                        </div>
                                    
                                     @csrf
                                    </form>
                                    
                                                                  
                                </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
 
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<script>

  var firebaseConfig = {
    apiKey: "AIzaSyCpEGWHBU6vm17jwwASl7UgttgZYpS174c",
    authDomain: "otpverify-dbe61.firebaseapp.com",
    projectId: "otpverify-dbe61",
    storageBucket: "otpverify-dbe61.appspot.com",
    messagingSenderId: "6591695870",
    appId: "1:6591695870:web:887863d006b22742bb8a33",
    measurementId: "G-T3L3XPB1M6"
    
  };

  firebase.initializeApp(firebaseConfig);
</script>

<script type="text/javascript">

    window.onload=function () {
      render();
    };

    function render() {
        window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }

    function phoneSendAuth() {

        var number = $("#number").val();

        firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {

            window.confirmationResult=confirmationResult;
            coderesult=confirmationResult;
            console.log(coderesult);

            $("#sentSuccess").text("Message Sent Successfully.");
            $("#sentSuccess").show();

        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });

    }

    function codeverify() {

        var code = $("#verificationCode").val();
        var userID = document.getElementById('userIdInput').value;

       /* coderesult.confirm(code).then(function (result) {
            var user=result.user;
            console.log(user);

            $("#successRegsiter").text("Otp Verified Successfully.");
            $("#successRegsiter").show();
            window.location.href='/user/plan_details/' + userID;

        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        }); 
        */
        //echo (you are here);
        
         window.location.href='/user/preferred_details/' + userID;
    }

</script>
   
 
@endsection