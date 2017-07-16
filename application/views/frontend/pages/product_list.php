<?php 

?>
<div class="title-wrapper">
      <div class="container"><div class="container-inner">
        <h1><span><?php echo $category[0]['category_name']?></span> CATEGORY</h1>
        <em>Over 4000 Items are available here</em>
      </div></div>
    </div>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active"><?php echo $category[0]['category_name']?> category</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-5 col-sm-6 col-xs-6 ">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix dropdown active">
                <a href="javascript:void(0);" class="collapsed">
                  <i class="fa fa-angle-right"></i>
                  <?php echo $category[0]['category_name']?> 
                  
                </a>
                <ul class="dropdown-menu" style="display:block;">
                  <li class="list-group-item dropdown clearfix active">
                    <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> <?php echo $product[0]['sub_category_name']?>  </a>
                     
                  </li>
                  
                </ul>
              </li>
            </ul>

            

            <div class="sidebar-products clearfix">
                
              <h2>Cart</h2>
              <div id="cartAdd">
            </div>
            </div>
          </div>
         
            <!-- BEGIN PRODUCT LIST -->
          
                
         
                     
                              
            <div class="row product-list">
               
              <!-- PRODUCT ITEM START -->
                
               <?php  foreach($product as $products) { ?>
              <div class="col-md-2 col-xs-6">
                
                <div class="product-item">
                  <div class="pi-img-wrapper">
                      <img src="<?php echo base_url()?>application/upload/<?php echo $products['product_img']?>" class="img-responsive" height="200px" width="200px" alt="Berry Lace Dress">
                    <div>
                      <a href="<?php echo base_url()?>/application/upload/<?php echo $products['product_img']?>" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="<?php echo base_url()?>product/<?php echo $products['product_id']?>" class="btn btn-default btn-sm fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html"><?php echo $products['product_title']?></a></h3>
                  <div class="pi-price">Rs.<?php echo $products['product_price']?></div>
                  <?php 
                  if(!isset($_SESSION['user_name']))
                  {
                      $user_name="NULL";
                  }
                  else {
                      $user_name=$_SESSION['user_name'];
                  }
                  ?>
                  <button type="button" data-user-name="<?php echo $user_name?>" data-productId="<?php echo $products['product_id']?>" data-productPrice="<?php echo $products['product_price']?>" data-productname="<?php echo $products['product_img']?>" data-productTitle="<?php echo $products['product_title']?>" class="btn btn-default btn-sm add2cart addCart">Add to cart</button>
                </div>
                  
              </div>
            
             
              <?php } ?>
             
             
            </div>
                
            
          
            <!-- END PRODUCT LIST -->
            <!-- BEGIN PAGINATOR -->
            
            <!-- END PAGINATOR -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
