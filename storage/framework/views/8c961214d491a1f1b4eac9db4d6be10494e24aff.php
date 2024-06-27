
<?php $__env->startSection('content'); ?>


<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subscription</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subscription</li>
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
              <h3 class="card-title">Subscription List</h3>
              <a href="<?php echo e(url('admin/add-subscription')); ?>" class="btn btn-primary thynk float-right">Add Subscription</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Paper ID</th>
                  <th>Paper Title</th>
                  <th>Category</th>
                  <th>Subscription Type</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php $__currentLoopData = $subscribe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(in_array($row->paper_id,$paper_id)): ?>
                <tr>
                  <td><?php echo e($row->paper_id); ?></td>
                  <td><?php echo e($row->paper->title); ?></td>
                  <td><?php echo e($row->category->cat_name); ?></td>
                  <td><?php echo e($row->subs_type); ?></td>
                  <td>£ <?php echo e($row->price); ?></td>
                  <td><?php echo e($row->discount); ?>%</td>
                  <td>
                  <form action="<?php echo e(url('admin/change-status-subscription/'.$row->id)); ?>" method="post"><?php echo csrf_field(); ?>
                    <label class="switch">
                        <input type="checkbox" name="status" <?php if($row->status==1): ?> checked <?php endif; ?> value="1" onchange="javascript:this.form.submit();">
                        <span class="slider round"></span>
                    </label>
                </form>
                </td>
                  <td><a href="<?php echo e(url('admin/edit-subscription/'.$row->id)); ?>" class='btn btn-info' title="Edit Paper"><i class="fas fa-edit"></i></a>
             
                </td>
         
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
               
          
           
               
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
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
  function EditCategory(id){
      $.ajax({
        type:"get",
        url:"<?php echo e(url('admin/get-categories')); ?>",
        data:{id:id},
        success:function(resp){
          $('#cat_name').val(resp['cat_name']);
          $('#cat_id').val(resp['id']);
        }
      });
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ycs-projects\thynkquest\resources\views/adminPages/subs/view-subsription.blade.php ENDPATH**/ ?>