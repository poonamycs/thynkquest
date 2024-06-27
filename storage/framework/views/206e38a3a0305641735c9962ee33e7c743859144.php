
<?php $__env->startSection('content'); ?>

<main>
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo e(asset('img/page-title/page-title-2.jpg')); ?>">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">View Sample Answer</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">View Sample Answer</li>
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
               <h1 class="text-center"><?php echo e($answers->title); ?></h1>
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <img src="<?php echo e(asset('images/papers/question/'.$answers->answer_paper)); ?>" alt="">                     
                        
                  </div>
                
                  
               </div>
            </div>
         </section>
         <!-- blog area end -->

      </main>
      <script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
<script>
    $('img').bind('contextmenu', function(e) {
    return false;
}); 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest\resources\views/pages/view-answers.blade.php ENDPATH**/ ?>