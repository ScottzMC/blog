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
    <title>Edit Gallery || Admin Blog</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/select2/dist/css/select2.min.css'); ?>">
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
                    <h3 class="text-themecolor mb-0">Edit Gallery</h3>
                </div>
                <?php foreach($edit_gallery as $edt_gal){} ?>
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
                              <h4 class="card-title">Edit Gallery</h4>
                          </div>
                          <hr>
                          <form action="<?php echo base_url('admin/gallery/edit/'.$edt_gal->id); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                              <div class="card-body">
                                <h4 class="card-title">Add Option</h4>
                                <input type="hidden" name="id" value="<?php echo $edt_gal->id; ?>">
                                <select class="select2 form-control custom-select" name="category" style="width: 100%; height:36px;">
                                  <option value="<?php echo $edt_gal->category ?>"><?php echo str_replace('-', ' ', $edt_gal->category); ?></option>
                                    <?php if(!empty($menu_option)){ foreach($menu_option as $menu){ ?>
                                    <option value="<?php echo $menu->category; ?>"><?php echo str_replace('-', ' ', $menu->category); ?></option>
                                  <?php } }else{ echo ''; } ?>
                                </select>
                              </div>
                              <hr>
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Upload picture</h4>
                                  <h6 class="card-subtitle">For multiple file upload put class <code>.dropzone</code> to form.</h6>
                                    <div class="fallback">
                                      <input type="hidden" name="banner" value="<?php echo $edt_gal->image; ?>">
                                      <input name="fileToUpload[]" type="file" />
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
