<?php
$msg="";
  require_once('logics/process-add.php')
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- beginning of link -->
         <?php require_once('includes/links.php')?>
       <!-- end of link -->
    </head> 
<body>
	<!-- All our code. write here   -->

    <!-- beginning of header-->
      <?php require_once('includes/navbar.php') ?>
	<!-- end of header -->
    <br>

	<!-- sidebar starts -->
	<?php require_once('includes/sidebar.php') ?>
	<!-- sidebar ends -->

    <!--scripts starts here-->
    <?php require_once('includes/scripts.php') ?>
    <!--scripts ends here-->
    

    <div class="main-content pt-5">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
							<a class="float-left text-white " href="student.php">    
						          <span ><i class="fa fa-arrow-circle-left"></i> </span>                  
						          <span >Back</span>
					          </a>
							<h4>Add student </h4>
							<span class="text-success"> <?php echo $msg  ?></span>      
                        </div>
						<div class="card-body">
						    <form action="add-student.php" method="POST">
							    <div class="row">								
									<div class="mb-3 col-lg-6">
										<label for="fullname" class="form-label">Full name</label>
										<input type="text"name="fullname" class="form-control" placeholder="Enter Your Full name">
									</div> 
									<div class="mb-3 col-lg-6">
										<label for="phonenumber" class="form-label">Phone Number</label>
										<input type="tel" name="phonenumber" class="form-control" placeholder="+254">
									</div>
                                </div>
								<div class="row">
									<div class="mb-3 col-lg-6">
										<label for="Emailaddress" class="form-label">Email Address</label>
										<input type="email" name="email" class="form-control " placeholder=" please enter Your Email">
									</div>
									<div class="mb-3 col-lg-6">
										<label for="gender" class="form-label">What's Your gender </label>
										<select class="form-select form-control" name="gender" aria-label="Disabled select example" required>                       
											<option ></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>   
									</div> 
							    </div>  
								   								                                   								
								<div class="row pt-1">
									<div class="col-lg-6">
										<button type="submit" name="addstudents" class="btn btn-primary">Add Student</button>
									</div>
								</div>							
							</form>
						</div>
                    </div>
                </div>
			</div> 
      </div>	   						            					
    </div>
</body>
</html> 