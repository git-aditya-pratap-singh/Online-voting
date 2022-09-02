<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Vote for India</title>
   <!-- import icon -->
   <link rel="icon" href="../img/logom.png" type="image/x-icon">
</head>
<body>

   

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<!-------------- Admin login-------------->

<?php

session_start();


if(isset($_POST['submitadmin'])){

   $user = $_POST['useradmin'];
   $pswd_a = $_POST['password'];

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

      $checkquery = "SELECT * FROM adminregistration WHERE username = '$user'";
      $result = mysqli_query($con2,$checkquery); 
      

      if(mysqli_num_rows($result)==1){
         
        $row=mysqli_fetch_assoc($result);


        if($pswd_a == $row['password']){

           
            $_SESSION['voter_name']=$row['Name'];

            $_SESSION['voter_username']=$row['username'];

            $_SESSION['voter_aadhaar']=$row['aadhaarno'];

            $_SESSION['voter_email']=$row['email'];

            $_SESSION['voter_phone']=$row['phone'];

            $_SESSION['voter_gender']=$row['Gender'];

            $_SESSION['voter_status']=$row['Status'];

            $_SESSION['voter_dob']=$row['DOB']; 

            $_SESSION['voter_address']=$row['address'];

            $_SESSION['voter_image']=$row['Image'];
           
           ?>
               <script type="text/javascript">
               window.location.href="dashboard.php";   
                
               </script>

         <?php
        }
        else{

         // -----Incorrect Password--------

          ?>
               <script type="text/javascript">
                  alert("Your Password is Incorret !");
                  
                  window.location.href="index.php";
                
               </script>

         <?php
        }


      }
       // fetch all data in array
       
      else{
         ?>
            <script type="text/javascript">
               
               alert("Your Username is Not Valid!");
               window.location.href="index.php";
                    
            </script>
         <?php

      }

   }

}


?>