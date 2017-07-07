
<div class="main">
    <div class="container">
               <div class="col-md-8 single-right">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo base_url()?>application/upload/<?php echo $product->product_img?>">
								<div class="thumb-image"> <img src="<?php echo base_url()?>application/upload/<?php echo $product->product_img?>" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="<?php echo base_url()?>application/upload/<?php echo $product->product_img?>">
								 <div class="thumb-image"> <img src="<?php echo base_url()?>application/upload/<?php echo $product->product_img?>" data-imagezoom="true" class="img-responsive"> </div>
							</li>
                                                        <li data-thumb="<?php echo base_url()?>application/upload/<?php echo $product->product_img?>">
							   <div class="thumb-image"> <img src="<?php echo base_url()?>application/upload/<?php echo $product->product_img?>" data-imagezoom="true" class="img-responsive"> </div>
							</li> 
						</ul>
					</div>
					<!-- flixslider -->
						
					<!-- flixslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h3><?php echo $product->product_title?></h3>
					<h4><span class="item_price"><?php echo $product->product_price ?></span></h4>
		
					<div class="description">
						<h5><i>Description</i></h5>
						<p><?php echo $product->product_disc?></p>
					</div>
					
					<div class="occasional">
						<h5>Occasion :</h5>
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Wear</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Party Wear</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Formal Wear</label>
						</div>
						<div class="clearfix"> </div>
					</div>
                                         <?php 
                                         if(!isset($_SESSION['user_name']))
                                        {
                                            $user_name="NULL";
                                        }
                                        else {
                                             $user_name=$_SESSION['user_name'];
                                            }
                                            ?>
					<div class="occasion-cart">
                                            <button class="item_add btn btn-default btn-sm add2cart addCart" type="button" data-user-name="<?php echo $user_name?>" data-productId="<?php echo $product->product_id?>" data-productPrice="<?php echo $product->product_price?>" data-productname="<?php echo $product->product_img?>" data-productTitle="<?php echo $product->product_title?>">Add to cart </button>
					</div>
				
				</div>
				<div class="clearfix"> </div>
				
               </div>  
        <div class="col-sm-4 col-xs-4 col-md-2">
            <div class="sidebar-products clearfix">
            <div id="cartAdd">
            </div>
        </div>
        </div>
    </div>	</div>
