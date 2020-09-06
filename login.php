<?php
if ( isset($_COOKIE['student'])){
	
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Sign In </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.container{margin-top:180px};
	</style>
</head>
<body>
	<form action="loginval.php" method="post">
	<div class="container ">
		<div class="row col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h1>Sign In</h1>

				</div>
				<div class="panel-body">
				<form action="connect.php" method="post">
					

				    <div class="form-group">
					<label for=email>Email</label>
					<input type="text" class="form-control" id="email" name="email">
				    </div>	

				     

				     <div class="form-group">
					<label for=password>Password</label>
					<input type="password" class="form-control" id="password" name="password">
				    </div>	

		

				   
				    	<button type="submit" class="btn btn-primary" name="login">Login</button>
				    		
				
			    </form>
			    </div>
				<div class="panel-footer text-right">
					<small>&copy;St. john's Ranchi</small>
				</div>	
				
			</div>
			
		</div>
		
	</div>
</form>

</body>
</html>