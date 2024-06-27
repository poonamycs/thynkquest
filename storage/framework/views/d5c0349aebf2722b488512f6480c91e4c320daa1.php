
<?php $__env->startSection('content'); ?>

<main>

<section class="blog__area pt-120 pb-120">
            <div class="container-fluid">
               <div class="row">
                   
                  <div class="col-xxl-4 col-xl-4 col-lg-4 pt-50">
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

                  <div class="col-xxl-8 col-xl-8 col-lg-8 pt-50">
                        <h1><a href=""></a></h1>

                        <h3 class="">Hello <?php echo e($user->fullname); ?>!</h3> 
                        <div class="blog__meta d-flex align-items-center">
                           <div class="blog__author d-flex align-items-center mr-40">
                              <div class="blog__author-thumb mr-10">
                              </div>
                              <div class="">
                                 <i class="fal fa-envelope"></i>
                                 <span><?php echo e($user->email); ?></span>
                              </div>
                           </div>
                           <div class="">
                              <i class="fal fa-clock"></i>
                              <?php $date = date('d F Y');?>
                              <span><?php echo e(date('d F Y', strtotime($date))); ?></span>
                           </div>
                        </div>                      
                     
                  </div>
                 
                  
               </div>
            </div>
         </section>



</main>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-project\thynkquest\resources\views/user/dashboard.blade.php ENDPATH**/ ?>