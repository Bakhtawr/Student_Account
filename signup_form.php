<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body>

 <center><h1 style="color: #e95420;">SIGN UP</h1></center>

	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="signup_db.php">
	<div class="form-group">
	<input type="text" name="fname" placeholder="FirstName" class="form-control" required>
	</div><br>
	<div>
	<input type="text" name="lname" placeholder="LastName" class="form-control" required>
    </div><br>
    <div class="form-group">
	Gender: <br>
	Female<input type="radio" name="gender"   value="female">
	Male<input type="radio" name="gender" value="male">
	</div><br>
	<div class="form-group">
	<input type="email" name="email" class="form-control" placeholder="Email" required>
    </div><br>
	<div class="form-group">
	<input type="password" name="password" class="form-control" placeholder="Password" required>
    </div><br>
	<center><input type="submit" name="submit" value="SignUp" class="btn btn-primary"></center>
</form>
<div class="col-md-3"></div>
			</div>
		</div>
	</div>

</body>
</html>