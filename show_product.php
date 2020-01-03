
<?php include('add_product.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">MAKEUP SHOP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin_page.php">Back<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_page.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="stu.dashboard.php">All Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <input class="form-control mr-sm-2" type="text" placeholder="Search" id="searchcompany">
      
    </form>
  </div>
</nav>
<br><br><br>


<div class="container">
	<div class="row">
		

		<div class="col-md-2">
			<h4>Select Company</h4>
			<div>
	     <?php $q = "select company from products";
         $result = mysqli_query($con,$q);
         while($fetch = mysqli_fetch_assoc($result)) { ?>
         <a href="" id="company"><b><?php echo $fetch['company']; ?></b></a><br>
		 <?php } ?>
		</div>
		</div>
            

			<?php $q = "select * from products";
            $result = mysqli_query($con,$q);
            while($fetch = mysqli_fetch_assoc($result)) { ?>
			
			<div class="col-md-3">
			<div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $fetch['photo'] ?>" height="200" width="300">
            <div class="card-body">
            <h5 class="card-title"><?php echo $fetch['name']; ?></h5>
            <p class="card-text" id="company"><?php echo $fetch['company']; ?>
            </p>
            <p class="card-text">$<?php echo $fetch['price']; ?>
            </p>
            <p class="card-text"><?php echo $fetch['description']; ?>
            </p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
            </div>            <br>

            </div>&nbsp;&nbsp;&nbsp;
            <?php } ?>



</div>
</div>

<button id="click">Hey</button>


<script type="">
	$(document).ready(function()
	{

     $('#searchcompany').on('keyup',function()
     {
       //var fetch = $('#company').val();
       alert('Working');

     });

     

	});


</script>
</body>
</html>