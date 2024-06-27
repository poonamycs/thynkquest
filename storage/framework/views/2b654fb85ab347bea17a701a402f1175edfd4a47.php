<?php $__env->startSection('content'); ?>
<?php
use App\Models\QuestionAnsEnquiry;
?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Question Answer Query</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Question Answer Query</li>
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
              <h3 class="card-title">Enquiry List</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Paper Title</th>
                  <th>Question No.</th>
                  <th>Query</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $questionansenquiry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <tr>
                  <td><?php echo e($row->id); ?></td>
                  <td><?php echo e($row->student_name); ?></td>
                  <td><?php echo e($row->cat_name); ?></td>
                  <td>
                      <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php $question = QuestionAnsEnquiry::where('id',$row->id)->get(); ?>
                      <?php echo e($sub->cat_name); ?>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </td>
                  <td><?php echo e($row->paper_title); ?></td>
                  <td><?php echo e($row->q_no); ?></td>
                  <td><?php echo e($row->msg); ?></td>
                  <td>
                    <a href='javascript.void(0)' onclick='SeeMessage( <?php echo e($row->id); ?> )' data-toggle="modal" data-target="#modal-default" class='btn btn-warning' title="view message"><i class="fas fa-eye"></i></a>
                  <!-- <a href="<?php echo e(url('admin/delete-category/'.$row->id)); ?>" onclick="return confirm('Are you sure? You want to delete this category.')" class='btn btn-danger' title="Delete Category"><i class="fas fa-trash-alt"></i></a> -->
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                  <div class="form-group">
                    <label for="cat_name">Student Name</label>
                    <p id="name"></p>
                  </div>
                  <div class="form-group">
                    <label for="cat_name">Category</label>
                    <p id="category"></p>
                  </div>
                  <div class="form-group">
                    <label for="cat_name">Paper Title</label>
                    <p id="paper_title"></p>
                  </div>
                  <div class="form-group">
                    <label for="cat_name">Question No.</label>
                    <p id="q_no"></p>
                  </div>
                  <div class="form-group">
                    <label for="cat_name">Query</label>
                    <p id="msg"></p>
                  </div>
   
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          
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
  function SeeMessage(id){
      $.ajax({
        type:"get",
        url:"<?php echo e(url('admin/getquestionansdenquiry')); ?>",
        data:{id:id},
        success:function(resp){
          $('#name').html(resp['student_name']);
          $('#category').html(resp['cat_name']);
          $('#paper_title').html(resp['paper_title']);
          $('#q_no').html(resp['q_no']);
          $('#msg').html(resp['msg']);
        }
      });
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/question_answers_form.blade.php ENDPATH**/ ?>