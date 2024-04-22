<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Tamil Thirumanam | Dashboard'); ?>
	<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Forms</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card" style="width:60%">
									<div class="card-header">
										<div class="card-title">EDIT RELIGION</div>
									</div>
									 <?php if($errors->any()): ?>
                                 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <div class="text-danger font-weight-bold" style="background-color:#dfb0b0;padding: 8px;border-radius: 2px">         <?php echo e($error); ?>

                                     </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <?php if(session()->has('message')): ?>
                                    <div class="alert alert-success font-weight-bold text-dark">
                                        <?php echo e(session()->get('message')); ?>

                                    </div>
                                <?php endif; ?>
									<form action="<?php echo e(route('update-religion')); ?>"   method="post" enctype="multipart/form-data" >
                                            <?php echo e(csrf_field()); ?>

									<div class="card-body">
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo e($religion->id); ?>">
											<label >RELIGION NAME</label>
											<input type="religion" required class="form-control" value="<?php echo e($religion->religion); ?>" name="religion" id="religion" placeholder="Enter Religion">
											
										</div>
										
										<div class="card-action">
											<button type="submit" class="btn btn-success">Submit</button>
											
										</div>
									</div>
								  </form>	
								</div>
								
							</div>
						</div>
					</div>
				</div>	
					<?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/superadmin/religion/edit.blade.php ENDPATH**/ ?>