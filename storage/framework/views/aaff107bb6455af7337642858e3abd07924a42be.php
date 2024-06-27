
<?php $__env->startSection('content'); ?>


<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo e(asset('img/page-title/page-title-2.jpg')); ?>">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Explore More</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Explore More</li>
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
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $title = str_replace(array(" ","/"),'-',$row->title); ?>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                           <div class="blog__wrapper" >
                              <div class="blog__item white-bg mb-30 transition-3 fix">
                                 <div class="blog__thumb w-img fix">
                                    
                                 </div>
                                 <div class="blog__content">
                                    <div class="blog__tag">
                                       <a href="<?php echo e(url('explore-detail/'.$row->id.'/'.$title)); ?>"><?php echo e($row->subject); ?></a>
                                    </div>
                                    <h3 class="blog__title"><a href="<?php echo e(url('explore-detail/'.$row->id.'/'.$title)); ?>"><?php echo e($row->title); ?></a></h3>
                                    <p><?php echo substr($row->description,35,100); ?></p>
                                    <div class="blog__meta d-flex align-items-center justify-content-between">
                                        <div class="course__btn">
                                             <a href="<?php echo e(url('explore-detail/'.$row->id.'/'.$title)); ?>" class="link-btn">
                                                Know Details
                                                <i class="far fa-arrow-right"></i>
                                                <i class="far fa-arrow-right"></i>
                                             </a>
                                          </div>
                                       <div class="blog__date d-flex align-items-center">
                                         
                        
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                        
                        
                        
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
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/cms/explore-more.blade.php ENDPATH**/ ?>