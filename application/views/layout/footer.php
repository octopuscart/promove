<footer class="footer_area">
    <div class="footer_widget_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <aside class="f_widget about_widget">
                        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" style="height: 70px;">
                        <p>Start.ly Logistics is a mobile first responsive website template for logistics or transportation.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </aside>
                </div>

                <div class="col-md-3 col-xs-6">
                    <aside class="f_widget service_widget">
                        <div class="f_title">
                            <h3>Services</h3>
                        </div>
                        <ul>
                            <li><a href="#">Local Moving</a></li>
                            <li><a href="#">Professional Packing</a></li>
                            <li><a href="#">Removal / Recycle</a></li>
                            <li><a href="#">Specialized Transport</a></li>
                            <li><a href="#">Logistics Solutions</a></li>
                            <li><a href="#">Boxes & Supplies</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-xs-6">
                    <aside class="f_widget info_widget">
                        <div class="f_title">
                            <h3>Contact</h3>
                        </div>
                        <div class="contact_details">
                            <p>Contact No.: <a href="tel:>+(852)6151-2644">+(852)6151-2644</a></p>

                            <p>Email: <a href="m.sirajbtc@gmail.com" class="__cf_email__" >m.sirajbtc@gmail.com</a></p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copy_right">
        <div class="container">
            <h4>Copyright © <?php echo date("Y") ?> All rights reserved.</h4>
        </div>
    </div>
</footer>


<script src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.js"></script>

<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/jvectormap/jvectormap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/jvectormap/jvectormap-worldmill.js"></script>
<script src="<?php echo base_url(); ?>assets/js/locations.js"></script>

<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "85261512644", // WhatsApp number
            call_to_action: "Contact Us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
</body>

</html>