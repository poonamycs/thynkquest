
<?php $__env->startSection('content'); ?>

<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="" style="background-color:#DA2F58;">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-145">
                        <h3 class="page__title"><?php echo e($examcategories->cat_name); ?></h3>                         
                        <p class="text-white mt-2" > Extremely efficient tests that are accurate representations of actual exam papers, developed by our experts and validated by parents and students.
                           Strengthen your child’s potential, may it be independent school or grammar school, we’ve got you covered. 
                           Find papers mirroring actual exam style and curriculum for CEM, GL, SET, ISEB, CSSE.
                        </p>
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
                                 <?php $__currentLoopData = $exampapers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php $title = Str::slug($exam->title); ?>
                                 <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                       <a href="<?php echo e(url('exam-paper-detail/'.$exam->title)); ?>">
                                             <img src="<?php echo e(asset('/images/exampapers/'.$exam->file)); ?>" width="100%" height="200px"  alt="<?php echo e($title); ?>">
                                          </a>
                                       <div class="course__content">
                                         
                                          <h3 class="course__title"><a href="<?php echo e(url('exam-paper-detail/'.$exam->title)); ?>"><?php echo e($exam->title); ?>.</a></h3>
                                          <div class="course__teacher d-flex align-items-center">
                                             <!-- <div class="course__teacher-thumb mr-15">
                                                <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                             </div> -->
                                             <h3><a href="<?php echo e(url('exam-paper-detail/'.$exam->title)); ?>"><?php echo e($exam->subcat_name); ?></a></h3>
                                             
                                          </div>
                                       </div>
                                       <div class="course__more d-flex justify-content-between align-items-center">
                                          <div class="course__status">
                                        
                                          </div>
                                          <div class="course__btn">
                                             <a href="<?php echo e(url('exam-paper-detail/'.$exam->title)); ?>" class="link-btn">
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
                        <?php echo e($exampapers->links('pagination::bootstrap-4')); ?>

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
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/exams/exampapers.blade.php ENDPATH**/ ?>