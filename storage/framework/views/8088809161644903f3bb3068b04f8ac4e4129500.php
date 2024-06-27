
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
                                       <a href="<?php echo e(url('user/my-profile')); ?>"><p style="color:black">My Profile</p></a> 
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon pr-20">
                                       <i class="far fa-box"></i>
                                       </div>
                                       <div class="events__info-item">
                                       <a href="<?php echo e(url('user/my-subscription')); ?>"><p style="color:black">My Subsription</p></a> 
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon pr-20">
                                       <i class="far fa-arrow-right"></i>
                                       </div>
                                       <div class="events__info-item">
                                       <a href="<?php echo e(url('user/my-courses')); ?>"><p style="color:black">Courses</p></a>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon pr-20">
                                       <i class="far fa-key"></i>
                                       </div>
                                       <div class="events__info-item">
                                          <a href="<?php echo e(url('user/change-password')); ?>"><p style="color:black">Change Password</p></a>
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
                          <div class="col-xxl-10 col-xl-10 col-lg-10">
                                <h3>Change Password</h3>
                                <div class="sign__form pt-20">
                                    <form action="<?php echo e(url('user/change-password')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>Email</h5>
                                            <div class="sign__input">
                                                <input type="text" name="email" readonly value="<?php echo e(Auth::guard('web')->User()->email); ?>">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>Current Password</h5>
                                            <div class="sign__input">
                                                <input type="password" name="old_password" placeholder="Current Password">
                                                <i class="fal fa-key"></i>
                                            </div>
                                        </div>
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>New Password</h5>
                                            <div class="sign__input">
                                                <input type="password" name="new_password" placeholder="New Password">
                                                <i class="fal fa-key"></i>
                                            </div>
                                        </div>
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>Confirm Password</h5>
                                            <div class="sign__input">
                                                <input type="password" name="confirm_pass" placeholder="Confirm New Password">
                                                <i class="fal fa-key"></i>
                                            </div>
                                        </div>
                                        <div class="">
                                        <button class="e-btn"> <span></span> Update</button>
                                        </div>
                                    </div>
                                    </form>
                                </div> 
                          </div>
                      </div>
                  </div>
               </div>
            </div>
         </section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/user/change_password.blade.php ENDPATH**/ ?>