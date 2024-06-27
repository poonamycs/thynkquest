
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
                        <h1><a href="">Subscrption Details</a></h1>

                        <div class="row">
                            <div class="col-12">

                              
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Paper Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                      
                                        <?php $title = str_replace(array(" ","/"),'-',$details->paper_title); ?>
                                        <tr>
                                        <td><?php echo e($details->paper_id); ?></td>
                                        <td><?php echo e($details->paper_title); ?></td>
                                        <td><?php echo e($details->cat_name); ?></td>              
                                        <td>£<?php echo e($details->price); ?>.00  </td>              
                                        <td> <a class="btn" style="background:gainsboro;" href="<?php echo e(url('/paper-detail/'.$details->paper_id.'/'.$title)); ?>">View Paper</a> </td>              
                                
                                        </tr>
                                       
                                
                                
                                    
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




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/user/subs-details.blade.php ENDPATH**/ ?>