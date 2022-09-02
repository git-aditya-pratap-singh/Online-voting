<?php 
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- import fontawesome icon -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Reset Password</title>

	<link rel="stylesheet" href="../css/admin-reset-pswd.css">

  <link rel="icon" href="../img/logom.png" type="image/x-icon">

</head>
<body>
	<section class="model-container">
		<div class="upper-section">Change Password</div>
		    <div class="model-form">
		    	<div class="model-title-img"></div>

		    	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			          <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" style="color:darkcyan;"></i></span>
                    <input type="text" name="user" class="form-control" placeholder="Username" required="required" value="<?php echo $_SESSION['voter_username'];?>" readonly="readonly">
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" style="color:darkcyan;"></i></span>
                    <input type="Password" name="cpswd" class="form-control" placeholder="Current Password" required="required">
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" style="color:darkcyan;"></i></span>
                    <input type="text" name="npswd" class="form-control" placeholder="New Password" required="required" autocomplete="off">
                </div>

                <button type="submit" name="submit_button" class="btn btn-primary btn"><i class="fa fa-sign-out"></i>   Submit</button>
          </form>
		    </div>
		
		</div>
		
	</section>
	
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
<?php 

error_reporting(0);


if(isset($_REQUEST['submit_button'])){

	$username = $_POST['user'];

	$current_pswd = $_POST['cpswd'];

	$new_password = $_POST['npswd'];

  //---Connect database----------

   $servername="localhost";
   $usern="root";
   $data_password="";
   $database = "admin-info";

   //-----Create a Connection--------

   $con2=mysqli_connect($servername, $usern, $data_password, $database);


   // Die if connection was not successfully

   if(!$con2){
      die("Sorry we failed to connect: ".mysqli_connect_error());
   }
   else{

      
      $query = "SELECT * FROM adminregistration WHERE username = '$username'";
      $result = mysqli_query($con2,$query);
      $run = mysqli_fetch_assoc($result);
      

      if($current_pswd == $run['password']){
      	

      	$new_query = "UPDATE adminregistration SET password ='{$new_password}' WHERE username ='$username'";
      	$new_result = mysqli_query($con2,$new_query);

      	?>
      	  <script type="text/javascript">
      	  	 swal("Congratulations !","Your Password has been Changed.","success");
      	  	 setTimeout( function waiting(){
                  window.location.href="logout.php";
      	  	 },5000);

             waiting();
      	  </script>
      	<?php 

      }
      else{
      	?>

      	   <script type="text/javascript">
      	   	  swal("So Sorry !","Your Current Password is incorrect !","error");
      	   </script>
      	<?php
      }


   }
}
?>
