 <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>
              <li class="list-group-item clearfix dropdown">
                <a href="shop-product-list.html">
                  <i class="fa fa-angle-right"></i>
                  Mens
                  
                </a>
                <ul class="dropdown-menu">
                  <li class="list-group-item dropdown clearfix">
                    <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Shoes </a>
                      <ul class="dropdown-menu">
                        <li class="list-group-item dropdown clearfix">
                          <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
                          <ul class="dropdown-menu">
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                          </ul>
                        </li>
                        <li class="list-group-item dropdown clearfix">
                          <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport  </a>
                          <ul class="dropdown-menu">
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
                </ul>
              </li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Kids</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Accessories</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sports</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Brands</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Electronics</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Home & Garden</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Custom Link</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <h2>Three items</h2>
            <div class="owl-carousel owl-carousel3">
                <?php  foreach($product_three as $product)
                    
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
                     <button type="button" data-user-name="<?php echo $user_name?>" data-quantity="<?php echo $product['quantity']?>" data-productId="<?php echo $product['product_id']?>" data-productPrice="<?php echo $product['product_price']?>" data-productname="<?php echo $product['product_img']?>" data-productTitle="<?php echo $product['product_title']?>" class="btn btn-default btn-sm add2cart addCart">Add to cart</button>
                 
                </div>
              </div>
                <?php  } ?>
              
            
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
