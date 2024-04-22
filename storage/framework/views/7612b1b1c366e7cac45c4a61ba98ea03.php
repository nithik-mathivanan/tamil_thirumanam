
<?php $__env->startSection('container'); ?>
    <section>
        <div class="login pro-edit-update">
            <div class="container">
                <div class="row">
                    <div class="inn">
                       
                        <div class="newrhs">

                            <br>
                            <div class="form-login">
                                    <form action="<?php echo e(route('preferred_details.preferred_details_process')); ?>" method="post" enctype="multipart/form-data">
                                        <?php if(session()->has('success')): ?>
                                            <div class="alert alert-success font-weight-bold text-dark">
                                                <?php echo e(session()->get('success')); ?>

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
                                        <?php endif; ?>
                                        <!--PROFILE BIO-->
                                        <div class="form-group" style="display: none;">
                                            <label class="lb">Your Matrimony ID:</label>
                                           
                                            <input type="text" class="form-control" name="pcustomer_id" value="<?php echo e(Auth::user()->rand_id); ?>" readonly>

                                        </div>
                                         <div class="container">
                                            
                                            <h5>Exsiting Photos</h5>
                                            <div id="exs-image_show">
                                              
                                                   
                                                        <?php $__currentLoopData = json_decode($photos->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                       
                                                        <div class="ml-2">
                                                              <img src="<?php echo e(asset('public/images/uploads')); ?>/<?php echo e($photo); ?>" height="200px">
                                                        </div>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 
                                           
                                                
                                            </div>
                                        </div>
                                        <div class="form-tit">
                                                <h4>Add Photos</h4>
                                                <h1>Atleast Add 3 Images</h1>
                                        </div>
                                       
                                        <div class="container">
                                            <div id="image_show">
                                                <div class="pro-gal-imag">
                                                    <div class="img-wrapper">
                                                    
                                                    <div class="img-overlay"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>  
                                                
                                            </div>
                                             <p id="num-of-files" style="text-align: center;">No Files Choosen</p>
                                            <input class="file-upload" type="file" id="file-input" name="images[]" accept="image/*" onchange="previewimage()" multiple >
                                            <label class="image-label" for="file-input">
                                            <i class="fa fa-upload"></i> &nbsp; Choose Photos
                                            </label>
                                           
                                          
                                        </div>
                                        
                                        
                                        <div class="pr-bio-c pr-bio-gal" id="gallery">
                                        </div>
                                        
                                    
                                        
                                        <button type="submit"  class="btn btn-primary">Submit</button>
                                        <?php echo csrf_field(); ?>
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
    
   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('users/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/users/edit_photo.blade.php ENDPATH**/ ?>