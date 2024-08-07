<?php $__env->startSection('content'); ?>
<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="" style="background-color:#DA2F58;">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Questions Answers Query Form </h3>                         
                       
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- contact area start -->
         <section class="contact__area pt-115 pb-120">
            <div class="container">
               <div class="row">
                  <?php if(Session::has('success')): ?>
                     <div class="alert alert-success alert-dismissible">
                        <?php echo session('success'); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     </div>
               <?php elseif(Session::has('error')): ?>
                     <div class="alert alert-danger alert-dismissible">
                        <?php echo session('error'); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     </div>
               <?php endif; ?>
                
                
                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                     <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Query Form</h2>
                          
                        </div>
                        <div class="contact__form">
                           <form action="<?php echo e(url('/quesans_enquiry')); ?>" method="post">
                               <?php echo csrf_field(); ?>
                               
                              <div class="row">
                                   <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                      <input type="text" placeholder="Your Name" required name="student_name">
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       
                                       <select class="form-control select2" name="category" required id="category" style="width: 100%;height:56px;background-color:#f3f4f8;border:1px solid #f3f6f9;color:#0e1133">
                                       <option value="">--Select Category --</option>
                                        <option value="0">Main Category</option>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"><?php echo e($row->cat_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
        
                                        </select>
                                    </div>
                                 </div>
                                  <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       
                                       <select class="form-control select2" name="sub_category" required id="category" style="width: 100%;height:56px;background-color:#f3f4f8;border:1px solid #f3f6f9;color:#0e1133">
                                       <option value="">--Select SubCategory --</option>
                                        <option value="0">Sub Category</option>
                                        <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"><?php echo e($row->cat_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
        
                                        </select>
                                    </div>
                                 </div>
                                
                                 <div class="col-xxl-12 mt-2">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Enter Paper Title" required name="paper">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Enter Question Number" required name="q_no">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <textarea placeholder="Enter Your Query" required name="msg"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-agree  d-flex align-items-center mb-20">
                                       <!--<input class="e-check-input" type="checkbox" id="e-agree">-->
                                       <!--<label class="e-check-label" for="e-agree">I agree to the<a href="https://themepure.net/template/educal/educal/contact.html#">Terms &amp; Conditions</a></label>-->
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__btn">
                                       <button type="submit" class="e-btn">Send your query</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->

         <!-- contact info area start -->
         <!-- <section class="contact__area grey-bg-2 pt-120 pb-90 p-relative fix">
            <div class="contact__shape">
               <img class="contact-shape-5" src="./Educal – Online Learning and Education HTML5 Template_files/contact-shape-5.png" alt="">
               <img class="contact-shape-4" src="./Educal – Online Learning and Education HTML5 Template_files/contact-shape-4.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                     <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon d-flex justify-content-center align-items-end">
                           <svg viewBox="0 0 24 24">
                              <circle class="st0" cx="12" cy="12" r="10"></circle>
                              <path class="st0" d="M8,14c0,0,1.5,2,4,2s4-2,4-2"></path>
                              <line class="st0" x1="9" y1="9" x2="9" y2="9"></line>
                              <line class="st0" x1="15" y1="9" x2="15" y2="9"></line>
                           </svg>
                        </div>
                        <div class="contact__content">
                           <h3 class="contact__title">Knowledge Base</h3>
                           <p>My good sir plastered cuppa barney cobblers mush argy bargy ruddy.</p>
                           <a href="https://themepure.net/template/educal/educal/contact.html" class="e-btn e-btn-border">Visit Documentation</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5  col-lg-5 col-md-6">
                     <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon d-flex justify-content-center align-items-end">
                           <svg viewBox="0 0 24 24">
                              <path class="st0" d="M21,10.8c0,1.3-0.3,2.6-0.9,3.8c-1.4,2.9-4.4,4.7-7.6,4.7c-1.3,0-2.6-0.3-3.8-0.9L3,20.3l1.9-5.7  C4.3,13.4,4,12.1,4,10.8c0-3.2,1.8-6.2,4.7-7.6c1.2-0.6,2.5-0.9,3.8-0.9H13c4.3,0.2,7.8,3.7,8,8V10.8z"></path>
                              <g>
                                 <circle class="st1" cx="9.3" cy="10.5" r="0.5"></circle>
                                 <circle class="st1" cx="12.5" cy="10.5" r="0.5"></circle>
                                 <circle class="st1" cx="15.7" cy="10.5" r="0.5"></circle>
                              </g>
                              </svg>
                        </div>
                        <div class="contact__content">
                           <h3 class="contact__title">Online Support</h3>
                           <p>My good sir plastered cuppa barney cobblers mush argy bargy ruddy.</p>
                           <a href="https://themepure.net/template/educal/educal/contact.html" class="e-btn e-btn-border">Send a Ticket</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!-- contact info area end -->
      </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/pages/question_answers_enquiry.blade.php ENDPATH**/ ?>