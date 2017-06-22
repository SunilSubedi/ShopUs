<div class="row">
     <?php if($this->session->flashdata('success'))
           { ?>
    <div class="alert alert-success text-center" >
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $this->session->flashdata('success')?>
    </div>
           <?php } ?>
    <div class="col-md-4 col-sm-4"></div>

<div class="col-md-3 col-sm-3">

    <div class="panel-body">

        <h1 class="page-header">Login....</h1>
<?php echo form_open('admin_login/process') ?>

        <fieldset>


            <div class="form-group">

                <input class="form-control"  id="user_name"  placeholder="User Name" name="user_nam" type="text"  autofocus required>

            </div>
            <div class="form-group">
                <input class="form-control" id="password"  placeholder="Password" name="pass"  type="password" required>
            </div>

            <!-- Change this to a button or input when using this as a form -->
            <input type="submit" name="submit" class="btn btn-lg btn-success btn-block"  value="Login"/>
        </fieldset>
       <?php echo form_close() ?>
    </div>   
</div>
    


</div>

