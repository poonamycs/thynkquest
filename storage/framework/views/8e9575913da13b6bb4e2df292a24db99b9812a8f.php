
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Course Purchased Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Course Purchased Details</li>
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
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                             <label for="title">User Name</label>  
                             <p><?php echo e($User_details->full_name); ?></p>
                        </div>
                        <div class="col-md-6">
                             <label for="title">User Email</label>  
                             <p><?php echo e($User_details->email); ?></p>
                        </div>
                        <div class="col-md-6">
                             <label for="title">User Mobile</label>  
                             <p><?php echo e($User_details->mobile); ?></p>
                        </div>
                        <div class="col-md-6">
                             <label for="title">User Payment ID</label>  
                             <p><?php echo e($User_details->payment_id); ?></p>
                        </div>
                        <div class="col-md-6">
                             <label for="title">Course Title</label>  
                             <p><?php echo e($subs_courses->title); ?></p>
                        </div>

                        <div class="col-md-6">
                        <label for="title">Course Category</label>  
                             <p><?php echo e($subs_courses->cat_name); ?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="title">Course Price</label>  
                             <p>£<?php echo e($subs_courses->price); ?>.00</p>
                        </div>
                        <div class="col-md-6">
                        <label for="title">Seats</label>  
                             <p><?php echo e($subs_courses->seats); ?></p>
                        </div>
                        <div class="col-md-6">
                        <label for="title">Duration</label>  
                             <p><?php echo e($subs_courses->duration); ?></p>
                        </div>
                        <div class="col-md-6">
                        <label for="title">Lessons</label>  
                             <p><?php echo e($subs_courses->lessons); ?></p>
                        </div>
                    
                             
                   
                    </div>
            
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div> -->
           
                </div>
                <!-- /.card-body -->

               
           
            </div>
        </div>

        </div>
    </div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/users/course-details.blade.php ENDPATH**/ ?>