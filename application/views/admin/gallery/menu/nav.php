<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?php echo base_url('assets/images/logo-icon.png'); ?>" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="<?php echo base_url('assets/images/logo-light-icon.png'); ?>" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="<?php echo base_url('assets/images/logo-text.png'); ?>" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->
                    <img src="<?php echo base_url('assets/images/logo-light-text.png'); ?>" class="light-logo" alt="homepage" />
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->

<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile position-relative" style="background: white;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?php echo base_url('assets/images/users/profile.png'); ?>" alt="user" class="w-100" /> </div>
            <!-- User profile text-->
            <div class="profile-text pt-1">
                <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item"><i class="ti-user"></i>
                        My Profile</a>
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo site_url('admin/account/logout'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Personal</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="<?php echo site_url('home'); ?>">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu">Back to Home </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="<?php echo site_url('admin/dashboard'); ?>">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Dashboard </span>
                    </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-content-copy"></i>
                    <span class="hide-menu">Navigation </span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                      <a href="<?php echo site_url('admin/navigation/add'); ?>" class="sidebar-link">
                        <i class="mdi mdi-format-align-left"></i>
                        <span class="hide-menu"> Add </span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="<?php echo site_url('admin/navigation/view'); ?>" class="sidebar-link">
                        <i class="mdi mdi-format-align-left"></i>
                        <span class="hide-menu"> View </span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-small-cap">
                  <i class="mdi mdi-dots-horizontal"></i>
                  <span class="hide-menu">Apps</span>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-inbox-arrow-down"></i>
                    <span class="hide-menu">About Us </span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                      <a href="#" class="sidebar-link">
                        <i class="mdi mdi-email"></i>
                        <span class="hide-menu"> Add </span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="#" class="sidebar-link">
                        <i class="mdi mdi-email"></i>
                        <span class="hide-menu"> View </span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-album -arrow-down"></i>
                    <span class="hide-menu">Gallery </span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                      <a href="<?php echo site_url('admin/gallery/add'); ?>" class="sidebar-link">
                        <i class="mdi mdi-email"></i>
                        <span class="hide-menu"> Add </span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="<?php echo site_url('admin/gallery/view'); ?>" class="sidebar-link">
                        <i class="mdi mdi-email"></i>
                        <span class="hide-menu"> View </span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-album -arrow-down"></i>
                    <span class="hide-menu">Social media </span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                      <a href="<?php echo site_url('admin/social/add'); ?>" class="sidebar-link">
                        <i class="mdi mdi-email"></i>
                        <span class="hide-menu"> Add </span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="<?php echo site_url('admin/social/view'); ?>" class="sidebar-link">
                        <i class="mdi mdi-email"></i>
                        <span class="hide-menu"> View </span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">UI</span></li>

                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-widgets"></i>
                    <span class="hide-menu">Post </span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                      <a href="<?php echo site_url('admin/post/add'); ?>" class="sidebar-link">
                        <i class="mdi mdi-toggle-switch"></i>
                        <span class="hide-menu">Add</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="<?php echo site_url('admin/post/view'); ?>" class="sidebar-link">
                        <i class="mdi mdi-toggle-switch"></i>
                        <span class="hide-menu">View</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-widgets"></i>
                    <span class="hide-menu">Post Comments </span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                      <a href="#" class="sidebar-link">
                        <i class="mdi mdi-toggle-switch"></i>
                        <span class="hide-menu">View</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('admin/notification'); ?>" aria-expanded="false">
                    <i class="mdi mdi-inbox"></i>
                    <span class="hide-menu">Post Notification</span>
                  </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
