
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Tamil Thirumanam | Dashboard'); ?>
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Language</h4>
						<div class="row table-content">
							<div class="col-md-8">
								<div class="flash-section">
								<?php if( Session::has( 'success' )): ?>
									     <div class="flash-message"><?php echo e(Session::get( 'success' )); ?></div>
								<?php endif; ?>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">List / Add / Edit / Delete</div>
										<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModel" data-whatever="@mdo">Create Language</button>
									</div>
									<div class="card-body">
										
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Language</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td>1</td>
													<td><?php echo e($data->language); ?></td>
													
													<td><button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button></td>
												</tr>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
<!-- Pop Up Model -->
				<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<form method="post" action="<?php echo e(route('store-language')); ?>">
						<?php echo e(csrf_field()); ?>

					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Create Language</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       
				
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Language</label>
					            <input class="form-control" name="language" placeholder="Enter Language" required>
					          </div>
					       
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Create</button>
					      </div>
					    </div>
					  </div>
					  </form>
					</div>
				<?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/superadmin/language/index.blade.php ENDPATH**/ ?>