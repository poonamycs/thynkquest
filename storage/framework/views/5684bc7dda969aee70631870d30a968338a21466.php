
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Explore More</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Explore More</li>
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
                <h3 class="card-title">Edit Explore More</h3>
                <a href="<?php echo e(url('admin/view-explore-more')); ?>" class="btn btn-primary thynk float-right">View Explore More</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="" action="<?php echo e(url('admin/edit-explore-more/'.$data->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                                
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Subject</label>
                                <input type="text" name="subject" class="form-control" required id="subject" value="<?php echo e($data->subject); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required id="title" value="<?php echo e($data->title); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">File (Pdf)</label>
                                <input type="file" name="file" class="form-control" id="file" placeholder="">
                                <input type="hidden" name="current_file" class="form-control" id="current_file" value="<?php echo e($data->file); ?>">
                            </div>

                            <?php if(!empty($data->file)): ?>
                            <a class="btn btn-primary" target="_blank" href="<?php echo e(asset('images/blogs/'.$data->file)); ?>">View File</a>
                            <?php endif; ?>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">School Contact Number</label>
                                <input type="text" name="number" class="form-control" required id="number" placeholder="Enter school contact number">
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea name="desc" class="form-control" rows="9" required id="desc" placeholder="Enter description"><?php echo e($data->description); ?></textarea>
                            </div>
                        </div>
                     
                             
                        <button type="submit" class="btn btn-primary thynk">Update</button>
                    </div>
            
        
           
                </div>

                
              </form>
            </div>
        </div>

        </div>
    </div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/adminPages/cms/edit-explore-more.blade.php ENDPATH**/ ?>