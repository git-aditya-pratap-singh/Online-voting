<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nominee</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- icon -->
<link rel="icon" href="../img/logom.png" type="image/x-icon">
</head>
<body>

	<div class="container">

	<div class="col-lg-12" style="margin-left:-110px;">

		<br><br><h2 class="text-danger text-center ">Nominee Details</h2>
        <br>
		<table class="table table-striped table-hover table-bordered ">
			<tr class="bg-dark text-white text-center">
				<th>ID</th>
				<th>Image</th>
				<th>Name</th>
				<th>Aadhaar-no</th>
				<th>E-mail</th>
				<th>Phone-no</th>
				<th>Gender</th>
				<th>Status</th>
				<th>DOB</th>
				<th>Address</th>
				<th>PinCode</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>

<?php

error_reporting(0);

			   //----Connect Database-----------

    $servername="localhost";
    $username="root";
    $data_password="";
    $database_name="nominee-info";

    //-----Create a Connection--------

    $conn=mysqli_connect($servername, $username, $data_password,$database_name);

    // Die if connection was not successfull

    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }

    else{
    	$query= "SELECT * FROM registrationnom";
    	$run = mysqli_query($conn,$query);

    	while ($res = mysqli_fetch_array($run)) {
    		// code...


?>


			<tr class="text-center">
				<td><?php echo $res['ID'];?></td>
				<td>
					<img src="<?php echo $res['Image']; ?>" width="50px" height="50px" alt="image" style="border-radius: 25px;">
				</td>
				<td><?php echo $res['name'];?></td>
				<td><?php echo $res['aadhaar'];?></td>
				<td><?php echo $res['email'];?></td>
				<td><?php echo $res['phoneno'];?></td>
				<td><?php echo $res['gender'];?></td>
				<td><?php echo $res['status'];?></td>
				<td><?php echo $res['DOB'];?></td>
				<td><?php echo $res['address'];?></td>
				<td><?php echo $res['pincode'];?></td>
				<td><button class="btn-success btn"><a href="updateNominee.php?id=<?php echo $res['ID'];?>" class="text-white" style="text-decoration: none;">Edit</button></a></td>

				<td><button class="btn-danger btn"><a href="deleteNominee.php?id=<?php echo $res['ID'];?>" class="text-white" style="text-decoration: none;">Delete</a></button></td>
			</tr>
			</tr>

			<?php
               }
           }
			?>
			
		</table>
		
	</div>
    </div>
</body>
</html>