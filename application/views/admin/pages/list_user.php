
  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List of User</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table class=" table table-striped table-bordered table-hover small" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Full Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Phone No </th>
                                            <th>Address</th>
                                           <th>Edit</th>
                                       </tr> 
                                    </thead>
                                    <tbody>
                                       <?php
                                        foreach ($result as $row):
                                       ?>
                                        <tr>
                                            <td><?php echo $row['user_id']?></td>
                                            <td><?php echo $row['full_name']?></td>
                                            <td><?php echo $row['user_name']?></td>
                                            <td><?php echo $row['email']?></td>
                                            <td><?php echo $row['phone_no']?></td>
                                            <td><?php echo $row['address']?></td>
                                             <td><?php echo $row['gender']?></td>
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

