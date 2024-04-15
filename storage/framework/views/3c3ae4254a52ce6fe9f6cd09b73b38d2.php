<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8" />
        <title>Log In </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->

        <link href="<?php echo e(asset('admin_assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="<?php echo e(asset('admin_assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="account-pages my-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center">   
                            
                            <p class="text-muted mt-2 mb-4"><b>Admin Dashboard</b></p>

                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Log In</h4>
                                </div>

                                <form action="<?php echo e(route('admin.auth')); ?>" method="post"> 
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" type="password"  name="password" placeholder="Enter your password" required>
                                    </div>

 
                                    <div class="mb-3 d-grid text-center">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                    <?php echo e(session('error')); ?>    
                                    </div>
                                    
                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor -->
        <script src="<?php echo e(asset('admin_assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/node-waves/waves.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/waypoints/lib/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/jquery.counterup/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/feather-icons/feather.min.js')); ?>"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>


</html><?php /**PATH C:\xampp\htdocs\tamil_thirumanam_user\resources\views/admin/login.blade.php ENDPATH**/ ?>