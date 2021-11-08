<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <title>Add Social Media || Admin Blog</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link href="<?php echo base_url('assets/libs/chartist/dist/chartist.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/js/pages/chartist/chartist-init.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/libs/c3/c3.min.css'); ?>" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo base_url('assets/libs/jvectormap/jquery-jvectormap.css'); ?>" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url('dist/css/style.min.css'); ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <?php include('menu/nav.php'); ?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Add Menu</h3>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              <!-- Row -->
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">Add Social Media</h4>
                          </div>
                          <hr>
                          <form action="<?php echo base_url('admin/social/add'); ?>" method="post" class="form-horizontal">
                              <div class="card-body">
                                  <h4 class="card-title">Add Title</h4>
                                  <div class="form-group row">
                                      <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="form-control" name="title" placeholder="Title here">
                                      </div>
                                  </div>
                              </div>
                              <hr>
                              <div class="card-body">
                                  <h4 class="card-title">Add URL</h4>
                                  <div class="form-group row">
                                      <label for="fname" class="col-sm-3 text-right control-label col-form-label">URL</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="form-control" name="url" placeholder="URL here">
                                      </div>
                                  </div>
                              </div>
                              <hr>
                              <div class="card-body">
                                  <div class="form-group mb-0 text-right">
                                      <button type="submit" name="submit_btn" class="btn btn-info waves-effect waves-light">Save</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <!-- End Row -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include('menu/script.php'); ?>

</body>

</html>
