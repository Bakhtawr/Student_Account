<?php

$con = mysqli_connect('localhost','root','','simple-crud') or die(mysqli_connect_error($con));


if (isset($_POST['add_product'])) {
	
	$name =$_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$company = $_POST['company'];

	// How to Add Image

     $filename = $_FILES['image']['name'];
     $filetmp = $_FILES['image']['tmp_name'];
     $folder = "images/".$filename;
     move_uploaded_file($filetmp,$folder);
	

	 $qry = "INSERT INTO products(name,price,photo,company,description) VALUES ('$name','$price','$folder','$company','$description')";

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
	