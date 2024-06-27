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
   .tutoring li
   {
       font-size:16px !important;
   }
</style>
<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="" style="background-color:#DA2F58;">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">One-To-One-Tutoring</h3>                         
                       
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
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="blog__wrapper">
                        <div class="mb-40">
                           <p class="text-justify">You are an expert in your child's needs, your child's existing skills, and academic goals. Our tutors work closely with you to ensure that our one to one tutoring program is in good agreement with your standards, curriculum and preparation plans. We use data, research, and  proven design methods to create tutoring schedules that act as a natural extension of your child's learning environment.
                           </p>
                           <p class="font-weight-600">Key features: </p>
                           <ul class="ml-50 tutoring">
                               <li>Tutoring plan curated to child’s specific needs</li>
                               <li>Homework with detailed marking schemes</li>
                               <li>Bi-monthly assessments with detailed progress reports</li>
                               <li>Focus on the specific exam styles as per goals</li>
                               <li>Personalised Practice plan for specified schools</li>
                           </ul>
                           <p> Enquire now and leave your worries of exam prep on us!</p>
                        </div>
                     </div>
                </div>
                
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Book Lessons</h2>
                          
                        </div>
                        <div class="contact__form">
                            <div class="text-danger" id="fields">Please fill all mandatory fields.</div>
                            <form method="post" action="javascript:void(0)" id="tutoringForm"><?php echo csrf_field(); ?>
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Your Name *" required name="name" id="name">
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="email" placeholder="Your Email *" required name="email" id="email">
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-md-6 mb-3">
                                    <div class="contact__form-input">
                                        <select class="form-control select2" name="year" required id="year" style="width: 100%;">
                                            <option value="">-- Select year --</option>
                                            <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->year); ?>"><?php echo e($row->year); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                 </div>
                                  <div class="col-xxl-6 col-xl-6 col-md-6 mb-3">
                                    <div class="contact__form-input">
                                        <select class="form-control select2" name="subject" required id="subject" style="width: 100%;">
                                            <option value="">-- Select year first --</option>
                                        </select>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-md-6 mb-3">
                                    <div class="contact__form-input">
                                        <select class="form-control select2" name="price" required id="price" style="width: 100%;">
                                            <option value="">-- Select subject first -- *</option>
                                        </select>
                                    </div>
                                 </div>
                                    
                                    
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <textarea placeholder="Enter Your Message" required name="comment" rows="2" id="comment"></textarea>
                                    </div>
                                     <p>Note-Scheduled lesson dates and times, exam preparing for, etc.</p>
                                 </div>
                                </div>
                                <button type="submit" class="e-btn text-capitalize" id="paybtn"> Submit</button>
                           </form>
                              </div>
                           <div id="paymentResponse" class="mt-3"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

    </main>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("#subject").change(function(){
            var id = $(this).val();
            // console.log(id);
            $.ajax({
                url:'<?php echo e(url("get-subject-price")); ?>',
                data:{id:id},
                dataType:'json',
                success:function(resp){
                    // console.log(resp);
                    $("#price").html('<option value="'+resp+'">£'+resp+'</option>');
                }
            });
        });
        
        $("#year").change(function(){
            var id = $(this).val();
            // console.log(id);
            $.ajax({
                url:'<?php echo e(url("get-year-subjects")); ?>',
                data:{id:id},
                success:function(resp){
                    // console.log(resp);
                    $("#subject").html(resp);
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function () {
        $('#fields').hide();
        $("#paybtn").click(function(e){
        // alert('test');
            var name = $('#name').val();
            var email = $('#email').val();
            var subject = $('#subject').val();
            var price = $('#price').val();
            var year = $('#year').val();
            var comment = $('#comment').val();
            if(name == '' || subject == '' || email == '' || year == '' ||  comment == '' ||  price == ''){
                $('#fields').show();
                return false;
            }else{
                $('#fields').hide();                
            }
            var totalAmount = price*100 ;

            var options = {
                "key": "rzp_live_RZVhHcBD9c7qRI", // your Razorpay Key Id
                "amount": totalAmount,
                "currency":'GBP',
                "name": 'Thynkquest',
                "description": 'Pay to Thynkquest',
                "image": '<?php echo e(asset("img/logo/ThynkQuest-2.svg")); ?>',
                "prefill": {
                    "name": name,
                    "email": email,
                },
                "handler": function (response){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '<?php echo e(url("submit-one-to-one-tutoring")); ?>',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            razorpay_payment_id:response.razorpay_payment_id, 
                            price:totalAmount,
                            name:name,
                            email:email,
                            subject:subject,
                            year:year,
                            comment:comment
                        }, 
                        beforeSend:function(){
                            $("#paybtn").html('<div class="text-center"><i class="fa fa-spinner fa-spin"></i> Please wait...</div>');
                        },
                        success: function (data) {
                            console.log(data);
                            $('#paymentResponse').html('<div class="alert alert-success alert-block text-center"><strong>'+data.msg+'</strong><br><strong>Transaction ID: '+data.paymentID+'</strong></div>');
                            $("#paybtn").html('Submit');
                            // $("#tutoringForm").reset();
                            document.getElementById("tutoringForm").reset();
                        },
                        error:function(){
                            $('#paymentResponse').html('<div class="alert alert-danger alert-block text-center"><strong>Something want wrong. Please try again.</strong></div>');
                        }
                    });
                },
                "theme": {
                    "color": "#528FF0"
                }
            };
            var rzp = new Razorpay(options);
            rzp.open();
            e.preventDefault();
        });
    });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/courses/enquiry_form.blade.php ENDPATH**/ ?>