
  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List of Product</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button class="btn btn-success" onclick="window.location = '<?php echo base_url()?>admin/addpage/add_product'" type="button">Add New Product</button>
                            </div>

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table class=" table table-striped table-bordered table-hover small" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Product Title</th>
                                            <th>For</th>
                                            <th>Type</th>
                                            <th>Product Image </th>
                                            <th>Product Description</th>
                                            <th>Product Size</th>
                                            <th>Product Prize</th>
                                            <th>Product Quantity</th>  
                                             <th>Status</th>
                                            
                                             <th>Edit</th>
                                            <th>Delete</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                       <?php
                                        foreach ($result as $row):
                                       ?>
                                        <tr>
                                            <td><?php echo $row['product_id']?></td>
                                            <td><?php echo $row['product_title']?></td>
                                            <td><?php echo $row['category_name']?></td>
                                            <td><?php echo $row['sub_category_name']?></td>
                                            <td><img src="<?php echo base_url()?>/application/upload/<?php echo $row['product_img']?>" height="100px" width="100px"></td>
                                            <td><?php echo $row['product_disc']?></td>
                                            <td><?php echo $row['product_size']?></td>
                                            <td><?php echo $row['product_price']?></td>
                                            <td><?php echo $row['quantity']?></td>
                                            <td><?php echo $row['status']?></td>
                                             <td><a href="<?php echo base_url()?>backend/uplist/productUpdate/<?php echo $row['product_id']?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="<?php echo base_url()?>backend/adelete/listadmin/list_product/<?php echo $row['product_id']?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?')">Delete</a></td>
                                            
                                            
                                        
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

