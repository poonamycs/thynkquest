
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Exam Style Paper Subscription</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Exam Style Paper Subscription</li>
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

        <div class="col-md-10 ">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Edit Exam Style Paper Subscription</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/edit-esp-subscription/'.$subscribe->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                                <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control select2" name="cat_id" disabled readonly id="cat_id" style="width: 100%;">
                                <option value="">--Choose Categories--</option>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($row->id); ?>' <?php if($subscribe->cat_id == $row->id): ?> selected <?php endif; ?>><?php echo e($row->cat_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>
                        </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                <label>Select Paper</label>
                                <select class="form-control select2" name="paper_id" disabled readonly id="paper_id" style="width: 100%;">
                                <option value="">--Choose Papers--</option>
                                <?php $__currentLoopData = $papers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($row->id); ?>' <?php if($subscribe->exam_paper_id == $row->id): ?> selected <?php endif; ?>><?php echo e($row->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>
                        </div>
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Subscription Type (In Months)</label>
                                    <select class="form-control select2" name="subs_type" id="subs_type" style="width: 100%;">
                                    <option value="6" <?php if($subscribe->subs_type == 6): ?> selected <?php endif; ?>>6 Months</option>
                                    <option value="12" <?php if($subscribe->subs_type == 12): ?> selected <?php endif; ?>>12 Months</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Subscription Price</label>
                                <input type="number" name="price" class="form-control" required id="price"value="<?php echo e($subscribe->price); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Subscription Discount</label>
                                <input type="number" name="discount" class="form-control" required id="price"value="<?php echo e($subscribe->discount); ?>">
                            </div>
                        </div>
                    </div>
           
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary thynk">Update Subscription</button>
                </div>
              </form>
            </div>
        </div>

        </div>
    </div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ycs-projects\thynkquest\resources\views/adminPages/subs/edit-esp-subsription.blade.php ENDPATH**/ ?>