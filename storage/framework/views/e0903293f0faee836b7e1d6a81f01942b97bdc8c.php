<?php $__env->startSection('content'); ?>

<style>
   ul{
      font-family:"Hind", sans-serif !important; 
   }
</style>
<main>

         <!-- page title area start -->
         <section class="page__title-area pt-120 pb-90">
            <div class="page__title-shape">
               <img class="page-title-shape-5 d-none d-sm-block" src="assets/img/page-title/page-title-shape-1.png" alt="">
               <img class="page-title-shape-6" src="assets/img/page-title/page-title-shape-6.png" alt="">
               <img class="page-title-shape-7" src="assets/img/page-title/page-title-shape-4.png" alt="">
            </div>
            <div class="container-fluid">
               <div class="row justify-content-center">
              
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="course__wrapper">
                        <div class="page__title-content mb-25">
                           <div class="page__title-breadcrumb">                            
                               <nav aria-label="breadcrumb">
                                 <ol class="breadcrumb">
                                   <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                   <li class="breadcrumb-item"><a href="course-grid.html"><?php echo e($papers->cat_name); ?></a></li>
                                   <li class="breadcrumb-item active" aria-current="page"><?php echo e($papers->title); ?></li> -->
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
                           <img src="<?php echo e(asset('/images/papers/'.$papers->file)); ?>" width="100%" height="300" alt="">
                        <?php endif; ?>   
                        </div>
                       
                     </div>
                  </div>
                 <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="course__wrapper">
                        <div class="course__curriculum">
                            <div class="course__description pt-50">
                              <h1>
                                <?php if(!empty($papers->title)): ?>
                                  <?php echo e($papers->title); ?>

                                <?php endif; ?>
                              </h1>
                              <h3 class="mb-20"><?php echo e($papers->school_name); ?></h3> 
                              <p style="font-size:20px;text-align:justify">
                                  <?php if(!empty($papers->description)): ?>
                                  <?php echo $papers->description; ?>

                                  <?php endif; ?>
                              </p>
                            </div>
                        </div>    
                     </div>
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
                              <div class="course__description pt-50">
                            
                              <?php $index = 1;?>
                               <?php  $question = App\Models\QuestionPaper::select('id','sample_papers','question_paper')->where('paper_id',$papers->id)->where('sample_papers',1)->get();
                               
                               ?>
                               
                              <?php if(count($question)): ?>
                              <?php if(!empty($question)): ?>
                              <?php $__currentLoopData = $question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="col-xxl-8 col-xl-8 col-md-8 mb-20 text-center">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6  col-md-6 mb-20 text-center">
                                            
                                    <a class="btn" href="<?php echo e(asset('images/papers/question/'.$rows->question_paper)); ?>" target="_blank" style="color:white;background:#007ccf;font-size:20px"><i class="fa fa-file"></i> View Sample Paper <?php echo $index++; ?></a>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-md-6 mb-20 text-center">
                                    <a class="btn" href="<?php echo e(url('papers/view-answers/'.$rows->id)); ?>"  style="color:white;background:#007ccf;font-size:20px"><i class="fa fa-eye"></i> Answers</a>
                                       </div>
                                   </div>
                                    
                                   
                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>
                              <?php endif; ?>
                              
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
                        
                       
               </div>
            </section>

            </main>
         <!-- page title area end -->
<script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
<script>
   function Subscribe(){
      
      $('#res').html('<div class="alert alert-danger">To view the answers. Please subscribe to the Package</div>');
      setTimeout(function(){
         window.location.reload(1);
      }, 10000);
   }
</script>

     

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/pages/sample-paper.blade.php ENDPATH**/ ?>