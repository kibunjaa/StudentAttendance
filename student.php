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
						<span>Students</span>
                        <a href="mark-student.php">    
                             <span><i class="fa fa-edit"></i> </span>      
                             <span></span>
					    </a>	
					</div>								
				</div>                 
			</div>  
            <div class="card">
                <div class="card-body">
                      <table class="table table-striped table-hover table-responsive{-sm|-md|-lg|-xl" style="font-size:12px">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th >FullName</th>
                                <th >Attendance</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <label for="message" class="form-label" > Units</label>
						<select class="form-select form-control " name="course" aria-label="Disabled select example">
						  <option><b></b></option>
						    <option value="Computer Mathematics">Computer Mathematics</option>
						    <option value="Life Skills">Life Skills</option>
							<option value="Entreprenuership">Entreprenuership</option>
							<option value="Structed Programming">Structed Programming</option>
                            <option value="ICT & Ethics">ICT & Ethics</option>
                            <option value="Operational Computer">Operational Computer</option>
                            <option value="Communication Skills">Communication Skills</option>
						</select>
                <div class="row">
				<div class="mb-3 col-lg-6">
                    <div class="mb-3 col-lg-6">
						<label for="Lecturer" class="form-label">Lecturer</label>
						<input type="text"name="lecturer" class="form-control" placeholder="">
					</div> 
					<div class="mb-3 col-lg-6">
					    <label for="Time" class="form-label">Time</label>
						<input type="time" name="Time" class="form-control" placeholder="">
					</div>
                    <div class="mb-3 col-lg-6">
						<label for="Day" class="form-label">Day</label>
						<input type="date" name="Day" class="form-control" placeholder="">
					</div>
				</div> 
			</div> 
		</div>         
	</div>
  <?php require_once('includes/scripts.php') ?>

</body>
</html>