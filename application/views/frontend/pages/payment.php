
<div class="jumbotron row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong><?php echo $user->full_name ?></strong>
                        <br>
                        <?php echo $user->address ?>
                        <br>
                        <?php echo $user->email ?>
                        <br>
                        <abbr title="Phone">Phone:</abbr> <?php echo $user->phone_no ?>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date:<?php echo date('Y-M-D')?></em>
                    </p>
                    <p>
                         
                        <?php   
                        $string='123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                        $recept = str_shuffle($string);
                        $recepte = "OD".substr($recept,0,3) ?>
                        <em>Receipt #: <?php echo $recepte ?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($this->cart->contents() as $cont) {
   
            ?>
         <tr>
                      <td><?php echo substr($cont['name'],0,10)?></td>
                      <td><img src="<?php echo base_url().'/application/upload/'?><?php echo $cont['name']?>" height="100px" width="100px"/></td>
                      <td><?php echo $cont['qty']?></td>
                      <td><?php echo $cont['price']?></td>
                      <td><?php echo $cont['subtotal']?></td>
                       
                  </tr>
       <?php   }?>
                  <tr>
                      <td>Delivery Within a week.</td><td></td><td></td><td></td>
                            <td class="text-right pull-right"><h4><strong>Total: <?php echo $this->cart->total()?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?php echo base_url()?>makeorder/<?php echo $user->user_id?>/<?php echo $recepte ?>" class="btn btn-success btn-lg btn-block">
                    Order Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </a></td>
            </div>
        </div>

</div>