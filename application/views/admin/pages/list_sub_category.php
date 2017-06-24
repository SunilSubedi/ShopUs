
  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List of Sub Category</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button class="btn btn-success" onclick="window.location = '<?php echo base_url()?>admin/addpage/add_sub_category'" type="button">Add New Sub Category</button>
                            </div>

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table class=" table table-striped table-bordered table-hover small" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
                                             <th>Edit</th>
                                            <th>Delete</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                       <?php
                                        foreach ($result as $row):
                                       ?>
                                        <tr>
                                            <td><?php echo $row['sub_category_id']?></td>
                                            <td><?php echo $row['category_name']?></td>
                                            <td><?php echo $row['sub_category_name']?></td>
                                             <td><a href="<?php echo base_url()?>backend/uplist/subcategoryUpdate/<?php echo $row['sub_category_id']?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="<?php echo base_url()?>backend/adelete/listadmin/list_sub_category/<?php echo $row['sub_category_id']?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?')">Delete</a></td>
                                            
                                            
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
