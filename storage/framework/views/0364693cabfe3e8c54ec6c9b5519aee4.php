<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Tamil Thirumanam | Dashboard'); ?>
<style type="text/css">

 </style>
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title" id="ddd">Education</h4>
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
										<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModel" data-whatever="@mdo">Create Education</button>
									</div>
									<div class="card-body">
										
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Education</th>
													<th scope="col" >Action</th>
													<th scope="col" >Edit</th>
													<th scope="col" >Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												<?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><?php echo e($i); ?></td>
													<td><?php echo e($data->education); ?></td>
													<td>
														<div class="group">
														<?php if($data->status==0): ?>
															<input class="toggle toggle-switch" id="switch<?php echo e($i); ?><?php echo e($i); ?>" value="<?php echo e($data->id); ?>" checked type="checkbox"/>
														    <label class="toggle-btn" for="switch<?php echo e($i); ?><?php echo e($i); ?>"></label>
														<?php else: ?>
														   <input class="toggle toggle-switch" id="switch<?php echo e($i); ?><?php echo e($i); ?>" value="<?php echo e($data->id); ?>" type="checkbox"/>
														    <label class="toggle-btn" for="switch<?php echo e($i); ?><?php echo e($i); ?>"></label>
														<?php endif; ?>
														</div>
													</td>
													<td>
														<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModel" data-whatever="@mdo" onclick="edit(<?php echo e($data->id); ?>)"><i class="fa fa-pencil"></i></button>
													</td>
													<td>
														<a href="<?php echo e(url('admin/education/delete')); ?>/<?php echo e($data->id); ?>">
                                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                        </a>
													</td>
												</tr>
												<?php $i++; ?>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				
<!-- Create Model -->
				<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<form method="post" action="<?php echo e(route('store-education')); ?>">
						<?php echo e(csrf_field()); ?>

					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Education</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       
					     
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Education</label>
					            <input class="form-control" name="education" placeholder="Enter Education" required>
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

<!-- Edit Model -->
				<div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<form method="post" action="<?php echo e(route('update-education')); ?>">
						<?php echo e(csrf_field()); ?>

					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Education</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       	<input type="hidden" id="id" name="id" >
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Job Type</label>
					            <input class="form-control" name="education" id="education" placeholder="Enter Education" required>
					          </div>
					       
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Update</button>
					      </div>
					    </div>
					  </div>
					  </form>
					</div>

					<script type="text/javascript">

						function edit(id){
							console.log(id);
							$.ajax({
			                    url:"<?php echo e(url('admin/education/edit')); ?>/"+id,
			                    type:'GET',
			                   	success:function(response){
			                   		console.log(response);
			                    	$('#id').val(response.id);
			                    	$('#education').val(response.education)
			                   	}
			                   });
						}
						$(document).ready(function() {
							  	$('.toggle-switch').click(function() {
							  	var id = $(this).val();

								if($(this).prop('checked')) {
								        $.ajax({
						                    url:"<?php echo e(url('admin/education/status')); ?>/"+id+'/0',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
													  title: 'Education Activated!!',
													  text: 'Education status changed successfully',
													  icon: 'success',
													  confirmButtonText: 'OK'
													});
						                   	}
						                   });
								    }else {
								        $.ajax({
						                    url:"<?php echo e(url('admin/education/status')); ?>/"+id+'/1',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
												  title: 'Education Deactivated!!!',
												  text: 'Education status changed successfully..',
												  icon: 'error',
												  confirmButtonText: 'OK'
												});
						                   	}
						                   });
								    }
								});
						});
					</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('superadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/superadmin/education/index.blade.php ENDPATH**/ ?>