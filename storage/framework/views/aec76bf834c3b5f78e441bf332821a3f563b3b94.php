
<?php $__env->startSection('content'); ?>

 

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Explore More</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Explore More</li>
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
              <h3 class="card-title">Explore More</h3>
              <a href="<?php echo e(url('admin/add-explore-more')); ?>" class="btn btn-primary thynk float-right">Add Explore More</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Subject</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->id); ?></td>
                  <td><?php echo e($row->subject); ?></td>
                  <td style="width:300px"><?php echo e($row->title); ?></td>
                  <td style="width:500px"><?php echo substr($row->description,30,300); ?></td>
                  <td>  <form action="<?php echo e(url('admin/change-status-explore/'.$row->id)); ?>" method="post"><?php echo csrf_field(); ?>
                    <label class="switch">
                        <input type="checkbox" name="status" <?php if($row->status==1): ?> checked <?php endif; ?> value="1" onchange="javascript:this.form.submit();">
                        <span class="slider round"></span>
                    </label>
                </form></td>
                  
                  <td>
                    <!-- <a href="" class='btn btn-success' title="Add Papers"><i class="fas fa-plus"></i></a> -->
                    <a href="<?php echo e(url('admin/edit-explore-more/'.$row->id)); ?>"  class='btn btn-info' title="Edit Blog"><i class="fas fa-edit"></i></a>
                
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
          $('#address').val(resp['school_address']);
          $('#number').val(resp['school_contact']);
          $('#school_id').val(resp['id']);
        }
      });
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/adminPages/cms/view-explore-more.blade.php ENDPATH**/ ?>