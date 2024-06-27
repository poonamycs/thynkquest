
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Course Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Course Category</li>
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
                        <h3 class="card-title">Add Course Category</h3>
                        
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="CatForm" action="<?php echo e(url('admin/course-add-category')); ?>" method="Post">
                    <?php echo csrf_field(); ?>
                    
                        <div class="card-body">
                             <div class="input-group mb-3">
                            <input type="text" name="cat_name" class="form-control" required id="cat_name" placeholder="Enter category name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span> <button type="submit" class="btn btn-primary thynk">Submit</button</span>
                                </div>
                            </div>
                   
                       
                    
                            
                        </div>
                       
                    </form>
                    </div>
                </div>
                <div class="col-md-10">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Courses Category List</h3>
                    
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <!-- <th>Question Paper</th> -->
                                        <!-- <th>Answer Paper</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($loop->index+1); ?></td>
                                    <td><?php echo e($row->cat_name); ?></td>
                                    <td><a href='javascript.void(0)' onclick='EditCategory( <?php echo e($row->id); ?> )' data-toggle="modal" data-target="#modal-default" class='btn btn-info' title="Edit Category"><i class="fas fa-edit"></i></a> </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </thead>
                            </table>
                        </div>

                    </div>
    

                </div>

        </div>
        
        
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" id="CatForm" action="<?php echo e(url('admin/update-course-category')); ?>" method="Post">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="cat_id" id="cat_id">
                <div class="card-body">
                  <div class="form-group">
                    <label for="cat_name">Category Name</label>
                    <input type="text" name="categqory_name" class="form-control" required id="category_name" placeholder="enter category name">
                  </div>
   
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary thynk">Update</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
   
       
</div>
<script src="<?php echo e(asset('adminpanel/plugins/jquery/jquery.min.js')); ?>"></script>
<script>
  function EditCategory(id){
      $.ajax({
        type:"get",
        url:"<?php echo e(url('admin/get-course-categories')); ?>",
        data:{id:id},
        success:function(data){
            console.log(data.cat_name);
          $('#category_name').val(data.cat_name);
          $('#cat_id').val(data.id);
        }
      });
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/adminPages/courses/add-cat.blade.php ENDPATH**/ ?>