<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit TagLine</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit TagLine</li>
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
                <h3 class="card-title">Edit TagLine</h3>
                <a href="<?php echo e(url('admin/view-taglines')); ?>" class="btn btn-primary thynk float-right">View TagLine</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="ExamPaperForm" action="<?php echo e(url('admin/edit-taglines/'.$data->id)); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Trending Image</label>
                                <input type="file" name="file" class="form-control"  id="image">
                                <img src="<?php echo e(asset('images/tagline/'.$data->image1)); ?>" width="200px" alt="">
                                <?php if(!empty($data->image1)): ?>
                                <input type="hidden" name="current_file" class="form-control"  id="current_file" value="<?php echo e($data->image1); ?>">
                                <?php endif; ?>
                            </div>
                            <small>Note: Image should be in jpg,jpeg,png format and image size should be 570px X 260 px</small>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">TagLine One</label>
                                <input type="text" name="taglineone" class="form-control" required id="title" value="<?php echo e($data->tagline); ?>">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">URL</label>
                                <input type="text" name="urlone" class="form-control" required id="title" value="<?php echo e($data->urlone); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Upcoming Image</label>
                                <input type="file" name="upcoming" class="form-control"  id="image">
                                <img src="<?php echo e(asset('images/tagline/'.$data->image2)); ?>" width="200px" alt="">
                                <?php if(!empty($data->image2)): ?>
                                <input type="hidden" name="upcoming_image" class="form-control"  id="current_file" value="<?php echo e($data->image2); ?>">
                                <?php endif; ?>
                            </div>
                            <small>Note: Image should be in jpg,jpeg,png format and image size should be 570px X 260 px</small>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">TagLine Two</label>
                                <input type="text" name="taglinetwo" class="form-control" required id="title" value="<?php echo e($data->taglinetwo); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"> URL</label>
                                <input type="text" name="urltwo" class="form-control" required id="title" value="<?php echo e($data->urltwo); ?>">
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
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/admintaglines/edit_tagline.blade.php ENDPATH**/ ?>