<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Registration Using CI</title>
</head>
<body>
    <div align="center">
            <!--Header Starts-->
            <p>
               <?php if($this->session->userdata('logged_in')) : ?>
               <p>Welcome,  <?php echo $this->session->userdata('username'); ?></p>
               <a href="<?php echo base_url(); ?>user/update">Edit your profile</a>
             <?php else : ?>
                <a href="<?php echo base_url(); ?>user/register">Register</a>
               <?php endif; ?>            
               <a href="<?php echo base_url(); ?>">Home</a> 
             </p>
         
           <!--Header Ends-->
    </div>

    <div align="center">
       <!--Content Starts-->
          <div style="margin:0 0 10px 10px;">
		    <?php $this->load->view('login'); ?>
          </div>  
          <div class="span9">
         <?php $this->load->view($main_content); ?>
          </div> 
        <!--Content Ends-->
 
      <hr>
        <!--Footer Starts-->
      <footer>
        <p>&copy; Copyright 2015</p>
      </footer>
        <!--Footer End-->
    </div> 
</body>
</html>