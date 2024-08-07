
<?php $__env->startSection('content'); ?>



<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>One To One Tutoring Enquiry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">One To One Tutoring Enquiry</li>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Price</th>
                  <th>year</th>
                  <th>Payment ID</th>
                  <!--<th>Message</th>-->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $tutoringenquiry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->id); ?></td>
                  <td><?php echo e($row->name); ?></td>
                  <td><?php echo e($row->email); ?></td>
                  <td><?php echo e(getSubjectName($row->subject)); ?></td>
                  <td><?php echo e($row->price); ?></td>
                  <td><?php echo e($row->year); ?></td>
                  <td><?php echo e($row->razorpay_payment_id); ?></td>
                  <!--<td><?php echo e($row->comment); ?></td>-->
                  <td class="d-flex">
                    <a href='javascript.void(0)' onclick='SeeMessage( <?php echo e($row->id); ?> )' data-toggle="modal" data-target="#modal-default" class='btn btn-warning mr-2' title="view message"><i class="fas fa-eye"></i></a>
                   <a href="<?php echo e(url('admin/deleteonetoneenquiry/'.$row->id)); ?>" onclick="return confirm('Are you sure? You want to delete this category.')" class='btn btn-danger' title="Delete Category"><i class="fas fa-trash-alt"></i></a> 
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
                    <label for="cat_name">Name</label>
                    <p id="name"></p>
                  </div>
                  <div class="form-group">
                    <label for="cat_name">Email</label>
                    <p id="email"></p>
                  </div>
                  <div class="form-group">
                    <label for="cat_name">Subject</label>
                    <p id="subject"></p>
                  </div>
                  <div class="form-group">
                    <label for="cat_name">price</label>
                    <p id="price"></p>
                  </div><div class="form-group">
                    <label for="cat_name">year</label>
                    <p id="year"></p>
                  </div><div class="form-group">
                    <label for="cat_name">razorpay_payment_id</label>
                    <p id="razorpay_payment_id"></p>
                  </div><div class="form-group">
                    <label for="cat_name">Message</label>
                    <p id="comment"></p>
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
        url:"<?php echo e(url('admin/view-onetone-enquiry')); ?>",
        data:{id:id},
        success:function(resp){
          $('#name').html(resp['name']);
          $('#email').html(resp['email']);
          $('#subject').html(resp['subject']);
          $('#price').html(resp['price']);
          $('#year').html(resp['year']);
          $('#razorpay_payment_id').html(resp['razorpay_payment_id']);
          $('#comment').html(resp['comment']);
  
        }
      });
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back_layout.back_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/adminPages/one-to-one-tutoring.blade.php ENDPATH**/ ?>