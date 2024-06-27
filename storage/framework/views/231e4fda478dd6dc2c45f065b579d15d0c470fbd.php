
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Courses</li>
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

        <div class="col-md-10 pt-5">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Edit Courses</h3>
                <a href="<?php echo e(url('admin/view-courses')); ?>" class="btn btn-primary thynk float-right">View Courses</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  action="<?php echo e(url('admin/edit-courses/'.$Course->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
              <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                            <label>Select Course Category</label>
                              <select class="form-control select2" name="category" id="category" style="width: 100%;">
                              <option value="">--choose categories--</option>
                              <?php $__currentLoopData = $CourseCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value='<?php echo e($cat->id); ?>' <?php if($Course->course_cat_id == $cat->id): ?> selected <?php endif; ?>><?php echo e($cat->cat_name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Course Price</label>
                                <input type="number" name="price" class="form-control" required id="price" value="<?php echo e($Course->price); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Course Title</label>
                                <input type="text" name="title" class="form-control" required id="title" value="<?php echo e($Course->title); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                                   <div class="form-group">
                                    <label for="file">Images</label>
                                    <div class="input-group">
                                    <div class="form-froup">
                                        <input type="file" name="file" class="form-control" id="file">
                                        <input type="hidden" name="current_file" class="form-control" value="<?php echo e($Course->image); ?>" id="current_file">
                                      
                                    </div>
                             
                                    </div>
                                </div>
                               
                        </div>
                         <div class="col-md-6">
                                   <div class="form-group">
                                    <label for="file">PDF File</label>
                                    <div class="input-group">
                                    <div class="form-froup">
                                        <input type="file" name="currentfile" class="form-control" id="file">
                                        <input type="hidden" name="pdf_file" class="form-control" value="<?php echo e($Course->pdf_file); ?>" id="current_file">
                                      
                                    </div>
                             
                                    </div>
                                </div>
                               
                        </div>
                        <div class="col-md-6">
                          <img class="" src="<?php echo e(asset('images/courses/'.$Course->image)); ?>" width="300" alt="">
                        </div>
                        <div class="col-md-6">
                          <iframe src="<?php echo e(asset('images/courses/'.$Course->pdf_file)); ?>"></iframe>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Course Description</label>
                                <textarea type="text" name="desc" rows="9" class="form-control textarea" required id="desc" value=""><?php echo e($Course->description); ?></textarea>
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
                  <button type="submit" class="btn btn-primary thynk">Update</button>
                </div>
              </form>
            </div>
        </div>

        </div>
    </div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/courses/edit-courses.blade.php ENDPATH**/ ?>