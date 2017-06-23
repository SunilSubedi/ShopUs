<?php if(!isset($_SESSION['user_name']))
{
redirect('/user_login');
}
?>
<div class="jumbotron"><table class="table table-striped small">
        <?php $count=0; ?>
                .  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Delte</th>
                      <th>Total</th>
                  </tr>
                   <?php foreach ($this->cart->contents() as $cont) {
            $count++;
            ?>
         <tr>
                      <td><?php echo $cont['id']?></td>
                      <td><img src="<?php echo base_url().'/application/upload/'?><?php echo $cont['name']?>" height="200px" width="200px"/></td>
                      <td><?php echo $cont['qty']?></td>
                      <td><?php echo $cont['price']?></td>
                      <td><button type="button" class="btn btn-danger dele" data-id='<?php echo $cont['id']?>'>Delete</button></td>
                       <td><?php echo $cont['subtotal']?></td>   
                  </tr>
       <?php   }?>
                  <tr><td colspan="2" align="center"><h4> All Total:- <small>Rs</small> <?php echo $this->cart->total()?></h4></td><td>
                          <a href="<?php echo base_url()?>payment" class="btn btn-info">Processed</a></td><tr>;
        <?php
        if($count==0)
        {
            echo '<h1 align="center">Empty Cart</h1>';
        }
        ?>
    </table>
        
</div>