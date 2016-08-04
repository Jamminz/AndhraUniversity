<?php 

session_start();

include("../mysql/login.php"); 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andhra University</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container-fluid">

            <div class="navbar-header">

                <a href="../index.php" class="navbar-brand">Andhra University</a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collapse">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>

            </div>

            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav">

                    <li><a href="../teachingstaff/index.html">Teaching Staff</a></li>
                    <li><a href="../accommodation/index.html">Accommodation</a></li>
                    <li><a href="../programmes/index.html">Programmes</a></li>
                    <li class = "active" ><a href="../studentportal/index.html">Student Portal</a></li>

                </ul>

            </div>

        </div>

    </div>
	
	<div id ="page2" class="container">
	
		<div class = "text-center" id="login">
			
				<div class = "row">
					
						<div class = "col-md-12">
						
							<div class = "row">
					
								<div class = "col-md-4 col-md-offset-1">
								
									<h3>Need to register?</h3>
	
									<form method="post">				
					
				
										<div class ="form-group text-center">
											
											<label for="email">Email address:</label>
											<input type="email" class="form-control text-center" name="email" id="email" placeholder="Please enter your email address" value = "<?php echo addslashes($_POST['email']); ?>" />						
											
										</div>
										
										<div class ="form-group text-center">
											
											<label for="password">Password:</label>
											<input type="password" class="form-control text-center" name="password" id="password" placeholder="Please enter your desired password" value = "<?php echo addslashes($_POST['password']); ?>"/>					
											
										</div>
										
										<input type = "submit" name="submit" value = "Sign Up" class = "btn btn-success" />
		
									</form>	
		
								</div>
								
								<div class = "col-md-4 col-md-offset-1">
								
									<h3>Already a registered AU student? </h3>
	
									<form method="post">				
					
				
										<div class ="form-group text-center">
											
											<label for="email">Email address:</label>
											<input type="email" name="loginemail" placeholder="Email" class="form-control text-center" value="<?php echo addslashes($_POST['loginemail']); ?>" />	
											
										</div>
										
										<div class ="form-group text-center">
											
											<label for="password">Password:</label>
											<input type="password" name="loginpassword" placeholder="Password" class="form-control text-center" value="<?php echo addslashes($_POST['loginpassword']); ?>" />						
											
										</div>
										
										<input type="submit" name= "submit" class="btn btn-success" value="Log In">
		
									</form>	
		
								</div>
								
								<div class ="row">
								
									<div class = "col-md-8 col-md-offset-2" id="errorMessage">
									
									<?php
		
		
											if ($error) {
				
												echo '<div class = "alert alert-danger text-center">'.addslashes($error).'</div>';
												
																
											}
											
											if ($message) {
												
												echo '<div class = "alert alert-success text-center">'.addslashes($message).'</div>';
												
																
											}
											
										
										
										
										?>
									
									</div>
									
								</div>
		
							</div>
							
		
						</div>
		
				</div>
		
		</div>
	
	</div>
	
	<script src= "../js/scripts.js"></script>

</body>
</html>