
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add blogs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add blogs</li>
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
                <h3 class="card-title">Add Blogs</h3>
                <a href="<?php echo e(url('admin/view-blogs')); ?>" class="btn btn-primary thynk float-right">View Blogs</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/add-blogs')); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                                
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Blog Date</label>
                                <input type="date" name="date" class="form-control" required id="date" placeholder="Enter school name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Blog Subject</label>
                                <input type="text" name="subject" class="form-control" required id="subject" placeholder="Enter blog subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Blog Title</label>
                                <input type="text" name="title" class="form-control" required id="title" placeholder="Enter blog title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Blog Image</label>
                                <input type="file" name="image" class="form-control" required id="image" placeholder="Enter blog title">
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">School Contact Number</label>
                                <input type="text" name="number" class="form-control" required id="number" placeholder="Enter school contact number">
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Blog Description</label>
                                <textarea name="desc" class="form-control" rows="9" required id="desc" placeholder="Enter blog description"></textarea>
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
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/adminPages/blogs/add-blog.blade.php ENDPATH**/ ?>