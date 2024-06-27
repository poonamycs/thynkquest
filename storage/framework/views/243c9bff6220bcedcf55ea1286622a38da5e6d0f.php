
<?php $__env->startSection('content'); ?>

<main>

         <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
            <div class="sign__shape">
               <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
               <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
               <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
               <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
               <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
               <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
            </div>
            <div class="container">
               <div class="row">
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
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="section__title-wrapper text-center mb-55 mt-50">
                        <h2 class="section__title">Sign in</h2>
                        <!--<p>if you don't have an account you can <a href="<?php echo e(url('/register')); ?>">Register here!</a></p>-->
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                           <div class="sign__in text-center">
                              <!-- <a href="#" class="sign__social text-start mb-15"><i class="fab fa-facebook-f"></i>Sign in with Facebook</a> -->
                              <!--<p> <span>........</span> <a href="sign-in.html">sign in</a> with your email<span> ........</span> </p>-->
                           </div>
                        </div>
                        <div class="sign__form">
                           <form action="<?php echo e(url('/sign-in')); ?>" method="post">
                           <?php echo csrf_field(); ?>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Work email</h5>
                                 <div class="sign__input">
                                    <input type="text" name="email" placeholder="E-Mail address">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-10">
                                 <h5>Password</h5>
                                 <div class="sign__input">
                                    <input type="password" name="password" placeholder="Password">
                                    <i class="fal fa-lock"></i>
                                 </div>
                              </div>
                              <div class="sign__action d-sm-flex justify-content-between mb-30">
                                 
                                 <div class="sign__forgot">
                                    <a href="<?php echo e(url('/forget-password')); ?>">Forgot your password?</a>
                                 </div>
                              </div>
                              <button class="e-btn  w-100"> <span></span> Sign In</button>
                              <div class="sign__new text-center mt-20">
                                 <p> <a href="<?php echo e(url('register')); ?>">Sign Up</a></p>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- sign up area end -->
         
      </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ycs-projects\thynkquest\resources\views/user/sign-in.blade.php ENDPATH**/ ?>