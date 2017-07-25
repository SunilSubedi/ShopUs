<div class="row">
    
        <div class="well col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2">
            <div class="row">
                <h3 class="text-center">Customer Order</h3>
                
            
                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Name: <?php echo $order->full_name?></strong>
                        <br>
                         Address: <?php echo $order->address?>
                        <br>
                        Email: <?php echo $order->email?>
                        <br>
                        <abbr title="Phone">Phone:</abbr> <?php echo $order->phone_no ?>
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
                        
         <tr>
                      <td><?php echo $order->order_id?></td>
                      <td><?php echo $order->receipt?></td>
                      <td><?php echo $order->product_title?></td>
                      <td><img src="<?php echo base_url().'/application/upload/'?><?php echo $order->product_img?>" height="100px" width="100px"/></td>
                      <td><?php echo $order->order_quantity?></td>
                      <td><?php echo $order->price?></td>
                      <td><?php echo $order->order_date?></td>
                      <td><?php echo $order->order_status?></td>
                       
                  </tr>

                    </tbody>
                </table>
            </div>
        </div>
    <div class="col-md-3 col-xs-3 col-md-push-2 col-xs-push-3">
    Change Status
    <?php echo form_open('oders/changeorder')?>
    <input type="hidden" name="order_id" value="<?php echo $order->order_id?>"/>
    <select name="status" class="form-control">
        <option value="ordered">Ordered</option>
        <option value="shipping">Shipping</option>
        <option value="closed">Closed</option>
        <option value="cancel">Cancel</option>
    </select>
    <br/>
    <input type="submit" name="submit" value="Update" class="btn btn-success"/>
                <?php echo form_close() ?>
            
    </div>
</div>
