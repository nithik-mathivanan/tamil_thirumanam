
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Tamil Thirumanam | Dashboard'); ?>
<style type="text/css">
	
 .wrapper {
     background: #FFF;
     padding: 20px;
}
 h3 {
     display: block;
     width: 100%;
     text-align: center;
     font-size: 30px;
     color: #FFF;
     font-weight: 600;
     font-family: cursive;
     text-shadow: 0 0 46px coral;
}
 .group{
     margin: 15px;
}
 .toggle {
     display: none;
}
 .toggle, .toggle:after, .toggle:before, .toggle *, .toggle *:after, .toggle *:before, .toggle + .toggle-btn {
     box-sizing: border-box;
}
 .toggle::selection, .toggle:after::selection, .toggle:before::selection, .toggle *::selection, .toggle *:after::selection, .toggle *:before::selection, .toggle + .toggle-btn::selection {
     background: none;
}
 .toggle + .toggle-btn {
     outline: 0;
     display: block;
     width: 4em;
     height: 2em;
     position: relative;
     cursor: pointer;
     user-select: none;
}
 .toggle + .toggle-btn:after, .toggle + .toggle-btn:before {
     position: relative;
     display: block;
     content: "";
     width: 50%;
     height: 100%;
}
 .toggle + .toggle-btn:after {
     left: 0;
}
 .toggle + .toggle-btn:before {
     display: none;
}
 .toggle:checked + .toggle-btn:after {
     left: 50%;
}
 .toggle-switch + .toggle-btn {
     background: #f0f0f0;
     border-radius: 2em;
     padding: 2px;
     transition: all 0.4s ease;
}
 .toggle-switch + .toggle-btn:after {
     border-radius: 50%;
     background: #fff;
     transition: all 0.2s ease;
}
 .group:nth-child(1) .toggle-switch:checked + .toggle-btn {
     background: #388e3d;
}
 .group:nth-child(2) .toggle-switch:checked + .toggle-btn {
     background: #ff3547;
}
 .group:nth-child(3) .toggle-switch:checked + .toggle-btn {
     background: #3f51b5;
}
 .group:last-child .toggle-switch:checked + .toggle-btn {
     background:#f57c00;
}
 </style>
<div class="content">
					<div class="container-fluid">
						<h4 class="page-title" id="ddd">Community</h4>
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
										<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModel" data-whatever="@mdo">Create Community</button>
									</div>
									<div class="card-body">
										
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Community</th>
													<th scope="col">Religion</th>
													<th scope="col" colspan="2">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												<?php $__currentLoopData = $community; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><?php echo e($i); ?></td>
													<td><?php echo e($data->community); ?></td>
													<td><?php echo e($data->getReligion->religion); ?></td>
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
					<form method="post" action="<?php echo e(route('store-community')); ?>">
						<?php echo e(csrf_field()); ?>

					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Create Community</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       
					          <div class="form-group">
					            <label  class="col-form-label">Religion:</label>
					            <select class="form-control" name="religion" required>
					            	<option>Select Religion</option>
					            	<?php $__currentLoopData = $religion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					            	<option value="<?php echo e($data->id); ?>"><?php echo e($data->religion); ?></option>
					            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					            	
					            </select>
					          </div>
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Comunity Name</label>
					            <input class="form-control" name="community" placeholder="Enter Community Name" required>
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
					<form method="post" action="<?php echo e(route('update-community')); ?>">
						<?php echo e(csrf_field()); ?>

					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Community</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       	<input type="hidden" id="community-id" name="community_id" >
					          <div class="form-group">
					            <label  class="col-form-label">Religion:</label>
					            <select class="form-control" name="religion" id="religion" required>
					            	<option>Select Religion</option>
					            	<?php $__currentLoopData = $religion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					            	<option value="<?php echo e($data->id); ?>"><?php echo e($data->religion); ?></option>
					            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					            	
					            </select>
					          </div>
					          <div class="form-group">
					            <label for="message-text" class="col-form-label">Comunity Name</label>
					            <input class="form-control" name="community" id="community" placeholder="Enter Community Name" required>
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
							$.ajax({
			                    url:"<?php echo e(url('superadmin/community/edit')); ?>/"+id,
			                    type:'GET',
			                   	success:function(response){
			                   		console.log(response);
			                    	$('#community-id').val(response.id);
			                    	$('#religion').val(response.religion);
			                    	$('#community').val(response.community)
			                   	}
			                   });
						}
						$(document).ready(function() {
							  	$('.toggle-switch').click(function() {
							  	var id = $(this).val();

								if($(this).prop('checked')) {
								        $.ajax({
						                    url:"<?php echo e(url('superadmin/community/status')); ?>/"+id+'/0',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
													  title: 'Community Activated!!',
													  text: 'Communtiy status changed successfully',
													  icon: 'success',
													  confirmButtonText: 'OK'
													});
						                   	}
						                   });
								    }else {
								        $.ajax({
						                    url:"<?php echo e(url('superadmin/community/status')); ?>/"+id+'/1',
						                    type:'GET',
						                   	success:function(response){
						                    	Swal.fire({
												  title: 'Community Deactivated!!!',
												  text: 'Communtiy status changed successfully..',
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

<?php echo $__env->make('superadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tamil_thirumanam_user\resources\views/superadmin/community/index.blade.php ENDPATH**/ ?>