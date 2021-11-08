<!-- JS FILES -->
<script src="<?php echo base_url('js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('js/salvattore.min.js'); ?>"></script>
<script src="<?php echo base_url('js/slick.min.js'); ?>"></script>
<script src="<?php echo base_url('js/panel.js'); ?>"></script>
<script src="<?php echo base_url('js/reading-position-indicator.js'); ?>"></script>
<script src="<?php echo base_url('js/rrssb.min.js'); ?>"></script>
<script src="<?php echo base_url('js/featherlight.js'); ?>"></script>
<script src="<?php echo base_url('js/ajax-contact-form.js'); ?>"></script>
<script src="<?php echo base_url('js/custom.js'); ?>"></script>
<!-- POST SLIDER -->
<script>
    (function($) {
        "use strict";
        $(document).ready(function() {
            $('#eskimo-post-slider').slick({
                autoplay: true,
                autoplaySpeed: 5000,
                slidesToScroll: 1,
                adaptiveHeight: true,
                slidesToShow: 1,
                arrows: true,
                dots: false,
                fade: true
            });
        });
        $(window).on('load', function() {
            $('#eskimo-post-slider').css('opacity', '1');
            $('#eskimo-post-slider').parent().removeClass('eskimo-bg-loader');
        });
    })(jQuery);

</script>
<!-- POST CAROUSEL -->
<script>
    (function($) {
        "use strict";
        $(document).ready(function() {
            $('#eskimo-post-carousel').slick({
                infinite: false,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                slidesToShow: 3,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }]

            });
            $('#eskimo-post-carousel').css('opacity', '1');
        });
    })(jQuery);

</script>
