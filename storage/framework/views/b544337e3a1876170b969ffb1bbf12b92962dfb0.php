
<?php $__env->startSection('content'); ?>

<style>
   ul{
      font-family:"Hind", sans-serif !important; 
      color:#53545b!important;
   }
   .course__description ul >li
   {
    list-style:disc!important;
    margin-left:50px;
   }
</style>
<main>

         <!-- page title area start -->
         <section class="page__title-area pt-120 pb-90">
            <!--<div class="page__title-shape">-->
            <!--   <img class="page-title-shape-5 d-none d-sm-block" src="assets/img/page-title/page-title-shape-1.png" alt="">-->
            <!--   <img class="page-title-shape-6" src="assets/img/page-title/page-title-shape-6.png" alt="">-->
            <!--   <img class="page-title-shape-7" src="assets/img/page-title/page-title-shape-4.png" alt="">-->
            <!--</div>-->
            <div class="container-fluid">
               <div class="row justify-content-center">
              
                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                     <div class="course__wrapper">
                        <div class="page__title-content mb-25">
                           <div class="page__title-breadcrumb">                            
                               <nav aria-label="breadcrumb">
                                 <ol class="breadcrumb">
                                 
                                 </ol>
                               </nav>
                           </div>
                           <span class="page__title-pre">
                               <?php if(!empty($papers->cat_name)): ?>
                               <?php echo e($papers->cat_name); ?>

                               <?php endif; ?>
                           </span>
                          
                        </div>
                          
                        <div class="course__img w-img">
                           <?php if(!empty($papers->file)): ?>    
                           <img src="<?php echo e(asset('/images/papers/'.$papers->file)); ?>" width="100%" height="300" alt="<?php echo e($papers->title); ?>">
                           <?php endif; ?>
                        </div>
                       <!-- 
                        <div class="pt-20 text-center">
                           <a href="" class="" style="font-size:20px;color:blue">Download Exam Paper</a>
                        </div> -->
                       <?php
                        if(!empty($papers))
                       $title = str_replace(array(" ","/"),'-',$papers->title); 
                      
                       ?>
                           
                           <div class="course__enroll-btn text-center pt-30">
                               <?php if($subscription == 1): ?>
                                  <button type="button" disabled class="btn btn-success">Subscribed</button>
                               <?php else: ?>
                                <a href="<?php echo e(url('/subscription/'.$papers->id.'/'.$title)); ?>" class="e-btn w-100" style="height:59px;font-size:25px;padding-top:5px;">Subscribe Now<i class="far fa-arrow-right"></i></a>
                               <?php endif; ?>
                              
                           </div>
                       
                     </div>
                  </div>
                   <div class="col-xxl-4 col-xl-4 col-lg-4">
                         <div class="course__description pt-50">
                              <h1 >
                                  <?php if(!empty($papers->title)): ?>
                                  <?php echo e($papers->title); ?>

                                  <?php endif; ?>
                              </h1>
                              <h3 class="mb-20">
                                  <?php if(!empty($papers->school_name)): ?>
                                  <?php echo e($papers->school_name); ?>

                                  <?php endif; ?>
                              </h3>
                              <?php $index = 1;?>
                             
                              <p style="font-size:20px;text-align:justify">
                                  <?php if(!empty($papers->description)): ?>
                                  <?php echo $papers->description; ?>

                                  <?php endif; ?>
                              </p>
                           </div>
                           <?php
                             if(!empty($papers))
                             $title = str_replace(array(" ","/"),'-',$papers->title); 
                           ?>
                           
                           
                  </div>
                 
              
                  
               </div>
            </div>
            
         </section>
            <section>
               <div class="container">
                  <div id="res"></div>
                  <!-- <div class="course__tab-2 mb-45">
                     <ul class="nav nav-tabs" id="courseTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span>Curriculum</span> </button>
                        </li>
                       
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span>Answers</span> </button>
                        </li>
                      </ul>
                  </div> -->
                  <div class="course__tab-content mb-95">
                     <div class="tab-content" id="courseTabContent">
                      
                        <div class="tab-pane fade show active" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                           <div class="course__curriculum">
                              <div class="accordion" id="course__accordion">
                                 <div class="accordion-item mb-50">
                                   <h2 class="accordion-header" id="week-01">
                                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-01-content" aria-expanded="true" aria-controls="week-01-content">
                                      Question and Answers Papers
                                     </button>
                                   </h2>
                                   <div id="week-01-content" class="accordion-collapse collapse show" aria-labelledby="week-01" data-bs-parent="#course__accordion">
                                    
                                     <div class="accordion-body">
                                     
                                     <?php $__currentLoopData = $question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                       <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                          <div class="course__curriculum-info">
                                             <h3>
                                                 <?php if(!empty($rows->title)): ?>
                                                 <a href="#" target="__blank"><?php echo e($rows->title); ?></a> </h3>
                                                 <?php endif; ?>
                                          </div>
                                          <div class="course__curriculum-meta">
                                             <span class="time"><i class="icon_clock_alt"></i><a href="<?php echo e(asset('images/papers/question/'.$rows->question_paper)); ?>" download>Question</a></span>
                                            <?php if(Auth::check()): ?>
                                                <?php if($subscription == 1): ?>
                                                <span class="question"><a href="<?php echo e(url('papers/view-answers/'.$rows->id)); ?>">Answer</a></span>
                                                <?php else: ?>
                                                <span class="question"><a href="#" onclick="Subscribe();">Answer</a></span>
                                                <?php endif; ?>
                                             <?php else: ?>
                                                <span class="question"><a href="#" onclick="Login();">Answer</a></span>
                                             <?php endif; ?>




                                          </div>
                                       </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                     </div>
                                   </div>
                               
                                 </div>
                              </div>
                              <!-- <div class="accordion" id="course__accordion-2">
                                 <div class="accordion-item mb-50">
                                   <h2 class="accordion-header" id="week-02">
                                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-02-content" aria-expanded="true" aria-controls="week-02-content">
                                       Week 02
                                     </button>
                                   </h2>
                                   <div id="week-02-content" class="accordion-collapse  collapse show" aria-labelledby="week-02" data-bs-parent="#course__accordion-2">
                                     <div class="accordion-body">
                                       <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                          <div class="course__curriculum-info">
                                             <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                             </svg>
                                             <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                             <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                          </div>
                                       </div>
                                       <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                          <div class="course__curriculum-info">
                                             <svg viewBox="0 0 24 24">
                                                <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                                </svg>
                                             <h3> <span>Video: </span> Greetings and introduction</h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                             <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                          </div>
                                       </div>
                                       <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                          <div class="course__curriculum-info">
                                             <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                                </svg>
                                             <h3> <span>Audio:</span> Interactive lesson</h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                             <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                             <span class="question">2 questions</span>
                                          </div>
                                       </div>
                                       <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                          <div class="course__curriculum-info">
                                             <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                             </svg>
                                             <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                             <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                          </div>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                              </div> -->
                           </div>
                        </div>
                        
                        <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                           <div class="course__member mb-45">
                              <div class="course__member-item">
                                 <div class="row align-items-center">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                       <div class="course__member-thumb d-flex align-items-center">
                                          <img src="assets/img/course/instructor/course-instructor-1.jpg" alt="">
                                          <div class="course__member-name ml-20">
                                             <h5>Shahnewaz Sakil</h5>
                                             <span>Engineer</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-45">
                                          <h5>07</h5>
                                          <span>Courses</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-70">
                                          <h5>05</h5>
                                          <span>Review</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-85">
                                          <h5>3.00</h5>
                                          <span>Rating</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__member-item">
                                 <div class="row align-items-center">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                       <div class="course__member-thumb d-flex align-items-center">
                                          <img src="assets/img/course/instructor/course-instructor-2.jpg" alt="">
                                          <div class="course__member-name ml-20">
                                             <h5>Lauren Stamps</h5>
                                             <span>Teacher</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-45">
                                          <h5>05</h5>
                                          <span>Courses</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-70">
                                          <h5>03</h5>
                                          <span>Review</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-85">
                                          <h5>3.00</h5>
                                          <span>Rating</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__member-item">
                                 <div class="row align-items-center">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 ">
                                       <div class="course__member-thumb d-flex align-items-center">
                                          <img src="assets/img/course/instructor/course-instructor-3.jpg" alt="">
                                          <div class="course__member-name ml-20">
                                             <h5>Jonquil Von</h5>
                                             <span>Associate</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-45">
                                          <h5>09</h5>
                                          <span>Courses</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-70">
                                          <h5>07</h5>
                                          <span>Review</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-85">
                                          <h5>4.00</h5>
                                          <span>Rating</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
               </div>
            </section>

            </main>
         <!-- page title area end -->
<script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
<script>
   function Subscribe(){
      
      $('#res').html('<div class="alert alert-danger text-dark">To view the answers, please subscribe to the package.</div>');
      setTimeout(function(){
         window.location.reload(1);
      }, 10000);
   }
   function Login(){
      
      $('#res').html('<div class="alert alert-danger text-dark">To view the answers, please login and proceed further.</div>');
      setTimeout(function(){
         window.location.reload(1);
      }, 10000);
   }
</script>

     

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/pages/paper-detail.blade.php ENDPATH**/ ?>