
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Exam Style Papers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Exam Style Papers</li>
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
                <h3 class="card-title">Add Exam Papers</h3>
                <a href="<?php echo e(url('admin/view-exam-papers')); ?>" class="btn btn-primary thynk float-right">View Papers</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/add-exam-papers')); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                                <div class="form-group">
                                <label>Select Main Category</label>
                                <select class="form-control select2" name="category" id="category" style="width: 100%;">
                                <option value="">--choose categories--</option>
                                <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($cat->id); ?>'><?php echo e($cat->cat_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Sub Category</label>
                                    <select class="form-control select2" name="subcat" id="subcat" style="width: 100%;">
                                    <option value="">--choose categories--</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Paper Title</label>
                                <input type="text" name="title" class="form-control" required id="title" placeholder="Enter paper title">
                            </div>
                        </div>
                        <div class="col-md-6">
                                   <div class="form-group">
                                    <label for="file">File Input</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="file"  id="file">
                                        <label  for="exampleInputFile"></label>
                                    </div>
                             
                                    </div>
                                </div>
                        </div>
                     
                      
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc">Paper Description</label>
                                <textarea  name="desc" class="textarea" required id="desc" ></textarea>
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
   
       
</div>
<script src="<?php echo e(asset('adminpanel/plugins/jquery/jquery.min.js')); ?>"></script>
<script>
   $(document).ready(function () { 
            $('#category').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            //console.log(cat_id);
            //ajax
            $.ajax({
                type:"get",
                    url:"<?php echo e(url('admin/sub-categories')); ?>",
                    data:{cat_id:cat_id},
                    success:function(data){
                        console.log(data);
                    var subcat =  $('#subcat').empty();
                    $.each(data,function(index){
                        var option = $('<option/>', {id:data[index].cat_name, value:data[index].cat_name});
                        subcat.append('<option value ="'+data[index].cat_name+'">'+data[index].cat_name+'</option>');
                    });
                }
            });
          
        });
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/adminPages/exampapers/add-papers.blade.php ENDPATH**/ ?>