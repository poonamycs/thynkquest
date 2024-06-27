
<?php $__env->startSection('content'); ?>

<main>

         <section class="blog__area pt-120 pb-120">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 pt-50">

                        <span class="page__title-pre"><?php echo e($blog->subject); ?></span>
                     
                        <div class="blog__meta d-flex align-items-center">
                           <div class="blog__author d-flex align-items-center mr-40">
                           <div class="">
                              <i class="fal fa-clock"></i>
                              <span><?php echo date('d M Y',strtotime($blog->date))?></span>
                           </div>
                           </div>
                          
                        </div>                      
                        <h2 class=""><?php echo e($blog->blog_title); ?></h2> 
                  </div>
                  <div class="col-xxl-12 col-xl-12 col-lg-12 mt-20">
                     <div class="blog__wrapper">
                     <div class="blog__img w-img mb-45">
                           <img src="<?php echo e(asset('images/blogs/'.$blog->blog_image)); ?>" height="600px"  alt="">
                        </div>
                        <div class="blog__text mb-40">
                           <p><?php echo nl2br($blog->description); ?></p>
                        </div>
                        
                      
                      
                        <div class="blog__recent mb-65">
                           <div class="section__title-wrapper mb-40">
                              <h2 class="section__title">Related <span class="yellow-bg-sm">Post <img src="assets/img/shape/yellow-bg-4.png" alt="">  </span></h2>
                              <p>You don't have to struggle alone, you've got our assistance and help.</p>
                           </div>
                           <div class="row">
                              <?php $__currentLoopData = $related_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rblog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $title = str_replace(array(" ","/"),'-',$rblog->blog_title); ?>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                 <div class="blog__wrapper" >
                                    <div class="blog__item white-bg mb-30 transition-3 fix">
                                       <div class="blog__thumb w-img fix">
                                          <a href="<?php echo e(url('blog-detail/'.$rblog->id.'/'.$title)); ?>">
                                             <img src="<?php echo e(asset('images/blogs/'.$rblog->blog_image)); ?>" width="300px" height="300px" alt="">
                                          </a>
                                       </div>
                                       <div class="blog__content">
                                          <div class="blog__tag">
                                             <a href="<?php echo e(url('blog-detail/'.$rblog->id.'/'.$title)); ?>"><?php echo e($rblog->subject); ?></a>
                                          </div>
                                          <h3 class="blog__title"><a href="<?php echo e(url('blog-detail/'.$rblog->id.'/'.$title)); ?>"><?php echo e($rblog->blog_title); ?></a></h3>
               
                                          <div class="blog__meta d-flex align-items-center justify-content-between">
                                             <div class="course__btn">
                                                   <a href="<?php echo e(url('blog-detail/'.$rblog->id.'/'.$title)); ?>" class="link-btn">
                                                      Know Details
                                                      <i class="far fa-arrow-right"></i>
                                                      <i class="far fa-arrow-right"></i>
                                                   </a>
                                                </div>
                                             <div class="blog__date d-flex align-items-center">
                                                <i class="fal fa-clock"></i>
                                                <span><?php echo date('d M Y',strtotime($rblog->date))?></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>      
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
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
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest\resources\views/pages/blog-details.blade.php ENDPATH**/ ?>