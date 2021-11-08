<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Gallery || Blog Site</title>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS FILES -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/fontawesome.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/featherlight.css'); ?>" rel="stylesheet" type="text/css">
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
                    <h1><span>Galleries</span></h1>
                    <p class="eskimo-page-subtitle">This displays our post galleries.</p>
                </div>
                <!-- IMAGE GALLERY -->
                <div class="eskimo-masonry-grid eskimo-gallery">
                    <div class="eskimo-two-columns" data-columns>
                        <!-- GALLERY ITEM 1 -->
                        <?php if(!empty($gallery)){ foreach($gallery as $gal){ ?>
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="<?php echo base_url('uploads/gallery/'.$gal->image); ?>" class="eskimo-lightbox">
                                <img src="<?php echo base_url('uploads/gallery/'.$gal->image); ?>" alt="<?php echo $gal->image; ?>" />
                            </a>
                        </div>
                      <?php } }else{ echo ''; } ?>
                    </div>
                </div>
                <!-- DIVIDER -->
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
