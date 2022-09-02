<?php 

session_start();

if(!isset($_SESSION['voter_name'])){
   header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DashBoard</title>
	<!-- import fontawesome icon -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">


    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    

    <!-- import icon -->
	<link rel="icon" href="../img/logom.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">

	<link rel="stylesheet" type="text/css" href="../css/admin-profile.css">

	
   
    
   


</head>
<body>
	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="fa fa-gg"></span><span>Vote for India</span></h2>
			
		</div>

		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="" class="active"><span><i class="fa fa-tachometer"></i></span><span>Dashboard</span></a>
				</li>

				<li>
					<a href="admin_profile.php" class="active"><span><i class="fa fa-user-circle"></i></span><span>Profile</span></a>
				</li>

				<li>
					<a href="voter-table.php"><span><i class="fa fa-user"></i></span><span>Voter</span></a>
				</li>

				<li>
					<a href="nominee-table.php"><span><i class="fa fa-users"></i></span><span>Nominee</span></a>
				</li>

				<li>
					<a href="Admin-registration.php"><span><i class="fa fa-university"></i></span><span>Registeration</span></a>
				</li>

				<li>
					<a href=""><span><i class="fa fa-database"></i></span><span>Polling Result</span></a>
				</li>

				<li>
					<a href=""><span><i class="fa fa-cog"></i></span><span>Settings</span></a>
				</li>

				<li>
					<a href="reset_pswd.php"><span><i class="fa fa-key"></i></span><span>Change Password</span></a>
				</li>

				<li>
					<a href="" onclick="logout()"><span><i class="fa fa-sign-out"></i></span><span>Logout</span></a>
				</li>
			</ul>
		</div>

		<div class="social-icon">
			<a href="" title="google"><i class="fa fa-google"></i></a>
			<a href="" title="telegram"><i class="fa fa-telegram"></i></a>
			<a href="" title="facebook"><i class="fa fa-facebook-square"></i></a>
			<a href="" title="linkedln"><i class="fa fa-linkedin-square"></i></a>
			<a href="" title="youtube"><i class="fa fa-youtube-play"></i></a>
		</div>
		
	</div>


	<div class="main-content">
		<header>
			<h2>
				<label for="nav-toggle">
					<span><i class="fa fa-bars"></i></span>
				</label>
				Dashboard
			</h2>

			<div class="search-wrapper">
				<span><i class="fa fa-search"></i></span>
				<input type="search" name="search" placeholder="Search here" />
			</div>

			<div class="user-wrapper">
				<img src="<?php echo $_SESSION['voter_image']; ?>" width="50px" height="50px" alt="image" style="border-radius: 25px;">
				<div>
				
					<h4><?php echo $_SESSION['voter_name'];?></h4>

					<small>Admin</small>
				</div>
			</div>
		</header>

		<?php

		    $servername="localhost";
		    $username="root";
		    $password="";
		    $database="voter-info";

		    $conn=mysqli_connect($servername,$username,$password,$database);

		    if(!$conn){
                die("Sorry we failed to connect: ".mysqli_connect_error());
		    }
		    else{

		    	//----------Voter Table Count Query---------------

		    	$sql="SELECT count(ID) AS total FROM registration2";
		    	$result=mysqli_query($conn,$sql);
		    	$values=mysqli_fetch_assoc($result);

		    }

		?>

		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h1><?php echo $values['total'];?></h1>
						<span>Voter</span>
					</div>
					<div>
						<span><i class="fa fa-user"></i></span>
				    </div>
				</div>

		<?php

		    $servername="localhost";
		    $username="root";
		    $password="";
		    $database="nominee-info";

		    $conn=mysqli_connect($servername,$username,$password,$database);

		    if(!$conn){
                die("Sorry we failed to connect: ".mysqli_connect_error());
		    }
		    else{

		    	//----------Voter Table Count Query---------------

		    	$sql2="SELECT count(ID) AS total FROM registrationnom";
		    	$result2=mysqli_query($conn,$sql2);
		    	$values2=mysqli_fetch_assoc($result2);

		    }

		?>


				<div class="card-single">
					<div>
						<h1><?php echo $values2['total'];?></h1>
						<span>Candidate</span>
					</div>
					<div>
						<span><i class="fa fa-users"></i></span>
				    </div>
				</div>


		<?php

		    $servername="localhost";
		    $username="root";
		    $password="";
		    $database="admin-info";

		    $conn=mysqli_connect($servername,$username,$password,$database);

		    if(!$conn){
                die("Sorry we failed to connect: ".mysqli_connect_error());
		    }
		    else{

		    	//----------Voter Table Count Query---------------

		    	$sql3="SELECT count(ID) AS total FROM adminregistration";
		    	$result3=mysqli_query($conn,$sql3);
		    	$values3=mysqli_fetch_assoc($result3);

		    }

		?>


				<div class="card-single">
					<div>
						<h1><?php echo $values3['total'];?></h1>
						<span>Admin</span>
					</div>
					<div>
						<span><i class="fa fa-user-secret"></i></span>
				    </div>
				</div>
				

				<div class="card-single">
					<div>
						<?php 
						    $sum=$values['total']+$values2['total'];
						?>
						<h1><?php echo $sum; ?></h1>
						<span>Total voter</span>
					</div>
					<div>
						<span><i class="fa fa-user-plus"></i></span>
				    </div>
				</div>

			</div>
         
         <div class="svg_image">
         	<img src="../img/work-time-animate.svg" >
         	<p class="svg_p">Lorem ipsum althought you maybe right anything but i think you should might to vote on polling booth.</p>
         	<img src="../img/time-management-animate.svg" >
         </div>
         
		</main>


	</div>
  
<script type="text/javascript" src="../js/logout.js"></script>

</body>

</html>