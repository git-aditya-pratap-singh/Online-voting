<!-------------Nominee-Dashboard---------->

<?php 

error_reporting(0);

session_start();

if(!isset($_SESSION["nominee_name"])){
   header("location:index.php");
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/voter-dashboard.css">
	
 <!-- import fontawesome icon -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- icon -->
<link rel="icon" href="../img/logom.png" type="image/x-icon">
</head>
<body>

  <section class="main">
  	<div class="mydetails">
  		<div class="myimage">
        <img src="<?php echo $_SESSION["nominee_image"];?>" height="150px" width="150px" alt="image" style="border-radius: 100px; background-size: cover;">  
      </div>
    
    <form action="" method="post">
  		<div class="mydata">

  			<h2 style="color: red;"><?php echo $_SESSION["nominee_name"];?></h2>
  			<h4><?php echo "(".$_SESSION["nominee_user"].")";?></h4>
  			<h3><?php echo $_SESSION["nominee_aadhaar"];?></h3>
  			<h3><?php echo $_SESSION["nominee_email"];?></h3>
  			<h3><?php echo $_SESSION["nominee_phone"];?></h3>
  			<h3><?php echo $_SESSION["nominee_gender"];?></h3>
  			<h3><?php echo $_SESSION["nominee_status"];?></h3>
  			<h3><?php echo $_SESSION["nominee_dob"];?></h3>
  			<h3><?php echo $_SESSION["nominee_address"];?></h3>

  			
  		</div>

  	</form>

  		<div class="voter_logout">
  			<span onclick="change_pswd()" style="color: black;"><i class="fa fa-key"></i>   Change Password</span><br>
         <span onclick="change_pswd()" style="color: black;"><i class="fa fa-key"></i> Show your Vote</span><br>
  			<span><a href="" onclick="nomineelogout()" style="color: black; text-decoration: none;"><i class="fa fa-sign-out"></i> logout</a></span>
  			
  		</div>
  		
  	</div>

  	<div class="vote">
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
        while ($res = mysqli_fetch_array($run)){

      ?>

  		<div class="candidate">
  			<div class="candidate_info">
  				<h4 id="up" style="color:red;">Name :- <?php echo $res['name'];?></h4>
  				<h4>Gender :- <?php echo $res['gender'];?></h4>
  				<h4>Status :- <?php echo $res['status'];?></h4>
  				<h4>Pincode :- <?php echo $res['pincode'];?></h4>
  				<h4>DOB :- <?php echo $res['DOB'];?></h4><br>
          <button class="vote-btn"><i class="fa fa-sign-in" id="icon"></i>       Vote</button>
  			</div>
  			
  			<div class="candidate_image">
           <img src="<?php echo $res['Image'];?>" width="150px" height="150px" style="border-radius: 100px;">    
         </div>

  			
  		</div>
      <?php
         } 
      }
      ?>
  		
  	</div>
  	
  </section>


  
  <!-----------Change Password ---------->


  <section class="model-container" id="change">
  	<div class="text">Change Password</div>

  	<div class="admin_cross" onclick="document.getElementById('change').style.display='none'"> <i class="fa fa-times"></i></div>

  	 <div class="contactForm">
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
               
               <div class="inputBox">
                  <input type="text" name="nomineeuser" required="required">
                  <span>Username</span>
               </div>

               <div class="inputBox">
                  <input type="Password" name="nomineepswd" required="required">
                  <span>Current Password</span>
               </div>

               <div class="inputBox">
                  <input type="text" name="nominee_new_pswd" required="required" autocomplete="off">
                  <span>New Password</span>
               </div>


               <div class="inputBox">
                  <button class="input-field_bt" type="submit" name="change_password"><i class="fa fa-sign-in" id="icon"></i>Submit</button>
               </div>
            </form>
     </div>
  	
  </section>

  <script type="text/javascript">
  	var data = document.getElementById("change");
  	function change_pswd(){
  		data.style.display="block";
  	}
  </script>

  <script type="text/javascript" src="../js/nominee-logout.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php 
error_reporting(0);

if(isset($_REQUEST['change_password'])){

   $nominee_user = $_POST['nomineeuser'];

   $current_pswd = $_POST['nomineepswd'];

   $new_password = $_POST['nominee_new_pswd'];

   //--------Connection to Database-----------

   $servername = "localhost";

   $username = "root";

   $password = "";

   $database_name = "nominee-info";

   $conn = mysqli_connect($servername, $username, $password, $database_name);

   // Die if connection was not successfull

   if(!$conn){
      die("Sorry we failed to connect: ".mysqli_connect_error());
   }
   else{
      
      $change_query = "SELECT * FROM registrationnom WHERE username = '$nominee_user' ";
      $result = mysqli_query($conn,$change_query);


      if(mysqli_num_rows($result)>0){
         

         $col = mysqli_fetch_assoc($result);

         if($current_pswd == $col['password']){

               //----------------Update Query---------------

               $update_query="UPDATE registrationnom SET password = '{$new_password}' WHERE username = '$nominee_user' ";
               mysqli_query($conn,$update_query);

               if($update_query){
                  ?>
                     <script type="text/javascript">
                        swal("Congratulations !", "Your Password has been Changed !", "success");
                        
                        setTimeout( function waiting(){
                           window.location.href="index.php";
                        },5000)

                        waiting();
                     </script>

                  <?php

               }
               else{
                  ?>
                     <script type="text/javascript">
                        swal("So Sorry!", "Your Password has't been Changed !", "error");
                     </script>

                  <?php
               }


         }
         else{
            ?>
               <script type="text/javascript">
                  swal("So Sorry !","Your Current Password have not Matched !","error");
               </script>
            <?php
            
         }

      }
      else{
            ?>
               <script type="text/javascript">
                  swal("So Sorry !","Username have not avaliable !","error");
               </script>
            <?php

         
      }
   }

}

?>

