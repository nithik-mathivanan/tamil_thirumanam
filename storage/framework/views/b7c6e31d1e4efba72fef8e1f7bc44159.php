
<?php $__env->startSection('container1'); ?>
    <section>      
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-8 db-sec-com">
                <h2 class="db-tit">Profiles status</h2>
                <div class="db-profile">
                    <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $imagedata = json_decode($list->images, true);
                    $firstimage = $imagedata[0];
                    ?>
                    <div class="img">
                        <img src="<?php echo e(asset('/images/uploads/'.$firstimage)); ?>" loading="lazy" alt="">
                    </div>
                    
                    <div class="edit">
                        <a href="<?php echo e(url('user/profile_details/'.$list->customer_id)); ?>" class="cta-dark">Edit profile</a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                <h2 class="db-tit">Profiles status</h2>
                <div class="db-pro-stat">
                    <h6>Profile completion</h6>
                    <div class="dropdown">
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">Edid profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">View profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Profile visibility settings</a>
                            </li>
                        </ul>
                    </div>
                    <div class="db-pro-pgog">
                        <span>
                            <b class="count">90</b>%
                        </span>
                    </div>
                    <ul class="pro-stat-ic">
                        <li>
                            <span>
                                <i class="fa fa-heart-o like" aria-hidden="true"></i>
                                <b>12</b>Likes
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-eye view" aria-hidden="true"></i>
                                <b>12</b>Views
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-handshake-o inte" aria-hidden="true"></i>
                                <b>12</b>Interests
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-hand-pointer-o clic" aria-hidden="true"></i>
                                <b>12</b>Clicks
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>       
    </section>
   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('users/sidebarlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/us59y3x253l9/public_html/tamilthirumanam.com/resources/views/users/profile_view.blade.php ENDPATH**/ ?>