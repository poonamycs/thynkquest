<?php $__env->startSection('content'); ?>



<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TagLine</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">TagLine</li>
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
              <h3 class="card-title">TagLine List</h3>
              <!--<a href="<?php echo e(url('admin/add-taglines')); ?>" class="btn btn-primary thynk float-right">Add TagLine</a>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr> 
                  <th>ID</th>
                  <th>Tageline For Image1</th>
                  <th>Tageline For Image2</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $tagline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->id); ?></td>
                  <td><?php echo e($row->tagline); ?></td>
                  <td><?php echo e($row->taglinetwo); ?></td>
                  <td>
                   <a href="<?php echo e(url('admin/edit-taglines/'.$row->id)); ?>" class='btn btn-info' title="Edit Paper"><i class="fas fa-edit"></i></a>
                   <a href="<?php echo e(url('admin/delete-tagline/'.$row->id)); ?>" onclick="return confirm('Are you sure? You want to delete this category.')" class='btn btn-danger' title="Delete Category"><i class="fas fa-trash-alt"></i></a> 
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
                  <div class="form-group">
                    <label for="cat_name">Category Description</label>
                    <input type="text" name="cat_desc" class="form-control" required id="cat_description" placeholder="enter category name">
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




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ycs-projects\thynkquest\resources\views/adminPages/admintaglines/view_tagline.blade.php ENDPATH**/ ?>