
 <?php
    
    $this->load->view('frontend/pageparts/slider.php');
 ?>
    <div class="main">
      <div class="container">
       <?php 
       $this->load->view('frontend/pageparts/newArival.php');
       $this->load->view('frontend/pageparts/sidebar.php');
       $this->load->view('frontend/pageparts/twoproduct.php');
   
       
       ?>
    </div>
    </div>
   <?php 
     $this->load->view('frontend/pageparts/steps.php');
   
   
   ?>

