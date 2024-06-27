
<?php $__env->startSection('content'); ?>


<main>

         <!-- page title area start -->
         <section class="page__title-area pt-120 pb-90">
            
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                     <div class="course__wrapper">
                        <div class="page__title-content mb-25">
                           <div class="page__title-breadcrumb">                            
                              
                           </div>
                           <span class="mt-3 page__title-pre"><?php echo e($course->cat_name); ?></span>
                           <h1><?php echo e($course->title); ?></h1>
                        </div>
                           <div class="course__description ">
                              <p style="font-size:20px;text-align:justify"><?php echo nl2br($course->description) ?></p>
                           </div>
                       
                        <!-- <div class="course__enroll-btn">
                           <a href="contact.html" class="e-btn w-50" style="height:70px;font-size:25px;padding-top:11px;">Subscribe Now<i class="far fa-arrow-right"></i></a>
                        </div> -->
                       
                       
                     </div>
                     <section>
                        <div class="container">
                            <div class="course__tab-2 mb-45">
                        
                                 
                            </div>
                            
                        </div>
                        </section>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                     <div class="course__sidebar pt-50 pl-70 p-relative">
                        <div class="course__shape">
                           <img class="course-dot" src="assets/img/course/course-dot.png" alt="">
                        </div>
                        <div class="course__sidebar-widget-2  white-bg mb-20">
                           <div class="course__video">
                              <div class="course__video-thumb w-img mb-25">
                              <img src="<?php echo e(asset('images/courses/'.$course->image)); ?>" alt="<?php echo e($course->title); ?>">
                                 <div class="course__video-play"> 
                                
                                 </div>
                              </div>
                              <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                                 <div class="course__video-price">
                                    <?php if(Session::get('flag') == "INR"): ?> 
                                    <h5>Rs <?php echo e($course->price*$currency_rate->usd); ?>.<span>00</span> </h5>
                                    <?php else: ?>
                                    <h5>£ <?php echo e($course->price); ?>.<span>00</span> </h5>
                                    <?php endif; ?> 
                                    <!-- <h5 class="old-price">$129.00</h5> -->
                                 </div>
                                 <div class="course__video-discount">
                                    <!-- <span>68% OFF</span> -->
                                 </div>
                              </div>
                              <div class="course__video-content mb-35">
                                 <ul>
                                    <li class="d-flex align-items-center">
                                       <div class="course__video-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"></path>
                                             <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "></polyline>
                                          </svg>
                                       </div>
                                       <div class="course__video-info">
                                          <h5><span>Seats :</span><?php echo e($course->seats); ?></h5>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="course__video-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                             
                                             <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"></path>
                                             <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"></path>
                                          </svg>
                                       </div>
                                       <div class="course__video-info">
                                          <h5><span>Lessons :</span><?php echo e($course->lessons); ?></h5>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="course__video-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <circle class="st0" cx="8" cy="8" r="6.7"></circle>
                                             <polyline class="st0" points="8,4 8,8 10.7,9.3 "></polyline>
                                          </svg>
                                       </div>
                                       <div class="course__video-info">
                                          <h5><span>Duration :</span><?php echo e($course->duration); ?></h5>
                                       </div>
                                    </li>
                                   
                                  
                                 </ul>
                              </div>
                              <?php if(Auth::check()): ?>
                                <?php if(isset($purchase_course)): ?>
                                <div class="course__enroll-btn">
                                        <button type="button" disabled class="e-btn e-btn-7 w-100">Course Purchased<i class="far fa-arrow-right"></i></button>
                                     </div>
                                 <?php else: ?>
                                 <form action="<?php echo e(url('/enroll-course')); ?>" method="post">
    
                                   <?php echo csrf_field(); ?>
                                   <input type="hidden" name="course_id" id="course_id" value="<?php echo e($course->id); ?>">
                                     <div class="course__enroll-btn">
                                        <button type="submit" class="e-btn e-btn-7 w-100">Enrol <i class="far fa-arrow-right"></i></button>
                                     </div>
                                  </form>
                                  <?php endif; ?>
                                 <?php else: ?>
                              <form action="<?php echo e(url('/enroll-course')); ?>" method="post">

                               <?php echo csrf_field(); ?>
                               <input type="hidden" name="course_id" id="course_id" value="<?php echo e($course->id); ?>">
                                 <div class="course__enroll-btn">
                                    <button type="submit" class="e-btn e-btn-7 w-100">Enrol <i class="far fa-arrow-right"></i></button>
                                 </div>
                              </form>
                            <?php endif; ?>
                           </div>
                        </div>
                        
                     </div>
                  </div>
              
                  
               </div>
                     <?php if(count($related_course) > 0): ?>
                     <div class="course__related">
                           <div class="row">
                              <div class="col-xxl-8 col-xl-8 col-lg-8">
                                 <div class="section__title-wrapper mb-40">
                                    <h2 class="section__title">Related <span class="yellow-bg yellow-bg-big">Course</span></h2>
                                    <p>You don't have to struggle alone, you've got our assistance and help.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xxl-8 col-xl-8 col-lg-8">
                                 <div class="course__slider swiper-container pb-60">
                                    <div class="swiper-wrapper">
                                       <?php $__currentLoopData = $related_course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php $title = Str::slug($related->title); ?>
                                       <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                                          <div class="course__thumb w-img p-relative fix">
                                             <a href="<?php echo e(url('courses-detail/'.$related->title)); ?>">
                                             <img src="<?php echo e(asset('/images/courses/'.$related->image)); ?>" width="300px" height="200"  alt="<?php echo e($title); ?>">
                                             </a>
                                             <div class="course__tag">
                                                <a href="#"><?php echo e($related->cat_name); ?></a>
                                             </div>
                                          </div>
                                          <div class="course__content">
                                             <div class="course__meta d-flex align-items-center justify-content-between">
                                                <div class="course__lesson">
                                                   <!--<span><i class="far fa-book-alt"></i>43 Lesson</span>-->
                                                </div>
                                                <!--<div class="course__rating">-->
                                                <!--   <span><i class="icon_star"></i>4.5 (44)</span>-->
                                                <!--</div>-->
                                             </div>
                                             <h3><a href="<?php echo e(url('courses-detail/'.$related->title)); ?>"><?php echo e(ucfirst($related->title)); ?></a></h3>
                                             <div class="course__teacher d-flex align-items-center">
                                                <!-- <div class="course__teacher-thumb mr-15">
                                                   <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html">Jim Séchen</a></h6> -->
                                             </div>
                                          </div>
                                          <div class="course__more d-flex justify-content-between align-items-center">
                                             <div class="course__status">
                                                <?php if(Session::get('flag') == "INR"): ?> 
                                                <span>Rs <?php echo e($related->price*$currency_rate->usd); ?></span>
                                                <?php else: ?>
                                                <span>£ <?php echo e($related->price); ?></span>
                                                 <?php endif; ?> 
                                             </div>
                                             <div class="course__btn">
                                             <a href="<?php echo e(url('courses-detail/'.$related->title)); ?>" class="link-btn">
                                                   Know Details
                                                   <i class="far fa-arrow-right"></i>
                                                   <i class="far fa-arrow-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                       
                                       
                                    </div>
                                    <!-- Add Pagination -->
                                    <!--<div class="swiper-pagination"></div>-->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php endif; ?>
            </div>
            
         </section>
            

            </main>
         <!-- page title area end -->
         



     

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/courses/course-detail.blade.php ENDPATH**/ ?>