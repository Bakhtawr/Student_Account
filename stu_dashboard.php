<?php 
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
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
        <a class="nav-link" href="#" style="color: white;"><?php  echo "Welome ".$_SESSION['email'];?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color: white;">LOGOUT</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<hr>
<h4 style="color: #e95420; text-align: center;">Download Your Form</h4>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			
            

            <form method="post" action="student_add.php" enctype="multipart/form-data">

				<small>Email:</small>
                <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter Student email">
                </div>
                <small>Name:</small>
                <div class="form-group">
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name" placeholder="Enter Student Name">
                </div>
                <small>Password:</small>
                <div class="form-group">
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" placeholder="Enter password for Student">
                </div>

                
                <div class="form-group">
                	<label style="color:#e95420; "><small>department:</small></label>
                 <select class="form-control" name="department">
                 	<option>Software</option>
                 	<option>Electrical</option>
                 	<option>Electronics</option>
                 	<option>BioMedical</option>
                 	<option>Architecture</option>
                 </select>
                </div>
                
                <small>Description:</small>
                <div class="form-group">
                <textarea class="form-control" name="textarea" rows="3"></textarea>
                </div>
                
                 <input type="file" name="image"><br>

                <small>Gender:</small>
                <input type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>

                <input type="date" name="name">
      
               <center><button type="submit" name="add" class="btn btn-primary">Print</button></center>

			</form>





		</div>
		



		<div class="col-md-4">
			<img src="images/one.jpg" width="180" height="160">
		</div>
	</div>
</div>


</body>
</html>