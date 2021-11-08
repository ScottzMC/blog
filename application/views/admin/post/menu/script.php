<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets/libs/popper.js/dist/umd/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- apps -->
<script src="<?php echo base_url('dist/js/app.min.js'); ?>"></script>
<script src="<?php echo base_url('dist/js/app.init.js'); ?>"></script>
<script src="<?php echo base_url('dist/js/app-style-switcher.js'); ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/sparkline/sparkline.js'); ?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('dist/js/waves.js'); ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('dist/js/sidebarmenu.js'); ?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('dist/js/custom.min.js'); ?>"></script>
<!--This page JavaScript -->
<!-- chartist chart -->
<script src="<?php echo base_url('assets/libs/chartist/dist/chartist.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'); ?>"></script>
<!--c3 JavaScript -->
<script src="<?php echo base_url('assets/libs/d3/dist/d3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/c3/c3.min.js'); ?>"></script>
<!-- Vector map JavaScript -->
<script src="<?php echo base_url('assets/libs/jvectormap/jquery-jvectormap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/extra-libs/jvector/jquery-jvectormap-us-aea-en.js'); ?>"></script>
<!-- Chart JS -->
<script src="<?php echo base_url('dist/js/pages/dashboards/dashboard2.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/tinymce/tinymce.min.js'); ?>"></script>
<script>
    $(function () {
        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            });
        }
    });
</script>
