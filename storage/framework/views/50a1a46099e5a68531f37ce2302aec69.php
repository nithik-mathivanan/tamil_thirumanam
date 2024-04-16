<?php $__env->startSection('container'); ?>
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
                            <div class="tit">
                                <h2>Now <b>Find your Soul Mate</b> Easy and fast.</h2>
                            </div>
                            <div class="im">
                                <img src="https://tamilthirumanam.com/users_assets/images/login-couple.png" alt="">
                            </div>
                            <div class="tit">
                                
                                <h2><br><br><br>Now in<br><br><b>Advanced info page</b> 4 more sections to go...</h2>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                <h2>Now in<br><br><b>Education details page</b><br> 3 more sections to go</h2>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <br><br><br>
                                <h2>Now in<br><br><b>Family info page</b><br> 3 more sections to go</h2>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <h3>Now in<br><br><b>Social media page</b><br><br> Almost there...</h3>
                                <br><br><br><br><br><br><br><br><br>
                                <h3>Now in<br><br><b>Your Hobbies page</b><br> <br>You did it!</h3>
                            </div>
                            <div class="log-bg">&nbsp;</div>
                        </div>
                        <div class="rhs">
                            <!-- <?php if($message = Session::get('success')): ?>
                                            <div class="alert alert-success">
                                                <strong><?php echo e($message); ?></strong>
                                            </div>
                                        <?php endif; ?>

                                        <?php if(count($errors) > 0): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?> -->
                                <div class="form-login">
                                    <form action="<?php echo e(route('profile_details.profile_details_process')); ?>" method="post">
                                        <!--PROFILE BIO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Basic info</h4>
                                                <h1>Provide your Details</h1>
                                            </div>
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row" >
                                                <div class="col-md-6 form-group" >
                                                <label class="lb">Matrimony ID</label>
                                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <input type="text" class="form-control" value="<?php echo e($list->rand_id); ?>" 
                                                    name="pid" readonly>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                           
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Full Name</label>
                                                <input type="text" class="form-control" placeholder="Enter your full name"
                                                    name="fullname" value="<?php echo e($list->fullname); ?>">
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label class="lb">Date of Birth</label>
                                                <input type="date" class="form-control" id="dob" placeholder="Enter DOB" name="dob" value="<?php echo e($list->dob); ?>" onchange="validateDate()" >
                                                <div id="error-message" class="alert alert-danger" style="display: none;">Age should be above 18 years</div>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label class="lb">Age:</label>
                                                <input type="number" class="form-control" id="age-input" placeholder="Enter your Age" name="age" value="<?php echo e($list->age); ?>" readonly>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Gender:</label>
                                                    <select class="form-select chosen-select" data-placeholder="Select your Gender" name="gender">
                                                    <?php if($list->gender!=null): ?>
                                                    <option value="<?php echo e($list->gender); ?>"><?php echo e($list->gender); ?></option>
                                                    <?php else: ?>
                                                    <option value="">Select Gender</option>
                                                    <?php endif; ?>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                  </select>
                                            </div>

                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Height:</label>
                                                    <select class="form-select  chosen-select" name="height" id="height" oninput="calculateBMI()" required>
                                                    <?php if($list->height!=null): ?>
                                                    <option value="<?php echo e($list->height); ?>"><?php echo e($list->height); ?></option>
                                                    <?php else: ?>
                                                    <option value="">Select Height</option>
                                                    <?php endif; ?>
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
                                                        <?php if($list->weight!=null): ?>
                                                        <option value="<?php echo e($list->weight); ?>"><?php echo e($list->weight); ?></option>
                                                        <?php else: ?>
                                                        <option value="">Select Weight</option>
                                                        <?php endif; ?>
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
                                                    name="bmi" id="bmi" value="<?php echo e($list->bmi); ?>" readonly>
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
                                                    <select class="form-select chosen-select" data-placeholder="Select" name="martial_status">
                                                        <?php if($list->maritalstatus!=null): ?>
                                                        <option value="<?php echo e($list->maritalstatus); ?>"><?php echo e($list->maritalstatus); ?></option>
                                                        <?php else: ?>
                                                        <option value="">Select</option>
                                                        <?php endif; ?>
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
                                                      <?php $__currentLoopData = $religion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->religion); ?></option>
                                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6 form-group">
                                                    <label for="mother-tongue" class="form-label">Mother Tongue</label>
                                            <select type="text" class="form-control" name="mother_tongue"
                                                id="mother-tongue" required>
                                                <?php if($list->mothertongue!=null): ?>
                                                <option value="<?php echo e($list->mothertongue); ?>"><?php echo e($list->mothertongue); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
                                                <option value="Bengali">Bengali</option>
                                                <option value="Gujarati">Gujarati</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Kannada">Kannada</option>
                                                <option value="Malayalam">Malayalam</option>
                                                <option value="Marathi">Marathi</option>
                                                <option value="Marwari">Marwari</option>
                                                <option value="Oriya">Oriya</option>
                                                <option value="Punjabi">Punjabi</option>
                                                <option value="Sindhi">Sindhi</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Telugu">Telugu</option>
                                                <option value="Urdu">Urdu</option>
                                                <option value="Arunachali">Arunachali</option>
                                                <option value="Assamese">Assamese</option>
                                                <option value="Awadhi">Awadhi</option>
                                                <option value="Bhojpuri">Bhojpuri</option>
                                                <option value="Brij">Brij</option>
                                                <option value="Bihari">Bihari</option>
                                                <option value="Badaga">Badaga</option>
                                                <option value="Chatisgarhi">Chatisgarhi</option>
                                                <option value="Dogri">Dogri</option>
                                                <option value="English">English</option>
                                                <option value="French">French</option>
                                                <option value="Garhwali">Garhwali</option>
                                                <option value="Garo">Garo</option>
                                                <option value="Haryanvi">Haryanvi</option>
                                                <option value="Himachali_Pahari">Himachali/Pahari</option>
                                                
                                            </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="caste" class="form-label">Caste</label>
                                                <select type="text" class="form-control" name="caste" id="caste" required>
                                                <?php if($list->caste!=null): ?>
                                                <option value="<?php echo e($list->caste); ?>"><?php echo e($list->caste); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
                                                <option value="24_Manai_Telugu_Chettiar">24 Manai Telugu Chettiar</option>
                                                <option value="96_Kuli_Maratha">96 Kuli Maratha</option>
                                                <option value="Aaru_Nattu_Vellala">Aaru Nattu Vellala</option>
                                                <option value="Achirapakkam_Chettiar">Achirapakkam Chettiar</option>
                                                <option value="Ad_Dharmi">Ad Dharmi</option>
                                                <option value="Adi_Andhra">Adi Andhra</option>
                                                <option value="Adi_Dravidar">Adi Dravidar</option>
                                                <option value="Adi Karnataka">Adi Karnataka</option>
                                                <option value="Agamudayar / Arcot / Thuluva Vellala">Agamudayar / Arcot / Thuluva Vellala</option>
                                                <option value="Agaram Vellan Chettiar">Agaram Vellan Chettiar</option>
                                                <option value="Agarwal">Agarwal</option>
                                                <option value="Agnikula">Agnikula Kshatriya</option>
                                                <option value="Agrahari">Agrahari</option>
                                                <option value="Agri">Agri</option>
                                                <option value="Aguri / Ugra Kshatriya">Aguri / Ugra Kshatriya</option>
                                                <option value="Aheriya">Aheriya</option>
                                                <option value="Ahir Shimpi">Ahir Shimpi</option>
                                                <option value="Ahirwar">Ahirwar</option>
                                                <option value="Ahom">Ahom</option>
                                                <option value="Ambalavasi">Ambalavasi</option>
                                                <option value="Amil Sindhi">Amil Sindhi </option>
                                                <option value="Amma Kodava">Amma Kodava</option>
                                                <option value="Anavil Brahmin">Anavil Brahmin </option>
                                                <option value="Anjana (Chowdary) Patel">Anjana (Chowdary) Patel</option>
                                                <option value="Arakh / Arakvanshiya">Arakh / Arakvanshiya</option>
                                                <option value="Aramari / Gabit">Aramari / Gabit</option>
                                                <option value="Arekatica">Arekatica</option>
                                                <option value="Arora">Arora</option>
                                                <option value="Arunthathiyar">Arunthathiyar</option>
                                                <option value="Arya Vysya">Arya Vysya</option>
                                                <option value="Asathi">Asathi</option>
                                                <option value="Audichya Brahmin">Audichya Brahmin </option>
                                                <option value="Ayira Vysya">Ayira Vysya</option>
                                                <option value="Ayodhyavasi">Ayodhyavasi</option>
                                                <option value="Ayyaraka">Ayyaraka</option>
                                                <option value="Badaga">Badaga</option>
                                                <option value="Bagdi">Bagdi</option>
                                                <option value="Baibhand">Baibhand Sindhi</option>
                                                <option value="Baidya">Baidya</option>
                                                <option value="Bairagi">Bairagi</option>
                                                <option value="Bairwa">Bairwa</option>
                                                <option value="Baishnab">Baishnab</option>
                                                <option value="Baishya">Baishya</option>
                                                <option value="Bajantri">Bajantri</option>
                                                <option value="Balai">Balai</option>
                                                <option value="Balija">Balija</option>
                                                <option value="Balija Naidu">Balija Naidu</option>
                                                <option value="Balija Reddy">Balija Reddy</option>
                                                <option value="Banayat Oriya">Banayat Oriya</option>
                                                <option value="Banik">Banik</option>
                                                <option value="Baniya">Baniya</option>
                                                <option value="Baniya - Bania">Baniya - Bania</option>
                                                <option value="Baniya - Kumuti">Baniya - Kumuti</option>
                                                <option value="Banjara">Banjara</option>
                                                <option value="Baori">Baori</option>
                                                <option value="Barai">Barai</option>
                                                <option value="Barendra Brahmin">Barendra Brahmin </option>
                                                <option value="Bargi">Bargi</option>
                                                <option value="Bari">Bari</option>
                                                <option value="Baria">Baria</option>
                                                <option value="Barnwal">Barnwal</option>
                                                <option value="Barujibi">Barujibi</option>
                                                <option value="Bavaria">Bavaria</option>
                                                <option value="Bazigar">Bazigar</option>
                                                <option value="Beldar">Beldar</option>
                                                <option value="Beri Chettiar">Beri Chettiar</option>
                                                <option value="Besta">Besta</option>
                                                <option value="Bhand">Bhand</option>
                                                <option value="Bhandari">Bhandari</option>
                                                <option value="Bhanusali">Bhanusali Sindhi </option>
                                                <option value="Bhar">Bhar</option>
                                                <option value="Bharbhunja">Bharbhunja</option>
                                                <option value="Bhatia">Bhatia</option>
                                                <option value="Bhatia Sindhi">Bhatia Sindhi </option>
                                                <option value="Bhatraju">Bhatraju</option>
                                                <option value="Bhatt Brahmin">Bhatt Brahmin </option>
                                                <option value="Bhavasar">Bhavasar Kshatriya</option>
                                                <option value="Bhil">Bhil</option>
                                                <option value="Bhoi">Bhoi</option>
                                                <option value="Bhovi">Bhovi</option>
                                                <option value="Bhoyar">Bhoyar</option>
                                                <option value="Bhulia / Meher">Bhulia / Meher</option>
                                                <option value="Bhumihar">Bhumihar Brahmin </option>
                                                <option value="Billava">Billava</option>
                                                <option value="Bind">Bind</option>
                                                <option value="Bishnoi/Vishnoi">Bishnoi/Vishnoi</option>
                                                <option value="Bondili">Bondili</option>
                                                <option value="Boyar">Boyar</option>
                                                <option value="Brahmakshtriya">Brahmakshtriya</option>
                                                <option value="Brahmbatt">Brahmbatt</option>
                                                <option value="Brahmin - Anavil">Brahmin - Anavil</option>
                                                <option value="Brahmin - Anaviln Desai">Brahmin - Anaviln Desai</option>
                                                <option value="Brahmin - Audichya">Brahmin - Audichya</option>
                                                <option value="Brahmin - Bagra">Brahmin - Bagra</option>
                                                <option value="Brahmin - Baidhiki/Vaidhiki">Brahmin - Baidhiki/Vaidhiki</option>
                                                <option value="Brahmin - Baragaon">Brahmin - Baragaon</option>
                                                <option value="Brahmin - Bardai">Brahmin - Bardai</option>
                                                <option value="Brahmin - Barendra">Brahmin - Barendra</option>
                                                <option value="Brahmin - Bhargav">Brahmin - Bhargav</option>
                                                <option value="Brahmin - Bhatt">Brahmin - Bhatt</option>
                                                <option value="Brahmin - Bhojak">Brahmin - Bhojak</option>
                                                <option value="Brahmin - Bhumihar">Brahmin - Bhumihar</option>
                                                <option value="Brahmin - Chaubisa">Brahmin - Chaubisa</option>
                                                <option value="Brahmin - Dadhich">Brahmin - Dadhich</option>
                                                <option value="Brahmin - Daivadnya">Brahmin - Daivadnya</option>
                                                <option value="Brahmin - Dakaut">Brahmin - Dakaut</option>
                                                <option value="Brahmin - Danua">Brahmin - Danua</option>
                                                <option value="Brahmin - Deshastha">Brahmin - Deshastha</option>
                                                <option value="Brahmin - Dhiman">Brahmin - Dhiman</option>
                                                <option value="Brahmin - Dravida">Brahmin - Dravida</option>
                                                <option value="Brahmin - Embrandiri">Brahmin - Embrandiri</option>
                                                <option value="Brahmin - Garhwali">Brahmin - Garhwali</option>
                                                <option value="Brahmin - Gaur">Brahmin - Gaur</option>
                                                <option value="Brahmin - Goswami/Gosavi">Brahmin - Goswami/Gosavi</option>
                                                <option value="Brahmin - Gujar Gaur">Brahmin - Gujar Gaur</option>
                                                <option value="Brahmin - Gurukkal">Brahmin - Gurukkal</option>
                                                <option value="Brahmin - Halua">Brahmin - Halua</option>
                                                <option value="Brahmin - Havyaka">Brahmin - Havyaka</option>
                                                <option value="Brahmin - Hoysala">Brahmin - Hoysala</option>
                                                <option value="Brahmin - Iyengar">Brahmin - Iyengar</option>
                                                <option value="Brahmin - Iyer">Brahmin - Iyer</option>
                                                <option value="Brahmin - Jangid">Brahmin - Jangid</option>
                                                <option value="Brahmin - Jhadua">Brahmin - Jhadua</option>
                                                <option value="Brahmin - Jyotish">Brahmin - Jyotish</option>
                                                <option value="Brahmin - Kanyakubj">Brahmin - Kanyakubj</option>
                                                <option value="Brahmin - Karhade">Brahmin - Karhade</option>
                                                <option value="Brahmin - Khadayata">Brahmin - Khadayata</option>
                                                <option value="Brahmin - Khandelwal">Brahmin - Khandelwal</option>
                                                <option value="Brahmin - Khedaval">Brahmin - Khedaval</option>
                                                <option value="Brahmin - Kokanastha">Brahmin - Kokanastha</option>
                                                <option value="Brahmin - Kota">Brahmin - Kota</option>
                                                <option value="Brahmin - Koteshwara / Kota (Madhwa )">Brahmin - Koteshwara / Kota (Madhwa )</option>
                                                <option value="Brahmin - Kulin">Brahmin - Kulin</option>
                                                <option value="Brahmin - Kumaoni">Brahmin - Kumaoni</option>
                                                <option value="Brahmin - Madhwa">Brahmin - Madhwa</option>
                                                <option value="Brahmin - Maithil">Brahmin - Maithil</option>
                                                <option value="Brahmin - Mevada">Brahmin - Mevada</option>
                                                <option value="Brahmin - Modh">Brahmin - Modh</option>
                                                <option value="Brahmin - Mohyal">Brahmin - Mohyal</option>
                                                <option value="Brahmin - Nagar">Brahmin - Nagar</option>
                                                <option value="Brahmin - Namboodiri">Brahmin - Namboodiri</option>
                                                <option value="Brahmin - Narmadiya">Brahmin - Narmadiya </option>
                                                <option value="Brahmin - Niyogi">Brahmin - Niyogi</option>
                                                <option value="Brahmin - Others">Brahmin - Others</option>
                                                <option value="Brahmin - Paliwal">Brahmin - Paliwal</option>
                                                <option value="Brahmin - Panda">Brahmin - Panda</option>
                                                <option value="Brahmin - Pandit">Brahmin - Pandit</option>
                                                <option value="Brahmin - Panicker">Brahmin - Panicker</option>
                                                <option value="Brahmin - Pareek">Brahmin - Pareek</option>
                                                <option value="Brahmin - Pushkarna">Brahmin - Pushkarna</option>
                                                <option value="Brahmin - Rajgor">Brahmin - Rajgor</option>
                                                <option value="Brahmin - Rarhi">Brahmin - Rarhi</option>
                                                <option value="Brahmin - Rarhi/Radhi">Brahmin - Rarhi/Radhi</option>
                                                <option value="Brahmin - Rigvedi">Brahmin - Rigvedi</option>
                                                <option value="Brahmin - Rudraj">Brahmin - Rudraj</option>
                                                <option value="Brahmin - Sakaldwipi">Brahmin - Sakaldwipi</option>
                                                <option value="Brahmin - Sanadya">Brahmin - Sanadya</option>
                                                <option value="Brahmin - Sanketi">Brahmin - Sanketi</option>
                                                <option value="Brahmin - Saraswat">Brahmin - Saraswat</option>
                                                <option value="Brahmin - Sarua">Brahmin - Sarua</option>
                                                <option value="Brahmin - Saryuparin">Brahmin - Saryuparin</option>
                                                <option value="Brahmin - Shivalli (Madhva)">Brahmin - Shivalli (Madhva)</option>
                                                <option value="Brahmin - Shivhalli">Brahmin - Shivhalli</option>
                                                <option value="Brahmin - Shri Gaud">Brahmin - Shri Gaud</option>
                                                <option value="Brahmin - Shri Mali">Brahmin - Shri Mali</option>
                                                <option value="Brahmin - Shrimali">Brahmin - Shrimali</option>
                                                <option value="Brahmin - Shukla Yajurvedi">Brahmin - Shukla Yajurvedi</option>
                                                <option value="Brahmin - Sikhwal">Brahmin - Sikhwal</option>
                                                <option value="Brahmin - Smartha">Brahmin - Smartha</option>
                                                <option value="Brahmin - Sri Vaishnava">Brahmin - Sri Vaishnava</option>
                                                <option value="Brahmin - Stanika">Brahmin - Stanika</option>
                                                <option value="Brahmin - Tapodhan">Brahmin - Tapodhan</option>
                                                <option value="Brahmin - Tyagi">Brahmin - Tyagi</option>
                                                <option value="Brahmin - Vaidiki">Brahmin - Vaidiki</option>
                                                <option value="Brahmin - Vaikhanasa">Brahmin - Vaikhanasa</option>
                                                <option value="Brahmin - Valam">Brahmin - Valam</option>
                                                <option value="Brahmin - Velanadu">Brahmin - Velanadu</option>
                                                <option value="Brahmin - Vyas">Brahmin - Vyas</option>
                                                <option value="Brahmin - Zalora">Brahmin - Zalora</option>
                                                <option value="Brahmin Jijhotia">Brahmin Jijhotia </option>
                                                <option value="Brahmin Malviya">Brahmin Malviya </option>
                                                <option value="Brajastha Maithil">Brajastha Maithil</option>
                                                <option value="Bunt (Shetty)">Bunt (Shetty)</option>
                                                <option value="CKP">CKP</option>
                                                <option value="Chakkala Nair">Chakkala Nair</option>
                                                <option value="Chalawadi and Holeya">Chalawadi and Holeya</option>
                                                <option value="Chambhar">Chambhar</option>
                                                <option value="Chandravanshi Kahar">Chandravanshi Kahar</option>
                                                <option value="Charan">Charan</option>
                                                <option value="Chasa">Chasa</option>
                                                <option value="Chattada Sri Vaishnava">Chattada Sri Vaishnava </option>
                                                <option value="Chaturth">Chaturth</option>
                                                <option value="Chaudary">Chaudary</option>
                                                <option value="Chaurasia">Chaurasia</option>
                                                <option value="Chennadasar">Chennadasar</option>
                                                <option value="Cherakula Vellalar">Cherakula Vellalar</option>
                                                <option value="Chero">Chero</option>
                                                <option value="Chettiar">Chettiar</option>
                                                <option value="Chhapru">Chhapru Sindhi </option>
                                                <option value="Chhetri">Chhetri</option>
                                                <option value="Chippolu">Chippolu (Mera)</option>
                                                <option value="Choudhary">Choudhary</option>
                                                <option value="Coorgi">Coorgi</option>
                                                <option value="Dadu Sindhi">Dadu Sindhi </option>
                                                <option value="Daivadnya Brahmin">Daivadnya Brahmin </option>
                                                <option value="Danua Brahmin">Danua Brahmin </option>
                                                <option value="Darji">Darji </option>
                                                <option value="Dasapalanjika / Kannada Saineegar">Dasapalanjika / Kannada Saineegar</option>
                                                <option value="Deshastha Brahmin">Deshastha Brahmin </option>
                                                <option value="Deshmukh">Deshmukh</option>
                                                <option value="Desikar">Desikar</option>
                                                <option value="Desikar Thanjavur">Desikar Thanjavur</option>
                                                <option value="Devadiga">Devadiga</option>
                                                <option value="Devandra Kula Vellalar">Devandra Kula Vellalar</option>
                                                <option value="Devang Koshthi">Devang Koshthi</option>
                                                <option value="Devanga">Devanga</option>
                                                <option value="Devanga Chettiar">Devanga Chettiar</option>
                                                <option value="Devar/Thevar/Mukkulathor">Devar/Thevar/Mukkulathor</option>
                                                <option value="Devrukhe Brahmin">Devrukhe Brahmin</option>
                                                <option value="Dhakad">Dhakad</option>
                                                <option value="Dhanak">Dhanak</option>
                                                <option value="Dhangar">Dhangar</option>
                                                <option value="Dhanka">Dhanka</option>
                                                <option value="Dhanuk">Dhanuk</option>
                                                <option value="Dheevara">Dheevara</option>
                                                <option value="Dhiman">Dhiman</option>
                                                <option value="Dhiman Brahmin">Dhiman Brahmin </option>
                                                <option value="Dhoba">Dhoba</option>
                                                <option value="Dhor / Kakkayya">Dhor / Kakkayya</option>
                                                <option value="Dommala">Dommala</option>
                                                <option value="Dosar / Dusra">Dosar / Dusra</option>
                                                <option value="Dravida Brahmin">Dravida Brahmin </option>
                                                <option value="Dumal">Dumal</option>
                                                <option value="Dusadh (Paswan)">Dusadh (Paswan)</option>
                                                <option value="Ediga">Ediga</option>
                                                <option value="Ediga /Goud (Balija)">Ediga /Goud (Balija)</option>
                                                <option value="Elur Chetty">Elur Chetty</option>
                                                <option value="Embrandiri Brahmin">Embrandiri Brahmin </option>
                                                <option value="Ezhava">Ezhava</option>
                                                <option value="Ezhava Panicker">Ezhava Panicker</option>
                                                <option value="Ezhava Thandan">Ezhava Thandan</option>
                                                <option value="Ezhuthachan">Ezhuthachan</option>
                                                <option value="Gabit">Gabit</option>
                                                <option value="Gahoi">Gahoi</option>
                                                <option value="Gajula / Kavarai">Gajula / Kavarai</option>
                                                <option value="Ganda">Ganda</option>
                                                <option value="Gandha Vanika">Gandha Vanika</option>
                                                <option value="Gandharb">Gandharb</option>
                                                <option value="Gandla">Gandla</option>
                                                <option value="Gandla / Ganiga">Gandla / Ganiga</option>
                                                <option value="Ganiga">Ganiga</option>
                                                <option value="Garhwali">Garhwali</option>
                                                <option value="Garhwali Brahmin">Garhwali Brahmin </option>
                                                <option value="Garo / Garoda">Garo / Garoda</option>
                                                <option value="Gatti">Gatti</option>
                                                <option value="Gaur Brahmin">Gaur Brahmin </option>
                                                <option value="Gavandi">Gavandi</option>
                                                <option value="Gavara">Gavara</option>
                                                <option value="Gavaria">Gavaria</option>
                                                <option value="Gawali">Gawali</option>
                                                <option value="Ghisadi">Ghisadi</option>
                                                <option value="Ghumar">Ghumar</option>
                                                <option value="Ghumar">Ghumar</option>
                                                <option value="Goan">Goan</option>
                                                <option value="Gomantak">Gomantak</option>
                                                <option value="Gond">Gond</option>
                                                <option value="Gondhali">Gondhali</option>
                                                <option value="Gopal / Gopala">Gopal / Gopala</option>
                                                <option value="Goswami/Gosavi Brahmin">Goswami/Gosavi Brahmin </option>
                                                <option value="Goud">Goud</option>
                                                <option value="Gounder">Gounder</option>
                                                <option value="Gounder - Kongu Vellala Gounder">Gounder - Kongu Vellala Gounder</option>
                                                <option value="Gounder - Nattu Gounder">Gounder - Nattu Gounder</option>
                                                <option value="Gounder - Others">Gounder - Others</option>
                                                <option value="Gounder - Urali Gounder">Gounder - Urali Gounder</option>
                                                <option value="Gounder - Vanniya Kula Kshatriyar">Gounder - Vanniya Kula Kshatriyar</option>
                                                <option value="Gounder - Vettuva Gounder">Gounder - Vettuva Gounder</option>
                                                <option value="Gowda">Gowda</option>
                                                <option value="Gowda - Kuruba Gowda">Gowda - Kuruba Gowda</option>
                                                <option value="Gramani">Gramani</option>
                                                <option value="Gudia">Gudia</option>
                                                <option value="Gujar Gaur Brahmin">Gujar Gaur Brahmin </option>
                                                <option value="Gujjar">Gujjar</option>
                                                <option value="Gulahre">Gulahre</option>
                                                <option value="Gupta">Gupta</option>
                                                <option value="Guptan">Guptan</option>
                                                <option value="Gurav">Gurav</option>
                                                <option value="Gurjar">Gurjar</option>
                                                <option value="Gurukkal Brahmin">Gurukkal Brahmin </option>
                                                <option value="Haihaivanshi">Haihaivanshi</option>
                                                <option value="Halba Koshti">Halba Koshti</option>
                                                <option value="Halua Brahmin">Halua Brahmin </option>
                                                <option value="Havyaka Brahmin">Havyaka Brahmin </option>
                                                <option value="Heggade">Heggade</option>
                                                <option value="Helava">Helava</option>
                                                <option value="Holar">Holar</option>
                                                <option value="Hoysala Brahmin">Hoysala Brahmin </option>
                                                <option value="Hugar (Jeer)">Hugar (Jeer)</option>
                                                <option value="Hyderabadi Sindhi">Hyderabadi Sindhi </option>
                                                <option value="Illaththu Pillai">Illaththu Pillai</option>
                                                <option value="Intercaste">Intercaste</option>
                                                <option value="Irani">Irani</option>
                                                <option value="Isai Vellalar">Isai Vellalar</option>
                                                <option value="Iyengar Brahmin">Iyengar Brahmin </option>
                                                <option value="Iyer Brahmin">Iyer Brahmin </option>
                                                <option value="Jaalari">Jaalari</option>
                                                <option value="Jaiswal">Jaiswal</option>
                                                <option value="Jandra">Jandra</option>
                                                <option value="Jangam">Jangam</option>
                                                <option value="Jangid Brahmin">Jangid Brahmin </option>
                                                <option value="Jangra - Brahmin">Jangra - Brahmin</option>
                                                <option value="Jat">Jat</option>
                                                <option value="Jatav">Jatav</option>
                                                <option value="Jeer">Jeer </option>
                                                <option value="Jetty/Malla">Jetty/Malla</option>
                                                <option value="Jhadav">Jhadav</option>
                                                <option value="Jhadua Brahmin">Jhadua Brahmin </option>
                                                <option value="Jijhotia">Jijhotia Brahmin</option>
                                                <option value="Jingar">Jingar</option>
                                                <option value="Jogi (Nath)">Jogi (Nath)</option>
                                                <option value="Julaha">Julaha</option>
                                                <option value="Kachara">Kachara</option>
                                                <option value="Kadava Patel">Kadava Patel</option>
                                                <option value="Kadia">Kadia</option>
                                                <option value="Kahar">Kahar</option>
                                                <option value="Kaibarta">Kaibarta</option>
                                                <option value="Kaikaala">Kaikaala</option>
                                                <option value="Kalal">Kalal</option>
                                                <option value="Kalanji">Kalanji</option>
                                                <option value="Kalar">Kalar</option>
                                                <option value="Kalbelia">Kalbelia</option>
                                                <option value="Kalinga">Kalinga</option>
                                                <option value="Kalinga Vysya">Kalinga Vysya</option>
                                                <option value="Kalita">Kalita</option>
                                                <option value="Kalwar">Kalwar</option>
                                                <option value="Kamboj">Kamboj</option>
                                                <option value="Kamma">Kamma</option>
                                                <option value="Kamma Naidu">Kamma Naidu</option>
                                                <option value="Kanakkan Padanna">Kanakkan Padanna</option>
                                                <option value="Kandara">Kandara</option>
                                                <option value="Kandera">Kandera</option>
                                                <option value="Kanjar">Kanjar</option>
                                                <option value="Kansari">Kansari</option>
                                                <option value="Kansyakaar">Kansyakaar</option>
                                                <option value="Kanyakubj Brahmin">Kanyakubj Brahmin </option>
                                                <option value="Kanykubj Bania">Kanykubj Bania</option>
                                                <option value="Kapu">Kapu</option>
                                                <option value="Kapu Naidu">Kapu Naidu</option>
                                                <option value="Kapu Reddy">Kapu Reddy</option>
                                                <option value="Karakala Bhakthula">Karakala Bhakthula</option>
                                                <option value="Karana">Karana</option>
                                                <option value="Karhade Brahmin">Karhade Brahmin </option>
                                                <option value="Karkathar">Karkathar</option>
                                                <option value="Karmakar">Karmakar</option>
                                                <option value="Karni Bhakthula">Karni Bhakthula</option>
                                                <option value="Karuneegar">Karuneegar</option>
                                                <option value="Kasar">Kasar</option>
                                                <option value="Kasaundhan">Kasaundhan</option>
                                                <option value="Kasera">Kasera</option>
                                                <option value="Kashyap">Kashyap</option>
                                                <option value="Kasukara">Kasukara</option>
                                                <option value="Katiya">Katiya</option>
                                                <option value="Kavara">Kavara</option>
                                                <option value="Kavuthiyya/Ezhavathy">Kavuthiyya/Ezhavathy</option>
                                                <option value="Kayastha">Kayastha</option>
                                                <option value="Kayastha (Bengali)">Kayastha (Bengali)</option>
                                                <option value="Kerala Mudali">Kerala Mudali</option>
                                                <option value="Keshri (Kesarwani)">Keshri (Kesarwani)</option>
                                                <option value="Khandayat">Khandayat</option>
                                                <option value="Khandelwal">Khandelwal</option>
                                                <option value="Kharwa">Kharwa</option>
                                                <option value="Kharwar">Kharwar</option>
                                                <option value="Khatik">Khatik</option>
                                                <option value="Khatri">Khatri</option>
                                                <option value="Kirar">Kirar</option>
                                                <option value="Kodava">Kodava</option>
                                                <option value="Kodikal Pillai">Kodikal Pillai</option>
                                                <option value="Koiri">Koiri </option>
                                                <option value="Kokanastha Brahmin">Kokanastha Brahmin </option>
                                                <option value="Kokanastha Maratha">Kokanastha Maratha</option>
                                                <option value="Kokna">Kokna</option>
                                                <option value="Koli">Koli</option>
                                                <option value="Koli Mahadev">Koli Mahadev</option>
                                                <option value="Koli Patel">Koli Patel</option>
                                                <option value="Komti /Arya Vaishya">Komti /Arya Vaishya</option>
                                                <option value="Kongu Chettiar">Kongu Chettiar</option>
                                                <option value="Kongu Nadar">Kongu Nadar</option>
                                                <option value="Kongu Vellala Gounder">Kongu Vellala Gounder</option>
                                                <option value="Konkani">Konkani</option>
                                                <option value="Korama">Korama</option>
                                                <option value="Kori">Kori</option>
                                                <option value="Kori/Koli">Kori/Koli</option>
                                                <option value="Kosthi">Kosthi</option>
                                                <option value="Kota Brahmin">Kota Brahmin </option>
                                                <option value="Krishnavaka">Krishnavaka</option>
                                                <option value="Kshatriya">Kshatriya</option>
                                                <option value="Kshatriya">Kshatriya Kurmi</option>
                                                <option value="Kshatriya Raju">Kshatriya Raju</option>
                                                <option value="Kudumbi">Kudumbi</option>
                                                <option value="Kulal">Kulal</option>
                                                <option value="Kulalar">Kulalar</option>
                                                <option value="Kulin Brahmin">Kulin Brahmin </option>
                                                <option value="Kulita">Kulita</option>
                                                <option value="Kumaoni Brahmin">Kumaoni Brahmin </option>
                                                <option value="Kumaoni Rajput">Kumaoni Rajput</option>
                                                <option value="Kumawat">Kumawat</option>
                                                <option value="Kumbhakar">Kumbhakar</option>
                                                <option value="Kumbhar">Kumbhar</option>
                                                <option value="Kumhar">Kumhar</option>
                                                <option value="Kummari">Kummari</option>
                                                <option value="Kunbi">Kunbi</option>
                                                <option value="Kunbi Lonari">Kunbi Lonari</option>
                                                <option value="Kunbi Maratha">Kunbi Maratha</option>
                                                <option value="Kunbi Tirale">Kunbi Tirale</option>
                                                <option value="Kuravan">Kuravan</option>
                                                <option value="Kurmi">Kurmi</option>
                                                <option value="Kurmi/Kurmi Kshatriya">Kurmi/Kurmi Kshatriya</option>
                                                <option value="Kurni">Kurni</option>
                                                <option value="Kuruba">Kuruba</option>
                                                <option value="Kuruhina Shetty">Kuruhina Shetty</option>
                                                <option value="Kuruhini Chetty">Kuruhini Chetty</option>
                                                <option value="Kurumbar">Kurumbar</option>
                                                <option value="Kuruva">Kuruva</option>
                                                <option value="Kushwaha (Koiri)">Kushwaha (Koiri)</option>
                                                <option value="Kutchi">Kutchi</option>
                                                <option value="Lad">Lad</option>
                                                <option value="Lakhara / Lakhera / Laxkar">Lakhara / Lakhera / Laxkar</option>
                                                <option value="Lambadi">Lambadi</option>
                                                <option value="Larai Sindhi">Larai Sindhi </option>
                                                <option value="Larkana Sindhi">Larkana Sindhi </option>
                                                <option value="Laxminarayan gola">Laxminarayan gola</option>
                                                <option value="Leva patel">Leva patel</option>
                                                <option value="Leva patil">Leva patil</option>
                                                <option value="Linga Balija">Linga Balija</option>
                                                <option value="Lingayath">Lingayath</option>
                                                <option value="Lodhi Rajput">Lodhi Rajput</option>
                                                <option value="Lohana">Lohana</option>
                                                <option value="Lohana Sindhi">Lohana Sindhi </option>
                                                <option value="Lohar">Lohar</option>
                                                <option value="Loniya">Loniya</option>
                                                <option value="Lubana">Lubana</option>
                                                <option value="Madhesiya/Kanu/Halwai">Madhesiya/Kanu/Halwai</option>
                                                <option value="Madhwa">Madhwa Brahmin </option>
                                                <option value="Madiga">Madiga</option>
                                                <option value="Madivala / Dhobi">Madivala / Dhobi</option>
                                                <option value="Mahajan">Mahajan</option>
                                                <option value="Mahar">Mahar</option>
                                                <option value="Mahendra">Mahendra</option>
                                                <option value="Maheshwari">Maheshwari</option>
                                                <option value="Maheshwari / Meshri">Maheshwari / Meshri</option>
                                                <option value="Mahishya">Mahishya</option>
                                                <option value="Mahor">Mahor</option>
                                                <option value="Mahuri">Mahuri</option>
                                                <option value="Mair Rajput Swarnkar">Mair Rajput Swarnkar</option>
                                                <option value="Maithil Brahmin">Maithil Brahmin </option>
                                                <option value="Majabi">Majabi</option>
                                                <option value="Mala">Mala</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Mallah">Mallah</option>
                                                <option value="Malviya Brahmin">Malviya Brahmin</option>
                                                <option value="Malwani">Malwani</option>
                                                <option value="Mangalorean">Mangalorean</option>
                                                <option value="Manipuri">Manipuri</option>
                                                <option value="Manjapudur Chettiar">Manjapudur Chettiar</option>
                                                <option value="Mannadiyar">Mannadiyar</option>
                                                <option value="Mannan / Velan / Vannan">Mannan / Velan / Vannan</option>
                                                <option value="Mapila">Mapila</option>
                                                <option value="Maratha">Maratha</option>
                                                <option value="Maratha">Maratha Kshatriya</option>
                                                <option value="Maruthuvar">Maruthuvar</option>
                                                <option value="Matang">Matang</option>
                                                <option value="Mathur">Mathur</option>
                                                <option value="Mathur Vaishya">Mathur Vaishya</option>
                                                <option value="Matia Patel">Matia Patel</option>
                                                <option value="Maurya / Shakya">Maurya / Shakya</option>
                                                <option value="Meena">Meena</option>
                                                <option value="Meenavar">Meenavar</option>
                                                <option value="Meghwal">Meghwal</option>
                                                <option value="Mehar">Mehar</option>
                                                <option value="Mehra">Mehra</option>
                                                <option value="Mera">Mera </option>
                                                <option value="Meru Darji">Meru Darji</option>
                                                <option value="Mochi">Mochi</option>
                                                <option value="Modak">Modak</option>
                                                <option value="Modh Brahmin">Modh Brahmin </option>
                                                <option value="Modh Ghanchi">Modh Ghanchi</option>
                                                <option value="Modi">Modi</option>
                                                <option value="Modikarlu">Modikarlu</option>
                                                <option value="Mogaveera">Mogaveera</option>
                                                <option value="Mohyal Brahmin">Mohyal Brahmin </option>
                                                <option value="Mudaliyar">Mudaliyar</option>
                                                <option value="Mudiraj">Mudiraj</option>
                                                <option value="Mukkulathor">Mukkulathor </option>
                                                <option value="Munnuru Kapu">Munnuru Kapu</option>
                                                <option value="Musahar">Musahar</option>
                                                <option value="Musukama">Musukama</option>
                                                <option value="Muthuraja / Mutharaiyar">Muthuraja / Mutharaiyar</option>
                                                <option value="Naagavamsam">Naagavamsam</option>
                                                <option value="Nabit">Nabit</option>
                                                <option value="Nadar">Nadar</option>
                                                <option value="Nagar Brahmin">Nagar Brahmin </option>
                                                <option value="Nagaralu">Nagaralu</option>
                                                <option value="Nai / Nayi Brahmin">Nai / Nayi Brahmin</option>
                                                <option value="Naicker">Naicker</option>
                                                <option value="Naicker - Others">Naicker - Others</option>
                                                <option value="Naicker - Vanniya Kula Kshatriyar">Naicker - Vanniya Kula Kshatriyar</option>
                                                <option value="Naidu">Naidu</option>
                                                <option value="Naik">Naik</option>
                                                <option value="Naika">Naika </option>
                                                <option value="Nair">Nair</option>
                                                <option value="Namasudra / Namassej">Namasudra / Namassej</option>
                                                <option value="Nambiar">Nambiar</option>
                                                <option value="Namboodiri Brahmin">Namboodiri Brahmin </option>
                                                <option value="Namdarlu">Namdarlu</option>
                                                <option value="Nanjil Mudali">Nanjil Mudali</option>
                                                <option value="Nanjil Nattu Vellalar">Nanjil Nattu Vellalar</option>
                                                <option value="Nanjil Vellalar">Nanjil Vellalar</option>
                                                <option value="Nanjil pillai">Nanjil pillai</option>
                                                <option value="Nankudi Vellalar">Nankudi Vellalar</option>
                                                <option value="Napit">Napit</option>
                                                <option value="Narmadiya Brahmin">Narmadiya Brahmin </option>
                                                <option value="Nat">Nat</option>
                                                <option value="Nath">Nath </option>
                                                <option value="Nattu Gounder">Nattu Gounder</option>
                                                <option value="Nattukottai">Nattukottai Chettiar</option>
                                                <option value="Nayaka">Nayaka</option>
                                                <option value="Neeli">Neeli</option>
                                                <option value="Neeli Saali">Neeli Saali</option>
                                                <option value="Nema">Nema</option>
                                                <option value="Nepali">Nepali</option>
                                                <option value="Nessi">Nessi</option>
                                                <option value="Nhavi">Nhavi</option>
                                                <option value="Niari">Niari</option>
                                                <option value="Niyogi Brahmin">Niyogi Brahmin </option>
                                                <option value="Odan">Odan</option>
                                                <option value="Ontari">Ontari</option>
                                                <option value="Oraon">Oraon</option>
                                                <option value="Oswal">Oswal</option>
                                                <option value="Otari">Otari</option>
                                                <option value="Othuvaar">Othuvaar</option>
                                                <option value="Padmasali">Padmasali</option>
                                                <option value="Padmashali">Padmashali</option>
                                                <option value="Padmavati Porwal">Padmavati Porwal</option>
                                                <option value="Pagadala">Pagadala</option>
                                                <option value="Pal">Pal</option>
                                                <option value="Pallan / Devandra Kula Vellalan">Pallan / Devandra Kula Vellalan</option>
                                                <option value="Panan">Panan</option>
                                                <option value="Panchal">Panchal</option>
                                                <option value="Panda Brahmin">Panda Brahmin </option>
                                                <option value="Pandaram">Pandaram</option>
                                                <option value="Pandit Brahmin">Pandit Brahmin </option>
                                                <option value="Pandiya Vellalar">Pandiya Vellalar</option>
                                                <option value="Panicker">Panicker</option>
                                                <option value="Pannirandam Chettiar">Pannirandam Chettiar</option>
                                                <option value="Paravan / Bharatar">Paravan / Bharatar</option>
                                                <option value="Parit">Parit</option>
                                                <option value="Parkavakulam / Udayar">Parkavakulam / Udayar</option>
                                                <option value="Parsi">Parsi</option>
                                                <option value="Partraj">Partraj</option>
                                                <option value="Parvatha Rajakulam">Parvatha Rajakulam</option>
                                                <option value="Pasi">Pasi</option>
                                                <option value="Paswan">Paswan </option>
                                                <option value="Paswan / Dusadh">Paswan / Dusadh</option>
                                                <option value="Patel">Patel</option>
                                                <option value="Pathare Prabhu">Pathare Prabhu</option>
                                                <option value="Patil">Patil</option>
                                                <option value="Patnaick/Sistakaranam">Patnaick/Sistakaranam</option>
                                                <option value="Patra">Patra</option>
                                                <option value="Pattinavar">Pattinavar</option>
                                                <option value="Pattusali">Pattusali</option>
                                                <option value="Patwa">Patwa</option>
                                                <option value="Perika">Perika</option>
                                                <option value="Perika/Puragiri Kshatriya">Perika/Puragiri Kshatriya</option>
                                                <option value="Pillai">Pillai</option>
                                                <option value="Poddar">Poddar</option>
                                                <option value="Poosala">Poosala</option>
                                                <option value="Porwal">Porwal</option>
                                                <option value="Porwal / Porwar">Porwal / Porwar</option>
                                                <option value="Poundra">Poundra</option>
                                                <option value="Prajapati">Prajapati</option>
                                                <option value="Pulaya / Cheruman">Pulaya / Cheruman</option>
                                                <option value="Pushkarna Brahmin">Pushkarna Brahmin </option>
                                                <option value="Rabari">Rabari</option>
                                                <option value="Radhi / Niari">Radhi / Niari</option>
                                                <option value="Raigar">Raigar</option>
                                                <option value="Rajaka / Vannar">Rajaka / Vannar</option>
                                                <option value="Rajastani">Rajastani</option>
                                                <option value="Rajbhar">Rajbhar</option>
                                                <option value="Rajbonshi">Rajbonshi</option>
                                                <option value="Rajpurohit">Rajpurohit</option>
                                                <option value="Rajput">Rajput</option>
                                                <option value="Raju / Kshatriya Raju">Raju / Kshatriya Raju</option>
                                                <option value="Ramanandi">Ramanandi</option>
                                                <option value="Ramdasia">Ramdasia</option>
                                                <option value="Ramgariah">Ramgariah</option>
                                                <option value="Ramoshi">Ramoshi</option>
                                                <option value="Rarhi Brahmin">Rarhi Brahmin </option>
                                                <option value="Rastogi">Rastogi</option>
                                                <option value="Rathi">Rathi</option>
                                                <option value="Rauniar">Rauniar</option>
                                                <option value="Ravana Rajput">Ravana Rajput</option>
                                                <option value="Ravidasia">Ravidasia</option>
                                                <option value="Rawat">Rawat</option>
                                                <option value="Reddy">Reddy</option>
                                                <option value="Relli">Relli</option>
                                                <option value="Rigvedi Brahmin">Rigvedi Brahmin </option>
                                                <option value="Rohiri Sindhi">Rohiri Sindhi </option>
                                                <option value="Rohit / Chamar">Rohit / Chamar</option>
                                                <option value="Ror">Ror</option>
                                                <option value="Rudraj Brahmin">Rudraj Brahmin </option>
                                                <option value="SC">SC</option>
                                                <option value="SKP">SKP</option>
                                                <option value="ST">ST</option>
                                                <option value="Sadgope">Sadgope</option>
                                                <option value="Sadhu Chetty">Sadhu Chetty</option>
                                                <option value="Sagara (Uppara)">Sagara (Uppara)</option>
                                                <option value="Saha">Saha</option>
                                                <option value="Sahariya">Sahariya</option>
                                                <option value="Sahiti Sindhi">Sahiti Sindhi </option>
                                                <option value="Sahu">Sahu</option>
                                                <option value="Saini">Saini</option>
                                                <option value="Saiva Pillai Thanjavur">Saiva Pillai Thanjavur</option>
                                                <option value="aiva Pillai Tirunelveli">Saiva Pillai Tirunelveli</option>
                                                <option value="Saiva Vellan chettiar">Saiva Vellan chettiar</option>
                                                <option value="Sakaldwipi Brahmin">Sakaldwipi Brahmin </option>
                                                <option value="Sakkhar Sindhi">Sakkhar Sindhi </option>
                                                <option value="Saliya">Saliya</option>
                                                <option value="Saliyar">Saliyar</option>
                                                <option value="Salvi">Salvi</option>
                                                <option value="Samagar">Samagar</option>
                                                <option value="Sambava">Sambava</option>
                                                <option value="Sanadya Brahmin">Sanadya Brahmin </option>
                                                <option value="Sanketi Brahmin">Sanketi Brahmin </option>
                                                <option value="Sansi">Sansi</option>
                                                <option value="Saraswat Brahmin">Saraswat Brahmin </option>
                                                <option value="Sargara">Sargara</option>
                                                <option value="Saryuparin Brahmin">Saryuparin Brahmin </option>
                                                <option value="Sathwara">Sathwara</option>
                                                <option value="Satnami">Satnami</option>
                                                <option value="Savji">Savji</option>
                                                <option value="Sehwani Sindhi">Sehwani Sindhi </option>
                                                <option value="Senai Thalaivar">Senai Thalaivar</option>
                                                <option value="Senguntha Mudaliyar">Senguntha Mudaliyar</option>
                                                <option value="Sengunthar/Kaikolar">Sengunthar/Kaikolar</option>
                                                <option value="Settibalija">Settibalija</option>
                                                <option value="Setty Balija">Setty Balija</option>
                                                <option value="Shah">Shah</option>
                                                <option value="Shaw / Sahu/Teli">Shaw / Sahu/Teli</option>
                                                <option value="Shettigar">Shettigar</option>
                                                <option value="Shetty">Shetty </option>
                                                <option value="Shikarpuri Sindhi">Shikarpuri Sindhi </option>
                                                <option value="Shilpkar">Shilpkar</option>
                                                <option value="Shimpi/Namdev">Shimpi/Namdev</option>
                                                <option value="Shivhalli Brahmin">Shivhalli Brahmin </option>
                                                <option value="Shrimali Brahmin">Shrimali Brahmin </option>
                                                <option value="Sikhwal Brahmin">Sikhwal Brahmin </option>
                                                <option value="Sindhi">Sindhi</option>
                                                <option value="Sindhi-Amil">Sindhi-Amil</option>
                                                <option value="Sindhi-Baibhand">Sindhi-Baibhand</option>
                                                <option value="Sindhi-Bhanusali">Sindhi-Bhanusali</option>
                                                <option value="Sindhi-Bhatia">Sindhi-Bhatia</option>
                                                <option value="Sindhi-Chhapru">Sindhi-Chhapru</option>
                                                <option value="Sindhi-Dadu">Sindhi-Dadu</option>
                                                <option value="Sindhi-Hyderabadi">Sindhi-Hyderabadi</option>
                                                <option value="Sindhi-Larai">Sindhi-Larai</option>
                                                <option value="Sindhi-Larkana">Sindhi-Larkana</option>
                                                <option value="Sindhi-Lohana">Sindhi-Lohana</option>
                                                <option value="Sindhi-Rohiri">Sindhi-Rohiri</option>
                                                <option value="Sindhi-Sahiti">Sindhi-Sahiti</option>
                                                <option value="Sindhi-Sakkhar">Sindhi-Sakkhar</option>
                                                <option value="Sindhi-Sehwani">Sindhi-Sehwani</option>
                                                <option value="Sindhi-Shikarpuri">Sindhi-Shikarpuri</option>
                                                <option value="Sindhi-Thatai">Sindhi-Thatai</option>
                                                <option value="Sirvi / Janwa">Sirvi / Janwa</option>
                                                <option value="Smartha Brahmin">Smartha Brahmin </option>
                                                <option value="Sonar">Sonar</option>
                                                <option value="Sondhia">Sondhia</option>
                                                <option value="Soni">Soni</option>
                                                <option value="Sonkar">Sonkar</option>
                                                <option value="Sourashtra">Sourashtra</option>
                                                <option value="Sozhia Chetty">Sozhia Chetty</option>
                                                <option value="Sozhiya Vellalar">Sozhiya Vellalar</option>
                                                <option value="Sri Vaishnava Brahmin">Sri Vaishnava Brahmin </option>
                                                <option value="Srisayana">Srisayana</option>
                                                <option value="Stanika Brahmin">Stanika Brahmin </option>
                                                <option value="Sugali (Naika)">Sugali (Naika)</option>
                                                <option value="Sunari">Sunari</option>
                                                <option value="Sundhi">Sundhi</option>
                                                <option value="Surya Balija">Surya Balija</option>
                                                <option value="Suthar">Suthar</option>
                                                <option value="Swakula Saali">Swakula Saali</option>
                                                <option value="Swakula Sali">Swakula Sali</option>
                                                <option value="Swarnakar">Swarnakar</option>
                                                <option value="Tamboli">Tamboli</option>
                                                <option value="Tammali">Tammali</option>
                                                <option value="Tanti">Tanti</option>
                                                <option value="Tantubai">Tantubai</option>
                                                <option value="Telaga">Telaga</option>
                                                <option value="Teli">Teli</option>
                                                <option value="Telugupatti">Telugupatti</option>
                                                <option value="Thakkar">Thakkar</option>
                                                <option value="Thakore">Thakore</option>
                                                <option value="Thakur">Thakur</option>
                                                <option value="Thandan">Thandan</option>
                                                <option value="Tharakan">Tharakan</option>
                                                <option value="Thatai Sindhi">Thatai Sindhi </option>
                                                <option value="Thigala">Thigala</option>
                                                <option value="Thiyya">Thiyya</option>
                                                <option value="Thiyya Thandan">Thiyya Thandan</option>
                                                <option value="Thogata Veera Kshatriya">Thogata Veera Kshatriya</option>
                                                <option value="Thogata">Thogata Veerakshathriya</option>
                                                <option value="Thondai Mandala Vellalar">Thondai Mandala Vellalar</option>
                                                <option value="Thota">Thota</option>
                                                <option value="Tili">Tili</option>
                                                <option value="Tiyar/Tiar">Tiyar/Tiar</option>
                                                <option value="Togata">Togata</option>
                                                <option value="Tonk Kshatriya">Tonk Kshatriya</option>
                                                <option value="Turupu Kapu">Turupu Kapu</option>
                                                <option value="Tyagi Brahmin">Tyagi Brahmin </option>
                                                <option value="Ummar / Umre / Bagaria">Ummar / Umre / Bagaria</option>
                                                <option value="Urali Gounder">Urali Gounder</option>
                                                <option value="Urs">Urs</option>
                                                <option value="Vada Balija">Vada Balija</option>
                                                <option value="Vadambar">Vadambar</option>
                                                <option value="Vadar">Vadar</option>
                                                <option value="Vaddera">Vaddera</option>
                                                <option value="Vadugan">Vadugan</option>
                                                <option value="Vaidiki Brahmin">Vaidiki Brahmin </option>
                                                <option value="Vaikhanasa Brahmin">Vaikhanasa Brahmin </option>
                                                <option value="Vaish">Vaish</option>
                                                <option value="Vaishnav">Vaishnav</option>
                                                <option value="Vaishnav Dishaval">Vaishnav Dishaval</option>
                                                <option value="Vaishnav Kapol">Vaishnav Kapol</option>
                                                <option value="Vaishnav Khadyata">Vaishnav Khadyata</option>
                                                <option value="Vaishnav Lad">Vaishnav Lad</option>
                                                <option value="Vaishnav Modh">Vaishnav Modh</option>
                                                <option value="Vaishnav Porvad">Vaishnav Porvad</option>
                                                <option value="Vaishnav Shrimali">Vaishnav Shrimali</option>
                                                <option value="Vaishnav Sorathaiya">Vaishnav Sorathaiya</option>
                                                <option value="Vaishnav Vania">Vaishnav Vania</option>
                                                <option value="Vaishnava">Vaishnava</option>
                                                <option value="Vaishya">Vaishya</option>
                                                <option value="Vaishya Vani">Vaishya Vani</option>
                                                <option value="Valar">Valar</option>
                                                <option value="Valluvan">Valluvan</option>
                                                <option value="Valmiki">Valmiki</option>
                                                <option value="Valsad">Valsad</option>
                                                <option value="Vani">Vani</option>
                                                <option value="Vani / Vaishya">Vani / Vaishya</option>
                                                <option value="Vania">Vania</option>
                                                <option value="Vanika Vyshya">Vanika Vyshya</option>
                                                <option value="Vaniya">Vaniya</option>
                                                <option value="Vaniya Chettiar">Vaniya Chettiar</option>
                                                <option value="Vanjara">Vanjara</option>
                                                <option value="Vanjari">Vanjari</option>
                                                <option value="Vankar">Vankar</option>
                                                <option value="Vannar">Vannar</option>
                                                <option value="Vannia Kula Kshatriyar">Vannia Kula Kshatriyar</option>
                                                <option value="Vanyakulakshatriya">Vanyakulakshatriya</option>
                                                <option value="Variar">Variar</option>
                                                <option value="Varshney">Varshney</option>
                                                <option value="Varshney (Barahseni)">Varshney (Barahseni)</option>
                                                <option value="Veera Saivam">Veera Saivam</option>
                                                <option value="Veerakodi Vellala">Veerakodi Vellala</option>
                                                <option value="Velaan">Velaan</option>
                                                <option value="Velama">Velama</option>
                                                <option value="Velanadu Brahmin">Velanadu Brahmin </option>
                                                <option value="Vellala Pillai">Vellala Pillai</option>
                                                <option value="Vellalar">Vellalar</option>
                                                <option value="Vellan Chettiars">Vellan Chettiars</option>
                                                <option value="Veluthedathu Nair">Veluthedathu Nair</option>
                                                <option value="Vettuva Gounder">Vettuva Gounder</option>
                                                <option value="Vettuvan">Vettuvan</option>
                                                <option value="Vijayvargia">Vijayvargia</option>
                                                <option value="Vilakkithala Nair">Vilakkithala Nair</option>
                                                <option value="Vishwakarma">Vishwakarma</option>
                                                <option value="Viswabrahmin">Viswabrahmin</option>
                                                <option value="Vokkaliga">Vokkaliga</option>
                                                <option value="Vyas Brahmin">Vyas Brahmin </option>
                                                <option value="Vysya">Vysya</option>
                                                <option value="Yadav">Yadav</option>
                                                <option value="Yadava Naidu">Yadava Naidu</option>
                                                <option value="Yellapu">Yellapu</option>
                                                <option value="Others">Others</option>
                                                <option value="0">Don't wish to specify</option>
                                            </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Sub Caste</label>
                                                    <input type="text" class="form-control" name="subcaste" value="<?php echo e($list->subcaste); ?>">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Gotharam</label>
                                                    <input type="text" class="form-control" name="gotharam" value="<?php echo e($list->gotharam); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Dosham</label>
                                                <select type="text" class="form-control" name="dosham" id="dosham" required>
                                                 <?php if($list->dosham!=null): ?>
                                                <option value="<?php echo e($list->dosham); ?>"><?php echo e($list->dosham); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
                                                <option value="Yes">YES</option>
                                                <option value="No">NO</option>
                                            </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="lb">If Dosham Yes</label>
                                                <input type="text" class="form-control" placeholder="type what kind of dosham or leave this " name="dosham_type" value="<?php echo e($list->if_dosham); ?>">
                                                </div>
                                            
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="raasi" class="lb">Star</label>
                                                <select type="text" class="form-control" name="raasi"
                                                id="raasi" required>
                                                <?php if($list->rasi!=null): ?>
                                                <option value="<?php echo e($list->rasi); ?>"><?php echo e($list->rasi); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
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
                                                <?php if($list->star!=null): ?>
                                                <option value="<?php echo e($list->star); ?>"><?php echo e($list->star); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
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
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="birthDate" class="lb">Birth Date</label>
                                                    <input type="date" class="form-control" id="birthDate">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="birthTime" class="lb">Birth Time</label>
                                                    <input type="time" class="form-control" id="birthTime">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="zodiacSign" class="lb">Rasi</label>
                                                    <input type="text" class="form-control" id="zodiacSign" readonly>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                   <label for="nakshatra" class="lb">Star</label>
                                                   <input type="text" class="form-control" id="nakshatra" readonly>
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
                                                <select class="form-select chosen-select" data-placeholder="Select your Profession" name="jobtype">
                                                    <option value="">Select Job Type</option>
                                                  <?php $__currentLoopData = $jobtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->jobtype); ?>"><?php echo e($data->jobtype); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Company name:</label>
                                                <input type="text" class="form-control" placeholder="If you Jobless Type your Previous Company" name="companyname" value="<?php echo e($list->company_name); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Currency Type:</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your currency" name="currency" id="fromCurrency" >
                                                    <?php if($list->currency!=null): ?>
                                                    <option value="<?php echo e($list->currency); ?>"><?php echo e($list->currency); ?></option>
                                                    <?php else: ?>
                                                     <option value="">Select currency...</option>
                                                    <?php endif; ?>
                                                    
                                                    
                                                    
                                                  </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Salary:</label>
                                                    <input type="text" class="form-control" placeholder="Type Annual Income " name="salary" value="<?php echo e($list->salary); ?>">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Job Occuption:</label>
                                                    <input type="text" class="form-control" name="joboccu" value="<?php echo e($list->joboccu); ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="education" class="form-label">Highest Education</label>
                                            <select type="text" class="form-control" name="education" id="education"
                                                required>
                                                    <option value="">Select Education</option>
                                                    <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->education); ?>"><?php echo e($data->education); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                <select class="form-select chosen-select" data-placeholder="Select your Family Status" name="family_status">
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $familystatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->familystatus); ?>"><?php echo e($data->familystatus); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Family Type</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Family Type" name="family_type">
                                                    
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $familytype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->familytype); ?>"><?php echo e($data->familytype); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                 <label class="lb">Family Values</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Family Values" name="family_value">
                                                    
                                                    <option value="">Select</option>
                                                     <?php $__currentLoopData = $familyvalue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->familyvalue); ?>"><?php echo e($data->familyvalue); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                                  </div>
                                                  <div class="col-md-6 form-group">
                                                <label class="lb">Any Disability:</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="physically_abled">
                                                    <?php if($list->disability!=null): ?>
                                                    <option value="<?php echo e($list->disability); ?>"><?php echo e($list->disability); ?></option>
                                                    <?php else: ?>
                                                    <option value="">Select</option>
                                                    <?php endif; ?>
                                                    <option value="none">None</option>
                                                    <option value="physically_abled">Physically Changed</option>
                                                    
                                                  </select>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Father's Name:</label>
                                                    <input type="text" class="form-control" name="fname" value="<?php echo e($list->father_name); ?>">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Mother's Name:</label>
                                                    <input type="text" class="form-control" name="mname" value="<?php echo e($list->mother_name); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Father's Status</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="father_status">
                                            
                                                <option value="">Select</option>
                                                <?php $__currentLoopData = $parentalstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->parentalstatus); ?>"><?php echo e($data->parentalstatus); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                  </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Mother's Status:</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="mother_status">
                                               
                                                <option value="">Select</option>
                                                <?php $__currentLoopData = $parentalstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->parentalstatus); ?>"><?php echo e($data->parentalstatus); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Brothers</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="brothers" id="countBrothers" onchange="updateBrothersMarriedOptions()">
                                                <?php if($list->brothers!=null): ?>
                                                <option value="<?php echo e($list->brothers); ?>"><?php echo e($list->brothers); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
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
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="sisters" id="countSisters" onchange="updateSistersMarriedOptions()">
                                                <?php if($list->sisters!=null): ?>
                                                <option value="<?php echo e($list->sisters); ?>"><?php echo e($list->sisters); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
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
                                                    <?php if($list->bmarried!=null): ?>
                                                    <option value="<?php echo e($list->bmarried); ?>"><?php echo e($list->bmarried); ?></option>
                                                    <?php else: ?>
                                                    <option value="">Select</option>
                                                    <?php endif; ?>
                                                
                                                    
                                                  </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Sisters Married</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="smarried" id="marriedSisters">
                                                    <?php if($list->smarried!=null): ?>
                                                    <option value="<?php echo e($list->smarried); ?>"><?php echo e($list->smarried); ?></option>
                                                    <?php else: ?>
                                                    <option value="">Select</option>
                                                    <?php endif; ?>
                                                
                                                    
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb" for="state">State</label>
                                                <select class="form-select chosen-select" id="state" name="state" onchange="filterDistricts()">
                                                    <?php if($list->state!=null): ?>
                                                    <option value="<?php echo e($list->state); ?>"><?php echo e($list->state); ?></option>
                                                    <?php else: ?>
                                                    <option value="">-- Select State --</option>
                                                    <?php endif; ?>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb" for="district">District</label>
                                                <select class="form-select chosen-select" id="district" name="district" onchange="filterCities()">
                                                    <?php if($list->district!=null): ?>
                                                    <option value="<?php echo e($list->district); ?>"><?php echo e($list->district); ?></option>
                                                    <?php else: ?>
                                                    <option value="">-- Select District --</option>
                                                    <?php endif; ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb" for="city">City:</label>
                                                <select class="form-select chosen-select" id="city" name="city" onchange="filterPincodes()">
                                                    <?php if($list->city!=null): ?>
                                                    <option value="<?php echo e($list->city); ?>"><?php echo e($list->city); ?></option>
                                                    <?php else: ?>
                                                    <option value="">-- Select City --</option>
                                                    <?php endif; ?>
                                                </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb" id="pincode">Pincode</label>
                                                    <input type="text" class="form-control" name="pincode" value="<?php echo e($list->pincode); ?>">
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
                                                    <input type="text" class="form-control" name="insta" value="<?php echo e($list->instagram); ?>">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Facebook:</label>
                                                    <input type="text" class="form-control" name="facebook" value="<?php echo e($list->facebook); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Youtube:</label>
                                                    <input type="text" class="form-control" name="youtube" value="<?php echo e($list->youtube); ?>">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Linkedin:</label>
                                                    <input type="text" class="form-control" name="linkedln" value="<?php echo e($list->linkedln); ?>">
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
                                                <select class="form-select chosen-select" data-placeholder="Select" name="eating">
                                                
                                                <option value="">Select</option>
                                                 <?php $__currentLoopData = $eatinghabbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <option value="<?php echo e($data->eatinghabbit); ?>"><?php echo e($data->eatinghabbit); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Drinks Habit</label>
                                                <select class="form-select chosen-select" data-placeholder="Select" name="drinking">
                                                <?php if($list->drinkshabit!=null): ?>
                                                <option value="<?php echo e($list->drinkshabit); ?>"><?php echo e($list->drinkshabit); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
                                                <option value="No">No</option>
                                                <option value="Drinks Socially">Drinks Socially</option>
                                                <option value="Yes">Yes</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Smoking Habit</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="smoking">
                                                <?php if($list->smokinghabit!=null): ?>
                                                <option value="<?php echo e($list->smokinghabit); ?>"><?php echo e($list->smokinghabit); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
                                                <option value="No">No</option>
                                                <option value="Occasionally">Occasionally</option>
                                                <option value="Yes">Yes</option>
                                                 </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Hobbies</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="hobbies">
                                                <?php if($list->hobbies!=null): ?>
                                                <option value="<?php echo e($list->hobbies); ?>"><?php echo e($list->hobbies); ?></option>
                                                <?php else: ?>
                                                <option value="">Select</option>
                                                <?php endif; ?>
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
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <!--END PROFILE HOBBY INFO-->
                                        <button type="submit" onclick=respond();" class="btn btn-primary">Submit</button>
                                        <?php echo csrf_field(); ?>
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

    function respond()
    {
  var msg =    "Succeccfully your Record created";
    alert(msg);
    console.log('hi');
    
    
    });
    
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

</script>
   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('users/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/users/profile_details.blade.php ENDPATH**/ ?>