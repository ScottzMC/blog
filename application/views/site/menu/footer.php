<!-- FOOTER -->
<footer id="eskimo-footer">
    <div class="container">
        <div class="row eskimo-footer-wrapper">
            <!-- FOOTER WIDGET 1 -->
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h5 class="eskimo-title-with-border"><span>About Our Blog</span></h5>
                <p>Trusted by thousands of customers, my unique themes and plugins help you make beautiful responsive web sites with ease.</p>
                <p><a href="<?php echo site_url('about'); ?>" class="btn btn-default">Read More</a></p>
            </div>
            <!-- FOOTER WIDGET 2 -->
            <div class="col-12 col-lg-6">
                <h5 class="eskimo-title-with-border"><span>Notification</span></h5>
                <form action="<?php echo base_url('home'); ?>" method="post" enctype="application/x-www-form-urlencoded">
                    <label>Subscribe to our post notification!</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" placeholder="Your email address" required />
                        <div class="input-group-append">
                            <input type="submit" name="subscribe_btn" value="Sign up" class="btn btn-default" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- CREDITS -->
        <div class="eskimo-footer-credits">
            <p>
                Developed by <a href="https://spiela.co.uk/scottprofile" target="_blank">Scott Nnaghor</a>
            </p>
        </div>
    </div>
</footer>
