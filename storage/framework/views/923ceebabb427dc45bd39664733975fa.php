
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Tamil Thirumanam | Dashboard'); ?>
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Relegion</h4>
						<div class="row table-content">
							<div class="col-md-8">
								
								<div class="card">
									<div class="card-header">
										<div class="card-title">List / Edit</div>
										<a href="<?php echo e(route('create-religion')); ?>"><button class="btn btn-primary" style="float:right;">Create Religion</button></a>
									</div>
									<div class="card-body">
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
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">ID</th>
													
													<th scope="col">Religion</th>
													
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
											  <?php $i=1; ?>
                                               <?php $__currentLoopData = $religion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><?php echo e($i); ?></td>
													
													<td><?php echo e($data->religion); ?></td>
													<td> 
												    <?php if($data->status==0): ?>

												    <a href="<?php echo e(url('admin/religion/active')); ?>/<?php echo e($data->id); ?>">
                                                   <button class="btn btn-sm btn-success" type="button" title="Active" value="<?php echo e($data->id); ?>" id="active" name="status"><i class="fa fa-check"></i></button></a>
                                                   <?php else: ?>
                                                   	<a href="<?php echo e(url('admin/religion/in_active')); ?>/<?php echo e($data->id); ?>">

                                                   		<button class="btn btn-sm btn-danger" type="button" title="InActive" value="<?php echo e($data->id); ?>" class="inactive" name="status"><i class="fa fa-close"></i></button>
                                                   	</a>
                                                   <?php endif; ?>

														<a href="<?php echo e(url('admin/religion/edit')); ?>/<?php echo e($data->id); ?>">
                                                        <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                                                        </a>
                                                     <a href="<?php echo e(url('admin/religion/delete')); ?>/<?php echo e($data->id); ?>">
                                                        <button class="btn btn-sm btn-warning"><i class="fa fa-trash"></i></button>
                                                        </a>
                                                    </td>
												</tr>
												 <?php $i++ ?> 
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>

	<!-- <script type="text/javascript">
     	$(document).ready(function(){
     		$('#active').click(function(){
              var id = $(this).val();
              
              console.log(id);
            
               $.ajax({
                    url:"<?php echo e(url('superadmin/religion/active')); ?>/"+id,
                    type:'GET',
                    success:function(response){
                    window.location.reload();
                   }
                   });

     		});
        $('.inactive').click(function(){
              var id = $(this).val();
              
              console.log(id);
               $.ajax({
                     url:"<?php echo e(url('superadmin/religion/in_active')); ?>/"+id,
                    type:'GET',
                  success:function(response){
                    window.location.reload();
                   }
                   });
        });
     	});
     </script> -->
				<?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/superadmin/religion/index.blade.php ENDPATH**/ ?>