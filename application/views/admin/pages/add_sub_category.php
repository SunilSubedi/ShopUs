<?php
if(!isset($data))
{
    $data[0]['sub_category_id']=NULL;
    $data[0]['category_id']=NULL;
    $data[0]['sub_category_name']=NULL;
}

?>
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#" class="btn btn-primary">Add Sub Category</a>
                        </div>
                                        <div class="form-group">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                 <?php echo form_open('addlist/postsubcategory',array('role'=>'form')) ?>
                                    <input type="hidden" name="id" value="<?php echo $data[0]['sub_category_id']?>"/>
                                     <div class="form-group">
                                            <label>Category Name</label>
                                            <select class="form-control" name="category_id">
                                                <?php foreach ($category as $cat) : 
                                                    if($cat['category_id']==$data[0]['category_id'])
                                                    { ?>
                                                <option value="<?php echo $cat['category_id']?>" selected><?php echo $cat['category_name']?></option>
                                                    <?php }  else { ?>
                                                    
                                                
                                                <option value="<?php echo $cat['category_id']?>"><?php echo $cat['category_name']?></option>
                                                    <?php } endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category Name</label>
                                            <input class="form-control" type="text" name="sub_category_name" value="<?php echo $data[0]['sub_category_name']?>">
                                            
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