
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Papers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Papers</li>
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
                <h3 class="card-title">Edit Papers</h3>
                <a href="<?php echo e(url('admin/view-papers')); ?>" class="btn btn-primary thynk float-right">View Papers</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  action="<?php echo e(url('admin/edit-papers/'.$papers->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                                <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control select2" name="category" id="category" style="width: 100%;">
                                <option value="">--choose categories--</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($cat->id); ?>' <?php if($cat->id == $papers->cat_id): ?> selected <?php endif; ?> ><?php echo e($cat->cat_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                <label>Select Subject</label>
                                <select class="form-control select2" name="subject" id="subject" style="width: 100%;">
                                <option value="">--choose subject--</option>
                      
                                    
                                <?php $__currentLoopData = $subcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($row->id); ?>'  <?php if($row->id == $papers->subject): ?> selected <?php endif; ?> ><?php echo e($row->cat_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                                </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Select School</label>
                                <select class="form-control select2" name="school" id="school" style="width: 100%;">
                                <option value="">--choose school--</option>
                               
                                <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($row->id); ?>'  <?php if($row->id == $papers->school_id): ?> selected <?php endif; ?> ><?php echo e($row->school_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                                   <div class="form-group">
                                    <label for="file">Image</label>
                                      <div class="input-group">
                                          <div class="form-group">
                                              <input type="file" name="file" class=""  id="file">
                                              <input type="hidden" name="current_file" class="form-control" value="<?php echo e($papers->file); ?>" id="current_file">
                                            
                                          </div>
                              
                                      </div>
                                      <img src="<?php echo e(asset('images/papers/'.$papers->file)); ?>" width="300px" height="200px" alt=""> 
                                </div>
                                
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Paper Title</label>
                                <input type="text" name="title" class="form-control" required id="title" value="<?php echo e($papers->title); ?>">
                            </div>
                        </div>
                       
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Paper Description</label>
                                <textarea type="text" name="desc" rows="9" class="form-control" required id="desc"><?php echo e($papers->description); ?></textarea>
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
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest\resources\views/adminPages/papers/edit-papers.blade.php ENDPATH**/ ?>