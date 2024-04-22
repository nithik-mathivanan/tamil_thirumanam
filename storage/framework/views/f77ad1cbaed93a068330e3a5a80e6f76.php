<?php $__env->startSection('container'); ?>
<link rel="stylesheet" href="<?php echo e(asset('users_assets/country_code/style.css')); ?>">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js'></script>


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
                                <img src="<?php echo e(asset('users_assets/images/login-couple.png')); ?>" alt="">
                            </div>
                            <div class="log-bg">&nbsp;</div>
                        </div>
                        <div class="rhs">
                            
                            <div>
                                <div class="form-tit">
                                    <h4>Start for free</h4>
                                    <h1>Sign up to TamilThirumanam</h1>
                                    <p>Already a member? <a href="<?php echo e(url('/user')); ?>">Login</a></p>
                                </div>
                                <div class="form-login">
                                    <?php if(session()->has('message')): ?>
                                    <div class="alert alert-success">
                                                <?php echo e(session('message')); ?>

                                                </div>
                                    <div class="row">
                                    <?php endif; ?>

                                    <form action="<?php echo e(route('signup.manage_signup_process')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label class="lb">Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter your full name"
                                                name="name" value="<?php echo e(old('name')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Profile Created by:</label>
                                            <select class="form-select chosen-select" data-placeholder="Select Your Profile" name="mprofile_by" id="mprofile_by"required> 
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($profile->id); ?>"><?php echo e($profile->created_by); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Email:<i class="text-danger" id="email-error"></i></label>
                                           
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email"  name="email" value="<?php echo e(old('email')); ?>">
                                        </div>

                                       
                                        <div class="form-group">
                                            <input type="hidden" value="+91" name="country_code" id="country-code">
                                            <label class="lb">Phone Number</label>
                                            <input type="number" id="mobile_code" class="form-control error" placeholder="Phone Number" name="phone" value="<?php echo e(old('phone')); ?>">
                     
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="lb">Password:<i class="text-danger" id="pwd-error"></i></label>
                                            <input type="password" class="form-control error" id="pwd"
                                                placeholder="Enter password" name="password"  value="<?php echo e(old('password')); ?>">
                                        </div>
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="agree" required> Creating
                                                an account means you’re okay with our <a href="#!">Terms of Service</a>,
                                                Privacy Policy, and our default Notification Settings.
                                            </label>
                                        </div>
                                        <?php if($errors->any()): ?>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="error-msg">
                                                    <?php echo e($error); ?>

                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
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
<script type="text/javascript">
    function validateEmail(email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test( email );
    }
    $(document).ready(function(){
        $('#pwd').change(function(){
            var pwd = $(this).val();
            const regex = /^(?=.*[a-zA-Z0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
            const isValid = regex.test(pwd); // Change the string as needed
           if(isValid==false){
                $('#pwd-error').html("Password must be in alpha numeric, atleast 1 special character & minimum 8 letters");
                $(this).val('');  
            }
            else{
                 $('#pwd-error').html("");  
            }
        });

        $('#email').change(function(){
            var email = $(this).val();
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
           if(!validateEmail(email)){
                $('#email-error').html('Invalid Email Address');
                $(this).val('');
            }else{
                $('#email-error').html('');
            }
        });
    });
</script>

<script  src="<?php echo e(asset('users_assets/country_code/script.js')); ?>"></script>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/users/signup.blade.php ENDPATH**/ ?>