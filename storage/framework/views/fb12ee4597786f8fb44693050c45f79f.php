<?php $__env->startSection('container'); ?>

<section>
<div class="db">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-3">
				<div class="db-nav">
                        <div class="db-nav-pro">
                        <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $firstimage="";
                        if($list->images){
                        $imagedata = json_decode($list->images, true);
                        $firstimage = ($imagedata[0])?$imagedata[0]:"";
                        }
                        ?>
                        <img src="<?php echo e(asset('public/images/uploads/'.$firstimage)); ?>" class="img-fluid" alt="">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                          <div class="db-nav-list">
                            <?php if(Auth::user()->id): ?>
					        <ul>
					            <li><a href="<?php echo e(url('user/dashboard')); ?>" class="act"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
					            <li><a href="<?php echo e(url('user/profile_view')); ?>"><i class="fa fa-male" aria-hidden="true"></i>Profile</a></li>
					            <li><a href="<?php echo e(url('user/profile_interests')); ?>"><i class="fa fa-handshake-o" aria-hidden="true"></i>Interests</a></li>
					            <li><a href="<?php echo e(url('user/chat_lists')); ?>"><i class="fa fa-commenting-o" aria-hidden="true"></i>Chat list</a></li>
					            <li><a href="<?php echo e(url('user/profile_plan')); ?>"><i class="fa fa-money" aria-hidden="true"></i>Plan</a></li>
					            <li><a href="<?php echo e(url('user/profile_setting')); ?>"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a></li>
					            <li><a href="<?php echo e(url('user/logout')); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
					        </ul>
                            <?php endif; ?>
					    </div>
				</div>
			</div>
			<div class="col-md-8 col-lg-9">
				<?php $__env->startSection('container1'); ?>
				<?php echo $__env->yieldSection(); ?>
            </div>
		</div>
     </div>
 </div>
 </section>
 <script>
     $('.slider').slick({
        infinite: false,
        slidesToShow: 5,
        arrows: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: false
            }
        }]

    });

    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

var xValues = "0";
    var yValues = "50";

    new Chart("Chart_leads", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "#f1bb51",
                borderColor: "#fae9c8",
                data: yValues
            }]
        },
        options: {
            responsive: true,
            legend: {display: false},
            scales: {
                yAxes: [{ticks: {min: 0, max: 100}}]
            }
        }
    });
    </script>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/users/sidebarlayout.blade.php ENDPATH**/ ?>