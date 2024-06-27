
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
                        <h1><a href="">My Subscriptions</a></h1>

                        <div class="row">
                                 <?php $__currentLoopData = $subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-4">
                                    <div class="price__item grey-bg mb-30 p-relative">
                                    <div class="price__offer">
                                          <span>Best Value</span>
                                       </div>
                                       <div class="price__head">
                                          <h3><?php echo e($plan->cat_name); ?></h3>
                                          <p>Perfect for small marketing teams</p>
                                       </div>
                                       <div class="price__tag mb-25">
                                          <h4>£ <?php echo e($plan->price); ?><span>/ <?php echo e($plan->subs_type); ?></span></h4>
                                       </div>
                                       <div class="price__features mb-40">
                                          <ul>
                                             <li><i class="far fa-check"></i>Course Discussions</li>
                                             <li><i class="far fa-check"></i>Content Library</li>
                                             <li><i class="far fa-check"></i>1-hour Mentorship</li>
                                          </ul>
                                       </div>
                                     <!-- <form action="<?php echo e(url('/checkout-form')); ?>" method="post">
                                     <?php echo csrf_field(); ?> 
                                     <input type="hidden" name="subs_id" id="subs_id" value="<?php echo e($plan->id); ?>">
                                     <button type="submit" class="e-btn e-btn-4">Subscribe Now</button>
                                    </form> -->
                                       
                                    </div>
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 
                              </div>                   
                     
                  </div>
                 
                  
               </div>
            </div>
         </section>



</main>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest\resources\views/user/subscription.blade.php ENDPATH**/ ?>