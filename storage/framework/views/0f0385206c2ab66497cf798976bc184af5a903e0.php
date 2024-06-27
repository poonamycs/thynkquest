
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Courses</li>
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

        <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Courses</h3>
                <a href="<?php echo e(url('admin/view-papers')); ?>" class="btn btn-primary thynk float-right">View Courses</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="CoursesForm" action="<?php echo e(url('admin/add-courses')); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>Select Course Category</label>
                              <select class="form-control select2" name="category" id="category" style="width: 100%;">
                              <option value="">--choose categories--</option>
                              <?php $__currentLoopData = $CourseCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value='<?php echo e($cat->id); ?>'><?php echo e($cat->cat_name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Course Title</label>
                                <input type="text" name="title" class="form-control" required id="title" placeholder="Enter course title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Course Price</label>
                                <input type="number" name="price" class="form-control" required id="price" placeholder="Enter course price">
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                                   <div class="form-group">
                                    <label for="file">File Input</label>
                                    <div class="input-group">
                                    <div class="form-group">
                                        <input type="file" name="file" class="form-control" id="file">
                                       
                                    </div>
                             
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Course Description</label>
                                <textarea class="form-control" type="text" rows="9" name="desc"  required id="desc" placeholder="Enter course description"></textarea>
                            </div>
                        </div>
                             
                   
                    </div>
            
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div> -->
           
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
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest\resources\views/adminPages/courses/add-courses.blade.php ENDPATH**/ ?>