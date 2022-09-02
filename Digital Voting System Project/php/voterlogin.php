<!-----------------Voter login ---------------->

<?php

error_reporting(0);

session_start();

if(isset($_REQUEST['voterlog'])){

   $servername="localhost";
   $username="root";
   $data_password="";
   $database_name="voter-info";

   //-----Create a Connection--------

   $conn=mysqli_connect($servername, $username, $data_password, $database_name);

   // Die if connection was not successfull

   if(!$conn){
      die("Sorry we failed to connect: ".mysqli_connect_error());
   }

   else{

      $voter_user = $_POST['UserID'];
      $voter_pswd = $_POST['Password'];

      $query = "SELECT * FROM registration2 WHERE username = '$voter_user'";
      $run = mysqli_query($conn,$query);

      if(mysqli_num_rows($run)==1){

         $col = mysqli_fetch_assoc($run);

         if($voter_pswd == $col['Password']){


            $_SESSION["name"]=$col['Name'];
            $_SESSION["user2"]=$col['username'];
            $_SESSION["aadhaar"]=$col['Aadhaarno'];
            $_SESSION["email"]=$col['Email'];
            $_SESSION["phone"]=$col['Phoneno'];
            $_SESSION["gen"]=$col['Gender'];
            $_SESSION["sta"]=$col['Status'];
            $_SESSION["dob"]=$col['DOB'];
            $_SESSION["address"]=$col['Address'];
            $_SESSION["image"]=$col['Image'];

            //----Move on another file---

            ?>
               <script type="text/javascript">
                  window.location.href="voter-dashboard.php";
                
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