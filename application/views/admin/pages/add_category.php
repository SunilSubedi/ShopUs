<?php
  if(!isset($data))
  {
      $data[0]['category_id']=NULL;
      $data[0]['category_name']=NULL;
  }


?>
<div class="main-content">

        <!-- You only need this form and the form-register.css -->

        
            <?php echo form_open('addlist/postcategory',array('class'=>'form-register'))?>
        <input type="hidden" name="id" value="<?php echo $data[0]['category_id']?>"/>
            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>New Category</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span> Category Name</span>
                            <input type="text" name="category_name" required value="<?php echo $data[0]['category_name']?>">
                        </label>
                    </div>
                  

                    <div class="form-row">
                        <button type="submit">ADD</button>
                    </div>

                </div>


       <?php echo form_close()?>

    </div>



