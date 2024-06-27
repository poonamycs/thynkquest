
<?php $__env->startSection('content'); ?>

<main>
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo e(asset('img/page-title/page-title-2.jpg')); ?>">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Exam Style Papers</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Exam Style Papers</li>
                              <li class="breadcrumb-item active" aria-current="page">View Sample Answers</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="blog__area pt-50 pb-120">
            <div class="container">
               <div class="row justify-content-center">
               <h1 class="text-center"></h1>
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                                       
                        
                  </div>
                
                  
               </div>
            </div>
         </section>
         <!-- blog area end -->
         <section>
               <div class="container">
               <div class="course__tab-inner grey-bg-2 mb-50">
                 <h3 class="text-center">Boost your child's confidence with our realistic exam style papers</h3>
               </div>
                  <div class="course__tab-content mb-95">
 
                        <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="course__tab-2">
                                    <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                       <li class="nav-item" role="presentation">
                                       <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum<?php echo e($row->id); ?>" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_question_alt"></i> <span>Question</span> </button>
                                       </li>
                                    
                                       <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member<?php echo e($row->id); ?>" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fa fa-key"></i> <span>Answers</span> </button>
                                       </li>
                                    </ul>
                              </div>
                                 <div class="tab-content" id="courseTabContent">
                                       <div class="tab-pane fade show active" id="curriculum<?php echo e($row->id); ?>" role="tabpanel" aria-labelledby="curriculum-tab">
                                          <div class="course__curriculum">
                                             <div class="accordion-body">
                                                <div class="course__img">
                                                   <img src="<?php echo e(asset('images/exampapers/answers/'.$row->question_img)); ?>" width="600px" height="500px" alt="">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" class="" id="member<?php echo e($row->id); ?>" role="tabpanel" aria-labelledby="member-tab">
                                          <div class="course__member ">
                                             <div class="accordion-body">
                                                <div class="course__img">
                                                   <img src="<?php echo e(asset('images/exampapers/answers/'.$row->answer_img)); ?>" width="600px" height="500px" alt="">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                           
                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                           <div class="course__member mb-45">
                              
                              <div class="course__member-item">
                                    <div class="accordion-body">
                                             <div class="course__img w-img">
                                                <img src="<?php echo e(asset('images/papers/answers/answer_img')); ?>" width="600" height="300" alt="">
                                                <h2>Hello I am aqib</h2>
                                             </div>
                                          </div>
                                    </div>
                              
                              </div> -->
                        </div>
               </div>
            </section>

      </main>
      <script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
<script>
    $('img').bind('contextmenu', function(e) {
    return false;
}); 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/exams/view-exam-answers.blade.php ENDPATH**/ ?>