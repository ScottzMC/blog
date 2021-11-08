<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>About Us || Blog Site</title>
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
                    <h1><span>Jane Doe</span></h1>
                    <p class="eskimo-page-subtitle">Photographer and Videographer</p>
                </div>
                <!-- ABOUT ME -->
                <div class="row">
                    <div class="col-12 col-lg-8 order-2 order-lg-1">
                        <p>Laborum varias in possumus philosophari nam mandaremus ad malis. Sint fidelissimae tempor fugiat expetendis. Est nisi quibusdam admodum ut noster laborum se tamen culpa aut labore. Senserit sed commodo. Occaecat concursionibus te deserunt ab nam amet mentitum est ea nam dolor malis aute ab iis sempiternum.</p>
                        <p><span class="lead"><em>Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum.</em></span></p>
                        <p>Laboris quo ingeniis, eu dolore iudicem fabulas. Si fugiat anim est officia, aut aliqua incididunt efflorescere te varias de nostrud ab quis si si de dolore quem culpa...</p>
                    </div>
                    <div class="col-12 col-lg-4 order-1 order-lg-2 mb-5 mb-lg-0">
                        <img src="images/600x600.png" alt="Jane Doe" class="img-fluid mx-auto d-block eskimo-img-shadow" />
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <!-- TABS -->
                <h2>WHAT CAN I DO</h2>
                <!-- TABS NAVIGATION -->
                <ul class="nav nav-tabs">
                    <!-- TAB 1 -->
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#mp-tab-fashion" aria-expanded="true">FASHION</a>
                    </li>
                    <!-- TAB 2 -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mp-tab-wildlife" aria-expanded="false">WILDLIFE</a>
                    </li>
                    <!-- TAB 3 -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mp-tab-real-estate" aria-expanded="false">REAL ESTATE</a>
                    </li>
                </ul>
                <!-- TABS CONTENT -->
                <div class="eskimo-tabs-content tab-content">
                    <!-- TAB 1 -->
                    <div class="tab-pane fade active show" id="mp-tab-fashion" role="button" aria-expanded="true">
                        <p>Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat.</p>
                        <p>Excepteur ea probant, expetendis quid proident sed nostrud. Doctrina quis offendit, aliquip summis occaecat singulis nam de aut magna probant ne de sunt nostrud eu ut eram philosophari, ita dolore quamquam coniunctione e ita velit excepteur, ita e dolor amet tamen. Quis occaecat si praesentibus, minim ne mentitum.</p>
                    </div>
                    <!-- TAB 2 -->
                    <div class="tab-pane fade " id="mp-tab-wildlife" role="button" aria-expanded="false">
                        <p>Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat.</p>
                        <p>Excepteur ea probant, expetendis quid proident sed nostrud. Doctrina quis offendit, aliquip summis occaecat singulis nam de aut magna probant ne de sunt nostrud eu ut eram philosophari, ita dolore quamquam coniunctione e ita velit excepteur, ita e dolor amet tamen. Quis occaecat si praesentibus, minim ne mentitum.</p>
                    </div>
                    <!-- TAB 3 -->
                    <div class="tab-pane fade " id="mp-tab-real-estate" role="button" aria-expanded="false">
                        <p>Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat.</p>
                        <p>Excepteur ea probant, expetendis quid proident sed nostrud. Doctrina quis offendit, aliquip summis occaecat singulis nam de aut magna probant ne de sunt nostrud eu ut eram philosophari, ita dolore quamquam coniunctione e ita velit excepteur, ita e dolor amet tamen. Quis occaecat si praesentibus, minim ne mentitum.</p>
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <h2>PORTFOLIO</h2>
                <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
                <!-- IMAGE GALLERY -->
                <div class="eskimo-masonry-grid eskimo-gallery">
                    <div class="eskimo-four-columns" data-columns>
                        <!-- GALLERY ITEM 1 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 2 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 3 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 4 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 5 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 6 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 7 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 8 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <h2>CONTACT ME</h2>
                <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
                <!-- CONTACT FORM -->
                <form id="ajax-form" action="mailer.php" method="post">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p>
                            <label>Your Name</label><br />
                            <input type="text" name="sendername" id="sendername" class="form-control" required="required" maxlength="50" />
                        </p>
                        <p>
                            <label>Your Email</label><br />
                            <input type="email" name="senderemail" id="senderemail" class="form-control" required="required" maxlength="50" />
                        </p>
                        <p>
                            <label>Phone Number</label><br />
                            <input type="text" name="senderphone" id="senderphone" class="form-control" maxlength="50" />
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p>
                            <label>Your Message</label><br />
                            <textarea name="sendermessage" id="sendermessage" required="required" class="form-control form-fixed-height"></textarea>
                        </p>
                        <button id="sendbutton" type="submit" class="btn btn-lg w-100">Send Message</button>
                    </div>
                </div>
                </form>
                <div id="form-messages"></div>
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
