
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.container{margin-top:180px};
	</style>
</head>
<body>
	<div class="container ">
		<div class="row col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h1>Registration Form</h1>

				</div>
				<div class="panel-body">
				<form action="signval.php" method="post">
					<div class="form-group">
					<label for=firstname>First Name</label>
					<input type="text" class="form-control" id="firstname" name="firstname">
				    </div>	

				    <div class="form-group">
					<label for=lastname>Last Name</label>
					<input type="text" class="form-control" id="lastname" name="lastname">
				    </div>	

				    <div class="form-group">
					<label for=email>Email</label>
					<input type="text" class="form-control" id="email" name="email">
				    </div>	

				     <div class="form-group">
					<label for=gender>Gender</label>
					<label for="male" class="radio-inline">
						<input type="radio"  name="gender" id="male" value="m"> Male </label>
					<label for="female" class="radio-inline">
						<input type="radio"  name="gender" id="female" value="f"> Female </label>
					<label for="others" class="radio-inline" >
						<input type="radio" name="gender" id="others" value="o"> Others </label>

				    </div>	

				     <div class="form-group">
					<label for=password>Password</label>
					<input type="password" class="form-control" id="password" name="password">
				    </div>	

				     <div class="form-group">
					<label for=number>Phone Number</label>
					<input type="text" name="number" class="form-control" id="number">
				    </div>	

				   
				    	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				    		
				
			    </form>
			    </div>
				<div class="panel-footer text-right">
					<small>&copy;St. john's Ranchi</small>
				</div>	
				
			</div>
			
		</div>
		
	</div>

</body>
</html>