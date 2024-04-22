
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Tamil Thirumanam | Dashboard'); ?>
<style type="text/css">

 </style>
<div class="content">
	<div class="container-fluid">
		<h4 class="page-title" id="ddd"></h4>
		<div class="row table-content">
			<div class="col-md-10">
				<div class="flash-section">
				<?php if( Session::has( 'success' )): ?>
					     <div class="flash-message"><?php echo e(Session::get( 'success' )); ?></div>
				<?php endif; ?>
				</div>
				<div class="card">
					<div class="card-header">
						<div class="card-title"><a href="<?php echo e(url('admin/interest')); ?>"> Interest Info </a>
						<?php if($interest->status==0): ?>
														<p class="status-lable bg-warning text-light">Pending</p>
													<?php elseif($interest->status==1): ?>
										   				<p class="status-lable bg-dark text-light">Deleted</p>
													<?php elseif($interest->status==2): ?>
										   				<p class="status-lable bg-success text-light">Accepted</p>
													<?php elseif($interest->status==3): ?>
										   				<p class="status-lable bg-danger text-light">Rejected</p>
													<?php endif; ?></div>
						
					</div>
					<div class="card-body">
						<div class="row">
								<div class="col-md-6">
									<div class="card mb-3">
										<div class="card-header">
											<h5 class="card-title mb-0">Interest From</h5>	
										</div>
										<div class="card-body text-center">
											<img src="<?php echo e(asset('public/images/uploads')); ?>/<?php echo e(json_decode($interest->getUserImg->images)[0]); ?>" alt="Christina Mason" class="img-fluid mb-2" width="128" height="128" />
											<h5 class="card-title mb-0"><?php echo e($interest->getUser->name); ?></h5>
											<div class="text-muted mb-2"><?php echo e($interest->getProfile->joboccu); ?></div>
											<div>
												<a class="btn btn-primary btn-sm" href="#">View Profile</a>
											</div>

											
										</div>
										
										
										<hr class="my-0" />
										<div class="card-body">
											<h5 class="h6 card-title">About</h5>
											<ul class="list-unstyled mb-0">
												<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <b><?php echo e($interest->getProfile->city); ?></b></li>

												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <b><?php echo e($interest->getProfile->company_name); ?></b></li>
												<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <b><?php echo e($interest->getProfile->district); ?>,<?php echo e($interest->getProfile->state); ?></b></li>
												<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Age <b><?php echo e($interest->getProfile->age); ?></b></li>
											</ul>
										</div>
										<hr class="my-0" />
										<div class="card-body">
											<h5 class="h6 card-title">Social Media</h5>
											<ul class="list-unstyled mb-0">
												<?php if($interest->getProfile->youtube): ?>
												<li class="mb-1"><a href="<?php echo e($interest->getProfile->youtube); ?>">YouTube</a></li>
												<?php endif; ?>
												<?php if($interest->getProfile->facebook): ?>
												<li class="mb-1"><a href="<?php echo e($interest->getProfile->facebook); ?>">Facebook</a></li>
												<?php endif; ?>	
												<?php if($interest->getProfile->instagram): ?>
												<li class="mb-1"><a href="<?php echo e($interest->getProfile->instagram); ?>">Instagram</a></li>
												<?php endif; ?>
												<?php if($interest->getProfile->linkedin): ?>
												<li class="mb-1"><a href="<?php echo e($interest->getProfile->linkedin); ?>">LinkedIn</a></li>
												<?php endif; ?>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card mb-3">
										<div class="card-header">
											<h5 class="card-title mb-0">Interest To</h5>
										</div>
										<div class="card-body text-center">
											<img src="<?php echo e(asset('public/images/uploads')); ?>/<?php echo e(json_decode($interest->TogetUserImg->images)[0]); ?>" alt="Christina Mason" class="img-fluid mb-2" width="128" height="128" />
											<h5 class="card-title mb-0"><?php echo e($interest->interestOn->fullname); ?></h5>
											<div class="text-muted mb-2"><?php echo e($interest->interestOn->joboccu); ?></div>
											<div>
												<a class="btn btn-primary btn-sm" href="#">View Profile</a>
											</div>

											
										</div>
										
										
										<hr class="my-0" />
										<div class="card-body">
											<h5 class="h6 card-title">About</h5>
											<ul class="list-unstyled mb-0">
												<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <b><?php echo e($interest->interestOn->city); ?></b></li>

												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <b><?php echo e($interest->interestOn->company_name); ?></b></li>
												<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <b><?php echo e($interest->interestOn->district); ?>,<?php echo e($interest->interestOn->state); ?></b></li>
												<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Age <b><?php echo e($interest->interestOn->age); ?></b></li>
												
											</ul>
										</div>
										<hr class="my-0" />
										<div class="card-body">
											<h5 class="h6 card-title">Social Media</h5>
											<ul class="list-unstyled mb-0">
												<?php if($interest->interestOn->youtube): ?>
												<li class="mb-1"><a href="<?php echo e($interest->getProfile->youtube); ?>">YouTube</a></li>
												<?php endif; ?>
												<?php if($interest->interestOn->facebook): ?>
												<li class="mb-1"><a href="<?php echo e($interest->getProfile->facebook); ?>">Facebook</a></li>
												<?php endif; ?>	
												<?php if($interest->interestOn->instagram): ?>
												<li class="mb-1"><a href="<?php echo e($interest->getProfile->instagram); ?>">Instagram</a></li>
												<?php endif; ?>
												<?php if($interest->interestOn->linkedin): ?>
												<li class="mb-1"><a href="<?php echo e($interest->getProfile->linkedin); ?>">LinkedIn</a></li>
												<?php endif; ?>
											</ul>
										</div>
									</div>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			
<?php $__env->stopSection(); ?>

<?php echo $__env->make('superadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/superadmin/interest/view.blade.php ENDPATH**/ ?>