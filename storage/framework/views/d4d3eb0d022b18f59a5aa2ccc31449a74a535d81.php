
<?php $__env->startSection('content'); ?>


<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo e(asset('img/page-title/page-title-2.jpg')); ?>">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Blog Grid</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- blog area start -->
         <section class="blog__area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <div class="row">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $title = str_replace(array(" ","/"),'-',$blog->blog_title); ?>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                           <div class="blog__wrapper" >
                              <div class="blog__item white-bg mb-30 transition-3 fix">
                                 <div class="blog__thumb w-img fix">
                                    <a href="<?php echo e(url('blog-detail/'.$blog->id.'/'.$title)); ?>">
                                       <img src="<?php echo e(asset('images/blogs/'.$blog->blog_image)); ?>" width="300px" height="300px" alt="">
                                    </a>
                                 </div>
                                 <div class="blog__content">
                                    <div class="blog__tag">
                                       <a href="<?php echo e(url('blog-detail/'.$blog->id.'/'.$title)); ?>"><?php echo e($blog->subject); ?></a>
                                    </div>
                                    <h3 class="blog__title"><a href="<?php echo e(url('blog-detail/'.$blog->id.'/'.$title)); ?>"><?php echo e($blog->blog_title); ?></a></h3>
         
                                    <div class="blog__meta d-flex align-items-center justify-content-between">
                                        <div class="course__btn">
                                             <a href="<?php echo e(url('blog-detail/'.$blog->id.'/'.$title)); ?>" class="link-btn">
                                                Know Details
                                                <i class="far fa-arrow-right"></i>
                                                <i class="far fa-arrow-right"></i>
                                             </a>
                                          </div>
                                       <div class="blog__date d-flex align-items-center">
                                          <i class="fal fa-clock"></i>
                                          <span><?php echo date('d M Y',strtotime($blog->date))?></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                     
                     <section class="cta__area mb--120">
            <div class="container">
               <div class="cta__inner blue-bg fix">
                  <div class="cta__shape">
                     <img src="assets/img/cta/cta-shape.png" alt="">
                  </div>
                  <div class="row align-items-center">
                     <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                        <div class="cta__content">
                        <form action="#">
                                       <div class="footer__subscribe-input mb-15">
                                          <input type="email" placeholder="Your email address">
                                          <button type="submit">
                                             <i class="far fa-arrow-right"></i>
                                             <i class="far fa-arrow-right"></i>
                                          </button>
                                       </div>
                                    </form>
                        </div>
                     </div>
                     <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                        <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                           <p style="color:black;">Subscribe for News Letter<br/> Get the latest news and updates right at your inbox.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

                        
                        
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                              
                           </div>
                        </div>
                     </div>
                  </div>
               
               </div>
            </div>
         </section>
         <!-- blog area end -->

      </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-project\thynkquest\resources\views/pages/blogs.blade.php ENDPATH**/ ?>