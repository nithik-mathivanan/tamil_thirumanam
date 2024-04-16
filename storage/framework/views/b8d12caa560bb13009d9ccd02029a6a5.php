<?php $__env->startSection('container'); ?>
 
<body>
<section>
        <div class="login">
            <div class="container">
                <?php if(session()->has('message')!=null): ?>
                <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                            </div>
                <div class="row">
                <?php else: ?>
                <?php endif; ?>

                    <div class="inn">
                        <div class="lhs">
                            <div class="tit">
                                <h2>Now <b>Find <br> your life partner</b> Easy and fast.</h2>
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
                                    <h1>Login in to TamilThirumanam</h1>
                                    <p>Not a member? <a href="<?php echo e(url('/user/signup')); ?>">Sign up now</a></p>
                                </div>
                                <div class="form-login">
                                    <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label class="lb">Email:</label>
                                            <input type="email" class="form-control"  type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="lb">Password:</label>
                                            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                        </div>
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="agree"> Remember
                                                me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Log in</button>
                                        <?php if(session()->has('error')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo e(session('error')); ?>    
                                        </div>
                                        <?php endif; ?>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('users/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/users/login.blade.php ENDPATH**/ ?>