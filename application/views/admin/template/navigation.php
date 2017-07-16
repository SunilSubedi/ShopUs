 <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
         <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url()?>admin">Online  Shopping System</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <a href="navigation.php"></a>
            <li class="divider"></li>
            <li><a href="<?php echo base_url()?>admin_login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
             <div class="sidebar-collapse">
    <ul class="nav" id="side-menu">
        <li>
            <a href="<?php echo base_url()?>backend/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>backend/admin/index/list_admin"><i class="fa fa-table fa-fw"></i>List Admin</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>backend/admin/index/list_category"><i class="fa fa-edit fa-fw"></i> List Category</a>
        </li>       
        <li>
            <a href="<?php echo base_url()?>backend/admin/index/list_sub_category"><i class="fa fa-edit fa-fw"></i> List Sub Category</a>
        </li>       
        <li>
            <a href="<?php echo base_url()?>backend/admin/index/list_product"><i class="fa fa-edit fa-fw"></i> List Products</a>
        </li>       
        <li>
            <a href="<?php echo base_url()?>backend/admin/index/list_order"><i class="fa fa-edit fa-fw"></i>List orders</a>
        </li>
          <li>
            <a href="<?php echo base_url()?>backend/admin/index/list_sales"><i class="fa fa-edit fa-fw"></i>List Sales</a>
        </li>
            
    </ul>
    <!-- /#side-menu -->
</div>
<!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
       <div id="page-wrapper">
           <div  style="margin-top: 50px">
           <?php if($this->session->flashdata('success'))
           { ?>
           <div class="row">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <div class="alert alert-success"><?php echo $this->session->flashdata('success')?></div>
           </div>
           </div>
           <?php } ?>