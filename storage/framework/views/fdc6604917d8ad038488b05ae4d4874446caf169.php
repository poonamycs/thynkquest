<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Question & Answers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Question & Answers</li>
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
                <h3 class="card-title">Edit Question & Answers</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/edit-answers/'.$answers->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                       <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Edit Question Image</label>
                                 <div class="input-group">
                                          <div class="form-group">
                                              <input type="file" name="file" class=""  id="file">
                                              <input type="hidden" name="question_file" class="form-control" value="<?php echo e($answers->question_img); ?>" id="current_file">
                                            
                                          </div>
                              
                                      </div>
                                      <img src="<?php echo e(asset('images/papers/answers/'.$answers->question_img)); ?>" width="300px" height="200px" alt=""> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc">Edit Answer Image</label>
                                 <div class="input-group">
                                          <div class="form-group">
                                              <input type="file" name="ans_file" class=""  id="file">
                                              <input type="hidden" name="answer_file" class="form-control" value="<?php echo e($answers->answer_img); ?>" id="current_file">
                                            
                                          </div>
                              
                                      </div>
                                      <img src="<?php echo e(asset('images/papers/answers/'.$answers->answer_img)); ?>" width="300px" height="200px" alt=""> 
                            </div>
                        </div>
                    
                             
                   
                    </div>
           
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary thynk">Submit</button>
                  <p>Please Upload Image of type PNG and size 1200 x 710</p>
                </div>
              </form>
            </div>
        </div>

        </div>
    </div>
  
   
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/adminPages/papers/edit-quesanswers.blade.php ENDPATH**/ ?>