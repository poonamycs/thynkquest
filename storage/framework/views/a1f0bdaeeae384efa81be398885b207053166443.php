
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid ">
         <?php if(Session::has('success')): ?>
            <div class="alert alert-success alert-dismissible">
                <?php echo session('success'); ?>

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div>
        <?php elseif(Session::has('error')): ?>
            <div class="alert alert-danger alert-dismissible">
                <?php echo session('error'); ?>

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div>
        <?php endif; ?>
        <div class="row justify-content-center">

        <div class="col-md-6 pt-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PasswordForm" action="<?php echo e(url('admin/change-password')); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="text" name="email" class="form-control" readonly id="email" value="<?php echo e(Session::get('adminSession')); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Old Password</label>
                                <input type="text" name="old_password" class="form-control" required id="old_password" placeholder="Enter old password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">New Password</label>
                                <input type="text" name="new_password" class="form-control" required id="new_password" placeholder="Enter new password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Confirm Password</label>
                                <input type="text" name="cmf_password" class="form-control" required id="cmf_password" placeholder="Enter confirm password">
                            </div>
                        </div>
                     
                             
                   
                    </div>
           
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary thynk">Save Changes</button>
                </div>
              </form>
            </div>
        </div>

        </div>
    </div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest\resources\views/admin/change_password.blade.php ENDPATH**/ ?>