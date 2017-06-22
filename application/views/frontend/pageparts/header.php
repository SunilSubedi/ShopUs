<!-- BEGIN HEADER -->
 <?php 
  if($this->cart->contents()==NULL)
  {
      $order['count']=0;
      $order['price']=0;
  }
 else {
            $order['count']= $this->cart->total_items();
            $order['price']=$this->cart->total();
}
 
 ?>
    <div class="header">
      <div class="container">
          <a class="site-logo" href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>/application/assets/corporate/img/logos/logo.jpg" alt="ShopUs"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="javascript:void(0);" class="top-cart-info-count"> <?php echo $order['count']?> Items</a>
            <a href="javascript:void(0);" class="top-cart-info-value">$<?php echo $order['price']?></a>
          </div>
          <i class="fa fa-shopping-cart"></i>          
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
              <?php 
               foreach ($category as $cate)
               {
                  ?>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                <?php echo $cate['category_name'] ?>
                
              </a>
                
              <!-- BEGIN DROPDOWN MENU -->
              <ul class="dropdown-menu">
                  <?php  foreach($sub_category as $sub_cate) { 
                    if($sub_cate['category_id']==$cate['category_id'])
                    {
                   ?>
                <li>
                  <a href="<?php echo base_url()?>product/getProduct/<?php echo $cate['category_id']?>/<?php echo $sub_cate['sub_category_id']?>"><?php echo $sub_cate['sub_category_name']?></a>
        
                </li>
                  <?php  } } ?>
              </ul>
              <!-- END DROPDOWN MENU -->
            </li>
               <?php } ?>
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
