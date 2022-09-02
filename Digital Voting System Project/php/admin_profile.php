<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<!-- import fontawesome icon -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  

	<!-- Google Font family -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500;600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
   
    <link rel="stylesheet" type="text/css" href="../css/admin-profile.css">

    <link rel="icon" href="../img/logom.png" type="image/x-icon">

</head>
<body>

	<section class="container"></section>
	<div class="circle"></div>
	<div class="profile_container">
		<div class="auto-main">
		   <div class="under-container" style="text-align: center;">
		       <div class="image-profile">
                   <img src="<?php echo $_SESSION['voter_image'];?>" height="200px" width="200px" alt="image" style="border-radius:100px; background-size: cover;">
                <div>

                <h1 style="color: #fff; font-size: 20px; font-family: cursive; margin-top: 40px;"><?php echo $_SESSION['voter_name'];?></h1>
                <h4 style="color: #fff; font-size: 15px; font-family: cursive; margin-top: 10px;"><?php echo $_SESSION['voter_username'];?></h4>

                <p style="color: #fff; font-size: 12px; font-family: cursive; margin-top: 250px;">This Application is Developed by Aditya Pratap Singh.</p>
                
		    </div>

		</div>
		
			
	</div>

	<div class="body">

		<div class="show">
			<h2>Admin-Info</h2>
		</div>

		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

		<div class="admin-input">
			<i class="fa fa-user icon" id="iconadmin"></i>
            <input class="input-field" type="text" placeholder="Enter your name" name="uname" pattern="[a-zA-Z\s]+" title="A name must be contain only characters!" value="<?php echo $_SESSION['voter_name'];?>" required="required">
			
		</div>

		<div class="admin-input">
            <i class="fa fa-address-card icon" id="iconadmin"></i>
            <input class="input-field" type="text" placeholder="Enter your Aadhaar Id" name="Aadhaar_no" required="required" pattern="[0-9]{12}" value="<?php echo $_SESSION['voter_aadhaar'];?>" title="Aadhaar-no must be contain 12 digits !" />
        </div>

        <div class="admin-input">
            <i class="fa fa-envelope icon" id="iconadmin"></i>
            <input class="input-field" type="text" placeholder="Enter your email" name="mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="These email is not correct !" value="<?php echo $_SESSION['voter_email'];?>" required="required">
        </div>

        <div class="admin-input">
            <i class="fa fa-phone icon" id="iconadmin"></i>
            <input class="input-field" type="tel" placeholder="Enter your Phone no" name="phone" required="required" pattern="[0-9]{10}" value="<?php echo $_SESSION['voter_phone'];?>" title="A Phone no must be contain 10 digits!" />
        </div>

        
        <div class="input-container">

            <div class="ip">
                <span>Gender :</span>
                <input type="radio" name="check" value="Male" 

                <?php 
                if($_SESSION['voter_gender'] == "Male"){
                    echo "checked";
                }
                ?>
                >
                <i class="fa fa-male"></i>


                <input type="radio" name="check" value="Female"

                <?php
                if($_SESSION['voter_gender'] == "Female"){
                    echo "checked";
                }
                ?>
                >
                <i class="fa fa-female"></i>


            </div>

            <div class="ip">
                <span>Status:</span>
                <input type="radio" name="check_m" value="Married"

                <?php 
                if($_SESSION['voter_status'] == "Married"){
                    echo "checked";
                }
                ?>
                >
                <span>Married</span>

                <input type="radio" name="check_m" value="Unmarried"
                
                <?php 
                if($_SESSION['voter_status'] == "Unmarried"){
                    echo "checked";
                }
                ?>
                >
                <span>Unmarried</span>
            </div>

    
        
        </div>



        <div class="admin-input">
            <i class="fa fa-calendar icon" id="iconadmin"></i>
            <input class="input-field" type="date" placeholder="Enter your Date of Birth" name="dob" value="<?php echo $_SESSION['voter_dob'];?>" required="required">
        </div>

        <div class="admin-input">
            <i class="fa fa-map-marker icon" id="iconadmin"></i>
            <input class="input-field" type="text" placeholder="Enter your Address" name="address" value="<?php echo $_SESSION['voter_address'];?>" required="required"/>
        </div>

        <div class="admin-input">
            <i class="fa fa-picture-o icon" id="iconadmin"></i>
            <input class="input-field" type="file" name="new_image" >
            <!--<input type="hidden" name="save_old_image">-->
        </div>
                     
        <button class="input-field_bt" id="submit_bt" name="insertadmin"><i class="fa fa-sign-in" id="icon"></i>     Save</button>

    </form>
                        
       

			
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>
</html>



