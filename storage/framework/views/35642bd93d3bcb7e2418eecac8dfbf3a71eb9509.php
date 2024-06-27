
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Exam Style Question Papers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Exam Style Question Papers</li>
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
                <h3 class="card-title">Add Exam Style Question Papers</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/exam-question-papers/'.$paper->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                    <input type="hidden" name="cat_id" value='<?php echo e($paper->cat_id); ?>'>
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" >
                            </div>
                        </div>
                        <input type="hidden" name="exam_cat_id" value='<?php echo e($paper->exam_cat_id); ?>'>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Add Question Paper (Pdf)</label>
                                <input type="file" name="question_paper" id="question_paper" class="form-control" >
                            </div>
                        </div>

                    
                             
                   
                    </div>
           
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
    <div class="container-fluid">

    <div class="row justify-content-center">
    <div class="col-10">

    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Question Papers List</h3>
           
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Question Paper</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->id); ?></td>
                  <td><?php echo e($row->title); ?></td>
                  <td><a href="<?php echo e(asset('images/exampapers/question/'.$row->question_paper)); ?>" class="img-fluid" width="150px" alt="">View Paper</a></td>
                  <td>
                  <a href="<?php echo e(url('admin/add-exam-answers/'.$row->id)); ?>"  class='btn btn-success' title="add answers"><i class="fas fa-plus"></i></a>

                    <a href="<?php echo e(url('admin/delete-exam-question-papers/'.$row->id)); ?>" onclick="return confirm('Are you sure? You want to delete this question paper')" class='btn btn-danger' title="Edit Paper"><i class="fas fa-trash"></i></a>
                
                </td>
         
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
           
               
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

    </div>
    

    </div>
  </div>
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/adminPages/exampapers/add_qpapers.blade.php ENDPATH**/ ?>