<!-----------------Nominee login ---------------->

<?php

error_reporting(0);

session_start();

if(isset($_REQUEST['nomineelog'])){

   $servername="localhost";
   $username="root";
   $data_password="";
   $database_name="nominee-info";

   //-----Create a Connection--------

   $conn=mysqli_connect($servername, $username, $data_password, $database_name);

   // Die if connection was not successfull

   if(!$conn){
      die("Sorry we failed to connect: ".mysqli_connect_error());
   }

   else{

      $nominee_user = $_POST['User'];
      $nominee_pswd = $_POST['Password2'];

      $query = "SELECT * FROM registrationnom WHERE username = '$nominee_user'";
      $run = mysqli_query($conn,$query);

      if(mysqli_num_rows($run)==1){

         $col = mysqli_fetch_assoc($run);

         if($nominee_pswd == $col['password']){


            $_SESSION["nominee_name"]=$col['name'];
            $_SESSION["nominee_user"]=$col['username'];
            $_SESSION["nominee_aadhaar"]=$col['aadhaar'];
            $_SESSION["nominee_email"]=$col['email'];
            $_SESSION["nominee_phone"]=$col['phoneno'];
            $_SESSION["nominee_gender"]=$col['gender'];
            $_SESSION["nominee_status"]=$col['status'];
            $_SESSION["nominee_dob"]=$col['DOB'];
            $_SESSION["nominee_address"]=$col['address'];
            $_SESSION["nominee_image"]=$col['Image'];

            //----Move on another file---

            ?>
               <script type="text/javascript">
                  window.location.href="nominee-dashboard.php";
                
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