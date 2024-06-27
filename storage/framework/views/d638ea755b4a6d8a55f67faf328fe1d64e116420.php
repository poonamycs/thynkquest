
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Subscription</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Subscription</li>
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
                <h3 class="card-title">Add Subscription</h3>
                <a href="<?php echo e(url('admin/view-subscription')); ?>" class="btn btn-primary thynk float-right">View Subscription</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="PaperForm" action="<?php echo e(url('admin/add-subscription')); ?>" enctype='multipart/form-data' method="Post">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                                <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control select2" required name="cat_id" id="cat_id" style="width: 100%;">
                                <option value="">--Choose Categories--</option>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($row->id); ?>'><?php echo e($row->cat_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>
                        </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                    <label>Select Papers</label>
                                    <select class="form-control select2" required name="paper_id" id="paper_id" style="width: 100%;">
                                    <option value="">--choose Papers--</option>
                                    </select>
                                </div>
                        </div>
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Subscription Type (In Months)</label>
                                    <select class="form-control select2" name="subs_type" id="subs_type" style="width: 100%;">
                                    <option value="6">6 Months</option>
                                    <option value="12">12 Months</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Subscription Price</label>
                                <input type="text" name="price" class="form-control" required id="price" placeholder="Enter subscription price">
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
            $('#cat_id').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            //console.log(cat_id);
            //ajax
            $.ajax({
                type:"get",
                    url:"<?php echo e(url('admin/sub-papers')); ?>",
                    data:{cat_id:cat_id},
                    success:function(data){
                        console.log(data);
                    var subcat =  $('#paper_id').empty();
                    $.each(data,function(index){
                        var option = $('<option/>', {id:data[index].id, value:data[index].title});
                        subcat.append('<option value ="'+data[index].id+'">'+data[index].id+'. '+data[index].title+'</option>');
                    });
                }
            });
          
        });
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/adminPages/subs/add-subsription.blade.php ENDPATH**/ ?>