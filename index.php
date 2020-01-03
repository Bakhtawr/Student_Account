<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<style>
.error {color: #FF0000;}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">APPLICATIONS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" style="color: white;"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 <img src="one.jpg" style="width: 100%; height: 200px;"> 
<hr><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<!-- ADMIN LOGIN FORM -->
			<center><h3>ADMIN LOGIN</h3></center>
            <form method="post" action="signup_db.php">
            	<span class="error"></span>
            <div class="form-group">

		    <input type="text" name="name" class="form-control" placeholder="Name" required="">
	        </div>
	        <div class="form-group">
		    <input type="password" name="password" class="form-control" placeholder="Password" required>
	        </div>
            <center> <input type="submit" name="admin_submit" value="LOGIN" class="btn btn-primary"></center>
	        </form>
		    </div>


		<div class="col-md-6">
			<!-- STUDENT LOGIN FORM -->
            <center><h3>STUDENT LOGIN</h3></center>
            <form method="post" action="signup_db.php">
            <div class="form-group">
		    <input type="email" name="email" class="form-control" placeholder="Email" required="">
	        </div>
	        <div class="form-group">
		    <input type="password" name="password" class="form-control" placeholder="Password" required>
	        </div>
            <center> <input type="submit" name="stu_submit" value="LOGIN" class="btn btn-primary"></center>
           <!-- <a class="nav-link" href="signup_form.php">Sign Up</a> -->
	        </form>
		    </div>

		</div>
	</div>
</div>











</body>
</html>