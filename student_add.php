<?php

$con = mysqli_connect('localhost','root','','simple-crud') or die(mysqli_connect_error($con));


if (isset($_POST['add'])) {
	
	$email = $_POST['email'];
	$name =$_POST['name'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$department = $_POST['department'];
	$text = $_POST['textarea'];

	// How to Add Image

     $filename = $_FILES['image']['name'];
     $filetmp = $_FILES['image']['tmp_name'];
     $folder = "images/".$filename;
     move_uploaded_file($filetmp,$folder);

	// Image move uploaded function

	$gender = $_POST['gender'];
	$date = date("Y-m-d");
	

	 $qry = "INSERT INTO students(email,name,password,department,textarea,photo,add_date,gender) VALUES ('$email','$name','$password','$department','$text','$folder','$date','$gender')";
    


    /*$qry =  "INSERT INTO students(email, name, password, department, textarea,photo,add_date,gender) VALUES ('$email',$name,'',[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
	 */

	if (mysqli_query($con,$qry)) {
		
		header('location:admin_page.php');
		
	}
	else
	{
		echo "Data not inserted".mysqli_error($con);
        //  header('Not inserted');
	}
}

?>
	