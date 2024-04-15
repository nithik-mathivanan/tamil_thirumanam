
<?php $__env->startSection('container1'); ?>


<div class="alert alert-success">
<?php echo e(session('message')); ?>

</div>

<div class="col-md-12 db-sec-com db-new-pro-main">
    <h2 class="db-tit">New Profiles Matches</h2>
    <?php $__currentLoopData = $matching_profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <ul class="slider">
        <?php $__currentLoopData = $userdetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($list1->gender!=$list->gender && $list1->caste==$list->caste): ?>
        <li>
            <div class="db-new-pro">
                    
                        <?php
                        $imagedata = json_decode($list->images, true);
                        $firstimage = ($imagedata[0])?$imagedata[0]:"";
                        ?>
                <img src="<?php echo e(asset('/images/uploads/'.$firstimage)); ?>" alt="" class="profile">
                <div>
                    <h5><?php echo e($list->fullname); ?></h5>
                    <span class="city"><?php echo e($list->city); ?></span>
                    <span class="age"><?php echo e($list->age); ?> Years old</span>
                </div>
                <div class="pro-ave" title="User currently available">
                    <span class="pro-ave-yes"></span>
                </div>
                <a href="<?php echo e(url('user/user_profile_detail')); ?>" class="fclick" target="_blank">&nbsp;</a>
               
            </div>
        </li>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="row">
    <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
        <h2 class="db-tit">Profiles status</h2>
        <div class="db-pro-stat">
            <h6>Profile completion</h6>
            
            <div class="db-pro-pgog">
                <span><b class="count">90</b>%</span>
            </div>
            <ul class="pro-stat-ic">
                <li><span><i class="fa fa-heart-o like" aria-hidden="true"></i><b>12</b>Likes</span></li>
                <li><span><i class="fa fa-eye view" aria-hidden="true"></i><b>12</b>Views</span></li>
                <li><span><i class="fa fa-handshake-o inte" aria-hidden="true"></i><b>12</b>Interests</span></li>
                <li><span><i class="fa fa-hand-pointer-o clic" aria-hidden="true"></i><b>12</b>Clicks</span></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
        <h2 class="db-tit">Plan details</h2>
        <div class="db-pro-stat">
            <h6 class="tit-top-curv">Standard plan</h6>
            
            <div class="db-plan-card">
                <img src="<?php echo e(asset('users_assets/images/icon/plan.png')); ?>" alt="">
            </div>
            <div class="db-plan-detil">
                <ul>
                    <li>Plan name: <strong>Standard</strong></li>
                    <li>Validity: <strong>6 Months</strong></li>
                    <li>Valid till <strong>24 June 2024</strong></li>
                    <li><a href="#" class="cta-3">Upgrade now</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-4 db-sec-com">
        <h2 class="db-tit">Recent chat list</h2>
            <div class="db-pro-stat">
                <div class="db-inte-prof-list db-inte-prof-chat">
                    <ul>
                        <li>
                            <div class="db-int-pro-1"> <img src="<?php echo e(asset('users_assets/images/profiles/men6.jpg')); ?>" alt=""> </div>
                            <div class="db-int-pro-2">
                                <h5>Julia Ann</h5> <span>Illunois, United States</span> </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12 db-sec-com">
            <h2 class="db-tit">Interest request</h2>
                <div class="db-pro-stat">
                    <div class="db-inte-main">
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" data-bs-toggle="tab" href="#home">New requests</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#menu1">Accept request</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#menu2">Denay request</a>
                            </li>
                          </ul>
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                              <div class="db-inte-prof-list">
                                    <ul>
                                        <li>
                                            <div class="db-int-pro-1"> <img src="<?php echo e(asset('users_assets/images/profiles/men1.jpg')); ?>" alt=""> <span class="badge bg-primary user-pla-pat">Platinum user</span></div>
                                            <div class="db-int-pro-2">
                                                <h5>John Smith</h5> 
                                                <ol class="poi">
                                                    <li>City: <strong>Illunois</strong></li>
                                                    <li>Age: <strong>21</strong></li>
                                                    <li>Height: <strong>5.7</strong></li>
                                                    <li>Job: <strong>Working</strong></li>
                                                </ol>
                                                <ol class="poi poi-date">
                                                    <li>Request on: 10:30 AM, 18 August 2024</li>
                                                </ol>
                                                <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                                            </div>
                                            <div class="db-int-pro-3">
                                                <button type="button" class="btn btn-success btn-sm">Accept</button>
                                                <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <div class="db-inte-prof-list">
                                    <ul>
                                        <li>
                                            <div class="db-int-pro-1"> <img src="<?php echo e(asset('users_assets/images/profiles/men5.jpg')); ?>" alt=""> </div>
                                            <div class="db-int-pro-2">
                                                <h5>John Smith</h5> 
                                                <ol class="poi">
                                                    <li>City: <strong>Illunois</strong></li>
                                                    <li>Age: <strong>21</strong></li>
                                                    <li>Height: <strong>5.7</strong></li>
                                                    <li>Job: <strong>Working</strong></li>
                                                </ol>
                                                <ol class="poi poi-date">
                                                    <li>Request on: 10:30 AM, 18 August 2024</li>
                                                    <li>Accept on: 3:000 PM, 21 August 2024</li>
                                                </ol>
                                                <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                                            </div>
                                            <div class="db-int-pro-3">
                                                <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <div class="db-inte-prof-list">
                                    <ul>
                                        <li>
                                            <div class="db-int-pro-1"> <img src="<?php echo e(asset('users_assets/images/profiles/men1.jpg')); ?>" alt=""> </div>
                                            <div class="db-int-pro-2">
                                                <h5>John Smith</h5> 
                                                <ol class="poi">
                                                    <li>City: <strong>Illunois</strong></li>
                                                    <li>Age: <strong>21</strong></li>
                                                    <li>Height: <strong>5.7</strong></li>
                                                    <li>Job: <strong>Working</strong></li>
                                                </ol>
                                                <ol class="poi poi-date">
                                                    <li>Request on: 10:30 AM, 18 August 2024</li>
                                                    <li>Denay on: 3:000 PM, 21 August 2024</li>
                                                </ol>
                                                <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                                            </div>
                                            <div class="db-int-pro-3">
                                                <button type="button" class="btn btn-success btn-sm">Accept</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('users/sidebarlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/us59y3x253l9/public_html/tamilthirumanam.com/resources/views/users/dashboard.blade.php ENDPATH**/ ?>