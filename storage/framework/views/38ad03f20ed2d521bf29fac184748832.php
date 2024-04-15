<?php $__env->startSection('container'); ?>

<body>
<section>
        <div class="login">
            <div class="container">
                    <div class="inn">
                        <div class="lhs">
                            <div class="tit">
                                <h2>Now <b>Find your <?php echo e($real); ?> partner</b> Easy and fast.</h2>
                            </div>
                            <div class="im">
                                <img src="<?php echo e(asset('users_assets/images/login-couple.png')); ?>" alt="">
                            </div>
                            <div class="log-bg">&nbsp;</div>
                        </div>
                        <div class="rhs">
                                <div class="form-tit">
                                    
                                    <h1>Help me to Write</h1>
                                    
                                    <div class="form-login">
                                    <form action="<?php echo e(route('about_self.about_self_process')); ?>" method="post" >
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="text" class="form-control" value="<?php echo e($list->rand_id); ?>" name="self_id" readonly>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="help">
                                        <textarea class="help_me_textbox" name="userData" rows="8"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                        <div class="text-count"><b>0</b> Characters</div> 
                                        </div>
                                        <div class="col-md-7">
                                            <div class="help-me-text" style="cursor: pointer;"><span>help to write about your <?php echo e($real); ?></span></div>
                                        </div>
                                        </div>                    
                                        <button type="submit" class="btn btn-primary">Continue</button>
                                        
                                        <?php echo csrf_field(); ?>
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

            var rel = "<?php echo e($real); ?>";
            var sel = "<?php echo e($sel); ?>";
            var edu = "<?php echo e($edu); ?>";
            var occ = "<?php echo e($occ); ?>";
            var fstat = "<?php echo e($fstat); ?>";
            var ftype = "<?php echo e($ftype); ?>";
            var fval = "<?php echo e($fval); ?>";
            var city = "<?php echo e($city); ?>";
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
   
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/us59y3x253l9/public_html/tamilthirumanam.com/resources/views/users/about_self.blade.php ENDPATH**/ ?>