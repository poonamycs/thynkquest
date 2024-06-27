
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Basic SEO Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Home</a></li>
              <li class="breadcrumb-item active">SEO </li>
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
        <div class="row justify-content-left">

        <div class="col-md-10 col-sm-12 pt-2">
            <!-- general form elements -->
            <div class="card card-default">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PasswordForm" action="<?php echo e(url('admin/seo')); ?>" enctype='multipart/form-data' method="post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Meta Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo e($seocont->title); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Meta Description (50-160 characters limit)</label>
                                <input type="text" name="description" class="form-control" value="<?php echo e($seocont->description); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Meta Keywords (Add comma separated keywords)</label>
                                <input type="text" name="keywords" class="form-control" value="<?php echo e($seocont->keywords); ?>" >
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
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/admin/seo.blade.php ENDPATH**/ ?>