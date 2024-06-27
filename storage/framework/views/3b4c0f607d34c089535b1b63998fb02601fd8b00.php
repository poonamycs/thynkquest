<?php $url = url()->current(); ?>
<aside class="main-sidebar sidebar-dark-red elevation-4" style="background:#0c0302">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php echo e(asset ('img/logo/ThynkQuest Logo-01.png')); ?>"  width="200px" alt="AdminLTE Logo" class="pl-2 img-circle elevation-3"
           style="opacity: 1">
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Session::get('adminSession')); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(url('admin/dashboard')); ?>" class="nav-link <?php if(preg_match("/dashboard/", $url)){ ?>  active-bg <?php } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('admin/view-taglines')); ?>" class="nav-link <?php if(preg_match("/taglines/", $url)){ ?>active-bg  <?php } ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tagline
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('admin/catgeories')); ?>" class="nav-link <?php if(preg_match("/catgeories/", $url)){ ?>active-bg  <?php } ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories
              
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               User Subscribed Packages 
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/subscribed-papers')); ?>" class="nav-link <?php if(preg_match("/subscribed-papers/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mark Schemes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/exam-style-paper-subscribed')); ?>" class="nav-link <?php if(preg_match("/exam-style-paper-subscribed/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Style Papers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/subscribed-courses')); ?>" class="nav-link <?php if(preg_match("/subscribed-courses/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courses</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Schools
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/add-Schools')); ?>" class="nav-link <?php if(preg_match("/add-Schools/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Schools</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-schools')); ?>" class="nav-link <?php if(preg_match("/view-Schools/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Schools</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              11+ Papers
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/add-papers')); ?>" class="nav-link <?php if(preg_match("/add-papers/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Papers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-papers')); ?>" class="nav-link <?php if(preg_match("/view-papers/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Papers</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              13+ Papers
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/add-13-papers')); ?>" class="nav-link <?php if(preg_match("/add-13-papers/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Papers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-13-papers')); ?>" class="nav-link <?php if(preg_match("/view-13-papers/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Papers</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Exam Style Papers
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-exam-category')); ?>" class="nav-link <?php if(preg_match("/view-exam-category/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Exam Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/exam-paper-category')); ?>" class="nav-link <?php if(preg_match("/exam-paper-category/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Exam Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-exam-papers')); ?>" class="nav-link <?php if(preg_match("/view-exam-papers/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Exam style Papers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/add-exam-papers')); ?>" class="nav-link <?php if(preg_match("/add-exam-papers/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Exam style Papers</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Courses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/course-add-category')); ?>" class="nav-link <?php if(preg_match("/course-add-category/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courses Category</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/add-courses')); ?>" class="nav-link <?php if(preg_match("/add-courses/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-courses')); ?>" class="nav-link <?php if(preg_match("/view-courses/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Courses</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Subscription
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/add-subscription')); ?>" class="nav-link <?php if(preg_match("/add-subscription/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add MSP Subscription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-subscription')); ?>" class="nav-link <?php if(preg_match("/view-subscription/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View MSP Subscription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/add-esp-subscription')); ?>" class="nav-link <?php if(preg_match("/add-esp-subscription/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add ESP Subscription</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-esp-subscription')); ?>" class="nav-link <?php if(preg_match("/view-esp-subscription/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View ESP Subscription</p>
                </a>
              </li>
            
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/add-blogs')); ?>" class="nav-link <?php if(preg_match("/add-blogs/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blogs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-blogs')); ?>" class="nav-link <?php if(preg_match("/view-blogs/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Blogs</p>
                </a>
              </li>
              
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-users')); ?>" class="nav-link <?php if(preg_match("/view-users/", $url)){ ?>active-bg  <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Users</p>
                </a>
              </li>
           
              
              
            </ul>
          </li>
          
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-tree nav-icon"></i>
                  <p>Explore More<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <!--<li class="nav-item">-->
                  <!--  <a href="#" class="nav-link ">-->
                  <!--    <i class="far fa-circle nav-icon"></i>-->
                  <!--    <p>Mock Exams</p>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <li class="nav-item">
                    <a href="<?php echo e(url('admin/add-personal-assistance')); ?>" class="nav-link <?php if(preg_match("/add-personal-assistance/", $url)){ ?>active-bg  <?php } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Personalized Assistance<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="<?php echo e(url('admin/add-personal-assistance')); ?>" class="nav-link <?php if(preg_match("/add-personal-assistance/", $url)){ ?>active-bg  <?php } ?>">
                         <i class="far fa-circle nav-icon"></i>
                        <p>Personalized Assistance</p>
                        </a>
                       </li>
                       <li class="nav-item">
                        <a href="<?php echo e(url('admin/view-personalised-enquiry')); ?>" class="nav-link <?php if(preg_match("/personalised-enquiry/", $url)){ ?>active-bg  <?php } ?>">
                         <i class="far fa-circle nav-icon"></i>
                        <p>Enquiry Form</p>
                        </a>
                       </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('admin/add-resources')); ?>" class="nav-link <?php if(preg_match("/add-resources/", $url)){ ?>active-bg  <?php } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Free 11+ Resources</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('admin/view-quesans-query')); ?>" class="nav-link <?php if(preg_match("/view-quesans-query/", $url)){ ?>active-bg  <?php } ?>">
                 <i class="nav-icon fas fa-th"></i>
                 <p>Ques-Ans Query</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo e(url('admin/view-onetone-enquiry')); ?>" class="nav-link <?php if(preg_match("/view-onetone-enquiry/", $url)){ ?>active-bg  <?php } ?>">
                 <i class="nav-icon fas fa-th"></i>
                 <p>One-To-One Tutoring</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="<?php echo e(url('admin/view-contact')); ?>" class="nav-link <?php if(preg_match("/view-contact/", $url)){ ?>active-bg  <?php } ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>Contact Enquiry</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH /home/x9qb580ys622/public_html/thynkquest.ycstech.live/resources/views/layouts/back_layout/sidebar.blade.php ENDPATH**/ ?>