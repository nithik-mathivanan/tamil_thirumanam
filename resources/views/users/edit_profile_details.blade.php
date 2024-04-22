@extends('users/layout')
@section('container')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

<style>
        .underweight { background-color: #add8e6; }
        .normal { background-color: #90ee90; }
        .overweight { background-color: #ffd700; }
        .obese { background-color: #ff6347; }
    </style>

    <section>
        <div class="login pro-edit-update">
            <div class="container">
                <div class="row">
                    <div class="inn">
                        <div class="lhs">
                            <div class="tit" style=" color: #198754;">
                                <h2>Now <b>Find your Soul Mate</b> Easy and fast.</h2>
                            </div>
                            <div class="im">
                                <img src="https://tamilthirumanam.com/users_assets/images/login-couple.png" alt="">
                            </div>
                            <div class="tit" style=" color: #198754;">
                                
                                <h2><br><br><br>Now in<br><br><b>Advanced info page</b> 4 more sections to go...</h2>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                <h2>Now in<br><br><b>Education details page</b><br> 3 more sections to go</h2>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <br><br><br>
                                <h2>Now in<br><br><b>Family info page</b><br> 2 more sections to go</h2>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <h3>Now in<br><br><b>Social media page</b><br><br> Almost there...</h3>
                                <br><br><br><br><br><br><br><br><br>
                                <h3>Now in<br><br><b>Your Hobbies page</b><br> <br>You did it!</h3>
                            </div>
                            <div class="log-bg">&nbsp;</div>
                        </div>
                        <div class="rhs">
                           
                                <div class="form-login">
                                    <form action="{{route('profile_details.profile_details_process')}}" method="post">
                                        <!--PROFILE BIO-->
                                          @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="error-msg">
                                                {{$error}}
                                            </div>
                                        @endforeach
                                        @endif
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Basic info</h4>
                                                <h1>Provide your Details</h1>
                                            </div>
                                            @foreach($data as $list)
                                            <div class="row" >
                                                <div class="col-md-6 form-group" >
                                                <label class="lb">Matrimony ID</label>
                                                @foreach($data as $list)
                                                <input type="text" class="form-control" value="{{$list->rand_id}}" 
                                                    name="pid" readonly>
                                                @endforeach
                                            </div>
                                           
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Full Name</label>
                                                <input type="text" class="form-control" placeholder="Enter your full name"
                                                    name="fullname" value="{{$list->fullname}}" required>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label class="lb">Date of Birth</label>
                                                <input type="date" class="form-control" id="dob" placeholder="Enter DOB" name="dob" value="{{$list->dob}}" onchange="validateDate()" required>
                                                <div id="error-message" class="alert alert-danger" style="display: none;">Age should be above 18 years</div>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label class="lb">Age:</label>
                                                <input type="number" class="form-control" id="age-input" placeholder="Enter your Age" name="age" value="{{$list->age}}" readonly>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Gender:</label>
                                                    <select class="form-select chosen-select" data-placeholder="Select your Gender" name="gender" required>
                                                    @if($list->gender!=null)
                                                    <option value="{{$list->gender}}">{{$list->gender}}</option>
                                                    @else
                                                    <option value="">Select Gender</option>
                                                    @endif
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                  </select>
                                            </div>

                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Height:</label>
                                                    <select class="form-select  chosen-select" name="height" id="height" oninput="calculateBMI()" required>
                                                    @if($list->height!=null)
                                                    <option value="{{$list->height}}">{{$list->height}}</option>
                                                    @else
                                                    <option value="">Select Height</option>
                                                    @endif
                                                    <option value="130">less than 4ft</option>
                                                    <option value="137">4ft 6in / 137 cms</option>
                                                    <option value="139">4ft 7in / 139 cms</option>
                                                    <option value="142">4ft 8in / 142 cms</option>
                                                    <option value="144">4ft 9in / 144 cms</option>
                                                    <option value="147">4ft 10in / 147 cms</option>
                                                    <option value="149">4ft 11in / 149 cms</option>
                                                    <option value="152">5ft / 152 cms</option>
                                                    <option value="154">5ft 1in / 154 cms</option>
                                                    <option value="157">5ft 2in / 157 cms</option>
                                                    <option value="160">5ft 3in / 160 cms</option>
                                                    <option value="162">5ft 4in / 162 cms</option>
                                                    <option value="165">5ft 5in / 165 cms</option>
                                                    <option value="167">5ft 6in / 167 cms</option>
                                                    <option value="170">5ft 7in / 170 cms</option>
                                                    <option value="172">5ft 8in / 172 cms</option>
                                                    <option value="175">5ft 9in / 175 cms</option>
                                                    <option value="177">5ft 10in / 177 cms</option>
                                                    <option value="180">5ft 11in / 180 cms</option>
                                                    <option value="182">6ft / 182 cms</option>
                                                    <option value="185">6ft 1in / 185 cms</option>
                                                    <option value="187">6ft 2in / 187 cms</option>
                                                    <option value="190">6ft 3in / 190 cms</option>
                                                    <option value="193">6ft 4in / 193 cms</option>
                                                    <option value="195">6ft 5in / 195 cms</option>
                                                    <option value="198">6ft 6in / 198 cms</option>
                                                    <option value="200">6ft 7in / 200 cms</option>
                                                    <option value="203">6ft 8in / 203 cms</option>
                                                    <option value="205">6ft 9in / 205 cms</option>
                                                    <option value="208">6ft 10in / 208 cms</option>
                                                    <option value="210">6ft 11in / 210 cms</option>
                                                    <option value="220">7ft and above</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Weight:</label>
                                                    <select type="text" class="form-select chosen-select" name="weight" step="0.01" id="weight" oninput="calculateBMI()" required>
                                                        @if($list->weight!=null)
                                                        <option value="{{$list->weight}}">{{$list->weight}}</option>
                                                        @else
                                                        <option value="">Select Weight</option>
                                                        @endif
                                                        <option value="30">30kg</option>
                                                        <option value="35">35kg</option>
                                                        <option value="40">40kg</option>
                                                        <option value="45">45kg</option>
                                                        <option value="50">50kg</option>
                                                        <option value="55">55kg</option>
                                                        <option value="60">60kg</option>
                                                        <option value="65">65kg</option>
                                                        <option value="70">70kg</option>
                                                        <option value="75">75kg</option>
                                                        <option value="70">70kg</option>
                                                        <option value="75">75kg</option>
                                                        <option value="80">80kg</option>
                                                        <option value="85">85kg</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                <label class="lb">BMI:</label>
                                                <input type="text" class="form-control" 
                                                    name="bmi" id="bmi" value="{{$list->bmi}}" readonly>
                                                <div id="bmiCategory"></div>
                                            </div>

                                            
                                        </div>
                                        </div>
                                        <!--END PROFILE BIO-->
                                        <!--PROFILE BASIC INFO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Basic info</h4>
                                                <h1>Advanced bio</h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Are you:</label>
                                                    <select class="form-select chosen-select" data-placeholder="Select" name="martial_status" required>
                                                        @if($list->maritalstatus!=null)
                                                        <option value="{{$list->maritalstatus}}">{{$list->maritalstatus}}</option>
                                                        @else
                                                        <option value="">Select</option>
                                                        @endif
                                                        <option value="new">New</option>
                                                        <option value="divorced">Divorced</option>
                                                        <option value="Widowed">Widowed</option>
                                                      </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="religion" class="form-label">Religion</label>
                                                    <select type="text" class="form-control" name="religion" id="religion"
                                                        required>
                                                    <option value="">Select Religion</option>
                                                      @foreach($religion as $data)
                                                        @if($data->id == $list->religion)
                                                        <option value="{{$data->id}}"selected> {{$data->religion}}</option>
                                                        @else
                                                          <option value="{{$data->id}}"> {{$data->religion}}</option>
                                                        @endif
                                                       @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="mother-tongue" class="form-label">Mother Tongue</label>
                                                    <select type="text" class="form-control" name="mother_tongue"
                                                        id="mother-tongue" required>
                                                        <option value="">Select Mother Tongue</option>
                                                            @foreach($language as $data)
                                                            @if($data->id == $list->mothertongue)
                                                                <option value="{{$data->id}}" selected>{{$data->language}}</option>
                                                            @else
                                                            <option value="{{$data->id}}">{{$data->language}}</option>
                                                            @endif
                                                            @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="caste" class="form-label">Caste</label>
                                                    <select type="text" class="form-control" name="caste" id="caste" required>
                                                        <option value="">Select Caste</option>
                                                        @foreach($community as $data)
                                                        @if($data->id == $list->caste)
                                                            <option value="{{$data->id}}" selected>{{$data->community}}</option>
                                                        @else
                                                            <option value="{{$data->id}}">{{$data->community}}</option>
                                                        @endif
                                                        @endforeach
                                                         
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Sub Caste</label>
                                                    <input type="text" class="form-control" name="subcaste" value="{{$list->subcaste}}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Gotharam</label>
                                                    <input type="text" class="form-control" name="gotharam" value="{{$list->gotharam}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Dosham</label>
                                                    <select type="text" class="form-control" name="dosham" id="dosham" required>
                                                     @if($list->dosham!=null)
                                                    <option value="{{$list->dosham}}">{{$list->dosham}}</option>
                                                    @else
                                                    <option value="">Select</option>
                                                    @endif
                                                    <option value="Yes">YES</option>
                                                    <option value="No">NO</option>
                                                </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">If Dosham Yes</label>
                                                    <input type="text" class="form-control" placeholder="type what kind of dosham or leave this " name="dosham_type" value="{{$list->if_dosham}}">
                                                </div>
                                            
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="raasi" class="lb">Star</label>
                                                <select type="text" class="form-control" name="raasi"
                                                id="raasi" required>
                                                @if($list->rasi!=null)
                                                <option value="{{$list->rasi}}">{{$list->rasi}}</option>
                                                @else
                                                <option value="">Select</option>
                                                @endif
                                                <option value="Asvini">Asvini</option>
                                                <option value="Baraṇi">Baraṇi</option>
                                                <option value="Karthigai">Karthigai</option>
                                                <option value="Rohini">Rohini</option>
                                                <option value="Mirugasiridam">Mirugasiridam</option>
                                                <option value="Tiruvadirai">Tiruvadirai</option>
                                                <option value="Punarpusam">Punarpusam</option>
                                                <option value="Pusam">Pusam</option>
                                                <option value="Ayilyam">Ayilyam</option>
                                                <option value="Puram">Puram</option>
                                                <option value="Uttiram">Uttiram</option>
                                                <option value="Asttam">Asttam</option>
                                                <option value="Cittirai">Cittirai</option>
                                                <option value="Suvati">Suvati</option>
                                                <option value="Visakam">Visakam</option>
                                                <option value="Anusham">Anusham</option>
                                                <option value="Kettai">Kettai</option>
                                                <option value="Mulam">Mulam</option>
                                                <option value="Puratam">Puratam</option>
                                                <option value="Uttiratam">Uttiratam</option>
                                                <option value="Tiruvonam">Tiruvonam</option>
                                                <option value="Avittam">Avittam</option>
                                                <option value="Sadayam">Sadayam</option>
                                                <option value="Purattadi">Purattadi</option>
                                                <option value="Uttirattadi">Uttirattadi</option>
                                                <option value="Revati">Revati</option>
                                                


                                            </select>
                                                
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="star" class="lb">Raasi</label>
                                                <select type="text" class="form-control" name="star"
                                                id="star" required>
                                                @if($list->star!=null)
                                                <option value="{{$list->star}}">{{$list->star}}</option>
                                                @else
                                                <option value="">Select</option>
                                                @endif
                                                    <option value="Aries">Aries</option>
                                                    <option value="Taurus">Taurus</option>
                                                    <option value="Gemini">Gemini</option>
                                                    <option value="Cancer">Cancer</option>
                                                    <option value="Leo">Leo</option>
                                                    <option value="Virgo">Virgo</option>
                                                    <option value="Libra">Libra</option>
                                                    <option value="Scorpio">Scorpio</option>
                                                    <option value="Sagittarius">Sagittarius</option>
                                                    <option value="Capricorn">Capricorn</option>
                                                    <option value="Aquarius">Aquarius</option>
                                                    <option value="Pisces">Pisces</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                            
                                           
                                    </div>
                                        <!--END BASIC PROFILE INFO-->
                                        <!--PROFILE JOB/FAMILY INFO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Job details</h4>
                                                <h1>Job & Education</h1>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Job type:</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Profession" name="jobtype" required>
                                                    <option value="">Select Job Type</option>
                                                  @foreach($jobtype as $data)
                                                    <option value="{{$data->jobtype}}" selected={{$list->jobtype}}>{{$data->jobtype}}</option>
                                                    @endforeach
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Company name:</label>
                                                <input type="text" class="form-control" placeholder="If you Jobless Type your Previous Company" name="companyname" value="{{$list->company_name}}">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Salary:</label>
                                                    <input type="text" class="form-control" placeholder="Type Annual Income " name="salary" value="{{$list->salary}}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Job Occuption:</label>
                                                    <input type="text" class="form-control" name="joboccu" value="{{$list->joboccu}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="education" class="form-label">Highest Education</label>
                                            <select type="text" class="form-control" name="education" id="education"
                                                required>
                                                    <option value="">Select Education</option>
                                                    @foreach($education as $data)
                                                    @if($data->education == $list->education)
                                                        <option value="{{$data->education}}" selected>{{$data->education}}</option>
                                                    @else
                                                        <option value="{{$data->education}}" >{{$data->education}}</option>
                                                    @endif
                                                    @endforeach
                                            </select>
                                            </div>
                                            
                                        </div>
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Family Details</h4>
                                                <h1>Family Details & Values</h1>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                   <label class="lb">Family Status</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Family Status" name="family_status" required>
                                                    <option value="">Select</option>
                                                    @foreach($familystatus as $data)
                                                    <option value="{{$data->familystatus}}" selected={{$list->familystatus}}>{{$data->familystatus}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Family Type</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Family Type" name="family_type" required>
                                                    
                                                    <option value="">Select</option>
                                                    @foreach($familytype as $data)
                                                    <option value="{{$data->familytype}}" selected={{$list->familytype}}>{{$data->familytype}}</option>
                                                    @endforeach
                                                    
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                 <label class="lb">Family Values</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Family Values" name="family_value" required>
                                                    
                                                    <option value="">Select</option>
                                                     @foreach($familyvalue as $data)
                                                    <option value="{{$data->familyvalue}}" selected={{$list->familyvalue}}>{{$data->familyvalue}}</option>
                                                    @endforeach
                                                  </select>
                                                  </div>
                                                  <div class="col-md-6 form-group">
                                                <label class="lb">Any Disability:</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="physically_abled" required>
                                                    @if($list->disability!=null)
                                                    <option value="{{$list->disability}}">{{$list->disability}}</option>
                                                    @else
                                                    <option value="">Select</option>
                                                    @endif
                                                    <option value="none">None</option>
                                                    <option value="physically_abled">Physically Changed</option>
                                                    
                                                  </select>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Father's Name:</label>
                                                    <input type="text" class="form-control" name="fname" value="{{$list->father_name}}" required>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Mother's Name:</label>
                                                    <input type="text" class="form-control" name="mname" value="{{$list->mother_name}}" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Father's Status</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="father_status" required>
                                            
                                                <option value="">Select</option>
                                                @foreach($parentalstatus as $data)
                                                    <option value="{{$data->parentalstatus}}" selected={{$list->parentalstatus}}>{{$data->parentalstatus}}</option>
                                                    @endforeach
                                                    
                                                  </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Mother's Status:</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="mother_status" required>
                                               
                                                <option value="">Select</option>
                                                @foreach($parentalstatus as $data)
                                                    <option value="{{$data->parentalstatus}}" selected={{$list->parentalstatus}}>{{$data->parentalstatus}}</option>
                                                    @endforeach
                                                    
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Brothers</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="brothers" id="countBrothers" onchange="updateBrothersMarriedOptions()" required>
                                                @if($list->brothers!=null)
                                                <option value="{{$list->brothers}}">{{$list->brothers}}</option>
                                                @else
                                                <option value="">Select</option>
                                                @endif
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                    
                                                  </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Sisters</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="sisters" id="countSisters" onchange="updateSistersMarriedOptions()" required>
                                                @if($list->sisters!=null)
                                                <option value="{{$list->sisters}}">{{$list->sisters}}</option>
                                                @else
                                                <option value="">Select</option>
                                                @endif
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                    
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Brothers Married</label>
                                                    <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="bmarried" id="marriedBrothers">
                                                    @if($list->bmarried!=0)
                                                    <option value="{{$list->bmarried}}">{{$list->bmarried}}</option>
                                                    @else
                                                    <option value="0">0</option>
                                                    @endif
                                                
                                                    
                                                  </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Sisters Married</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="smarried" id="marriedSisters">
                                                    @if($list->smarried!=0)
                                                    <option value="{{$list->smarried}}">{{$list->smarried}}</option>
                                                    @else
                                                    <option value="0">0</option>
                                                    @endif
                                                
                                                    
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                <label class="lb" for="state">State</label>
                                                <select class="form-select chosen-select" id="state" name="state" onchange="filterDistricts()" required>
                                                    
                                                    @foreach($state as $state)
                                                        @if($state->name == $list->state)
                                                            <option value="{{$state->name}}" selected>{{$state->name}}</option>
                                                        @else
                                                            <option value="{{$state->name}}">{{$state->name}}</option>
                                                        @endif
                                                        @endforeach
                                                </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb" for="district">District</label>
                                                <select class="form-select chosen-select" id="district" name="district" onchange="filterCities()" required>
                                                    @foreach($district as $data)
                                                    @if($data->name == $list->district)
                                                    <option value="{{$data->name}}" selected>{{$data->name}}</option>
                                                    @else
                                                     <option value="{{$data->name}}">{{$data->name}}</option>
                                                    @endif
                                                    @endforeach
                                                 
                                                </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb" for="city">City:</label>
                                                <select class="form-select chosen-select" id="city" name="city" onchange="filterPincodes()" required>
                                                    @if($list->city!=null)
                                                    <option value="{{$list->city}}">{{$list->city}}</option>
                                                    @else
                                                    <option value="">-- Select City --</option>
                                                    @endif
                                                </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb" id="pincode">Pincode</label>
                                                    <input type="text" class="form-control" name="pincode" value="{{$list->pincode}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!--END PROFILE JOB/FAMILY INFO-->
                                        <!--PROFILE BIO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Media</h4>
                                                <h1>Social media</h1>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Instagram:</label>
                                                    <input type="text" class="form-control" name="insta" value="{{$list->instagram}}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Facebook:</label>
                                                    <input type="text" class="form-control" name="facebook" value="{{$list->facebook}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Youtube:</label>
                                                    <input type="text" class="form-control" name="youtube" value="{{$list->youtube}}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Linkedin:</label>
                                                    <input type="text" class="form-control" name="linkedln" value="{{$list->linkedln}}">
                                                </div>
                                            </div>
                                        </div>
                                        <!--END PROFILE BIO-->
                                        <!--PROFILE HOBBY INFO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Life Style</h4>
                                                <h1>About</h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Eating Habit</label>
                                                <select class="form-select chosen-select" data-placeholder="Select" name="eating" required>
                                                
                                                <option value="">Select</option>
                                                 @foreach($eatinghabbit as $data)
                                                 <option value="{{$data->eatinghabbit}}" selected={{$list->eatinghabbit}}>{{$data->eatinghabbit}}</option>
                                                @endforeach
                                                 </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Drinks Habit</label>
                                                <select class="form-select chosen-select" data-placeholder="Select" name="drinking" required>
                                                @if($list->drinkshabit!=null)
                                                <option value="{{$list->drinkshabit}}">{{$list->drinkshabit}}</option>
                                                @else
                                                <option value="">Select</option>
                                                @endif
                                                <option value="No">No</option>
                                                <option value="Drinks Socially">Drinks Socially</option>
                                                <option value="Yes">Yes</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label class="lb">Smoking Habit</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="smoking" required>
                                                @if($list->smokinghabit!=null)
                                                <option value="{{$list->smokinghabit}}"selected={{$list->smokinghabit}}>{{$list->smokinghabit}}</option>
                                                @else
                                                <option value="">Select</option>
                                                @endif
                                                <option value="No">No</option>
                                                <option value="Occasionally">Occasionally</option>
                                                <option value="Yes">Yes</option>
                                                 </select>
                                                </div>
                                                
                                            </div>
                                           <!--  <div class="col-md-12 form-group" style="background-color: white;">
                                                <label class="lb">Hobbies (max:3)</label>
                                                <select id="multiple" class="js-states form-control" name="hobbies[]" multiple required>
                                                    
                                                        <option value="Modelling">Modelling</option>
                                                        <option value="Nature Watching">Nature Watching</option>
                                                        <option value="Movies">Movies</option>
                                                        <option value="Playing">Playing</option>
                                                        <option value="Hangout with family">Hangout with family</option>
                                                        <option value="Adventure travel">Adventure travel</option>
                                                        <option value="Books reading">Books reading</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Cooking">Cooking</option>
                                                        <option value="Yoga">Yoga</option>
                                                </select>
                                               
                                                </div> -->
                                            @endforeach
                                        </div>
                                        <!--END PROFILE HOBBY INFO-->
                                        <button type="submit" onclick=respond();" class="btn btn-primary">Submit</button>
                                        @csrf
                                    </form>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    <script type="text/javascript">
    
    $('#dob').change(function(){
    var dob =    $(this).val();
    alert(dob);
    console.log('hi');
    $('#birthDate').val(dob);
    
    });

    function respond(){
    var msg =    "Succeccfully your Record created";
    }
    
    function saveandgo() {

       /* var code = $("#verificationCode").val();
        var userID = document.getElementById('userIdInput').value;

        coderesult.confirm(code).then(function (result) {
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
         window.location.href='/public/index.php/user/preferred_details/' ;
    }

    $(document).ready(function(){
        $('#state').change(function(){
             $('#district').empty();
            var id = $(this).val();
            $.ajax({
                        url:"{{url('user/getCityByState')}}/"+id,
                        type:'GET',
                        success:function(response){
                            console.log(response);
                            $(response)
                            $.each(response,function(key,value){
                                console.log(value.name);
                                $('#district').append('<option value='+value.name+'>'+value.name+'</option>')
                            })
                        }
                    });
        });

        $('#religion').change(function(){
             $('#caste').empty();
            var id = $(this).val();
            $.ajax({
                        url:"{{url('user/getcasteByReligion')}}/"+id,
                        type:'GET',
                        success:function(response){
                            $.each(response,function(key,value){
                                $('#caste').append('<option value='+value.id+'>'+value.community+'</option>')
                            })
                        }
                    });
        });
    });
     // $(document).ready(function(){
     //    const rel={{Js::from($religion['id'])}};
     //    console.log(rel);
     //    $("#religion").val(rel);
     //  })

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>

      $("#multiple").select2({
          placeholder: "Select Your Hobbies",
          allowClear: true
      });


    </script>
   
@endsection