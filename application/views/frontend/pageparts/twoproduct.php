<!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">
          <!-- BEGIN TWO PRODUCTS -->
          <div class="col-md-6 two-items-bottom-items">
            <h2>Two items</h2>
            <div class="owl-carousel owl-carousel2">
                       <?php  foreach($product_two as $product)
                    
                { ?> 
              <div>
                <div class="product-item wow zoomIn" data-wow-delay="0.5s">
                  <div class="pi-img-wrapper">
                      <img src="<?php echo base_url()?>/application/upload/<?php echo $product['product_img']?>" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="<?php echo base_url()?>/application/upload/<?php echo $product['product_img']?>" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="<?php echo base_url()?>product/<?php echo $product['product_id']?>" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html"><?php echo $product['product_title']?></a></h3>
                  <div class="pi-price">Rs.<?php echo $product['product_price']?></div>
                  <?php 
                  if(!isset($_SESSION['user_name']))
                  {
                      $user_name="NULL";
                  }
                  else {
                      $user_name=$_SESSION['user_name'];
                  }
                  ?>
                   <button type="button" data-user-name="<?php echo $user_name?>" data-productId="<?php echo $product['product_id']?>" data-productPrice="<?php echo $product['product_price']?>" data-productname="<?php echo $product['product_img']?>" data-productTitle="<?php echo $product['product_title']?>" class="btn btn-default btn-sm add2cart addCart">Add to cart</button>
                 
                </div>
              </div>
                <?php  } ?>
            </div>
          </div>
          <!-- END TWO PRODUCTS -->
           <?php $this->load->view('frontend/pageparts/promo.php')?>
        </div>        
        <!-- END TWO PRODUCTS & PROMO -->