   <!-- BEGIN TOP BAR -->
   <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span><?php echo $phone ?></span></li>
                        <!-- BEGIN CURRENCIES -->
                        <li class="shop-currencies">
                            <a href="javascript:void(0);">Rs</a>
                        
                        </li>
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                         
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        
                        <li>Welcome
                        <?php 
                        if(isset($_SESSION['user_name']))
                        {
                            echo $_SESSION['user_name'];
                        }
                        else
                        {
                            echo "Guest";
                        }
                        
                        
                        
                        ?>
                        
                        </li>
                        
                        
                        <?php 
                        if(isset($_SESSION['user_name']))
                        {
                            
                            $option = 'user_login/logOut'; ?>
                        <li><a href="<?php echo base_url()?>view_order">Orders</a></li>
                        <li><a href="<?php echo base_url()?>checkout">Checkout</a></li>
                        <?php }
                        else
                        {
                            $option = 'user_login';
                        }
                        ?>
                      
                        <li><a href="<?php echo base_url().$option?>">
                            <?php 
                            if(isset($_SESSION['user_name']))
                            {
                                echo "Log Out";
                            }
                            else
                            {
                                echo "Log In";
                            }
                            ?>
                            </a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

