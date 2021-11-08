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
    <?php foreach($edit as $edt){} ?>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <title>Edit <?php echo $edt->title;?> Post|| Admin Blog</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/select2/dist/css/select2.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/dropzone/dist/min/dropzone.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/summernote/dist/summernote-bs4.css'); ?>">
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
                    <h3 class="text-themecolor mb-0">Edit Post</h3>
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
                              <h4 class="card-title">Edit Navigation Category</h4>
                          </div>
                          <hr>
                          <form action="<?php echo base_url('admin/post/edit/'.$edt->id); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                              <div class="card-body">
                                  <h4 class="card-title">Add Title</h4>
                                  <div class="form-group row">
                                      <div class="col-sm-9">
                                          <input type="text" class="form-control" name="title" placeholder="Title here" value="<?php echo str_replace('-', ' ', $edt->title); ?>">
                                      </div>
                                  </div>
                              </div>
                              <hr>
                              <div class="card-body">
                                <h4 class="card-title">Add Category</h4>
                                <select class="select2 form-control custom-select" name="category" style="width: 100%; height:36px;">
                                  <?php if(!empty($menu_option)){ foreach($menu_option as $mn_opt){ ?>
                                    <option value="<?php echo $mn_opt->category; ?>"><?php echo str_replace('-', ' ', $mn_opt->category); ?></option>
                                  <?php } }else{ echo ''; } ?>
                                </select>
                              </div>
                              <hr>
                              <div class="card-body">
                                <h4 class="card-title">Add Affliate Status</h4>
                                <select class="select2 form-control custom-select" name="affliate_status" style="width: 100%; height:36px;">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                              <hr>
                              <div class="card">
                                  <div class="card-body">
                                      <h4 class="card-title">Add Content</h4>
                                        <textarea id="mymce" name="body"><?php echo $edt->body; ?></textarea>
                                  </div>
                              </div>
                              <hr>
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Upload picture</h4>
                                  <h6 class="card-subtitle">For multiple file upload put class <code>.dropzone</code> to form.</h6>
                                    <div class="fallback">
                                      <input type="hidden" name="banner" value="<?php echo $edt->image; ?>">
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
