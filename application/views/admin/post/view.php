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
    <title>View Posts || Admin Blog</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link href="<?php echo base_url('assets/libs/magnific-popup/dist/magnific-popup.css'); ?>" rel="stylesheet">
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
                    <h3 class="text-themecolor mb-0">View Post</h3>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              <!-- Row -->
              <div class="row">
                <?php if(!empty($post)){ foreach($post as $pt){ ?>
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <div class="el-card-item pb-3">
                        <div class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center">
                          <img src="<?php echo base_url('uploads/post/'.$pt->image); ?>" alt="<?php echo $pt->category; ?>" class="d-block position-relative w-100" />
                          <div class="el-overlay w-100 overflow-hidden">
                            <ul class="list-style-none el-info text-white text-uppercase d-inline-block p-0">
                              <li class="el-item d-inline-block my-0  mx-1">
                                <a class="btn default btn-outline image-popup-vertical-fit el-link text-white border-white" href="<?php echo site_url('post/view/'.$pt->id); ?>">
                                  <i class="icon-magnifier"></i>
                                </a>
                              </li>
                              <li class="el-item d-inline-block my-0  mx-1">
                                <a class="btn default btn-outline el-link text-white border-white" href="javascript:void(0);">
                                  <i class="icon-link"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="el-card-content text-center">
                          <h4 class="mb-0"><?php echo str_replace('-', ' ', $pt->title); ?></h4>
                          <br>
                          <h5 class="mb-0"><?php echo str_replace('-', ' ', $pt->category); ?></h5>
                          <br>
                          <span class="text-muted">
                            <a href="<?php echo site_url('admin/post/edit/'.$pt->id); ?>">Edit</a>
                          </span>
                          <span class="text-muted">
                            <a style="color: red;" onclick="delete_post(<?php echo $pt->id; ?>)">Delete</a>
                            <p id="ctd"></p>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } }else{ echo ''; } ?>
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

    <script>
    function delete_post(id){
      var deleted_id = id;
      if(confirm("Are you sure you want to delete this post")){
      $.post('<?php echo base_url('admin/gallery/delete_post'); ?>', {"deleted_id": deleted_id}, function(data){
        location.reload();
        $('#ctd').html(data)
        });
      }
     }
    </script>

</body>

</html>
