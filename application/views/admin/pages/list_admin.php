
  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List of Admin</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button class="btn btn-success" onclick="window.location = '<?php echo base_url()?>admin/addpage/add_admin'" type="button">Add New Admin</button>
                            </div>

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table class=" table table-striped table-bordered table-hover small" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>User Name</th>
                                            <th>Phone</th>
                                            <th>Password</th>
                                              <th>Edit</th>
                                            <th>Delete</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                       <?php
                                        foreach ($result as $row):
                                       ?>
                                        <tr>
                                            <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['first_name']?></td>
                                            <td><?php echo $row['last_name']?></td>
                                            <td><?php echo $row['email']?></td>
                                            <td><?php echo $row['user_nam']?></td>
                                     
                                            <td><?php echo $row['phone']?></td>
                                            <td><?php echo $row['pass']?></td>
                                          
                                            <td><a href="<?php echo base_url()?>uplist/adminUpdate/<?php echo $row['id']?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="<?php echo base_url()?>adelete/listadmin/list_admin/<?php echo $row['id']?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?')">Delete</a></td>
                                            
                                            
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