
<?php $__env->startSection('content'); ?>
<?php
use App\Models\Category;
use App\Models\school;

$schools = school::orderBy('created_at','DESC')->get();
?>

<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo e(asset('img/page-title/page-title.jpg')); ?>">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title"><?php echo e($papers[0]->cat_name); ?></h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                              <?php if(count($papers) > 0): ?>
                              <li class="breadcrumb-item active" aria-current="page"><?php echo e($papers[0]->cat_name); ?></li>
                              <?php endif; ?>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- course area start -->
         <section class="course__area pt-120 pb-120">
            <div class="container">
               <div class="course__tab-inner grey-bg-2 mb-50">
                 <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__tab-wrapper d-flex align-items-center">
                           <div class="course__tab-btn">
                              <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                 <li class="nav-item" role="presentation">
                                   <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                    <svg class="grid" viewBox="0 0 24 24" style="position: relative; height: 0px;">
                                       <rect x="3" y="3" class="st0" width="7" height="7"></rect>
                                       <rect x="14" y="3" class="st0" width="7" height="7"></rect>
                                       <rect x="14" y="14" class="st0" width="7" height="7"></rect>
                                       <rect x="3" y="14" class="st0" width="7" height="7"></rect>
                                       </svg>
                                   </button>
                                 </li>
                             
                              </ul>
                           </div>
                           <div class="course__view">
                              <h4>Showing 1 - 9 of 84</h4>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                     <form action="<?php echo e(url('papers/schools')); ?>" method="post" id="form">
                         <?php echo csrf_field(); ?>
                         <!-- <input type="hidden" name="cat_id" value='<?php echo e($papers[0]->cat_id); ?>'> -->
                        <div class="course__sort d-flex justify-content-sm-end">
                           <div class="course__sort-inner">
                              <select name="schools_cat" id="schools_cat">
                                 <option value="">All Schools</option>
                                 <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($school->id); ?>" <?php if($papers[0]->school_id == $school->id): ?> selected <?php endif; ?> ><?php echo e($school->school_name); ?></option>
                             
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                           </div>
                        </div>
                        </form>
                     </div>
                    
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="course__tab-conent">
                        <div class="tab-content" id="courseTabContent">
                           <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                              <div class="row">
                                 <?php $__currentLoopData = $papers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php $title = str_replace(array(" ","/"),'-',$row->title); ?>
                                 <?php $main = Category::where('id',$row->cat_id)->first(); ?>
                                 <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                        <div class="course__thumb w-img p-relative fix">
                                          <a href="<?php echo e(url('paper-detail/'.$row->id.'/'.$title)); ?>">
                                          <img src="<?php echo e(asset('/images/papers/'.$row->file)); ?>" width="300px" height="200"  alt="">
                                          </a>
                                          <div class="course__tag">
                                             <a href="#"><?php echo e($main->cat_name); ?></a>
                                          </div>
                                       </div>
                                       <div class="course__content">
                                         <p><?php echo e($row->school_name); ?></p>
                                          <h3 class="course__title"><a href="<?php echo e(url('paper-detail/'.$row->id.'/'.$title)); ?>"><?php echo e($row->cat_name); ?></a></h3>
                                          <div class="course__teacher d-flex align-items-center">
                                            
                                             <h3><a href="<?php echo e(url('paper-detail/'.$row->id.'/'.$title)); ?>"><?php echo e($row->title); ?></a></h3>
                                             
                                          </div>
                                          <div class="course__btn mb-20" style="float:right">
                                             <a href="<?php echo e(url('paper-detail/'.$row->id.'/'.$title)); ?>" class="link-btn float-right">
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
                        <?php echo e($papers->links('pagination::bootstrap-4')); ?>

                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- course area end -->

         <!-- cta area start -->
         
         <!-- cta area end -->


      </main>
      <script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
<script>
    $('#schools_cat').on('change',function(){
        this.form.submit();
      
    });

    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thynkquest-18nov\resources\views/pages/filterlist.blade.php ENDPATH**/ ?>