
<?php $__env->startSection('content'); ?>

<style>
    @media  only screen and(min-width: 667px){
        .mt-90{
            margin-top: 20px;
        }
    }
</style>
<div class="cartmini__area">
         <div class="cartmini__wrapper">
            <div class="cartmini__title">
               <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
               <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="cartmini__widget">
               <div class="cartmini__inner">
                  <ul>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="#">
                              <img src="assets/img/course/sm/cart-1.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="#">Strategy law and organization Foundation </a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$46.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="#">
                              <img src="assets/img/course/sm/cart-2.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="#">Fundamentals of music theory Learn new</a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$32.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="#">
                              <img src="assets/img/course/sm/cart-3.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="#">11+ Platinum Full Access Plan </a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$62.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                  </ul>
               </div>
               <div class="cartmini__checkout">
                  <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                     <span>$113.00</span>
                  </div>
                  <div class="cartmini__checkout-btn">
                     <a href="cart.html" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</a>
                     <a href="checkout.html" class="e-btn w-100"> <span></span> checkout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- sidebar area end -->

      <main>

         <!-- hero area start -->
         <section class="hero__area hero__height d-flex align-items-center grey-bg-2 p-relative">
            <div class="hero__shape">
               <img class="hero-1-circle" src="<?php echo e(asset('img/shape/hero/root.png')); ?>" width="80px" alt="">
               <img class="hero-1-circle-2" src="<?php echo e(asset('img/shape/hero/hero-1-circle-2.png')); ?>" alt="">
               <img class="hero-1-dot-2" src="<?php echo e(asset('img/shape/hero/hero-1-dot-2.png')); ?>" alt="">
            </div>
            <div class="container">
               <div class="hero__content-wrapper mt-90">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__content p-relative z-index-1">
                           <h3 class="hero__title">
                              <span></span>
                               Your <span class="yellow-shape">
                              one-stop<img src="<?php echo e(asset('img/shape/yellow-bg.png')); ?>" alt="yellow-shape"> </span> entrance exam prep platform.</h3>
                              <p>An exquisite virtual classroom and extended library of brilliant learning
                                 resources for grammar and independent schools.</p>
                              <a href="<?php echo e(url('all-courses')); ?>" class="e-btn">view all courses</a>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__thumb d-flex p-relative">
                           <div class="hero__thumb-shape">
                              <img class="hero-1-dot" src="<?php echo e(asset('img/shape/hero/hero-1-dot.png')); ?>" alt="">
                              <img class="hero-1-circle-3" src="<?php echo e(asset('img/shape/hero/hero-1-circle-3.png')); ?>" alt="">
                              <img class="hero-1-circle-4" src="<?php echo e(asset('img/shape/hero/hero-1-circle-4.png')); ?>" alt="">
                           </div>
                           <div class="hero__thumb-big mr-30">
                              <img src="<?php echo e(asset('img/hero/hero-1.jpg')); ?>" alt="">
                              
                              <div class="hero__quote hero__quote-animation">
                                 <div class="hero__class-text">
                                 <h4 class="mb-2">Personalised Assistance</h4>
                                 <a href="<?php echo e(url('/contact')); ?>">Contact Now</a>
                              </div>
                              </div>
                           </div>
                           <div class="hero__promotion education d-none d-lg-flex white-bg layer" data-depth="0.2" >
                              <div class="hero__promotion-icon mr-10">
                                 <span class="cap">
                                    <svg viewBox="0 0 791.8 791.8">
                                       <g>
                                          <path class="st0" d="M395.9,501l-236.2-72.7v71.5v49.9c0,56.1,105.8,101.6,236.3,101.6s236.3-45.5,236.3-101.6   c0-0.4-0.1-0.9-0.2-1.3V428.3L395.9,501z"/>
                                          <path class="st0" d="M0,318.7l84.4,30.2l7.2-15.4l31-2.6l4.4,4.6l-26.6,6.3l-3.9,11.5c0,0-60.1,125.6-51.3,187c0,0,37.5,22.4,75,0   l10-168v-14l55.8-12.6l-3.9,9.7L140.5,369l19.2,6.9l236.2,72.7l236.2-72.7l159.7-57.1L395.9,166.4L0,318.7z"/>
                                       </g>
                                       </svg>
                                 </span>
                              </div>
                              <div class="hero__promotion-text">
                                 <h5><span class="counter">100</span>s</h5>
                                 <p>Assisted Students</p>
                              </div>
                           </div>
                           <div class="hero__thumb-sm mt-50 d-none d-lg-block">
                              <img src="<?php echo e(asset('img/hero/hero-sm-1.jpg')); ?>" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- hero area end -->

         <!-- category area start -->
         <section class="category__area pt-120 pb-70">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                     <div class="section__title-wrapper mb-45">
                        <h2 class="section__title">Explore <br>What <span class="yellow-bg">we <img src="<?php echo e(asset('img/shape/yellow-bg-2.png')); ?>" alt="">  </span>Offer
                        </h2>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4">
                     <!-- <div class="category__more mb-50 float-md-end fix">
                        <a href="course-grid.html" class="link-btn">
                           View all Category
                           <i class="far fa-arrow-right"></i>
                           <i class="far fa-arrow-right"></i>
                        </a>
                     </div> -->
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <img src="<?php echo e(asset('img/icon/cr.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">11+ Mark Schemes</a></h4>
                           <p>Detailed solutions to past papers</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <img src="<?php echo e(asset('img/icon/fc.png')); ?>" width="60px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">Pre-11+ Foundation Courses</a></h4>
                           <p>Build your base for 11+</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <img src="<?php echo e(asset('img/icon/cr.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">11+ Accelerating Courses</a></h4>
                           <p>11+ elaborate learning</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <img src="<?php echo e(asset('img/icon/eb.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">11+ Exam Booster Courses</a></h4>
                           <p>11+ Exam exhaustive</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <img src="<?php echo e(asset('img/icon/vr.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">13+ Scholarship Courses</a></h4>
                           <p>13+ Advanced level</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <img src="<?php echo e(asset('img/icon/me.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">Mock Exams</a></h4>
                           <p>Simulate exam experience</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <img src="<?php echo e(asset('img/icon/vr.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">Verbal Reasoning</a></h4>
                           <p>11+ and 13+ resources</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <img src="<?php echo e(asset('img/icon/nvr.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">Non Verbal Reasoning</a></h4>
                           <p>11+ and 13+ resources</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                     <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                           <img src="<?php echo e(asset('img/icon/cr.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="category__content">
                           <h4 class="category__title"><a href="">English Creative Writing</a></h4>
                           <p>11+ and 13+ guide</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- category area end -->

         <!-- banner area start -->
         <section class="banner__area pb-110">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="banner__item p-relative mb-40" data-background="">
                       
                        <div class="banner__thumb d-none d-sm-block d-md-none d-lg-block">
                           <img src="<?php echo e(asset('img/banner/Trending.jpeg')); ?>" width="500px" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="banner__item p-relative mb-40" data-background="">
                     
                        <div class="banner__thumb banner__thumb-2 d-none d-sm-block d-md-none d-lg-block">
                           <img src="<?php echo e(asset('img/banner/Upcoming.jpeg')); ?>" style="padding-bottom:13px" width="500px" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- banner area end -->

         <!-- course area start -->
         
         <!-- course area end -->

         <!-- events area start -->
        
         <!-- events area end -->

         <!-- pricing area start -->
         <section class="counter__area pb-100">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xl-3 col-xl-6 offset-xl-3">
                     <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">We are <span class="yellow-bg yellow-bg-big">Proud<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 col-md-3 offset-md-0 col-sm-5 offset-sm-2">
                     <div class="counter__item mb-30">
                        <div class="counter__icon user mb-15">
                        <img src="<?php echo e(asset('img/icon/paper-stat.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="counter__content">
                           <h4><span class="counter">500</span>+</h4>
                           <p>Papers</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-5">
                     <div class="counter__item counter__pl-80 mb-30">
                        <div class="counter__icon book mb-15">
                           <svg viewBox="0 0 512 512">
                           <path class="st0" d="M458.7,512h-384c-29.4,0-53.3-23.9-53.3-53.3V53.3C21.3,23.9,45.3,0,74.7,0H416c5.9,0,10.7,4.8,10.7,10.7v74.7  h32c5.9,0,10.7,4.8,10.7,10.7v405.3C469.3,507.2,464.6,512,458.7,512z M42.7,96v362.7c0,17.6,14.4,32,32,32H448v-384H74.7  C62.7,106.7,51.6,102.7,42.7,96L42.7,96z M74.7,21.3c-17.6,0-32,14.4-32,32s14.4,32,32,32h330.7v-64H74.7z"/>
                           <path class="st0" d="M309.3,298.7c-2.8,0-5.5-1.1-7.6-3.1l-56.4-56.5l-56.4,56.4c-3.1,3.1-7.6,4-11.6,2.3c-4-1.6-6.6-5.5-6.6-9.8V96  c0-5.9,4.8-10.7,10.7-10.7S192,90.1,192,96v166.3l45.8-45.8c4.2-4.2,10.9-4.2,15.1,0l45.8,45.8V96c0-5.9,4.8-10.7,10.7-10.7  S320,90.1,320,96v192c0,4.3-2.6,8.2-6.6,9.9C312.1,298.4,310.7,298.7,309.3,298.7L309.3,298.7z"/>
                           </svg>
                        </div>
                        <div class="counter__content">
                           <h4><span class="counter">2,5000</span>+</h4>
                           <p>No. of Questions:</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 offset-xxl-0 col-xl-3 offset-xl-0 col-lg-3 offset-lg-0 col-md-3 offset-md-0 col-sm-5 offset-sm-2">
                     <div class="counter__item counter__pl-34 mb-30">
                        <div class="counter__icon graduate mb-15">
                           <svg viewBox="0 0 512 512">
                              <g id="Page-1">
                                 <g id="_x30_01---Degree">
                                    <path id="Shape" class="st0" d="M500.6,86.3L261.8,1c-3.8-1.3-7.9-1.3-11.7,0L11.3,86.3C4.5,88.7,0,95.2,0,102.4    s4.5,13.6,11.3,16.1L128,160.1v53.2c0,33.2,114.9,34.1,128,34.1s128-1,128-34.1v-53.2l25.6-9.1v19.6c0,9.4,7.6,17.1,17.1,17.1    h17.1c9.4,0,17.1-7.6,17.1-17.1V145c0-4-1-7.8-2.8-11.4l42.7-15.3c6.8-2.4,11.3-8.9,11.3-16.1S507.5,88.8,500.6,86.3L500.6,86.3z     M366.9,194.6c-32.5-14.8-101-15.4-110.9-15.4s-78.4,0.6-110.9,15.4v-74.3c5.1-6.6,45.4-17.8,110.9-17.8s105.8,11.2,110.9,17.8    V194.6z M256,230.4c-63.1,0-102.8-10.4-110.2-17.1c7.4-6.6,47.1-17.1,110.2-17.1s102.8,10.4,110.2,17.1    C358.8,220,319.1,230.4,256,230.4z M413.6,131.5L384,142v-22.5c0-33.2-114.9-34.1-128-34.1s-128,1-128,34.1V142L17.1,102.4    l239.1-85.3L426.7,78v43C421.3,123,416.7,126.6,413.6,131.5z M443.7,170.7h-17.1v-25.6c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5    v25.6H443.7z M443.7,120.7V84.1l51.2,18.3L443.7,120.7z"/>
                                    <path id="Shape_1_" class="st0" d="M486.4,264.5c-0.5,0-1,0-1.5,0.1C409.2,276.4,332.6,282,256,281.5    c-76.6,0.5-153.2-5.2-228.9-16.9c-0.5-0.1-1-0.1-1.5-0.1c-6,0-25.6,6.8-25.6,93.9s19.6,93.9,25.6,93.9c0.5,0,1-0.1,1.5-0.2    c58.2-9.2,116.9-14.6,175.8-16l-16.7,40c-2.6,6.4-1,13.7,3.9,18.5s12.3,6.1,18.6,3.4l6.5-2.8l2.8,6.5c2.7,6.3,8.9,10.4,15.7,10.4    h0.2c6.9-0.1,13.1-4.3,15.6-10.6l14.8-35.5l14.8,35.3c2.6,6.5,8.8,10.7,15.7,10.8h0.3c6.8,0,12.9-4,15.6-10.2l2.9-6.5l6.4,2.8    c6.3,2.8,13.8,1.5,18.7-3.4c5-4.8,6.5-12.2,3.9-18.6L326.3,437c53.1,1.9,106,7,158.5,15.4c0.5,0.1,1,0.1,1.5,0.1    c6,0,25.6-6.8,25.6-93.9S492.4,264.5,486.4,264.5L486.4,264.5z M283.3,298.4c3.5,13,5.6,26.4,6.2,39.9c-19.3-9-42-6.9-59.4,5.5    c-0.4-15.3-2.4-30.6-5.9-45.5c10.3,0.2,20.9,0.3,31.8,0.3C265.3,298.7,274.4,298.6,283.3,298.4z M264.5,435.2    c-23.6,0-42.7-19.1-42.7-42.7s19.1-42.7,42.7-42.7s42.7,19.1,42.7,42.7S288.1,435.2,264.5,435.2z M25.6,285.9    c6.5,23.6,9.4,48.1,8.5,72.5c0.9,24.5-2,48.9-8.5,72.5c-6.5-23.6-9.4-48.1-8.5-72.5C16.2,333.9,19.1,309.5,25.6,285.9z     M42.8,432.4c4.7-13.5,8.4-36.2,8.4-74s-3.7-60.5-8.4-74c54.2,7.5,108.8,12,163.5,13.5c5.1,19.7,7.5,40.1,7,60.5    c0,1.2,0,2.4-0.1,3.6c-10.2,17-11.3,38-2.7,55.9l-0.4,0.9C154.2,420.2,98.3,424.7,42.8,432.4L42.8,432.4z M233.9,494.9l-6.2-14.3    c-1.9-4.3-6.9-6.3-11.2-4.4l-14.4,6.3l20-48c8.2,8.3,18.7,14.1,30.1,16.5L233.9,494.9z M312.6,476.2c-4.3-1.9-9.3,0.1-11.2,4.4    l-6.3,14.2L276.8,451c11.5-2.4,21.9-8.1,30.2-16.5l20,47.8L312.6,476.2z M484.7,434.8c-54.8-8.4-110.1-13.6-165.5-15.4l-0.6-1.5    c10.7-22.6,6.1-49.5-11.5-67.3c-0.1-17.7-2.1-35.3-6.1-52.6c61.5-1.4,122.9-6.7,183.7-16.1c4,6.7,10.2,33.3,10.2,76.4    S488.6,428,484.7,434.8L484.7,434.8z"/>
                                 </g>
                              </g>
                              </svg>
                        </div>
                        <div class="counter__content">
                           <h4><span class="counter">09</span>+</h4>
                           <p>Exams covered:</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 offset-xxl-1 col-xl-3 col-lg-3 col-md-3 col-sm-5">
                     <div class="counter__item mb-30">
                        <div class="counter__icon globe mb-15">
                        <img src="<?php echo e(asset('img/icon/time-stat.png')); ?>" width="40px" alt="">
                        </div>
                        <div class="counter__content">
                           <h4><span class="counter">90</span>min+</h4>
                           <p>Average time spent:</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- pricing area end -->

         <!-- cta area start -->
         <!--<section class="cta__area mb--120">-->
         <!--   <div class="container">-->
         <!--      <div class="cta__inner fix" style="background:#fb4e32">-->
         <!--         <div class="cta__shape">-->
         <!--            <img src="assets/img/cta/pink-circle.png" alt="">-->
         <!--         </div>-->
         <!--         <div class="row align-items-center">-->
         <!--            <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">-->
         <!--               <div class="cta__content">-->
         <!--                  <h3 class="cta__title">You can be your own Guiding star with our help</h3>-->
         <!--               </div>-->
         <!--            </div>-->
         <!--            <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">-->
         <!--               <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">-->
         <!--                  <a href="contact.html" class="e-btn e-btn-white">Get Started</a>-->
         <!--               </div>-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</section>-->
         <!-- cta area end -->

      </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/index.blade.php ENDPATH**/ ?>