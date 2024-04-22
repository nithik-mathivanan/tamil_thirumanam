@extends('users/layout')
@section('container')
    <section>
        <div class="login pro-edit-update">
            <div class="container">
                <div class="row">
                    <div class="inn">
                       
                        <div class="newrhs">

                            <br>
                            <div class="form-login">
                                    <form action="{{route('preferred_details.preferred_details_process')}}" method="post" enctype="multipart/form-data">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success font-weight-bold text-dark">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif

                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <!--PROFILE BIO-->
                                        <div class="form-group" style="display: none;">
                                            <label class="lb">Your Matrimony ID:</label>
                                            @foreach($data as $list)
                                            <input type="text" class="form-control" name="pcustomer_id" value="{{$list->rand_id}}" readonly>
                                            @endforeach
                                        </div>
                                        <div class="form-tit">
                                                <h4>Add Photos</h4>
                                                <h1>Atleast Add 3 Images</h1>
                                        </div>
                                        <div class="container">
                                             
                                           
                                        </div>
                                        <div class="container">
                                             <p id="num-of-files" style="text-align: center;">No Files Choosen</p>
                                            <input class="file-upload" type="file" id="file-input" name="images[]" accept="image/*" onchange="previewimage()" multiple >
                                            <label class="image-label" for="file-input">
                                            <i class="fa fa-upload"></i> &nbsp; Choose Photos
                                            </label>
                                           
                                            <div id="image_show">
                                                <div class="pro-gal-imag">
                                                    <div class="img-wrapper">
                                                    
                                                    <div class="img-overlay"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>  
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="pr-bio-c pr-bio-gal" id="gallery">
                                        </div>
                                        
                                    
                                        
                                        <button type="submit"  class="btn btn-primary">Submit</button>
                                        @csrf
                                    </form>
                                   </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="profi-pg profi-ban">
            <div class="container">
                <div class="row">
                    <div class="inn">
                        <div class="rhs">
                            
                            


                        </div>

                        <!-- PROFILE lHS -->
                       
                        <!-- END PROFILE lHS -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
    @endsection