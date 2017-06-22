<div class="jumbotron"> 
     <?php if($this->session->flashdata('success'))
           { ?>
           <div class="row">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <div class="alert alert-success text-center"><?php echo $this->session->flashdata('success')?></div>
           </div>
           <?php } ?>
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">User Login</h1>
            <div class="account-wall">
               
                    <?php echo form_open('user_login/check',array('data-parsley-validate'=>''))?>
                 
                <input type="email" class="form-control" placeholder="Email" name="email" required />
                <input type="password" class="form-control" placeholder="Password"  name="password" data-parsley-required maxlength="16" minlength="8"/>
                <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Sign In">
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                               <?php echo form_close();?>
             
            </div>
         
            
        </div>

     
     
</div>
    <br>
<div class="row" style="margin-bottom: 10px;" >
   
    <div align="center">
        <button type="button" data-toggle="modal" data-target="#mod" class="btn btn-info btn-large">Sign Up</button>
        <div class="modal fade" id="mod">
            <div class=" modal-dialog" align="left" ng-app="">
                <div class=" modal-content">
                    <div class=" modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h4 class=" modal-title">Fill the form</h4>
                    </div>
                    <div class=" modal-body">
                       <?php echo form_open('/user_login/register',array('name'=>'myForm','data-parsley-validate'=>'','id'=>'signup'))?>
                            <div class=" input-group">
                                <label class="label label-primary input-group-addon" for="full_name" >Full Name*</label>
                                <input type="text" class="form-control col-sm-10" name="full_name" required>
                               
                            </div>
                            <div class=" input-group">
                                <label class="label label-primary input-group-addon" for="user_name">User Name*</label>
                                <input type="text" class="form-control col-sm-10" name="user_name" required>
                                 <div id="user"></div>
                            </div>
                            <div class=" input-group">
                                <label class="label label-primary input-group-addon" for="email">Email*</label>
                                <tr> <input type="email" class="form-control" name="email" required/>
                            </div>  
                               <div class=" input-group">
                                <label class="label label-primary input-group-addon" for="phone">Phone No*</label>
                                <tr> <input type="text" class="form-control" name="phone" required pattern="\d{10}" data-prasely-length="10"/>
                            </div>  
                               <div class=" input-group">
                                <label class="label label-primary input-group-addon" for="address">Address*</label>
                                <tr> <input type="text" class="form-control" name="address" required/>
                            </div>  
                               <div class=" input-group">
                                <label class="label label-primary input-group-addon" for="password">Password*</label>
                                <tr> <input type="password" class="form-control" id="pas" name="password" required maxlength="16" minlength="8" id="pass"/>
                            </div>  
                           <div class=" input-group">
                                <label class="label label-primary input-group-addon" for="con-password">Confirm-Password*</label>
                                <tr> <input type="password" class="form-control"  name="con-password" data-prasley-equalto="#pass" required/>
                                
                            </div>  
                           <div class="input-group">
                                <label class="label label-primary input-group-addon" for="gender">Gender*</label>
                                <tr> <input type="radio" name="gender" class="radio-inline" value="male">Male
                                 <input type="radio" name="gender" class="radio-inline" value="female">Female
                            </div>  
                        
                            
                            <div class=" modal-footer">
                                <input type="submit" class="btn btn-success" id="subm" name="submit" value="Register"/>
                            </div>
                        <?php echo form_close()?>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>