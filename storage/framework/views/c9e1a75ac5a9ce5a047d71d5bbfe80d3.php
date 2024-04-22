<?php $__env->startSection('container'); ?>
 
<body>
<section>
        <div class="login pro-edit-update">
            <div class="container">
                <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                            </div>
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
                                
                                <h2><br><br><br>Now in<br><br><b>Partner info page</b> 4 more sections to go...</h2>
                                
                            </div>
                            <div class="log-bg">&nbsp;</div>
                        </div>
                        
                        <div class="rhs">
                            
                            
                                <div class="form-tit">
                                    <h4>Find Your Partner</h4>
                                    <h1>Partner Preferences</h1>
                                    
                                </div>
                                <div class="form-login">
                                    <form action="<?php echo e(route('match_making.match_making_process')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="row" style="display:none;">
                                            <div class="col-md-6 form-group">
                                                <label class="lb">ID:</label>
                                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <input type="text" class="form-control" 
                                                    name="paaid" value="<?php echo e($list->rand_id); ?>" readonly>
                                                <input type="text" class="form-control" 
                                                    name="mgender" value="<?php echo e($list->gender); ?>" readonly>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Caste:</label>
                                                <select type="text" class="form-control" name="mcaste" id="caste" required>
                                                <option value="">Select</option>
                                                  <?php $__currentLoopData = $community; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->community); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Sub Caste:</label>
                                                <input type="text" class="form-control" id="subcaste"
                                                    placeholder="Sub Caste" name="msubcaste" >
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Gotharam:</label>
                                                <input type="text" class="form-control" id="gotharam"
                                                    placeholder="Gotharam" name="mgotharam" maxlength="10">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Dosham:</label>
                                                <input type="text" class="form-control" id="dosham"
                                                    placeholder="Dosham" name="mdosham">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                            <label class="lb">Education:</label>
                                            <select type="text" class="form-control" name="meducation" id="education"
                                                required>
                                                <option value="">Select Education</option>
                                                    <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->education); ?>"><?php echo e($data->education); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Age:</label>
                                                <select class="form-select chosen-select" name="mage" required>
                                                    <option value="">Select Age</option>
                                                    <option value="1">18 to 25</option>
                                                    <option value="2">26 to 33</option>
                                                    <option value="3">34 to 40</option>
                                                    <option value="4">40 to 50</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Job:</label>
                                                 <select class="form-select chosen-select" data-placeholder="Select your Profession" name="mjob">
                                                    <option value="">Select Job</option>
                                                   <?php $__currentLoopData = $jobtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->jobtype); ?>"><?php echo e($data->jobtype); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Salary:</label>
                                                <input type="number" class="form-control" id="salary"
                                                    placeholder="Salary" name="msalary">
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Eating Habit</label>
                                                <select class="form-select chosen-select" data-placeholder="Select" name="meating">
                                                  <option value="">Select</option>
                                                 <?php $__currentLoopData = $eatinghabbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <option value="<?php echo e($data->eatinghabbit); ?>"><?php echo e($data->eatinghabbit); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Drinks Habit</label>
                                                <select class="form-select chosen-select" data-placeholder="Select" name="mdrinking">
                                                <option value="">Select</option>
                                                 <option value="No">No</option>
                                                <option value="Drinks Socially">Drinks Socially</option>
                                                <option value="Yes">Yes</option>
                                                </select>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Smoking Habit</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="msmoking">
                                                 <option value="">Select</option>
                                                 <option value="No">No</option>
                                                <option value="Occasionally">Occasionally</option>
                                                <option value="Yes">Yes</option>
                                                 </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Hobbies</label>
                                                <select class="form-select chosen-select" data-placeholder="Select your Hobbies" name="mhobbies">
                                                <option>Select your Hobbies</option>
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
                                            <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="lb">Star</label>
                                                <select type="text" class="form-control" name="mstar"
                                                id="star" required>
                                                <option value="">Select</option>
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
                                            <div class="col-md-6 form-group">
                                               <label class="lb">Raasi</label>
                                                <select type="text" class="form-control" name="mraasi"
                                                id="raasi" required>
                                                <option value="">Select</option>
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
                                        </div>
                                        <button type="submit" class="btn btn-primary">Find Matches</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

               
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('users/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/users/match_making.blade.php ENDPATH**/ ?>