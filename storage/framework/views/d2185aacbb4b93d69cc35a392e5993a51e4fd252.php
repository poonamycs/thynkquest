<style>
.menu-text{
    padding-left:22px !important;
    padding-top:21px !important;
    font-size:22px !important;
}
    
</style>
<?php 
use App\Models\Paper;
use App\Models\Category;
use App\Models\Exampaper;
use App\Models\ExamCategory;
use App\Models\Course;


$papers_11 = Category::where('parent_id','=',1)->get();
$papers_13 = Category::where('parent_id','=',2)->get();
$examscat = ExamCategory::where('subcat',0)->get();
$courscat = DB::table('course_category')->get();
?>
<header>
         <div id="header-sticky" style="background:#fff;"  class="header__area header__transparent header__padding">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo">
                           <a href="<?php echo e(url('/')); ?>">
                              <img src="<?php echo e(asset ('img/logo/ThynkQuest Logo-01.png')); ?>" width="190px" alt="logo">
                           </a>
                        </div>
                        
                     </div>
                  </div>
                  <div class="col-xxl-10 col-xl-10 col-lg-8 col-md-10 col-sm-8 col-6">
                     <div class="header__right d-flex justify-content-center align-items-center">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class="has-dropdown">
                                    <a href="">11+ Mark Schemes</a>
                                    <ul class="submenu">
                                     
                                       <section class="category__area pt-20">
                                          <div class="container">
                                             
                                             <div class="row justify-content-center">
                                                <?php $__currentLoopData = $papers_11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $title = str_replace(array(" ","/"),'-',$paper->cat_name); ?>
                                                <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6">
                                                   <div class="menu-border mb-30">
                                                        <a href="<?php echo e(url('papers/'.$paper->id.'/'.$title)); ?>"  style="padding-left:25px;font-size:22px;" ><?php echo e($paper->cat_name); ?></p></a>
         
                                                   </div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                               
                                          
                                             
                                                
                                             </div>
                                          </div>
                                       </section>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="">13+ Marks Schemes</a>
                                    <ul class="submenu">
                                       <section class="category__area pt-20">
                                          <div class="container">
                                             
                                             <div class="row">
                                             <?php $__currentLoopData = $papers_13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <?php $title = str_replace(array(" ","/"),'-',$paper->cat_name); ?>
                                                <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6">
                                                   <div class="menu-border mb-30">
                                                        <a href="<?php echo e(url('papers/'.$paper->id.'/'.$title)); ?>" style="padding-left:25px;font-size:22px;" ><?php echo e($paper->cat_name); ?></p></a>
         
                                                   </div>
                                                </div>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                         
                                                
                                             </div>
                                          </div>
                                       </section>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="">Exam Style Papers</a>
                                    <ul class="submenu">
                                      <section class="category__area pt-20">
                                          <div class="container">
                                             
                                             <div class="row">
                                                <?php $__currentLoopData = $examscat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $title = str_replace(array(" ","/"),'-',$rows->cat_name); ?>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                   <div class="menu-border mb-30">
                                                        <a href="<?php echo e(url('exam-papers/'.$rows->id.'/'.$title)); ?>" style="padding-left:25px;font-size:22px;" ><?php echo e($rows->cat_name); ?></a>
         
                                                   </div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                             
                                                
                                             </div>
                                          </div>
                                       </section>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="">Courses</a>
                                    <ul class="submenu">
                                       <section class="category__area pt-20">
                                          <div class="container">
                                             
                                             <div class="row">
                                                <?php $__currentLoopData = $courscat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $title = str_replace(array(" ","/"),'-',$cat->cat_name); ?>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                   <div class="menu-border mb-30">
                                                        <a href="<?php echo e(url('courses/'.$cat->id.'/'.$title)); ?>" class="menu-text"><?php echo e($cat->cat_name); ?></a>
         
                                                   </div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                                
                                             </div>
                                          </div>
                                       </section>
                                    </ul>
                                 </li>
                                 <li><a href="<?php echo e(url('/explore-more')); ?>" >Explore More</a></li>
                                 <li><a href="<?php echo e(url('/blog')); ?>" >Blogs</a></li>
                              </ul>
                           </nav>
                        </div>
                        <div class="header__search p-relative  d-none d-md-block " style="padding-left:32px;">
                         <?php if(Session::has('frontSession')): ?>
                         <a href="<?php echo e(url('user/dashboard')); ?>" class="e-btn" style="padding:0px 20px !important;">My Dashboard</a>
                         <?php else: ?>
                         <a href="<?php echo e(url('sign-in')); ?>" class="e-btn e-btn-border" style="padding:2px 20px !important;">Sign In</a>
                           <a href="<?php echo e(url('register')); ?>" class="e-btn" style="padding:0px 20px !important;">Register</a>
                         <?php endif; ?>
                           
                         
                        </div>
                        <div class="sidebar__menu d-xl-none">
                           <div class="sidebar-toggle-btn ml-60" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                       
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </header><?php /**PATH D:\xampp\htdocs\laravel-project\thynkquest\resources\views/layouts/front_layout/front_header.blade.php ENDPATH**/ ?>