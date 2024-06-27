
<?php $__env->startSection('content'); ?>

 

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Schools</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Schools</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
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
  <div class="row">
    <div class="col-12">

    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Schools List</h3>
              <a href="<?php echo e(url('admin/add-Schools')); ?>" class="btn btn-primary thynk float-right">Add Schools</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>School Name</th>
                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->id); ?></td>
           
                  <td><?php echo e($row->school_name); ?></td>
           
                  <td>
                    <!--<a href="<?php echo e(url('admin/add-question-papers/'.$row->id)); ?>" class='btn btn-success' title="Add Papers"><i class="fas fa-plus"></i></a>-->
                    <a href='javascript.void(0)' onclick='EditSchool( <?php echo e($row->id); ?> )' data-toggle="modal" data-target="#modal-default" class='btn btn-info' title="Edit Paper"><i class="fas fa-edit"></i></a>
                
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
            <form role="form" id="CatForm" action="<?php echo e(url('admin/update-school')); ?>" method="Post">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="school_id" id="school_id">
                <div class="card-body">
                  <div class="form-group">
                    <label for="cat_name">School Name</label>
                    <input type="text" name="school_name" class="form-control" required id="school_name" placeholder="enter school name">
                  </div>
                  <!--<div class="form-group">-->
                  <!--  <label for="cat_name">School Conact</label>-->
                  <!--  <input type="text" name="number" class="form-control" required id="number" placeholder="Enter school contact number">-->
                  <!--</div>-->
                  <!--<div class="form-group">-->
                  <!--  <label for="cat_name">School Address</label>-->
                  <!--  <textarea name="address" class="form-control" required id="address" placeholder="Enter school address"></textarea>-->
                  <!--</div>-->
   
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
</section>

       
</div>


<script src="<?php echo e(asset('adminpanel/plugins/jquery/jquery.min.js')); ?>"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script>
  function EditSchool(id){
      $.ajax({
        type:"get",
        url:"<?php echo e(url('admin/get-school')); ?>",
        data:{id:id},
        success:function(resp){
          $('#school_name').val(resp['school_name']);
        //   $('#address').val(resp['school_address']);
        //   $('#number').val(resp['school_contact']);
          $('#school_id').val(resp['id']);
        }
      });
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/adminPages/schools/view-school.blade.php ENDPATH**/ ?>