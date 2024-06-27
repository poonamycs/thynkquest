<?php $__env->startSection('content'); ?>


<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="" style="background-color:#DA2F58;">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Reach Soon</h3>                         
                        <nav aria-label="breadcrumb">
                           
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
               <div class="course__tab-inner  mb-50">
                 <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__tab-wrapper d-flex align-items-center">
                           <div class="course__tab-btn">
                             
                           </div>
                           
                        </div>
                     </div>
         
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                     
                     </div>
                  
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="course__tab-conent">
                        <div class="tab-content" id="courseTabContent">
                           <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                              <div class="row text-center">
                                
                                <h1 > We Will Reach You Soon!! </h1>
                                 
                                 
                          
                         </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                        
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
        // $.ajax({
        //     type:'get',
        //     url:"<?php echo e(url('/get-schools-paper')); ?>",
        //     data:{id:id},
        //     success:function(data){
        //         // console.log(data);
        //         var papersData = '';
        //         $.each(data,function(index,value){
        //             console.log( index + " : " + data[index].title );
        //             papersData +='<div class="row">'+
        //                             '<div class="col-xxl-12">'+
        //                                 '<div class="course__tab-conent">'+
        //                                         '<div class="tab-content" id="courseTabContent">'+
        //                                             '<div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">'+
        //                                                 '<div class="row" id="papers_data">'+
        //                                                     '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">'+
        //                                                         '<div class="course__item white-bg mb-30 fix">'+
        //                                                             '<div class="course__thumb w-img p-relative fix">'+
        //                                                             '<a href="course-details.html">'+
        //                                                                 '<img src="<?php echo e(asset("/images/papers/".'+data[index].file+')); ?>" width="300px" height="200"  alt="">'+
        //                                                             '</a>'+
        //                                                             '<div class="course__tag">'+
        //                                                                 '<a href="#">'+data[index].cat_name+'</a>'+
        //                                                             '</div>'+
        //                                                         ' </div>'+
        //                                                         '<div class="course__content">'+
                                                                    
        //                                                             '<h3 class="course__title"><a href="<?php echo e(url("course-detail")); ?>">'+data[index].cat_name+'</a></h3>'+
        //                                                             '<div class="course__teacher d-flex align-items-center">'+
                                                                        
        //                                                                 ' <h3><a href="instructor-details.html">'+data[index].title+'</a></h3>'+
                                                                        
        //                                                             '</div>'+
                                                                    
        //                                                         '</div>'+
        //                                                             '<div class="course__more d-flex justify-content-between align-items-center">'+
        //                                                             '<div class="course__status">'+
        //                                                                 '<span>£ </span>'+
        //                                                             '</div>'+
        //                                                             '<div class="course__btn">'+
        //                                                                 '<a href="<?php echo e(url("course-detail")); ?>" class="link-btn">'+
        //                                                                     'Know Details'
        //                                                                     '<i class="far fa-arrow-right"></i>'+
        //                                                                     '<i class="far fa-arrow-right"></i>'+
        //                                                                 '</a>'+
        //                                                             '</div>'+
        //                                                         '</div>'+
        //                                                     '</div>'+
        //                                                 ' </div>'+
        //                                             ' </div>'+
        //                                          ' </div>'+
        //                                     ' </div>'+
        //                                 ' </div>'+
        //                             ' </div>'+
        //                         ' </div>'


        //         });
                
        //         $('#papers_data').html(papersData);

        //     }
        // });
    });

    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/pages/reach_soon.blade.php ENDPATH**/ ?>