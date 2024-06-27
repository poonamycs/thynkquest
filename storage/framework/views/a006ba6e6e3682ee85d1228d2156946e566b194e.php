
<?php $__env->startSection('content'); ?>

<style>
   .hide{
      display:none;
   }
   
   .razorpay-payment-button{
        display: inline-block;
        height: 50px;
        line-height: 52px;
        text-align: center;
        padding: 0 25px;
        color: #ffffff;
        background-image: linear-gradient(to right, rgb(255, 81, 47) 0%, rgb(213, 42, 93) 100%);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        font-weight: 500;
        text-transform: capitalize;
        border-color: #fff;
    }
</style>
<main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/page-title-2.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title text-body">Checkout</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item "><a href="<?php echo e(url('/')); ?>" class="text-body"><i class="fa fa-home"></i> Home</a></li>
                              <li class="breadcrumb-item text-body active" aria-current="page">Checkout</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- coupon-area start -->
         <section class="coupon-area pt-100 pb-30">
            <div class="container">
            <div class="row">
            <?php if(Session::has('success')): ?>
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p><?php echo e(Session::get('success')); ?></p>
                        </div>
                    <?php endif; ?>
               <div class="col-md-6">
                  
               </div>
               <div class="col-md-6">
                  <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <!--<h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>-->
                        <!--<div id="checkout_coupon" class="coupon-checkout-content">-->
                        <!--   <div class="coupon-info">-->
                        <!--      <form action="#">-->
                        <!--            <p class="checkout-coupon">-->
                        <!--               <input type="text" placeholder="Coupon Code" />-->
                        <!--               <button class="e-btn e-btn-border" type="submit">Apply Coupon</button>-->
                        <!--            </p>-->
                        <!--      </form>-->
                        <!--   </div>-->
                        <!--</div>-->
                        <!-- ACCORDION END -->
                  </div>
               </div>
            </div>
         </div>
         </section>
         <!-- coupon-area end -->

         <!-- checkout-area start -->
         <section class="checkout-area pb-70">
               <div class="container">
               
                  
                     <div class="row">
                           <div class="col-lg-6">
                              <div class="checkbox-form">
                                 <h3>Billing Details</h3>
                                 <div class="row">
                                       
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label class="required">Full Name</label>
                                             <input type="text" name="name" value="<?php echo e($user->fullname); ?>" required />
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label class="required">Email</label>
                                             <input type="text" name="email" value="<?php echo e($user->email); ?>" required/>
                                          </div>
                                       </div>
                                      
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Phone</label>
                                             <input type="text" name="mobile" value="<?php echo e($user->mobile); ?>" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required placeholder="Enter phone number" />
                                          </div>
                                       </div>
                                       
                                       <div class='form-row row'>
                                          <div class='col-md-12 hide error form-group'>
                                             <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                          </div>
                                       </div>
                            
                                       <div class="row pt-3">
                                       <form  action="<?php echo e(route('razorpay.payment')); ?>" method="post"  >
                                       <?php echo csrf_field(); ?>
                                       <!-- Razorpay Script rzp_live_RZVhHcBD9c7qRI GBP -->
                                       <!-- Razorpay Script rzp_test_ZAwCNJR4PZUt8u GBP -->
                                       <!-- Razorpay Script rzp_live_gnWCEeTfrNTFnx INR -->
                                       
                                        <script
                                            src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="rzp_live_RZVhHcBD9c7qRI"
                                            data-amount="<?php echo e((int)($price)*100); ?>"
                                            data-currency="GBP"
                                            data-buttontext="Place Order"
                                            data-name="THYNKQUEST EDUSERV PRIVATE LIMITED"
                                            data-description="Pay Your Amount Securely"
                                            data-image="<?php echo e(url('/img/logo/ThynkQuest-2.svg')); ?>"
                                            data-prefill.name="<?php echo e($user->fullname); ?>"
                                            data-prefill.email="<?php echo e($user->email); ?>"
                                            data-prefill.contact="<?php echo e($user->mobile); ?>"
                                            data-theme.color="#528FF0"
                                            data-theme.class="btn btn-main btn-fullwidth color-2"
                                        ></script> 
                                        <!--  Razorpay Script Ends -->

                                       <input type="hidden" name="package_id" id="package_id" value="<?php echo e($package->id); ?>">
                                       <input type="hidden" name="price" id="price" value="<?php echo e($price); ?>">
                                       <input type="hidden" name="subs_type" id="subs_type" value="<?php echo e($package->subs_type); ?>">
                                       <input type="hidden" name="user_id" id="user_id" value="<?php echo e($user->id); ?>">
                                       <input type="hidden" name="name" id="name" value="<?php echo e($user->fullname); ?>">
                                       <input type="hidden" name="email" id="email" value="<?php echo e($user->email); ?>">
                                       <input type="hidden" name="mobile" id="mobile" value="<?php echo e($user->mobile); ?>">

                                       </div>
                                    </form>
                                 </div>
                                 
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="your-order mb-30 ">
                                 <h3>Your Subscription Package</h3>
                                 <div class="your-order-table table-responsive">
                                       <table>
                                          <thead>
                                            <tr>
                                                <th class="product-name">Package Name</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                     <?php echo e($package->cat_name); ?> <strong class="product-quantity"> × 1</strong>
                                                    </td>

                                                    <?php if($discountprice == ""|| $discountprice== "0"): ?>
                                                    <td class="product-total">
                                                        <span class="amount"> <?php echo e($price); ?>/<?php echo e($package->subs_type); ?> Months</span>
                                                    </td>
                                                    <?php else: ?>
                                                    <td class="product-total">
                                                        <span class="amount" style="text-decoration: line-through;"><?php echo e($currencysymbol); ?> <?php echo e($discountprice); ?>/ <?php echo e($package->subs_type); ?> Months</span>
                                                        <span class="amount"> <?php echo e($price); ?>/<?php echo e($package->subs_type); ?> Months</span>
                                                    </td>
                                                    <?php endif; ?>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                             <tr class="cart-subtotal">
                                                   <th>Cart Subtotal</th>
                                                   <td><span class="amount"><?php echo e($currencysymbol); ?> <?php echo e($price); ?>.00</span></td>
                                             </tr>
                                          
                                             <tr class="order-total">
                                                   <th>Order Total</th>
                                                   <td><strong><span class="amount"><?php echo e($currencysymbol); ?> <?php echo e($price); ?>.00</span></strong>
                                                   </td>
                                             </tr>
                                          </tfoot>
                                       </table>
                                 </div>

                                 <div class="payment-method">
                                    <!--<div class="accordion" id="checkoutAccordion">-->
                                    <!--   <div class="accordion-item">-->
                                    <!--      <h2 class="accordion-header" id="checkoutOne">-->
                                    <!--         <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">-->
                                    <!--         Direct Bank Transfer-->
                                    <!--         </button>-->
                                    <!--      </h2>-->
                                    <!--      <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">-->
                                    <!--         <div class="accordion-body">-->
                                    <!--         Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.-->
                                    <!--         </div>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                    <!--   <div class="accordion-item">-->
                                    <!--      <h2 class="accordion-header" id="paymentTwo">-->
                                    <!--         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">-->
                                    <!--         Cheque Payment-->
                                    <!--         </button>-->
                                    <!--      </h2>-->
                                    <!--      <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">-->
                                    <!--         <div class="accordion-body">-->
                                    <!--         Please send your cheque to Store Name, Store Street, Store Town, Store-->
                                    <!--         State / County, Store-->
                                    <!--         Postcode.-->
                                    <!--         </div>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                    <!--   <div class="accordion-item">-->
                                    <!--      <h2 class="accordion-header" id="paypalThree">-->
                                    <!--         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">-->
                                    <!--         PayPal-->
                                    <!--         </button>-->
                                    <!--      </h2>-->
                                    <!--      <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">-->
                                    <!--         <div class="accordion-body">-->
                                    <!--         Pay via PayPal; you can pay with your credit card if you don’t have a-->
                                    <!--         PayPal account.-->
                                    <!--         </div>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                    <!--</div>-->
                                      
                                   
                                        <!-- <div class="order-button-payment mt-20">
                                            <button type="submit" class="e-btn e-btn-7">Place order</button>
                                        </div> -->
                                    
                                      
                                      
                                 </div>
                              </div>
                           </div>
                     </div>
                  
               </div>
         </section>
         <!-- checkout-area end -->


      </main>
   
  
<script type="text/javascript">
$(function() {
    var $form         = $(".validation");
  $('form.validation').bind('submit', function(e) {
    var $form         = $(".validation"),
        inputVal = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputVal),
        $errorStatus = $form.find('div.error'),
        valid         = true;
        $errorStatus.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorStatus.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-num').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeHandleResponse);
    }
  
  });
  
  
  
});
</script>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front_layout/front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/pages/checkout.blade.php ENDPATH**/ ?>