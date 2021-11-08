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
    <title>Admin Dashboard || Admin Blog</title>
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
                    <h3 class="text-themecolor mb-0">Dashboard</h3>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <?php if(!empty($count_post)){ foreach($count_post as $ct_pt){} ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-info">
                                        <i class="ti-wallet"></i>
                                    </div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><?php echo number_format($ct_pt->total_post); ?></h3>
                                        <h5 class="text-muted mb-0">Total Post</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php }else{ echo ''; } ?>
                    <!-- Column -->
                    <!-- Column -->
                    <?php if(!empty($count_gallery)){ foreach($count_gallery as $ct_gal){} ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-warning">
                                        <i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><?php echo number_format($ct_gal->total_gallery); ?></h3>
                                        <h5 class="text-muted mb-0">Total Gallery</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php }else{ echo ''; } ?>
                    <!-- Column -->
                    <!-- Column -->
                    <?php if(!empty($count_comment)){ foreach($count_comment as $ct_com){} ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-primary">
                                        <i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><?php echo number_format($ct_com->total_comment); ?></h3>
                                        <h5 class="text-muted mb-0">Total Comments</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php }else{ echo ''; } ?>
                    <!-- Column -->
                    <!-- Column -->
                    <?php if(!empty($count_notification)){ foreach($count_notification as $ct_not){} ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-danger">
                                        <i class="mdi mdi-bullseye"></i></div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><?php echo number_format($ct_not->total_notification); ?></h3>
                                        <h5 class="text-muted mb-0">Subscribed Notification</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php }else{ echo ''; } ?>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mr-3 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title text-white">Total Views</h3>
                                        <h6 class="card-subtitle text-white op-5">2020 - <?php echo date('Y'); ?></h6>
                                    </div>
                                </div>
                                <?php if(!empty($count_sum)){ foreach($count_sum as $ct_sum){} ?>
                                <div class="row mt-1">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-weight-light text-white text-nowrap text-truncate"><?php echo number_format($ct_sum->total_viewed); ?></h2>
                                    </div>
                                    <div class="col-8 pt-2 pb-3 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div>
                                </div>
                              <?php }else{ echo ''; } ?>
                            </div>
                        </div>
                        <div class="card bg-info">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mr-3 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title text-white">Affliate Post</h3>
                                        <h6 class="card-subtitle text-white op-5">2020 - <?php echo date('Y'); ?></h6>
                                    </div>
                                </div>
                                <?php if(!empty($count_affliate)){ foreach($count_affliate as $ct_aff){} ?>
                                <div class="row mt-1">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-weight-light text-white text-nowrap text-truncate"><?php echo number_format($ct_aff->total_affliate); ?></h2>
                                    </div>
                                    <div class="col-8 pt-2 pb-3 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div>
                                </div>
                              <?php }else{ echo ''; } ?>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Post -->
                    <?php if(!empty($latest_post)){ foreach($latest_post as $lat_pt){ ?>
                    <div class="col-lg-4 col-md-12">
                      <div class="card blog-widget">
                          <div class="card-body">
                            <div class="blog-image">
                              <img src="<?php echo base_url('uploads/post/'.$lat_pt->image); ?>" alt="img" class="img-fluid blog-img-height w-100" /></div>
                              <h3><a href="<?php echo site_url('post/detail/'.$lat_pt->id.'/'.$lat_pt->title); ?>"><?php echo str_replace('-', ' ', $lat_pt->title); ?></a></h3>
                              <label class="badge badge-pill badge-success py-1 px-2"><?php echo str_replace('-', ' ', $lat_pt->category); ?></label>
                              <p class="my-3">
                                <?php echo character_limiter($lat_pt->body, 100); ?>
                              </p>
                          </div>
                      </div>
                    </div>
                  <?php } }else{ echo ''; } ?>
                    <!-- End of Latest Post -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Most Viewed Post -->
                    <?php if(!empty($viewed_post)){ foreach($viewed_post as $view_pt){ ?>
                    <div class="col-lg-4 col-md-12">
                        <div class="card blog-widget">
                            <div class="card-body">
                              <div class="blog-image">
                                <img src="<?php echo base_url('uploads/post/'.$view_pt->image); ?>" alt="img" class="img-fluid blog-img-height w-100" /></div>
                                <h3><a href="<?php echo site_url('post/detail/'.$view_pt->id.'/'.$view_pt->title); ?>"><?php echo str_replace('-', ' ', $view_pt->title); ?></a></h3>
                                <label class="badge badge-pill badge-success py-1 px-2"><?php echo str_replace('-', ' ', $view_pt->category); ?></label>
                                <p class="my-3">
                                  <?php echo character_limiter($view_pt->body, 100); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } }else{ echo ''; } ?>
                    <!-- End of Most Viewed Post -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">Newsletter Campaign</h3>
                                        <h6 class="card-subtitle">Overview of Newsletter Campaign</h6>
                                    </div>
                                    <div class="ml-auto align-self-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-success"><i class="fa fa-circle font-10 mr-2 "></i>Open
                                                    Rate</h6>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-info"><i class="fa fa-circle font-10 mr-2"></i>Recurring
                                                    Payments</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="campaign ct-charts"></div>
                                <div class="row text-center">
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h1 class="mb-0 font-weight-light">5098</h1><small>Total Sent</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h1 class="mb-0 font-weight-light">4156</h1><small>Mail Open Rate</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h1 class="mb-0 font-weight-light">1369</h1><small>Click Rate</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex no-block">
                                    <h4 class="card-title">Most Viewed Post</h4>
                                </div>
                                <div class="month-table">
                                    <div class="table-responsive mt-3">
                                        <table class="table stylish-table v-middle mb-0 no-wrap">
                                            <thead>
                                                <tr>
                                                    <th class="border-0 text-muted font-weight-normal">Image</th>
                                                    <th class="border-0 text-muted font-weight-normal">Title</th>
                                                    <th class="border-0 text-muted font-weight-normal">Category</th>
                                                    <th class="border-0 text-muted font-weight-normal">Views</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php if(!empty($most_post)){ foreach($most_post as $mst_pt){ ?>
                                                <tr>
                                                  <td style="width:50px;">
                                                    <span class="round text-white d-inline-block text-center rounded-circle bg-info">
                                                      <img src="<?php echo base_url('uploads/post/'.$mst_pt->image); ?>" alt="user" class="rounded-circle" width="50" height="50">
                                                    </span>
                                                  </td>
                                                  <td><a href="<?php echo site_url('post/detail/'.$mst_pt->id.'/'.$mst_pt->title); ?>"><?php echo str_replace('-', ' ', $mst_pt->title); ?></a></td>
                                                  <td><?php echo str_replace('-', ' ', $mst_pt->category); ?></td>
                                                  <td><?php echo number_format($mst_pt->viewed); ?></td>
                                                </tr>
                                              <?php } }else{ echo ''; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top w-100 profile-bg-height" src="<?php echo base_url('assets/images/background/profile-bg.jpg'); ?>" alt="Card image cap">
                            <div class="card-body little-profile text-center">
                              <div class="pro-img">
                                <img src="<?php echo base_url('assets/images/users/4.jpg'); ?>" alt="user" class="rounded-circle shadow-sm" width="128" />
                              </div>
                                <h3 class="mb-0">Rising Phoenix</h3>
                                <p>Web Designer &amp; Developer</p>
                                <p>
                                  <small>Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit orem ipsum dolor sit amet,
                                    this is a consectetur adipisicing elit orem ipsum dolor sit amet, this is a consectetur adipisicing elit
                                  </small>
                                </p>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title">Recent Comments</h4>
                                <h6 class="card-subtitle mb-3 pb-1">Latest Comments on users from Material</h6>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Comment widgets -->
                            <!-- ============================================================== -->
                            <div class="comment-widgets scrollable mb-2 common-widget" style="height: 450px;">
                                <!-- Comment Row -->
                                <?php if(!empty($most_comment)){ foreach($most_comment as $mst_com){ ?>
                                <div class="d-flex flex-row comment-row p-3">
                                  <div class="p-2">
                                    <span class="round text-white d-inline-block text-center bg-info">
                                      <img src="<?php echo base_url('uploads/original.jpg'); ?>" class="rounded-circle" alt="user" width="50">
                                    </span>
                                  </div>
                                  <div class="comment-text w-100 p-3">
                                    <h5 class="text-nowrap"><?php echo $mst_com->fullname; ?></h5>
                                    <p class="mb-1 overflow-hidden">
                                      <?php echo $mst_com->body; ?>
                                    </p>
                                    <div class="comment-footer">
                                      <span class="text-muted pull-right">
                                        <?php echo date('j M Y', strtotime($mst_com->created_date)); ?>
                                      </span>
                                      <span class="action-icons">
                                        <a onclick="delete_comment(<?php echo $mst_com->id; ?>)" class="pl-3"><i class="ti-trash"></i></a>
                                      </span>
                                      <p id="ctd"></p>
                                    </div>
                                  </div>
                                </div>
                              <?php } }else{ echo ''; } ?>
                                <!-- Comment Row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title">Recent Messages</h4>
                                <h6 class="card-subtitle mb-3 pb-1">Latest Messages on users from Material</h6>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Comment widgets -->
                            <!-- ============================================================== -->
                            <div class="comment-widgets scrollable mb-2 common-widget" style="height: 450px;">
                                <!-- Comment Row -->
                                <?php if(!empty($most_contact)){ foreach($most_contact as $mst_con){ ?>
                                <div class="d-flex flex-row comment-row p-3">
                                  <div class="p-2">
                                    <span class="round text-white d-inline-block text-center bg-info">
                                      <img src="<?php echo base_url('uploads/original.jpg'); ?>" class="rounded-circle" alt="user" width="50">
                                    </span>
                                  </div>
                                  <div class="comment-text w-100 p-3">
                                    <h5 class="text-nowrap"><?php echo $mst_con->fullname; ?></h5>
                                    <h6 class="text-nowrap"><?php echo $mst_con->email; ?></h6>
                                    <p class="mb-1 overflow-hidden">
                                      <?php echo $mst_con->body; ?>
                                    </p>
                                    <div class="comment-footer">
                                      <span class="text-muted pull-right">
                                        <?php echo date('j M Y', strtotime($mst_con->created_date)); ?>
                                      </span>
                                      <span class="action-icons">
                                        <a onclick="delete_contact(<?php echo $mst_con->id; ?>)" class="pl-3"><i class="ti-trash"></i></a>
                                      </span>
                                      <p id="cti"></p>
                                    </div>
                                  </div>
                                </div>
                              <?php } }else{ echo ''; } ?>
                                <!-- Comment Row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
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
    function delete_comment(id){
      var deleted_id = id;
      if(confirm("Are you sure you want to delete this comment")){
      $.post('<?php echo base_url('admin/dashboard/delete_comment'); ?>', {"deleted_id": deleted_id}, function(data){
        location.reload();
        $('#ctd').html(data)
        });
      }
     }

     function delete_contact(id){
       var deleted_id = id;
       if(confirm("Are you sure you want to delete this message")){
       $.post('<?php echo base_url('admin/dashboard/delete_contact'); ?>', {"deleted_id": deleted_id}, function(data){
         location.reload();
         $('#cti').html(data)
         });
       }
      }
    </script>

</body>

</html>
