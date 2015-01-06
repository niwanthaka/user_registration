<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Registration Using CI</title>
</head>
<body>
 

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