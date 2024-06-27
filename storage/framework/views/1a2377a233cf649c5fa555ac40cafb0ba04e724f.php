<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Resources</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Resources</li>
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
                <h3 class="card-title">Edit Resources</h3>
                <a href="<?php echo e(url('admin/view-resources')); ?>" class="btn btn-primary thynk float-right">View Resources</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="ExamPaperForm" action="<?php echo e(url('admin/edit-resources/'.$data->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">PDF Name</label>
                                <input type="text" name="pdf_name" class="form-control" required id="pdf_name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                                   <div class="form-group">
                                    <label for="file">File Input</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="file"  id="file">
                                        <input type="hidden" name="file" class="form-control" value="<?php echo e($data->file); ?>" id="current_file">
                                        <label  for="exampleInputFile"></label>
                                    </div>
                             
                                    </div>
                                    <iframe src="<?php echo e(asset('images/resources/'.$data->file)); ?>"></iframe> 
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
                        subcat.append('<option value ="'+data[index].cat_name+'" >'+data[index].cat_name+'</option>');
                    });
                }
            });
          
        });
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/adminPages/explore/edit-resources.blade.php ENDPATH**/ ?>