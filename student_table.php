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
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    
      <input class="form-control mr-sm-2" type="text" placeholder="Search" id="fetchval" name="fetchby">
    
  </div>
</nav>
<br>
<a href="admin_page.php"><button type="button" class="btn btn-primary">Back</button></a>
<hr style="border: 4px solid #e95420;">

<h3 style="color: #e95420; text-align: center;">STUDENTS DATA</h3>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-responsive">
    <thead class="" style="background-color: #e95420; color: white;">
        <tr>
            <th>Id</th>
            <th >Photo</th>
            <th>Email</th>
            <th>Name</th>
            <th>Password</th>
            <th>Department</th>
            <th>Description</th>
            <th>Gender</th>
            <th>Date</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
    	<?php include('student_add.php'); ?>
    	<?php 
          $query = "SELECT * from students";
          $result = mysqli_query($con,$query);
          while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><img src="<?php echo $row['photo']?>" width="100px" height="90px"></td>
            <td ><?php echo $row['email']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['textarea']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['add_date']; ?></td>
            <td><a href="student_edit.php?edit=<?php echo $row['id']; ?>"><button type="button" class="btn btn-success">Edit</button></a></td>
       <td><a href="delete.php?del=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
  
$(document).ready(function()
{


$('#fetchval').keyup(function()
{
   var check = $('#fetchval').val();

   $.ajax({       
       type: 'POST',
       url : 'search.php',
       data: {'search': check},
       success : function(data)
       {
        $('#result').html(data);
       }
   })

});



});

</script>


</body>
</html>