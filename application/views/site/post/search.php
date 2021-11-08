<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php $search_query = $_POST['search_query']; ?>
    <?php foreach($search as $sea){} ?>
    <title>Search Results of (<?php echo $search_query; ?>) || Blog Site</title>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS FILES -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/fontawesome.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- READING POSITION INDICATOR -->
    <progress value="0" id="eskimo-progress-bar">
        <span class="eskimo-progress-container">
            <span class="eskimo-progress-bar"></span>
        </span>
    </progress>
    <!-- SITE WRAPPER -->
    <div id="eskimo-site-wrapper">
        <!-- MAIN CONTAINER -->
        <main id="eskimo-main-container">
            <div class="container">
                <!-- SIDEBAR -->
                <?php include('menu/nav.php'); ?>
                <!-- TOP ICONS -->
                <ul class="eskimo-top-icons">
                    <li id="eskimo-search-icon">
                        <a id="eskimo-open-search" href="#"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <!-- PAGE TITLE -->
                 <div class="eskimo-page-title">
                     <h1>
                        <?php foreach($total as $tot){} ?>
                         <span><?php echo number_format($tot->total); ?> Results Found</span>
                     </h1>
                     <p class="eskimo-page-subtitle">Search Results for: <?php echo $search_query; ?></p>
                </div>
                <!-- SEARCH FORM -->
                <div class="eskimo-search-page-form">
                    <form role="search" method="post" action="<?php echo base_url('post/search'); ?>" class="eskimo-lg-form">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="search_query" />
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- BLOG POSTS -->
                <div class="eskimo-masonry-grid">
                    <div class="eskimo-two-columns" data-columns>
                        <!-- POST 1 -->
                        <?php if(!empty($search)){ foreach($search as $sea){ ?>
                        <div class="card-masonry">
                            <div class="card">
                                <a href="<?php echo site_url('post/detail/'.$sea->id.'/'.strtolower($sea->title)); ?>">
                                    <img class="card-vertical-img" src="<?php echo base_url('uploads/post/'.$sea->image); ?>" alt="<?php echo $sea->title; ?>" />
                                </a>
                                <div class="card-border">
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span><a href="<?php echo strtolower($sea->category); ?>"><?php echo str_replace('-', ' ', $sea->title); ?></a></span>
                                        </div>
                                        <h3 class="card-title">
                                            <a href="<?php echo site_url('post/detail/'.$sea->id.'/'.strtolower($sea->title)); ?>"><?php echo str_replace('-', ' ', $sea->title); ?></a>
                                        </h3>
                                        <p><?php echo $sea->body; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="eskimo-author-meta">
                                            By <a class="author-meta" href="<?php echo site_url('about'); ?>">Rising Phoenix</a>
                                        </div>
                                        <div class="eskimo-date-meta">
                                            <a href="#"><?php echo date('j M Y', strtotime($sea->created_date)); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php } }else{ echo ''; } ?>
                    </div>
                </div>
                <!-- PAGINATION -->
                <div class="eskimo-pager">
                  <?php $this->pagination->create_links(); ?>
                    <!--<ul class='pagination flex-wrap'>
                        <li class='page-item active'><a class='page-link' href='#'>1</a></li>
                        <li class='page-item'><a class='page-link' href='#'>2</a></li>
                        <li class='page-item'><a class='page-link' href='#'>3</a></li>
                        <li class='page-item'><a class='page-link' href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>-->
                </div>
                <div class="clearfix"></div>
            </div>
        </main>

        <?php include('menu/footer.php'); ?>
    </div>
    <!-- GO TO TOP BUTTON -->
    <a id="eskimo-gototop" href="#"><i class="fa fa-chevron-up"></i></a>

    <!-- FULLSCREEN SEARCH -->
    <div id="eskimo-fullscreen-search">
        <div id="eskimo-fullscreen-search-content">
            <a href="#" id="eskimo-close-search"><i class="fa fa-times"></i></a>
            <form role="search" method="post" action="<?php echo base_url('post/search'); ?>" class="eskimo-lg-form">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="search_query" />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include('menu/script.php'); ?>
</body>

</html>
