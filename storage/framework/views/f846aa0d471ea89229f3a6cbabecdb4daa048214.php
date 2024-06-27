
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Papers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Papers</li>
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
                <h3 class="card-title">Add Papers</h3>
                <a href="<?php echo e(url('admin/view-13-papers')); ?>" class="btn btn-primary thynk float-right">View Papers</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/add-13-papers')); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                                <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control select2" required name="category" id="category" style="width: 100%;">
                                    <option value='<?php echo e($categories->id); ?>' selected ><?php echo e($categories->cat_name); ?></option>
                                </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                <label>Select Subject</label>
                                <select class="form-control select2" required name="subject" id="subject" style="width: 100%;">
                                <option value="">--choose subject--</option>
                               
                                <?php $__currentLoopData = $subcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($row->id); ?>'><?php echo e($row->cat_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                                </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Select School</label>
                                <select class="form-control select2" required name="school" id="school" style="width: 100%;">
                                <option value="">--choose school--</option>
                               
                                <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($row->id); ?>'><?php echo e($row->school_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                                   <div class="form-group">
                                    <label for="file">Image</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" required id="file">
                                        <label  for="exampleInputFile"></label>
                                    </div>
                             
                                    </div>
                                     <small>Note: Image should be in jpg,jpeg,png format and image size should be 356px X 200 px</small>
                                </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Paper Title</label>
                                <input type="text" name="title" class="form-control" required id="title" placeholder="Enter paper title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Paper Description</label>
                                <textarea type="text" name="desc" rows="9" class="form-control textarea" required id="desc" placeholder="Enter paper small description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" required id="title" placeholder="Enter meta title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Meta Keywords</label>
                                <input type="text" name="meta_keywords" class="form-control" required id="title" placeholder="Enter meta keywords ">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Meta Description</label>
                                <textarea  name="meta_desc" class="form-control"  required id="desc" ></textarea>
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
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/papers/add-13papers.blade.php ENDPATH**/ ?>