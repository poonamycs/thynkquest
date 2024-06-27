
<?php $__env->startSection('content'); ?>

<main>

<section class="blog__area pt-120 pb-120">
            <div class="container-fluid">
               <div class="row">
                   
                  <div class="col-xxl-3 col-xl-3 col-lg-3 pt-50">
                     <div class="events__sidebar pl-70">
                        <div class="events__sidebar-widget white-bg mb-20">
                           <div class="events__sidebar-shape">
                              <img class="events-sidebar-img-2" src="assets/img/events/event-shape-2.png" alt="">
                              <img class="events-sidebar-img-3" src="assets/img/events/event-shape-3.png" alt="">
                           </div>
                           <div class="events__info">
                              <div class="events__info-meta mb-25 d-flex align-items-center justify-content-between">
                                 <div class="events__info-price">
                                    <h5>Dashboard</h5>
                                    
                                 </div>
                                
                              </div>
                              <div class="events__info-content mb-35">
                                 <ul>
                                       <li class="d-flex align-items-center">
                                       <div class="events__info-icon pr-20">
                                       <i class="far fa-user"></i>
                                       </div>
                                       <div class="events__info-item">
                                       <a href="<?php echo e(url('user/my-profile')); ?>">My Profile</a> 
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon pr-20">
                                       <i class="far fa-box"></i>
                                       </div>
                                       <div class="events__info-item">
                                       <a href="<?php echo e(url('user/my-subscription')); ?>">My Subsription</a> 
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon pr-20">
                                       <i class="far fa-arrow-right"></i>
                                       </div>
                                       <div class="events__info-item">
                                       <a href="<?php echo e(url('user/my-courses')); ?>">Courses</a>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon pr-20">
                                       <i class="far fa-key"></i>
                                       </div>
                                       <div class="events__info-item">
                                          <a href="<?php echo e(url('user/change-password')); ?>">Change Password</a>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="events__join-btn">
                                 <a href="<?php echo e(url('user/logout')); ?>" class="e-btn e-btn-7 w-100">Logout <i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="events__sidebar-widget white-bg">
                           <div class="events__sponsor">
                              <h3 class="events__sponsor-title">Sponsors</h3>
                              <div class="events__sponsor-thumb mb-35">
                                 <img src="assets/img/events/sponsor-logo.png" alt="">
                              </div>
                              <div class="events__sponsor-info">
                                 <h3>Thomas R. Toe</h3>
                                 <h4>Email: <span>support@educal.com</span></h4>
                                 <div class="events__social d-xl-flex align-items-center">
                                    <h4>Share:</h4>
                                    <ul>
                                       <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                                       <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                       <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>

                  <div class="col-xxl-9 col-xl-9 col-lg-9 pt-50">
                        <h1><a href="">My Courses</a></h1>
                         <div id="res"></div>
                        <div class="row">
                            <div class="col-12">

                              
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Course Image</th>
                                        <th>Course Name</th>
                                        <!-- <th>Category</th>
                                        <th>Price</th> -->
                                        <th>Course File</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $title = str_replace(array(" ","/"),'-',$row->title); ?>
                                        <tr>
                                        <td><?php echo e($loop->index+1); ?></td>
                                        <td><img src="<?php echo e(asset('/images/courses/'.$row->image)); ?>" width="100px"  alt=""></td>
                                        <td><?php echo e($row->title); ?></td>
                                        <!-- <td><?php echo e($row->cat_name); ?></td>              
                                        <td>£<?php echo e($row->price); ?>.00  </td>               -->
                                        <td><a  style="background:gainsboro;" href="<?php echo e(asset('/images/courses/'.$row->pdf_file)); ?>" download>Download</a></td>              
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
            </div>
         </section>



</main>

<script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
<script>
   function Subscribe(){
      
      $('#res').html('<div class="alert alert-danger">To Download the pdf. Please subscribe to the Package</div>');
      setTimeout(function(){
         window.location.reload(1);
      }, 10000);
   }
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/user/mycourses.blade.php ENDPATH**/ ?>