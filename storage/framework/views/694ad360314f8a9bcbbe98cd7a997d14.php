
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Tamil Thirumanam | Dashboard'); ?>
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title" id="ddd">Countries</h4>
						<div class="row table-content">
							<div class="col-md-8">
								<div class="flash-section">
								<?php if( Session::has( 'success' )): ?>
									     <div class="flash-message"><?php echo e(Session::get( 'success' )); ?></div>
								<?php endif; ?>
								</div>
								<div class="card">
									<!-- <div class="card-header">
										<div class="card-title">List / Add / Edit / Delete</div>
										<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModel" data-whatever="@mdo">Create Education</button>
									</div> -->
									<div class="card-body">
										
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Country</th>
													<th scope="col">Country Code</th>
													<th scope="col" >Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><?php echo e($i); ?></td>
													<td><?php echo e($data->name); ?></td>
													<td><?php echo e($data->numeric_code); ?></td>
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
													<!-- <td>
														<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModel" data-whatever="@mdo" onclick="edit(<?php echo e($data->id); ?>)"><i class="fa fa-pencil"></i></button>
													</td>
													<td>
														<a href="<?php echo e(url('admin/countries/delete')); ?>/<?php echo e($data->id); ?>">
                                                        <button class="btn btn-sm btn-warning"><i class="fa fa-trash"></i></button>
                                                        </a>
													</td> -->
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

					<script type="text/javascript">
						$(document).ready(function() {
							  	$('.toggle-switch').click(function() {
							  	var id = $(this).val();

								if($(this).prop('checked')) {
								        $.ajax({
						                    url:"<?php echo e(url('admin/countries/status')); ?>/"+id+'/0',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
													  title: 'Countries Activated!!',
													  text: 'Countries status changed successfully',
													  icon: 'success',
													  confirmButtonText: 'OK'
													});
						                   	}
						                   });
								    }else {
								        $.ajax({
						                    url:"<?php echo e(url('admin/countries/status')); ?>/"+id+'/1',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
												  title: 'Countries Deactivated!!!',
												  text: 'Countries status changed successfully..',
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
<?php echo $__env->make('superadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/superadmin/countries/index.blade.php ENDPATH**/ ?>