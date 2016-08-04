<?php 

	session_start();
	
	include('../mysql/connection.php'); 
	
	$query = "SELECT `diary` FROM `users` WHERE `id` = '".$_SESSION['id']."' LIMIT 1";
		
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	$diary = $row['diary'];

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

<body data-spy="scroll" data-target=".navbar-collapse">

    	

	  <div class="navbar navbar-inverse navbar-fixed-top">
	  
		<div class="container">
		
			<div class="navbar-header pull-left">  		
				
				
				<a class="navbar-brand">Andhra University</a>
				
			</div>
			
			<div class="pull-right">
			
				<ul class= "navbar-nav nav">
				
					<li><a href="../index.php?logout=1">Log Out</a></li>
					
				</ul>  			
				
			</div>
			
		</div>	
		
	  </div>
	
	<div id ="notesPage" class="container text-center">
	
		<div class = "row">
		
			<div class = "col-md-8 col-md-offset-2 jumbotron">
	
				<h2 id="noteTitle">A place for our students to keep persistent notes.</h2>
		
			</div>
			
		</div>
	
		<div class = "row">
		
			<div class = "col-md-8 col-md-offset-2 diaryDiv text-center">
	
				<textarea class = "form-control" id = "diaryEntry"><?php echo $diary; ?></textarea>
		
			</div>
			
		</div>

	
	</div>
	
	<script src= "../js/scripts.js"></script>

</body>
</html>