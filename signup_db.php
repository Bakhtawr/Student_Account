<?php

session_start();

// SIGN UP ADD USERS

$con = mysqli_connect('localhost','root','','simple-crud') or die(mysqli_connect_error($con));
/*
if (isset($_POST['submit'])) {
	
	$fname = $_POST['fname'];
	$lname =$_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$qry = "INSERT INTO users(fname,lname,gender,email,password) VALUES ('$fname','$lname','$gender','$email','$password')";

	$result = mysqli_query($con,$qry);

	if ($result) {
		
		header('location:index.php');
		
	}
	else
	{
		//echo "Data not inserted".mysqli_error($con);
          header('signup_db.php');
	}
}
*/
	
// ADMIN CHECKING


if (isset($_POST['admin_submit'])) {
	
	$name = $_POST['name'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE name='$name' AND password='$password'";

	$result = mysqli_query($con,$sql);

	if (mysqli_num_rows($result) > 0) {
		
		while ($row = mysqli_fetch_array($result)) {

			$id = $row['id'];
			$name = $row['name'];
			$password = $row['password'];
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $name; 
		}
		header('location:admin_page.php');
	}
	else
	{
		echo "invalid name or password".mysqli_error($con);
	}
}


if (isset($_POST['stu_submit'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$qry = "SELECT * from students where email='$email' and password='$password'";

	$result = mysqli_query($con,$qry);

    if (mysqli_num_rows($result) > 0) {
		
		while ($row = mysqli_fetch_array($result)) {

			$email = $row['email'];
			$password = $row['password'];
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $email; 
		}
		header('location:stu_dashboard.php');
	}
	else
	{
		echo "invalid name or password";
	}	
}

?>