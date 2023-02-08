<?php

?>
<!DOCTYPE html>
<html lang="en">
  <?php require_once('includes/links.php')?>

<body>
    <!-- All our code. write here   -->
	<!-- beginning of header-->
	<?php require_once('includes/navbar.php') ?>
	<!-- end of header -->
	<br>
	<!-- sidebar starts -->
	<?php require_once('includes/sidebar.php') ?>
	<!-- sidebar ends -->
    
   
<div class="main-content pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-header bg-dark text-white text-center">
                    <span>Student Attendance System</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                    <span>Students</span>					
                </div>
                <div class="card-body">
                    <span><i class="fa fa-group fa-2x"></i></span>
                    <span class="float-right"> </span>
                </div>
                <div class="card-footer"></div>
            </div>     
            <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                        <span>no.of students attended</span>												
                </div>
                    <div class="card-body">
                        <span><i class="fa fa-user fa-2x"></i></span>
                        <span class="float-right">00</span>
                    </div> 
                    <div class="card-footer"></div>
            </div>
            <div class="col-lg-12">
                <div class="card-header bg-dark text-white text-center">
                    <span>Student Analysis Attendance</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-line-chart fa-2x"></i></span>
                    <span class="float-right">00</span>
                </div>
                <div class="card-footer"></div>
            </div>                 
        </div>            
    </div>         
</div>
   <?php require_once('includes/scripts.php') ?>

  
</body>
</html>
