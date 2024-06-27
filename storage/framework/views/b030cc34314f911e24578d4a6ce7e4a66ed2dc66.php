
<?php $__env->startSection('content'); ?>

<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="" data-background="" style="background-color:#DA2F58;">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-145">
                         <?php if(count($courselist) > 0): ?> 
                        <h3 class="page__title"><?php echo e($courselist[0]->cat_name); ?></h3> 
                         <p class="text-white mt-2"><?php echo e($courselist[0]->cat_description); ?></p> 
                        <?php endif; ?>
                      
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- course area start -->
         <section class="course__area pt-120 pb-120">
            <div class="container">
               <!--<div class="course__tab-inner grey-bg-2 mb-50">-->
               <!--  <h3 class="text-center">Boost your child's confidence with our realistic exam style papers</h3>-->
               <!--</div>-->
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="course__tab-conent">
                        <div class="tab-content" id="courseTabContent">
                           <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                              <div class="row">
                                 <?php $__currentLoopData = $courselist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php $title = str_replace(array(" ","/"),'-',$list->title); ?>
                                 <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                    <div class="course__thumb w-img p-relative fix">
                                          <a href="<?php echo e(url('courses-detail/'.$list->id.'/'.$title)); ?>">
                                             <img src="<?php echo e(asset('/images/courses/'.$list->image)); ?>" width="300px" height="200"  alt="">
                                          </a>
                                          <div class="course__tag">
                                             <a href="#"><?php echo e($list->cat_name); ?></a>
                                          </div>
                                       </div>
                                       <div class="course__content">
                                       <div class="course__lesson">
                                                <!--<span><i class="far fa-book-alt"></i>43 Lesson</span>-->
                                             </div>
                                        
                                          <div class="course__teacher d-flex align-items-center">
                                             <!-- <div class="course__teacher-thumb mr-15">
                                                <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                             </div> -->
                                             <h3><a href="<?php echo e(url('courses-detail/'.$list->id.'/'.$title)); ?>"><?php echo e(ucfirst($list->title)); ?></a></h3>
                                             
                                          </div>
                                         
                                       </div>
                                       <div class="course__more d-flex justify-content-between align-items-center">
                                          <div class="course__status">
                                               <?php if(Session::get('flag') == "INR"): ?>
                                             <span>Rs <?php echo e($list->price*$currency_rate->usd); ?>.00</span>
                                             <?php else: ?>
                                              <span>£ <?php echo e($list->price); ?>.00</span>
                                              <?php endif; ?> 
                                             <!--<span>£<?php echo e($list->price); ?>.00</span>-->
                                          </div>
                                          <div class="course__btn">
                                             <a href="<?php echo e(url('courses-detail/'.$list->id.'/'.$title)); ?>" class="link-btn">
                                                Know Details
                                                <i class="far fa-arrow-right"></i>
                                                <i class="far fa-arrow-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 
                                 
                           
                         </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                        <?php echo e($courselist->links('pagination::bootstrap-4')); ?>

                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- course area end -->

         <!-- cta area start -->
         
         <!-- cta area end -->


      </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ycs-projects\thynkquest\resources\views/courses/courselist.blade.php ENDPATH**/ ?>