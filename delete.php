<?php

$con = mysqli_connect('localhost','root','','simple-crud') or die(mysqli_connect_error($con));

$id = $_GET['del'];

$qry = "DELETE from students where id='$id'";

if (mysqli_query($con,$qry)) {
    	header('location:student_table.php');
}
?>