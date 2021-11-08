<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php foreach($category as $cat){} ?>
    <title><?php echo str_replace('-', ' ', $cat->category); ?> Category || Blog Site</title>
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
                    <h1 class="no-border"><?php echo str_replace('-', ' ', $cat->category); ?></h1>
                </div>
                <!-- BLOG POSTS -->
                <?php if(!empty($category)){ foreach($category as $cat){ ?>
                <div class="card card-horizontal">
                    <div class="card-body">
                        <div class="card-horizontal-left">
                            <div class="card-category">
                                <a href="<?php echo site_url('post/category/'.strtolower($cat->category)); ?>"><?php echo str_replace('-', ' ', $cat->category); ?></a>
                            </div>
                            <h3 class="card-title"><a href="<?php echo site_url('post/detail/'.$cat->id.'/'.strtolower($cat->title)); ?>"><?php echo str_replace('-', ' ', $cat->title); ?></a></h3>
                            <div class="card-excerpt">
                                <p><?php echo $cat->body; ?></p>
                            </div>
                            <div class="card-horizontal-meta">
                                <div class="eskimo-author-meta">
                                    By <a class="author-meta" href="<?php echo site_url('about'); ?>">Rising Phoenix</a>
                                </div>
                                <div class="eskimo-date-meta">
                                    <a href="#"><?php echo date('j M Y', strtotime($cat->created_date)); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-horizontal-right" data-img="<?php echo base_url('uploads/post/'.$cat->image); ?>">
                            <a class="card-featured-img" href="<?php echo site_url('post/detail/'.$cat->id.'/'.strtotime($cat->title)); ?>"></a>
                        </div>
                    </div>
                </div>
              <?php } }else{ echo ''; } ?>
                <!-- PAGINATION -->
                <div class="eskimo-pager">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </main>

        <?php include('menu/footer.php'); ?>
    </div>
    <!-- GO TO TOP BUTTON -->
    <a id="eskimo-gototop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- SLIDE PANEL OVERLAY -->

    <!-- FULLSCREEN SEARCH -->
    <div id="eskimo-fullscreen-search">
        <div id="eskimo-fullscreen-search-content">
            <a href="#" id="eskimo-close-search"><i class="fa fa-times"></i></a>
            <form role="search" method="post" action="<?php echo base_url('post/search'); ?>" class="eskimo-lg-form">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="s" />
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
