<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>ThynkQuest – Online Learning and Education</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/Fevicon-01.png')); ?>">
      <!-- CSS here -->
      <link rel="stylesheet" href="<?php echo e(asset('css/preloader.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/meanmenu.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/swiper-bundle.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/backToTop.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/jquery.fancybox.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/fontAwesome5Pro.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/elegantFont.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/default.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
   </head>
   <body>

      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two" style="left:20px;"></div>
               <div class="object" id="object_three" style="left:40px;"></div>
               <div class="object" id="object_four" style="left:60px;"></div>
               <div class="object" id="object_five" style="left:80px;"></div>
            </div>
         </div>  
      </div>
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- Add your site or application content here -->  
      <?php echo $__env->make('layouts/front_layout/front_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End Main Header -->

    <!-- main body content -->
    
        <?php echo $__env->yieldContent('content'); ?>
        <div class="body-overlay"></div>
      <!-- cart mini area end -->


      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="<?php echo e(asset('img/logo/ThynkQuest Logo-01.png')); ?>" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu fix"></div>
                <div>
                     <a href="<?php echo e(url('sign-in')); ?>" class="e-btn e-btn-border" style="padding:2px 20px !important;">Sign In</a>
                    <a href="<?php echo e(url('register')); ?>" class="e-btn" style="padding:0px 20px !important;">Register</a>
                </div>
               <div class="sidebar__search p-relative mt-40 ">
                  <form action="#">
                     <input type="text" placeholder="Search...">
                     <button type="submit"><i class="fad fa-search"></i></button>
                  </form>
               </div>
               <!--<div class="sidebar__cart mt-30">-->
               <!--   <a href="#">-->
               <!--      <div class="header__cart-icon">-->
               <!--         <svg viewBox="0 0 24 24">-->
               <!--            <circle class="st0" cx="9" cy="21" r="1"/>-->
               <!--            <circle class="st0" cx="20" cy="21" r="1"/>-->
               <!--            <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>-->
               <!--         </svg>-->
               <!--      </div>-->
               <!--      <span class="cart-item">2</span>-->
               <!--   </a>-->
               <!--</div>-->
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
    <!-- End main body content -->

    <!-- Main Footer -->
        <?php echo $__env->make('layouts/front_layout/front_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- pre loader area start -->
    
      <script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/vendor/waypoints.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery.meanmenu.js')); ?>"></script>
      <script src="<?php echo e(asset('js/swiper-bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery.fancybox.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/isotope.pkgd.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/parallax.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/backToTop.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery.counterup.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/ajax-form.js')); ?>"></script>
      <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/imagesloaded.pkgd.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/main.js')); ?>"></script>
   </body>
</html>

<?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/layouts/front_layout/front_design.blade.php ENDPATH**/ ?>