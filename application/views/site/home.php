<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Welcome to Blog Site</title>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS FILES -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/fontawesome.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/slick.css'); ?>" rel="stylesheet" type="text/css">
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

                <div class="clearfix"></div>
                <!-- SLIDER WITH ONE POST -->
                <div class="eskimo-carousel-container eskimo-bg-loader">
                    <div id="eskimo-post-slider" class="eskimo-slider">
                        <!-- SLIDE -->
                        <?php foreach($banner as $ban){} ?>
                        <div>
                            <img src="<?php echo base_url('uploads/banner/'.$ban->image); ?>" alt="<?php echo $ban->title; ?>" />
                            <div class="eskimo-slider-desc">
                                <div class="eskimo-slider-desc-inner">
                                    <h2 class="card-title"><?php echo $ban->title; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BLOG POSTS -->
                <div class="eskimo-masonry-grid">
                    <div class="eskimo-two-columns" data-columns>
                        <!-- POST 1 -->
                        <?php if(!empty($home_post)){ foreach($home_post as $home_pt){ ?>
                        <div class="card-masonry">
                            <div class="card">
                                <a href="<?php echo site_url('post/detail/'.$home_pt->id.'/'.strtolower($home_pt->title)); ?>">
                                        <img class="card-vertical-img" src="<?php echo base_url('uploads/post/'.$home_pt->image); ?>" alt="<?php echo $home_pt->title; ?>" />
                                    </a>
                                <div class="card-border">
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span>
                                              <a href="<?php echo site_url('post/category/'.strtolower($home_pt->category)); ?>">
                                                <?php echo str_replace('-', ' ', $home_pt->category); ?>
                                              </a>
                                            </span>
                                        </div>
                                        <h3 class="card-title">
                                          <a href="<?php echo site_url('post/detail/'.$home_pt->id.'/'.strtolower($home_pt->title)); ?>">
                                            <?php echo str_replace('-', ' ', $home_pt->title); ?>
                                          </a>
                                        </h3>
                                        <p><?php echo character_limiter($home_pt->body, 200); ?></p>
                                    </div>
                                    <?php
                                    $word = str_word_count(strip_tags($home_pt->body));
                                    $m = floor($word / 200);
                                    $s = floor($word % 200 / (200 / 60));
                                    $est = $m . ' minute' . ($m == 1 ? '' : 's');
                                    ?>
                                    <div class="card-footer">
                                        <div class="eskimo-author-meta">
                                            By <a class="author-meta" href="<?php echo site_url('about'); ?>">Rising Phoenix</a>
                                        </div>
                                        <div class="eskimo-author-meta">
                                          <a class="author-meta" href="#"><?php echo $est; ?></a>
                                        </div>
                                        <div class="eskimo-date-meta">
                                            <a href="#"><?php echo date('j M Y', strtotime($home_pt->created_date)); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php } }else{ echo ''; } ?>
                    </div>
                </div>
                <!-- VIEW ALL BUTTON -->

                <!-- CAROUSEL -->
                <div class="eskimo-widget-title">
                    <h3 class="eskimo-carousel-title"><span>POPULAR POSTS</span></h3>
                </div>

                <div class="eskimo-carousel-container">

                    <div id="eskimo-post-carousel" class="eskimo-carousel">
                        <!-- CAROUSEL ITEM 1 -->
                        <?php if(!empty($popular_post)){ foreach($popular_post as $pop_pt){ ?>
                        <div>
                            <div class="card-masonry card-small">
                                <div class="card">
                                    <a href="<?php echo site_url('post/detail/'.$pop_pt->id.'/'.strtolower($pop_pt->title)); ?>">
                                        <img class="card-vertical-img" src="<?php echo base_url('uploads/post/'.$pop_pt->image); ?>" alt="<?php echo $pop_pt->title; ?>" />
                                    </a>
                                    <div class="card-border">
                                        <div class="card-body">
                                            <div class="card-category">
                                                <a href="#"><?php echo date('j M Y', strtotime($pop_pt->created_date)); ?></a>
                                            </div>
                                            <h5 class="card-title">
                                              <a href="<?php echo site_url('post/detail/'.$pop_pt->id.'/'.strtolower($pop_pt->title)); ?>">
                                                <?php echo str_replace('-', ' ', $pop_pt->title); ?>
                                              </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php } }else{ echo ''; } ?>
                    </div>
                </div>
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
            <form method="post" action="<?php echo base_url('post/search'); ?>" class="eskimo-lg-form">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="search_query" />
                    <div class="input-group-append">
                        <button type="submit" name="search_btn" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include('menu/script.php'); ?>

</body>

</html>