<?php 

error_reporting(0);

$admin_user=$_SESSION['voter_username'];
$old=$_SESSION['voter_image'];




if(isset($_REQUEST['insertadmin'])){

    $admin_name = $_POST['uname'];

    $admin_aadhaar = $_POST['Aadhaar_no'];

    $admin_mail = $_POST['mail'];

    $admin_phone = $_POST['phone'];

    $admin_gender = $_POST['check'];

    $admin_status = $_POST['check_m'];

    $admin_dob = $_POST['dob'];

    $admin_address = $_POST['address'];

   // $admin_old_image = $_POST['save_old_image'];

    $admin_image = $_FILES['new_image'];

    //------------------------------------------------//

    
    $filename3 = $admin_image['name'];

    $admin_filepath = $admin_image['tmp_name'];

    $admin_fileerror = $admin_image['error'];

    $admin_file_ext = explode('.',$filename3);

    $admin_file_ext_check = strtolower(end($admin_file_ext));

    $admin_valid_file_ext = array('png','jpg','jpeg');



    //---------------------------------------------------//

    //-----Find age---------

    $age=date_diff(date_create($admin_dob),date_create('today'))->y;


    //----Connect Database-----------

    $servername="localhost";
    $username="root";
    $data_password="";
    $database_name="admin-info";

    //-----Create a Connection--------

    $conn=mysqli_connect($servername, $username, $data_password,$database_name);

    // Die if connection was not successfull

    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }

    else{

        //-----------Age Validation---------------

        if($age>=18){

            //------------Image Validation---------------

            //--------user choice file-----------

            if($filename3!= ''){

                if($admin_fileerror == 0){

                    if(in_array($admin_file_ext_check, $admin_valid_file_ext)){


                    //---------Delete Old Image----------

                        unlink($old);


                    // ------insert image into specific floder---------



                        $admin_dest2 = "../".'upload-admin/' .$filename3;

                        move_uploaded_file($admin_filepath, $admin_dest2);

                        
   
                        // -------Create username ---------------


                        //------String change into array-----------

                        $admin_array = explode("@",$admin_mail);
                        $admin_user=strtolower($admin_array[0]);

                        

                        $update_query = "UPDATE adminregistration SET username='{$admin_user}',Name='{$admin_name}',aadhaarno='{$admin_aadhaar}',email='{$admin_mail}',phone='{$admin_phone}',Gender='{$admin_gender}',Status='{$admin_status}',DOB='{$admin_dob}',address='{$admin_address}',Image='{$admin_dest2}' WHERE username= '{$admin_user}'";

                        mysqli_query($conn,$update_query);

                        if($update_query){
                            ?>
                               <script type="text/javascript">
                                   swal("Congratulations!", "Your Data is Updated!", "success"); 
                               </script>

                            <?php
                        } 

                        else{

                            ?>
                               <script type="text/javascript">
                                   swal("Error!", "Your Data is not Updated!","error");
                               </script>
                            <?php


                        }



                    }
                    else{
                       ?>
                          <script type="text/javascript">
                             swal("Error!", "Please! Check your file extansion (png, jpg, jpeg).", "error");
                          </script>
                       <?php  
                    }

                }
                else{
                    ?>
                       <script type="text/javascript">
                           swal("Error!", "Your file has been error!", "error");
                       </script>
                   <?php 
                }
            }
            else{

                $update_query = "UPDATE adminregistration SET username='{$admin_user}',Name='{$admin_name}',aadhaarno='{$admin_aadhaar}',email='{$admin_mail}',phone='{$admin_phone}',Gender='{$admin_gender}',Status='{$admin_status}',DOB='{$admin_dob}',address='{$admin_address}' WHERE username= '{$admin_user}'";

                mysqli_query($conn,$update_query);

                if($update_query){

                    ?>

                      <script type="text/javascript">
                          swal("Congratulations!", "Your Data is Updated!", "success");
                      </script>
                    <?php
                }

                else{
                    ?>

                       <script type="text/javascript">
                           swal("Error!", "Your Data is not Updated!","error");
                       </script>
                    <?php
                }
            }


        }
        else{
            ?>
               <script type="text/javascript">
                   swal("Error!", "Your age below in 18 year!", "error");
               </script>
            <?php
        }
    }
 

}


?>