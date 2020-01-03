<?php 

$con = mysqli_connect('localhost','root','','simple-crud') or die(mysqli_connect_error($con));

if (isset($_POST['search'])) {
	
   $search = $_POST['search'];

   $q = "SELECT * FROM students where department = '$search'";

   $result = mysqli_query($con,$q);


   	echo 	"<div class='col-lg-12'>"
    echo 	"<table class='table table-responsive'>"
    echo "<thead class='' style='background-color: #e95420; color: white;'>"
        echo "<tr>"
        echo  "<th>Id</th>"
        echo  "<th>Photo</th>"
        echo  "<th>Email</th>"
        echo  "<th>Name</th>"
        echo  "<th>Password</th>"
        echo  "<th>Department</th>"
        echo  "<th>Description</th>"
        echo  "<th>Gender</th>"
        echo  "<th>Date</th>"
        echo  "<th colspan='2'></th>"
        echo  "</tr>"
        echo  "</thead>"
        echo "<tbody>"


    	
          
          while($row = mysqli_fetch_assoc($result)){ 
        echo "<tr>"
        echo "<td>" echo $row['id']; "</td>"
        echo  "<td >" echo $row['email']; "</td>"
        echo  "<td>" echo $row['name']; "</td>"
        echo  "<td>" echo $row['password']; "</td>"
        echo  "<td>" echo $row['department']; "</td>"
        echo  "<td>" echo $row['textarea']; "</td>"
        echo  "<td>" echo $row['gender']; "</td>"
        echo "<td>" echo $row['add_date']; "</td>"
        echo "<td><a href='student_edit.php?edit=" echo $row['id']; "'><button type='button' class='btn btn-success'>Edit</button></a></td>"
        echo "<td><a href='student_edit.php?delete=" echo $row['id']; "'><button type='button' class='btn btn-danger'>Delete</button></a></td>"
       
       echo "</tr>"
         } 
        echo      "</tbody>"
        echo   "</table>"
	echo "</div>"
	echo "</div>"
echo "</div>"
echo "</div>"

}
?>