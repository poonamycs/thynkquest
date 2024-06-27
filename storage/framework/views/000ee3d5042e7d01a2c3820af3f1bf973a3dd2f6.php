
<?php $__env->startSection('content'); ?>

<main>

         <section class="blog__area pt-120 pb-120">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 pt-50">

                        <span class="page__title-pre"><?php echo e($data->subject); ?></span>
                     
                        <div class="blog__meta d-flex align-items-center">
                           <div class="blog__author d-flex align-items-center mr-40">
                         
                           </div>
                          
                        </div>                      
                        <h2 class=""><?php echo e($data->title); ?></h2> 
                  </div>
                  <div class="col-xxl-12 col-xl-12 col-lg-12 mt-20">
                     <div class="blog__wrapper">
                     <div class="blog__img w-img mb-45">
                     <iframe src="<?php echo e(asset('images/blogs/'.$data->file)); ?>" height="600" width="100%" title="<?php echo e($data->title); ?>"></iframe>
                         
                        </div>
                        <div class="blog__text mb-40">
                           <p><?php echo nl2br($data->description); ?></p>
                        </div>
                        
                      
                        
                        
                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
         <!-- blog area end -->

      </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/cms/explore-more-details.blade.php ENDPATH**/ ?>