
<!-- Core Scripts - Include with every page -->

    <script src="<?php echo base_url()?>application/assets/js/jquery-1.10.2.js"></script>
              <script src="<?php echo base_url()?>application/assets/js/parsley.js" type="text/javascript"></script>

        <script src="<?php echo base_url()?>application/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>application/assets/js/vali.js"></script>

    <script src="<?php echo base_url()?>application/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url()?>application/assets/js/wow.min.js"></script>

      <script src="<?php echo base_url()?>application/assets/js/ajax.js" type="text/javascript"></script>
           
    <script src="<?php echo base_url()?>application/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    
     
    <script src="<?php echo base_url()?>application/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo base_url()?>application/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo base_url()?>application/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='<?php echo base_url()?>application/assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="<?php echo base_url()?>application/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="<?php echo base_url()?>application/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>application/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    <script src="<?php echo base_url()?>application/assets/js/simpleCart.min.js"> </script>
   <script>
              new WOW().init();
              </script>

    <script src="<?php echo base_url()?>application/assets/js/imagezoom.js"> </script>
    <script defer src="<?php echo base_url()?>application/assets/js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
    
  </body>
  </html>