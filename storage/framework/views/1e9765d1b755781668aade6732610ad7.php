<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Screen</title>
<link rel="stylesheet" href="<?php echo e(asset('public/admin_files/css/login.css')); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style type="text/css">
  li{
    list-style: none;
  }
</style>
<body>
  <div class="container" style="width:30%">
  
            <form method="POST" action="<?php echo e(route('admin-login')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="text-center">
                    <h4>Tamil Thirumanam</h4>
                    <h5>Admin Login</h5>
                </div>
               
                  <div class="input-group">
                   
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="input-group">
                  
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                    <?php if(count($errors) > 0): ?>
                     <div class ="text-danger font-weight-bold text-center">\
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <font><?php echo e($error); ?></font>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                     </div>
                    <?php endif; ?>

                  <button type="submit" class="mt-2">Login</button>
            </form>
   
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tamil_thirumanam\resources\views/superadmin/auth/login.blade.php ENDPATH**/ ?>