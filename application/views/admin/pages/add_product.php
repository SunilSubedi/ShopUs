       <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#" class="btn btn-primary">Add Products</a>
                        </div>
                                        <div class="form-group">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                 <?php echo form_open_multipart('addlist/postproduct',array('role'=>'form')) ?>
                                          <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" type="text" name="product_title">
                                            
                                        </div>
                                       <div class="form-group">
                                            <label>Sub Category</label>
                                            <select class="form-control" name="sub_category_id">
                                                <?php foreach ($sub_category as $catt) : ?>
                                                <option value="<?php echo $catt['sub_category_id']?>"><?php echo $catt['sub_category_name']?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                           <div class="form-group">
                                            <label>For</label>
                                            <select class="form-control" name="category_id">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea class="form-control" name="product_disc">
                                                

                                            </textarea>
                                            
                                        </div>
                                       
                                    <div class="form-group">
                                            <label>Product Size</label>
                                            <select class="form-control" name="product_size">
                                                <option value="small">Small</option>
                                                <option value="medium">Medium</option>
                                                <option value="large">Large</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label>Product Price</label>
                                        <input type="text" name="product_price" class="form-control"/>
                                    </div>
                                    
                                  
                                        <div class="form-group">
                                          <label>File input</label>
                                          <input type="file" name="file_name">
                                            
                                        </div>
                                    
                                          <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                       
                                          <div class="form-group">
                                            <label></label>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Add"/>
                                            
                                        </div>
                                  
                                     
          
                                    <?php echo form_close(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                    <!-- <div class="form-group">
                                            <label>Static Control</label>
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                            <label>File input</label>
                                            <input type="file">
                                        </div>-->