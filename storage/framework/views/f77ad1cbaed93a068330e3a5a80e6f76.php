<?php $__env->startSection('container'); ?>
 
<body>
<section>
        <div class="login">
            <div class="container">
                <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                            </div>
                <div class="row">
                <?php endif; ?>

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
                                    <form action="<?php echo e(route('signup.manage_signup_process')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label class="lb">Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter your full name"
                                                name="name">
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Profile Created by:</label>
                                            <select class="form-select chosen-select" data-placeholder="Select Your Profile" name="mprofile_by" id="mprofile_by"required> 
                                            <option value="">Select</option>
                                            <option value="MySelf">MySelf</option>
                                            <option value="Parent">Parent</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Sister">Sister</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Email:</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Phone:</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Enter phone number" name="phone" maxlength="10">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('users/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/users/signup.blade.php ENDPATH**/ ?>