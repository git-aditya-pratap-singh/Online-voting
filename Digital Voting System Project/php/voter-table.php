<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Voter</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- import fontawesome icon -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<!-- icon -->
<link rel="icon" href="..\img\logom.png" type="image/x-icon">
</head>
<body>

	<div class="container">

	<div class="col-lg-12">

		<br><br><h2 class="text-danger text-center ">Voter Details</h2>
        <br>
		<table class="table table-striped table-hover table-bordered" style="margin-left: -100px;">
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
				<th colspan="2">Operation</th>
				
			</tr>

<?php
 

error_reporting(0);

			   //----Connect Database-----------

    $servername="localhost";
    $username="root";
    $data_password="";
    $database_name="voter-info";

    //-----Create a Connection--------

    $conn=mysqli_connect($servername, $username, $data_password,$database_name);

    // Die if connection was not successfull

    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }

    else{
    	$query= "SELECT * FROM registration2";
    	$run = mysqli_query($conn,$query);

    	while ($res = mysqli_fetch_array($run)) {
    		// code...


?>


			<tr class="text-center">
				<td><?php echo $res['ID'];?></td>
				<td>
					<img src="<?php echo $res['Image']; ?>" width="50px" height="50px" alt="image" style="border-radius: 25px;">
				</td>
				<td><?php echo $res['Name'];?></td>
				<td><?php echo $res['Aadhaarno'];?></td>
				<td><?php echo $res['Email'];?></td>
				<td><?php echo $res['Phoneno'];?></td>
				<td><?php echo $res['Gender'];?></td>
				<td><?php echo $res['Status'];?></td>
				<td><?php echo $res['DOB'];?></td>
				<td><?php echo $res['Address'];?></td>
				<td><button class="btn-success btn"><a href="updateVoter.php?id=<?php echo $res['ID'];?>" class="text-white" style="text-decoration: none;"></i>Edit</button></a></td>

				<td><button class="btn-danger btn"><a href="deleteVoter.php?id=<?php echo $res['ID'];?>" class="text-white" style="text-decoration: none;">Delete</a></button></td>
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