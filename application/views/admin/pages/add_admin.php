<?php
     if(!isset($data))
     {
         $data[0]['id']=NULL;
         $data[0]['first_name']=NULL;
         $data[0]['last_name']=NULL;
         $data[0]['email']=NULL;
         $data[0]['user_nam']=NULL;
         $data[0]['phone']=NULL;
     }
?>

<div class="main-content">

        <!-- You only need this form and the form-register.css -->

        
            <?php echo form_open('backend/addlist/postadmin',array('class'=>'form-register','method'=> 'post','data-parsley-validate'=>'','name'=>'admin_form'))?>
          <div><?php echo validation_errors()?></div>
          <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span> First Name</span>
                            <input type="text" name="first_name" required value="<?php echo $data[0]['first_name'] ?>">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Last Name</span>
                            <input type="text" name="last_name" required value="<?php echo $data[0]['last_name'] ?>">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>User Name</span>
                            <input type="text" name="user_name" required value="<?php echo $data[0]['user_nam']?>">
                        </label>
                    </div>
                 

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required value="<?php echo $data[0]['email'] ?>">
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <label>
                            <span>Phone</span>
                            <input type="text" name="phone" required value="<?php echo $data[0]['phone']?>" pattern="\d{10}">
                        </label>
                    </div>
                    

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password" required>
                        </label>
                    </div>
                     <div class="form-row">
                        <label>
                            <span>Confirm Password</span>
                            <input type="password" name="cpassword" required> 
                        </label>
                    </div>

              

                    <div class="form-row">
                        <input type="submit" name="submit" value="ADD" onclick="return check()" class="btn btn-primary"/>
                    </div>

                </div>


       <?php echo form_close()?>
                
    </div>
          <script type="text/javascript">
               function check()
               {
                   var password = document.admin_form.password.value;
                   var cpassword = document.admin_form.cpassword.value;
                    if(password != cpassword)
                    {
                        alert('Password didnot match !');
                        document.admin_form.cpssword.focus();
                        return false;
                    }
                    return true;
                }   
                    </script>

