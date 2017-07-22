
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
                                    
                                 <?php echo form_open_multipart('backend/addlist/postproduct',array('role'=>'form')) ?>
                                    <?php foreach ($data as $product) { ?>
                                    <input type="hidden" name="id" value="<?php echo $product['product_id']?>"/>
                                          <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" type="text" name="product_title" value="<?php echo $product['product_title'] ?>" required>
                                            
                                        </div>
                                       <div class="form-group">
                                            <label>Sub Category</label>
                                            <select class="form-control" name="sub_category_id">
                                                <?php foreach ($sub_category as $catt) : ?>
                                                
                                                <option <?php if($product['sub_category_id']==$catt['sub_category_id']) echo "selected"; ?>  value="<?php echo $catt['sub_category_id']?>"><?php echo $catt['sub_category_name']?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                           <div class="form-group">
                                            <label>For</label>
                                            <select class="form-control" name="category_id">
                                                <?php foreach ($category as $cate) : ?>
                                   
                                                <option <?php if($product['category_id']==$cate['category_id']) echo "selected"; ?>   value="<?php echo $cate['category_id']?>"><?php echo $cate['category_name']?></option>
                                                
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea class="form-control ckeditor" name="product_disc"  required>
                                                <?php echo $product['product_disc']?>

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
                                        <input type="text" name="product_price" value="<?php echo $product['product_price']?>" class="form-control" pattern="\d{3}+" required/>
                                    </div>
                                     <div class="form-group">
                                        <label>Product Quantity</label>
                                        <input type="text" name="quantity" class="form-control" value="<?php echo $product['quantity']?>" pattern="\d{2}" required/>
                                    </div>
                                    
                                  
                                        <div class="form-group">
                                          <label>File input</label>
                                          <input type="file" name="file_name"   value="<?php echo $product['product_img']?>">
                                            
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
                                            <input type="submit" name="submit" class="btn btn-primary" value="Update"/>
                                            
                                        </div>
                                  
                                     
                                       <?php } ?>
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