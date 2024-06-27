
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Schools</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Schools</li>
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
                <h3 class="card-title">Add Schools</h3>
                <a href="<?php echo e(url('admin/view-schools')); ?>" class="btn btn-primary thynk float-right">View Schools</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/add-Schools')); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select Multiple Category (Press Ctrl key)</label>
                                <select class="select2" required multiple="multiple" name="category[]" data-placeholder="Select a State" style="width: 100%;">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value='<?php echo e($cat->id); ?>'><?php echo e($cat->cat_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                                
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Schools Name</label>
                                <input type="text" name="school_name" class="form-control" required id="school_name" placeholder="Enter school name">
                            </div>
                        </div>
                        <!--<div class="col-md-12">-->
                        <!--    <div class="form-group">-->
                        <!--        <label for="desc">School Contact Number</label>-->
                        <!--        <input type="text" name="number" class="form-control" required id="number" placeholder="Enter school contact number">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-12">-->
                        <!--    <div class="form-group">-->
                        <!--        <label for="desc">School Address</label>-->
                        <!--        <textarea name="address" class="form-control" required id="address" placeholder="Enter school address"></textarea>-->
                        <!--    </div>-->
                        <!--</div>-->
                     
                             
                     <button type="submit" class="btn btn-primary thynk">Submit</button>
                    </div>
            
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div> -->
           
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                
                </div>
              </form>
            </div>
        </div>

        </div>
    </div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/adminPages/schools/add-school.blade.php ENDPATH**/ ?>