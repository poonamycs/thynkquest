
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course ID : <?php echo e($id); ?> /Add Course Attribute</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Course Attribute</li>
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
                        <h3 class="card-title">Add Course Attribute</h3>
                        
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="CatForm" action="<?php echo e(url('admin/add-course-attributes/'.$id)); ?>" method="Post">
                    <?php echo csrf_field(); ?>
                    
                        <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Course Lessons</label>
                                <input type="text" name="lessons" class="form-control" required id="lessons" placeholder="Enter course lessons">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Course Duration</label>
                                <input type="text" name="duraion" class="form-control" required id="duraion" placeholder="Enter course duration">
                            </div>
                        </div>
                   
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Course Seats</label>
                                <input type="number" name="seats" class="form-control" required id="seats" placeholder="Enter course Seats">
                            </div>
                        </div>
                   
                       
                    
                        <button type="submit" class="btn btn-primary thynk">Submit</button>
                       
                            
                        </div>
                       
                    </form>
                    </div>
                </div>
                <div class="col-md-10">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Course Attributes</h3>
                    
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course Lessons</th>
                                        <th>Coure Duration</th>
                                        <th>Total Seats</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($loop->index+1); ?></td>
                                    <td><?php echo e($row->lessons); ?></td>
                                    <td><?php echo e($row->duration); ?></td>
                                    <td><?php echo e($row->seats); ?></td>
                                    <td><a href='javascript.void(0)' onclick='EditAttribute( <?php echo e($row->id); ?> )' data-toggle="modal" data-target="#modal-default" class='btn btn-info' title="Edit Category"><i class="fas fa-edit"></i></a> </td>
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
              <h4 class="modal-title">Edit Attribute</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" id="AttriButeForm" action="<?php echo e(url('admin/update-course-attribute')); ?>" method="Post">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="attr_id" id="attr_id">
                <div class="card-body">
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Course Lessons</label>
                                <input type="text" name="attr_lessons" class="form-control" required id="attr_lessons" placeholder="Enter course lessons">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Course Duration</label>
                                <input type="text" name="attr_duraion" class="form-control" required id="attr_duraion" placeholder="Enter course duration">
                            </div>
                        </div>
                   
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Course Seats</label>
                                <input type="number" name="attr_seats" class="form-control" required id="attr_seats" placeholder="Enter course Seats">
                            </div>
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
  function EditAttribute(id){
      $.ajax({
        type:"get",
        url:"<?php echo e(url('admin/get-course-attribute')); ?>",
        data:{id:id},
        success:function(data){
            console.log(data.lessons);
          $('#attr_lessons').val(data.lessons);
          $('#attr_duraion').val(data.duration);
          $('#attr_seats').val(data.seats);
          $('#attr_id').val(data.id);
        }
      });
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest\resources\views/adminPages/courses/course-attr.blade.php ENDPATH**/ ?>