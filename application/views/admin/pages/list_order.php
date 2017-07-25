
  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List of Order</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Order
                            </div>

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table class=" table table-striped table-bordered table-hover small" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Id</th>
                                             <th>User Id</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Receipt</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Details</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                       <?php
                                        foreach ($result as $row):
                                       ?>
                                        <tr>
                                            <td><?php echo $row['order_id']?></td>
                                            <td><?php echo $row['product_id']?></td>
                                            <td><?php echo $row['user_id']?></td>
                                            <td><?php echo $row['price']?></td>
                                            <td><?php echo $row['order_quantity']?></td>
                                            <td><?php echo $row['receipt']?></td>
                                            <td><?php echo $row['order_date']?></td>
                                            <td><?php echo $row['order_status']?></td>
                                            <td><a href="<?php echo base_url()?>backend/admin/view_order/<?php echo $row['order_id']?>" class="btn btn-info">View</a></td>
                                     </tr>


                                     <?php  endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>