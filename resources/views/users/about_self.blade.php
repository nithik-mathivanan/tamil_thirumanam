@extends('users/layout')
@section('container')

<body>
<section>
        <div class="login">
            <div class="container">
                    <div class="inn">
                        <div class="lhs">
                            <div class="tit">
                                <h2>Now <b>Find your {{$real}} partner</b> Easy and fast.</h2>
                            </div>
                            <div class="im">
                                <img src="{{asset('users_assets/images/login-couple.png')}}" alt="">
                            </div>
                            <div class="log-bg">&nbsp;</div>
                        </div>
                        <div class="rhs">
                                <div class="form-tit">
                                    
                                    <h1>Help me to Write</h1>
                                    
                                    <div class="form-login">
                                    <form action="{{route('about_self.about_self_process')}}" method="post" >
                                        @foreach($data as $list)
                                        <input type="text" class="form-control" value="{{$list->rand_id}}" name="self_id" readonly>
                                        @endforeach
                                        <div class="help">
                                        <textarea class="help_me_textbox" name="userData" rows="8"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                        <div class="text-count"><b>0</b> Characters</div> 
                                        </div>
                                        <div class="col-md-7">
                                            <div class="help-me-text" style="cursor: pointer;"><span>help to write about your {{$real}}</span></div>
                                        </div>
                                        </div>                    
                                        <button type="submit" class="btn btn-primary">Continue</button>
                                        
                                        @csrf
                                    </form>                              
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
 
    <script>

        
        
        $('.help-me-text').click(function () {

            var rel = "{{$real}}";
            var sel = "{{$sel}}";
            var edu = "{{$edu}}";
            var occ = "{{$occ}}";
            var fstat = "{{$fstat}}";
            var ftype = "{{$ftype}}";
            var fval = "{{$fval}}";
            var city = "{{$city}}";
            // Construct the text
            var text = "I am making this profile for my " + rel + ", " + sel + " completed " + edu + " , " + sel + " is now working as a " + occ + ". We belong to " + fstat + ", " + ftype + " family with " + fval + " values, currently settled in " +  city + ".";
            
            // Update the value of the '.help_me_textbox' element with the constructed text
            $('.help_me_textbox').val(text);

            // Update the text count
            $('.text-count b').text(text.length);
        });

        // Event listener for keyup event on the textarea
        $('.help textarea').keyup(function () {
            // Update the text count
            $('.text-count b').text($(this).val().length);
        });
    
    </script>
   
 
@endsection