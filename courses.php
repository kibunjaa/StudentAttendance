<!DOCTYPE html>
<html lang="en">
<!-- beginning of link -->
<?php require_once('includes/links.php')?>
    <!-- end of link -->
<body>
    <!-- All our code. write here   -->
    <!-- beginning of header-->
    <?php require_once('includes/navbar.php') ?>
	<!-- end of header -->
    <br>
	<!-- sidebar starts -->
	<?php require_once('includes/sidebar.php') ?>
	<!-- sidebar ends -->

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Courses</span>
                        <a href="adding-courses.php">    
                             <span><i class="fa fa-edit"></i> </span>      
                             <span></span>
					    </a>	
					</div>								
				</div>                 
			</div>  
            <div class="card">
                <div class="card-body">
                    <label for="message" class="form-label" > Course?</label>
						<select class="form-select form-control " name="course" aria-label="Disabled select example">
						<option><b></b></option>
						<option value="Information Technology">Information Technology</option>
						    <option value="Land Survey">Land Survey</option>
							<option value="Photogrammetry & Remote Sensing">Photogrammetry & Remote Sensing</option>
							<option value="Catography and GIS">Catography and GIS</option>
                            <option value="ICT">ICT</option>
                            <option value="ICDL">ICDL</option>
                            <option value="Accounting Technitian">Accounting Technitian</option>
                            <option value="Public Accountant">Public Accountant</option>
                            <option value="Accounting Managment Skills">Accounting Managment Skills</option>
                            <option value="Geospatial Course">Geospatial Course</option>
						</select>
                </div>
            </div>
		</div>         
	</div>
  <?php require_once('includes/scripts.php') ?>

</body>
</html>