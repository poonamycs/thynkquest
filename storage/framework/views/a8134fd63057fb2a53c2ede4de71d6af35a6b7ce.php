
<?php $__env->startSection('content'); ?>

 <?php    
 
use App\Models\Category;
 
 ?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>11+ Mark Schemes Papers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">11+ Papers</li>
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
              <h3 class="card-title">Papers List</h3>
              <a href="<?php echo e(url('admin/add-papers')); ?>" class="btn btn-primary thynk float-right">Add Papers</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Paper Title</th>
                  <th>Category</th>
                  <th>Subject</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $papers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $subject = Category::where('id',$row->subject)->get(); 
                
                  
                ?>
                <tr>
                  <td><?php echo e($row->id); ?></td>
                  <td><img src="<?php echo e(asset('/images/papers/'.$row->file)); ?>" width="100px"  alt=""></td>
           
                  <td><?php echo e($row->title); ?></td>
                  <td><?php echo e($row->category->cat_name); ?></td>
                  <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($sub->cat_name); ?></td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                  <td>  <form action="<?php echo e(url('admin/change-status-papers/'.$row->id)); ?>" method="post"><?php echo csrf_field(); ?>
                    <label class="switch">
                        <input type="checkbox" name="status" <?php if($row->status==1): ?> checked <?php endif; ?> value="1" onchange="javascript:this.form.submit();">
                        <span class="slider round"></span>
                    </label>
                </form></td>
                  <td>
                    <a href="<?php echo e(url('admin/add-question-papers/'.$row->id)); ?>" class='btn btn-success' title="Add Papers"><i class="fas fa-plus"></i></a>
                    <a href="<?php echo e(url('admin/edit-papers/'.$row->id)); ?>" class='btn btn-info' title="Edit Paper"><i class="fas fa-edit"></i></a>
                
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
            <form role="form" id="CatForm" action="<?php echo e(url('admin/update-category')); ?>" method="Post">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="cat_id" id="cat_id">
                <div class="card-body">
                  <div class="form-group">
                    <label for="cat_name">Category Name</label>
                    <input type="text" name="cat_name" class="form-control" required id="cat_name" placeholder="enter category name">
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
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/adminPages/papers/view-papers.blade.php ENDPATH**/ ?>