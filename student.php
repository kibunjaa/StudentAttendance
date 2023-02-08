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
                                <th >Phone</th>
                                <th >Email</th>
                                <th >Course</th>                
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
		</div>         
	</div>
  <?php require_once('includes/scripts.php') ?>

</body>
</html>