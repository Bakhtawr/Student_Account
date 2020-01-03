<?php session_start(); ?>

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
        <a class="nav-link" href="student_table.php">Back<span class="sr-only">(current)</span></a>
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
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<br><br>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<button type="button" class="btn btn-primary btn-lg"><?php echo "Hello ".$_SESSION['email']; ?></button>
		</div>
		<div class="col-md-6">
     
			<fieldset style="border:1px solid #e95420;">
			<center><legend style="color:#e95420;">UPDATE</legend></center>
      <?php
      $con = mysqli_connect('localhost','root','','simple-crud') or die(mysqli_connect_error($con));

      $edit_id = $_GET['edit'];
      $qry = "SELECT * from students WHERE id=$edit_id";
      $run = mysqli_query($con,$qry);
      while($row = mysqli_fetch_assoc($run)){ ?>
      
			<form method="post" action="student_edit.php" enctype="multipart/form-data">

				
                <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>" name="email" placeholder="Enter Student email">
                </div>

              <div class="form-group">
              <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Student Name">
                </div>

                <div class="form-group">
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" value="<?php echo $row['password']; ?>" placeholder="Enter password for Student">
                </div>

                
                <div class="form-group">
                	<label style="color:#e95420; ">Department</label>
                 <select class="form-control" name="department" value="<?php echo $row['department']; ?>">
                 	<option>Software</option>
                 	<option>Electrical</option>
                 	<option>Electronics</option>
                 	<option>BioMedical</option>
                 	<option>Architecture</option>
                 </select>
                </div>

                <div class="form-group">
                <textarea class="form-control" name="textarea" value="<?php echo $row['textarea']; ?>" rows="3"></textarea>
                </div>
                
                 <input type="file" name="image"><br>
                
                <input type="radio" name="gender" value="<?php echo $row['gender']; ?>"> Male<br>
                <input type="radio" name="gender" value="<?php echo $row['email']; ?>"> Female<br>

                <input type="date" name="name" value="<?php echo $row['add_date']; ?>">
      
               <center><button type="submit" name="update" class="btn btn-primary">UPDATE</button></center>

			</form>
      <?php } ?>
			</fieldset>
		</div>
	
		<div class="col-md-3">
			<a href="student_table.php"><button type="button" class="btn btn-primary btn-lg">All Students Record</button></a>
		</div>
	</div>
</div>


</body>
</html>

<?php 

if (isset($_POST['update'])) {
  
  $email = $_POST['email'];
  $name =$_POST['name'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $department = $_POST['department'];
  $text = $_POST['textarea'];
  $gender = $_POST['gender'];
  $date = date("Y-m-d");

  $qry = "UPDATE students set email='$email', name='$name', password='$password',department='$department',textarea='$text',add_date='$date' where id='$edit_id'";

  $row = mysqli_query($con,$qry);

  if ($row) {
    header('location:student_table.php');
  }
  else
  {
    echo mysqli_error($con);
  }
  
}

?>