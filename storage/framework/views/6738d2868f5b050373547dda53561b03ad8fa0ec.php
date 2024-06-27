
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
                              <div class="text-center">
                                   <h3>My Profile</h3>
                                <img src="<?php echo e(asset('images/user/User.jpg')); ?>">
                                  
                                  
                              </div>
                               
                                <div class="sign__form pt-20">
                                    <form action="<?php echo e(url('user/my-profile')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>Name</h5>
                                            <div class="sign__input">
                                                <input type="text" name="name" required value="<?php echo e($profile->fullname); ?>">
                                                <i class="fal fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>Email</h5>
                                            <div class="sign__input">
                                                <input type="text" name="email" readonly value="<?php echo e(Session::get('frontSession')); ?>">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>Mobile</h5>
                                            <div class="sign__input">
                                                <input type="text" name="phone" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  value="<?php echo e($profile->mobile); ?>">
                                                <i class="fal fa-phone"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="">
                                        <button class="e-btn"> <span></span> Update Profile</button>
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
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/user/myprofile.blade.php ENDPATH**/ ?>