
<?php $__env->startSection('content'); ?>
<style>
   .old-price {
    color: #000000;
    text-decoration: line-through;
}
</style>
<main>

         <!-- hero area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="" style="background-color:#DA2F58;">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Pricing</h3>                         
                        <!--<nav aria-label="breadcrumb">-->
                        <!--   <ol class="breadcrumb">-->
                        <!--      <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
                        <!--      <li class="breadcrumb-item active" aria-current="page">Pricing</li>-->
                        <!--   </ol>-->
                        <!--</nav>-->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- hero area end -->

         <!-- category area start -->
        
         <!-- category area end -->

       
         <!-- banner area end -->

         <!-- course area start -->
    
         <!-- course area end -->

         <!-- events area start -->
         
        
         <!-- events area end -->

         <!-- pricing area start -->
         <section class="price__area pt-60 pb-130">
            <div class="container">
               <div class="row">
               <?php if(Session::has('success')): ?>
                     <div class="alert alert-success alert-dismissible">
                        <?php echo session('success'); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     </div>
               <?php elseif(Session::has('error')): ?>
                     <div class="alert alert-danger alert-dismissible text-dark">
                        <?php echo session('error'); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     </div>
               <?php endif; ?>
                  <div class="col-xxl-4 offset-xxl-4">
                     <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">Simple All Inclusive  <span class="yellow-bg yellow-bg-big">Pricing<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                        <!--<p>No contracts. No surprise fees.</p>-->
                     </div>
                  </div>
               </div>
               <!-- <div class="row">
                  <div class="col-xxl-12">
                     <div class="price__tab-btn text-center mb-50">
                        <nav>
                           <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                             <button class="nav-link" id="nav-monthly-tab" data-bs-toggle="tab" data-bs-target="#nav-monthly" type="button" role="tab" aria-controls="nav-monthly" aria-selected="true">monthly plan</button>
                             <button class="nav-link active" id="nav-annually-tab" data-bs-toggle="tab" data-bs-target="#nav-annually" type="button" role="tab" aria-controls="nav-annually" aria-selected="false">Annual Plan</button>
                           </div>
                         </nav>
                     </div>
                  </div>
               </div> -->
               <div class="row">
                  <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    
                              <div class="row">
                               <?php if(isset($subs)): ?>
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="price__item grey-bg mb-30 p-relative">
                                    <div class="price__offer">
                                          <span>Best Value</span>
                                       </div>
                                       
                                       <div class="price__head">
                                          <h3><?php echo e($subs->title); ?></h3>
                                          <!--<p>Perfect for small marketing teams</p>-->
                                       </div>
                                       <?php if($subs->discount != ""): ?>
                                      <div class="old-price ml-2">
                                       <?php if(Session::get('flag') == "INR"): ?>
                                        <h4>Rs <?php echo e($subs->price*$currency_rate->usd + ($subs->price*$currency_rate->usd*($subs->discount/100))); ?> / <?php echo e($subs->subs_type); ?> Months</span></h4>
                                       <?php else: ?>
                                        <h4>£ <?php echo e($subs->price + ($subs->price*($subs->discount/100))); ?> / <?php echo e($subs->subs_type); ?> Months</span></h4>
                                       <?php endif; ?>
                                       </div>
                                       <div class="price__tag mb-25">
                                          <p> Discounted Price <?php echo e($subs->discount); ?>%</p>
                                          <?php if(Session::get('flag') == "INR"): ?>
                                          <h4>Rs <?php echo e($subs->price*$currency_rate->usd); ?><span>/ <?php echo e($subs->subs_type); ?> Months</span></h4>
                                           <?php else: ?>
                                           <h4>£ <?php echo e($subs->price); ?><span>/ <?php echo e($subs->subs_type); ?> Months</span></h4>
                                          <?php endif; ?> 
                                       </div>
                                       <?php else: ?>
                                       <div class="price__tag mb-25">
                                          <?php if(Session::get('flag') == "INR"): ?>
                                            <h4>Rs <?php echo e($subs->price*$currency_rate->usd); ?><span>/ <?php echo e($subs->subs_type); ?> Months</span></h4>
                                          <?php else: ?>
                                            <h4>£ <?php echo e($subs->price); ?><span>/ <?php echo e($subs->subs_type); ?> Months</span></h4>
                                          <?php endif; ?> 
                                          <!-- <h4>£ <?php echo e($subs->price); ?><span>/ <?php echo e($subs->subs_type); ?> Months</span></h4> -->
                                       </div>
                                      <?php endif; ?>

                                       <div class="price__features mb-40">
                                          <ul>
                                             <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <li><i class="far fa-check"></i><?php echo e($data->feature); ?></li>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </ul>
                                       </div>
                                     <form action="<?php echo e(url('/exam-style-paper/checkout-form')); ?>" method="post">
                                     <?php echo csrf_field(); ?> 
                                     <input type="hidden" name="subs_id" id="subs_id" value="<?php echo e($subs->id); ?>">
                                     <button type="submit" class="e-btn e-btn-4">Subscribe Now</button>
                                    </form>
                                       
                                    </div>
                                 </div>
                                 <?php else: ?>
                                 <p>This Paper is not added in Subscription Package</p>
                                 <?php endif; ?>
                              
                                 
                              </div>
                           </div>
                           <!-- <div class="tab-pane fade show active" id="nav-annually" role="tabpanel" aria-labelledby="nav-annually-tab">
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="price__item grey-bg mb-30 p-relative">
                                       <div class="price__head">
                                          <h3>Gold</h3>
                                          <p>Perfect for small marketing teams</p>
                                       </div>
                                       <div class="price__tag mb-25">
                                          <h4>$59<span>.99 / annually</span></h4>
                                       </div>
                                       <div class="price__features mb-40">
                                          <ul>
                                             <li><i class="far fa-check"></i>Course Discussions</li>
                                             <li><i class="far fa-check"></i>Content Library</li>
                                             <li><i class="far fa-check"></i>1-hour Mentorship</li>
                                          </ul>
                                       </div>
                                       <a href="contact.html" class="e-btn e-btn-4">Get Started</a>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="price__item grey-bg mb-30 p-relative">
                                       <div class="price__offer">
                                          <span>Best Value</span>
                                       </div>
                                       <div class="price__head">
                                          <h3>Diamond</h3>
                                          <p>Perfect for small marketing teams</p>
                                       </div>
                                       <div class="price__tag mb-25">
                                          <h4>$99<span>.99 / annually</span></h4>
                                       </div>
                                       <div class="price__features mb-40">
                                          <ul>
                                             <li><i class="far fa-check"></i>Course Discussions</li>
                                             <li><i class="far fa-check"></i>Content Library</li>
                                             <li><i class="far fa-check"></i>1-hour Mentorship</li>
                                             <li><i class="far fa-check"></i>Online Course</li>
                                          </ul>
                                       </div>
                                       <a href="contact.html" class="e-btn e-btn-border">Get Started</a>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                 
               </div>
            </div>
         </section>
         <!-- pricing area end -->

       
         <!-- cta area end -->

      </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ycs-projects\thynkquest\resources\views/pages/exampricing.blade.php ENDPATH**/ ?>