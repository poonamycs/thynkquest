
<?php $__env->startSection('content'); ?>
<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="" style="background-color:#DA2F58;">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Contact</h3>                         
                        
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
                  <div class="col-xxl-7 col-xl-7 col-lg-6">
                     <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Get in<span class="yellow-bg yellow-bg-big">touch</span></h2>
                           <!--<p>Have a question or just want to say hi? We'd love to hear from you.</p>-->
                        </div>
                        <div class="contact__form">
                           <form action="<?php echo e(url('/contact')); ?>" method="post">
                               <?php echo csrf_field(); ?>
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Your Name" required name="name">
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="email" placeholder="Your Email" required name="email">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Subject" required name="subject">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <textarea placeholder="Enter Your Message" required name="message"></textarea>
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
                                       <button type="submit" class="e-btn">Send your message</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                     <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__shape">
                           <img class="contact-shape-1" src="./Educal – Online Learning and Education HTML5 Template_files/contact-shape-1.png" alt="">
                           <img class="contact-shape-2" src="./Educal – Online Learning and Education HTML5 Template_files/contact-shape-2.png" alt="">
                           <img class="contact-shape-3" src="./Educal – Online Learning and Education HTML5 Template_files/contact-shape-3.png" alt="">
                        </div>
                        <div class="contact__info-inner white-bg">
                           <ul>
                              <!--<li>-->
                              <!--   <div class="contact__info-item d-flex align-items-start mb-35">-->
                              <!--      <div class="contact__info-icon mr-15">-->
                              <!--         <svg class="map" viewBox="0 0 24 24">-->
                              <!--            <path class="st0" d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"></path>-->
                              <!--            <circle class="st0" cx="12" cy="10" r="3"></circle>-->
                              <!--         </svg>-->
                              <!--      </div>-->
                              <!--      <div class="contact__info-text">-->
                              <!--         <h4>New York Office</h4>-->
                              <!--         <p><a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Maypole Crescent 70-80 Upper St Norwich NR2 1LT</a></p>-->
   
                              <!--      </div>-->
                              <!--   </div>-->
                              <!--</li>-->
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="mail" viewBox="0 0 24 24">
                                          <path class="st0" d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z"></path>
                                          <polyline class="st0" points="22,6 12,13 2,6 "></polyline>
                                       </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>Email us directly</h4>
                                       <p><a href="mailto:support@thynkquest.co.uk">support@thynkquest.co.uk</a></p>
                                       <p><a href="mailto:info@thynkquest.co.uk"> info@thynkquest.co.uk</a></p>
                                    </div>
                                 </div>
                              </li>
                              <!--<li>-->
                              <!--   <div class="contact__info-item d-flex align-items-start mb-35">-->
                              <!--      <div class="contact__info-icon mr-15">-->
                              <!--         <svg class="call" viewBox="0 0 24 24">-->
                              <!--            <path class="st0" d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z"></path>-->
                              <!--            </svg>-->
                              <!--      </div>-->
                              <!--      <div class="contact__info-text">-->
                              <!--         <h4>Phone</h4>-->
                              <!--         <p><a href="tel:+(426)-742-26-44">+(426) 742 26 44</a></p>-->
                              <!--         <p><a href="tel:+(224)-762-442-32">+(224) 762 442 32</a></p>-->
                              <!--      </div>-->
                              <!--   </div>-->
                              <!--</li>-->
                           </ul>
                           <div class="contact__social pl-30">
                              <h4>Follow Us</h4>
                              <ul>
                                 <li><a href="https://www.facebook.com/ThynkQuest" class="fb" target="_blank">
                                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z"
                                            fill="currentColor"/>
                                      </svg>
                                    </a>
                                 </li>
                                 <li><a href="http://www.instagram.com/11plus_thynk_quest" class="tw" target="_blank">
                                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7ZM9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12Z" fill="currentColor" /><path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M5 1C2.79086 1 1 2.79086 1 5V19C1 21.2091 2.79086 23 5 23H19C21.2091 23 23 21.2091 23 19V5C23 2.79086 21.2091 1 19 1H5ZM19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" fill="currentColor" /></svg>    
                                     </a>
                                 </li>
                                 <!--<li><a href="https://themepure.net/template/educal/educal/contact.html#" class="pin"><i class="social_pinterest"></i></a></li>-->
                              </ul>
                           </div>
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
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/pages/contact.blade.php ENDPATH**/ ?>