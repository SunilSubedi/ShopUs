
<div class="container">
    <div class="main">
     <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong><?php echo $order[0]['full_name']?></strong>
                        <br>
                        <?php echo $order[0]['address']?>
                        <br>
                        <?php echo $order[0]['email']?>
                        <br>
                        <abbr title="Phone">Phone:</abbr> <?php echo $order[0]['phone_no'] ?>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date:<?php echo date('Y-M-D')?></em>
                    </p>
                </div>
            </div>
            <div class="row">
               
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Receipt</th>
                            <th>Product Title</th>
                            <th>Product Image</th>
                             <th>Quantity</th>
                            <th>Price</th>
                            <th>Order Date</th>
                            <th>Status</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($order as $orders) {
   
            ?>
         <tr>
                      <td><?php echo $orders['order_id']?></td>
                      <td><?php echo $orders['receipt']?></td>
                      <td><?php echo $orders['product_title']?></td>
                      <td><img src="<?php echo base_url().'/application/upload/'?><?php echo $orders['product_img']?>" height="100px" width="100px"/></td>
                      <td><?php echo $orders['order_quantity']?></td>
                      <td><?php echo $orders['price']?></td>
                      <td><?php echo $orders['order_date']?></td>
                      <td><?php echo $orders['order_status']?></td>
                       
                  </tr>
       <?php   }?>
                    </tbody>
                </table>
            </div>
        </div>

</div>
        
    </div>
    
</div>
