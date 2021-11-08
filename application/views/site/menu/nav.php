<div id="eskimo-sidebar">
    <div id="eskimo-sidebar-wrapper" class="d-flex align-items-start flex-column h-100 w-100">
        <!-- LOGO -->
        <div id="eskimo-logo-cell" class="w-100">
            <a class="eskimo-logo-link" href="<?php echo site_url('home'); ?>">
                <img src="<?php echo base_url('images/logo.png'); ?>" class="eskimo-logo" alt="logo" />
            </a>
        </div>
        <!-- MENU CONTAINER -->
        <div id="eskimo-sidebar-cell" class="w-100">
            <!-- MOBILE MENU BUTTON -->
            <div id="eskimo-menu-toggle">MENU</div>
            <!-- MENU -->
            <nav id="eskimo-main-menu" class="menu-main-menu-container">
                <ul class="eskimo-menu-ul">
                    <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('about'); ?>">About Us</a></li>
                    <?php
                    $query = $this->db->query("SELECT DISTINCT category FROM tbl_post ORDER BY category ASC")->result();
                    if(!empty($query)){ foreach($query as $qry){ ?>
                    <li><a href="<?php echo site_url('post/category/'.strtolower($qry->category)); ?>"><?php echo str_replace('-', ' ', $qry->category); ?></a></li>
                    <?php } }else{ echo ''; } ?>
                    <li><a href="<?php echo site_url('gallery'); ?>">Galleries</a></li>
                </ul>
            </nav>
        </div>
        <!-- SOCIAL MEDIA ICONS -->
        <div id="eskimo-social-cell" class="mt-auto w-100">
            <div id="eskimo-social-inner">
                <ul class="eskimo-social-icons">
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<ul class="eskimo-top-icons">
    <li id="eskimo-search-icon">
        <a id="eskimo-open-search" href="#"><i class="fa fa-search"></i></a>
    </li>
</ul>
