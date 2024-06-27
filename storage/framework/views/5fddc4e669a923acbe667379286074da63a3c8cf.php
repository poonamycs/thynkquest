
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
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

        <div class="col-md-8 pt-5">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
                <a href="<?php echo e(url('admin/view-exam-category')); ?>" class="btn btn-primary thynk float-right">View Categories</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="CatForm" action="<?php echo e(url('admin/exam-paper-category')); ?>" method="Post">
              <?php echo csrf_field(); ?>
              
                <div class="card-body">
                <div class="form-group">
                    <label>Select Category</label>
                    <select class="form-control select2" name="subcat" id="subcat" style="width: 100%;">
                    <option value="0">Main Category</option>
                    <?php $__currentLoopData = $examcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value='<?php echo e($cat->id); ?>'><?php echo e($cat->cat_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                  <div class="form-group">
                    <label for="cat_name">Category Name</label>
                    <input type="text" name="cat_name" class="form-control" required id="cat_name" placeholder="enter category name">
                  </div>
    
              
                     
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary thynk">Submit</button>
                </div>
              </form>
            </div>
        </div>

        </div>
    </div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/examcat/add-cat.blade.php ENDPATH**/ ?>