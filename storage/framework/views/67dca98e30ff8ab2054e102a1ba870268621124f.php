
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Testimonial</li>
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
                <h3 class="card-title">Add Testimonial..</h3>
                <a href="<?php echo e(url('admin/view-testimonial')); ?>" class="btn btn-primary thynk float-right">View Testimonial</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/add-testimonial')); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                       <!-- <div class="col-md-6">
                                   <div class="form-group">
                                    <label for="file">Image</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" required id="file">
                                        <label  for="exampleInputFile"></label>
                                    </div>
                             
                                    </div>
                                     <small>Note: Image should be in jpg,jpeg,png format and image size should be 70px X 70 px</small>
                                </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" name="student_name" class="form-control" required id="title" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea type="text" name="desc" rows="9" class="form-control textarea" required id="desc" placeholder="Enter paper small description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Designation</label>
                                <input type="text" name="designation" class="form-control" required id="title" placeholder="Enter name">
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
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/testimonial/add_testimonial.blade.php ENDPATH**/ ?>