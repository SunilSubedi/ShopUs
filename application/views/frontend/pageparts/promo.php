   <!-- BEGIN PROMO -->
          <div class="col-md-6 shop-index-carousel">
            <div class="content-slider">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                      <img src="<?php echo base_url()?>/application/upload/<?php echo $content_slider[2]['product_img']?>" style="height: 400px" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                    <?php foreach ($content_slider as $slide) { ?>
                  <div class="item">
                      <img src="<?php echo base_url()?>/application/upload/<?php echo $slide['product_img']?>" style="height: 400px" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                    <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <!-- END PROMO -->