
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Testimonial</li>
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

        <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Edit Testimonial</h3>
                <a href="<?php echo e(url('admin/view-testimonial')); ?>" class="btn btn-primary thynk float-right">View Testimonial</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/edit-testimonial/'.$Details->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Name </label>
                                <input type="text" name="student_name" class="form-control" required id="title" value="<?php echo e($Details->student_name); ?>">
                            </div>
                        </div>
                       
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Testimonial Image</label>
                                <input type="file" name="file" class="form-control"  id="image">
                                <img src="<?php echo e(asset('images/testimonial/'.$Details->image)); ?>" width="200px" alt="">
                                <?php if(!empty($Details->image)): ?>
                                <input type="hidden" name="current_file" class="form-control"  id="current_file" value="<?php echo e($Details->image); ?>">
                                <?php endif; ?>
                            </div>
                            <small>Note: Image should be in jpg,jpeg,png format and image size should be 70px X 70 px</small>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Designation </label>
                                <input type="text" name="designation" class="form-control" required id="title" value="<?php echo e($Details->designation); ?>">
                            </div>
                        </div>
                       
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Testimonial Description</label>
                                <textarea name="desc" class="form-control textarea" rows="9" required id="desc" placeholder="Enter school address"><?php echo $Details->description; ?></textarea>
                            </div>
                        </div>
                     
                             
                        <button type="submit" class="btn btn-primary thynk">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/testimonial/edit_testimonial.blade.php ENDPATH**/ ?>