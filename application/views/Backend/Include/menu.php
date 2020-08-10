
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="    height: 150px;" >
      <img src="http://bisheshomestay.com/asserts/img/logofinal2.png" alt="AdminLTE Logo" class="brand-image  elevation-3"
           style="opacity: 0.8;background:white;width:80%; max-height:200px;">
      <span class="brand-text font-weight-light" style="display:hidden;color:#343a40;">.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>Backend/addRoom" class="nav-link actives  ">
              <i class="nav-icon fas fa-home "></i>
              <p>
                Add Rooms
                
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>Backend/allRooms" class="nav-link  ">
              <i class="nav-icon fas fa-home "></i>
              <p>
                All Rooms
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>Backend/addBlog/" class="nav-link  ">
              <i class="nav-icon fas fa-mountain "></i> 
              <p>
               Add Places for visit
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>Backend/allBlogs/" class="nav-link  ">
              <i class="nav-icon fas fa-mountain "></i> 
              <p>
                All Place's
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>Backend/Booking_cnt_back/" class="nav-link  ">
              <i class="nav-icon fas fa-envelope "></i>
              <p>
                Booking's  
              </p>
            </a>
          </li>
		   <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>Backend/Booking_cnt_back/Completed_bookings" class="nav-link  ">
              <i class="nav-icon fas fa-envelope "></i>
              <p>
               Completed Bookings
              </p>
            </a>
          </li>
             <!-- 
           <li class="nav-item has-treeview menu-open">
            <a href="<?php //echo base_url(); ?>Backend/login_cnt/un_set_login" class="nav-link  ">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>