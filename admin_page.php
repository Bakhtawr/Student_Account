<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
        <a class="nav-link" href="index.php">Logout<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <input class="form-control mr-sm-2" type="text" placeholder="Search" id="searchdepartment">
      
    </form>
  </div>
</nav>

<br><br>

<div class="container">
	<div class="row">
		<div class="col-md-5">
		<fieldset style="border:1px solid #e95420;">
      <center><legend style="color:#e95420;">ADD Product</legend></center>
      <form method="post" action="add_product.php" enctype="multipart/form-data">


                <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" name="name" placeholder="Enter Product Name">
                </div>

                <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" name="price" placeholder="Enter Price">
                </div>

                <input type="file" name="image"><br>
                
                <div class="form-group">
                  <label style="color:#e95420; ">Company</label>
                 <select class="form-control" name="company">
                  <option>Morphe</option>
                  <option>Balm</option>
                  <option>Jophe Hill</option>
                  <option>Hudas</option>
                  <option>James Charlis</option>
                 </select>
                </div>

                <div class="form-group">
                <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                
      
               <center><button type="submit" name="add_product" class="btn btn-primary">ADD Product</button></center>

      </form>
      </fieldset>	
		</div>



		<div class="col-md-5">
			<fieldset style="border:1px solid #e95420;">
			<center><legend style="color:#e95420;">ADD DATA</legend></center>
			<form method="post" action="student_add.php" enctype="multipart/form-data">

				
                <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter Student email">
                </div>

                <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Student Name">
                </div>

                <div class="form-group">
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" placeholder="Enter password for Student">
                </div>

                
                <div class="form-group">
                	<label style="color:#e95420; ">Department</label>
                 <select class="form-control" name="department">
                 	<option>Software</option>
                 	<option>Electrical</option>
                 	<option>Electronics</option>
                 	<option>BioMedical</option>
                 	<option>Architecture</option>
                 </select>
                </div>

                <div class="form-group">
                <textarea class="form-control" name="textarea" rows="3"></textarea>
                </div>
                
                 <input type="file" name="image"><br>
                
                <input type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>

                <input type="date" name="name">
      
               <center><button type="submit" name="add" class="btn btn-primary">ADD</button></center>

			</form>
			</fieldset>
		</div>
	<br><br>
		<div class="col-md-2">
      
      <button type="button" class="btn btn-primary btn-lg"><?php echo "Hello ".$_SESSION['email']; ?></button><br><br>

      <a href="student_table.php"><button type="button" class="btn btn-primary btn-lg">All Students Record</button></a><br><br>

      <a href="show_product.php"><button type="button" class="btn btn-primary btn-lg">See All Products</button></a>

		</div>
	</div>
</div>


</body>
</html>