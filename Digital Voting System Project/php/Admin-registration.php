<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500;600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    


    <!-- import icon -->
	<link rel="icon" href="../img/logom.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="..\css\admin-registration.css">

</head>
<body>
	<div class="main">
		<div class="header">
			<h2>Registration</h2>
			<div class="logo"></div>
			<form action="" method="post" enctype="multipart/form-data">

				<div class="body">
					<div class="input-admin">
                        <i class="fa fa-user icon" id="iconadmin"></i>
                        <input class="input-field" type="text" placeholder="Enter your name" name="uname" pattern="[a-zA-Z\s]+" title="A name must be contain only characters!" required="required">
                    </div>

                    <div class="input-admin" id="temp1">
                        <i class="fa fa-address-card icon" id="iconadmin"></i>
                        <input class="input-field" type="text" placeholder="Enter your Aadhaar-no" name="aadhaar" pattern="[0-9]{12}" title="Aadhaar-no must be contain 12 digits !" required="required">
                    </div>

                    <div class="input-admin" id="temp1">
                        <i class="fa fa-envelope icon" id="iconadmin"></i>
                        <input class="input-field" type="text" placeholder="Enter your email" name="mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="These email is not correct !" required="required">
                    </div>
				</div>



				<div class="body" id="body2">
					<div class="input-admin">
                        <i class="fa fa-phone icon" id="iconadmin"></i>
                        <input class="input-field" type="Phone-no" placeholder="Enter your Phone-no" name="phone" pattern="[0-9]{10}" title="A Phone no must be contain 10 digits!" required="required">
                    </div>

                    <div class="input-admin" id="temp1">
                        <i class="fa fa-calendar icon" id="iconadmin"></i>
                        <input class="input-field" type="date" placeholder="Enter your Date of Birth" name="dob" required="required">
                    </div>

                    <div class="input-admin" id="temp1">
                        <i class="fa fa-map-marker icon" id="iconadmin"></i>
                        <input class="input-field" type="text" placeholder="Enter your Address" name="address" required="required">
                    </div>
				</div>



				<div class="body" id="body2">
					
                    <div class="input-admin2">
                        <i class="fa fa-key icon" id="iconadmin"></i>
                        <input class="input-field" type="password" placeholder="Enter your Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"required="required">
                    </div>

                    <div class="input-admin2" id="temp1">
                        <i class="fa fa-key icon" id="iconadmin"></i>
                        <input class="input-field" type="password" placeholder="Confirm-Password" name="c_password" required="required">
                    </div>

                    <div class="input-admin2" id="temp1">
                        <i class="fa fa-picture-o e icon" id="iconadmin"></i>
                        <input class="input-field" type="file" name="fileimg" required="required">
                    </div>
				</div>



				<div class="input-container">
                     	<div class="ip">
                           <span>Gender :</span>
                           <input type="radio" name="check" value="Male"/>
                           <i class="fa fa-male"></i>
                           <input type="radio" name="check" value="Female"/>
                           <i class="fa fa-female"></i>
                        </div>
                        <div class="ip">
                           <span>Status:</span>
                           <input type="radio" name="check_m" value="Married">
                           <span style="color:#00bcd4;;">Married</span>
                           <input type="radio" name="check_m" value="Unmarried">
                           <span style="color:#00bcd4;;">Unmarried</span>
                        </div>
                    </div>

                <div class="button-box">
                	<button class="admin-submit" name="submitdata">Submit</button>

                </div>
                


			</form>
			
		</div>
		
	</div>

    <!-- import js(sweet-alert) file -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>


<?php

error_reporting(0);

if(isset($_REQUEST['submitdata'])){
    $name = $_POST['uname'];
    $Aadhaar = $_POST['aadhaar'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $pswd = $_POST['password'];
    $c_pswd = $_POST['c_password'];
    $gender = $_POST['check'];
    $status = $_POST['check_m'];
    $image = $_FILES['fileimg'];

    //-----file error check--------

    $filename = $image['name'];
    $filepath = $image['tmp_name'];
    $fileerror = $image['error'];

    $file_ext = explode('.', $filename);
    $file_ext_check = strtolower(end($file_ext));
    $valid_file_ext = array('png','jpg','jpeg');


    //-----Find age---------

    $age=date_diff(date_create($dob),date_create('today'))->y;

    //---Connect database----------

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

        //----Gender Validation--------

        if(!isset($_POST['check'])){
            ?>
              <script type="text/javascript">
                  swal("Error!", "Please! Select Your Gender.", "error");
              </script>
            <?php
        }
        else{

            //------Status Validation-------

            if(!isset($_POST['check_m'])){
                ?>
                  <script type="text/javascript">
                      swal("Error!", "Please! Select Your Status.", "error");
                  </script>
                <?php
            }
            else{

                //--------Password Validation----------

                if($pswd == $c_pswd){

                    //----- Age Validation---------

                    if($age>=18){

                        //----Image Validation-----

                        if($fileerror == 0){

                            if(in_array($file_ext_check, $valid_file_ext)){

                                // ------Aadhaar validation----

                                $aadhaar_admin = "SELECT * FROM adminregistration WHERE aadhaarno = '$Aadhaar'";
                                $query = mysqli_query($conn,$aadhaar_admin);

                                if(mysqli_num_rows($query)>0){
                                    ?>
                                      <script type="text/javascript">
                                        swal("Error!", "Your Aadhaar-ID is already Registered!", "error");
            
                                      </script>

                                    <?php 

                                }else{

                                    //-------email Validation----------

                                    $email_admin = "SELECT * FROM adminregistration WHERE email = '$email'";
                                    $query2 = mysqli_query($conn,$email_admin);

                                    if(mysqli_num_rows($query2)>0){
                                        ?>
                                           <script type="text/javascript">
                                             swal("Error!", "Your E-mail is already Registered!", "error");
            
                                           </script>

                                        <?php 

                                    }
                                    else{


                                        
                                        // ------insert image into specific floder---------



                                        $destfile2 = "../".'upload-admin/' .$filename;

                                        move_uploaded_file($filepath, $destfile2);

   
                                        // -------Create username ---------------


                                        //------String change into array-----------

                                        $array = explode("@",$email);
                                        $user=strtolower($array[0]);
                                        


                                        $insertquery = "INSERT INTO adminregistration(username,Name,aadhaarno,email,phone,Gender,Status,DOB,address,password,Image) values('$user','$name','$Aadhaar','$email','$phone','$gender','$status','$dob','$address','$pswd','$destfile2')";

                                        $query_n=mysqli_query($conn,$insertquery);


                                        if($query_n){
                                            ?>
                                              <script type="text/javascript">
                                                 swal("Congratulations!", "Your Registration is Successfully!", "success");
                                          
                                              </script>
                                            <?php

                                            //-------Send email---------

                                            $to_mail = $email;
                                            $subject = "Welcome to Vote for India!";
                                            $body = "Hello, Welcome to Vote for India. Your Registration has been Successfully.
                                            to given a Username----> <?php $username_admin ?>";
                                            $headers = "From: singhadityapratap370@gmail.com";

                                            mail($to_mail,$subject,$body,$headers);

                                        }
                                        else{
                                            ?>
                                              <script type="text/javascript">
                                                 swal("Error!", "Your Registration is Falied!", "error");
                                          
                                              </script>
                                            <?php
                                        }


                                    }

                                }

                            }else{
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
                        ?>
                          <script type="text/javascript">
                            swal("Error!", "Your age below in 18 year!", "error");
                          </script>
                        <?php
                    }

                }
                else{
                    ?>
                      <script type="text/javascript">
                        swal("Error!", "Your Password does not Matched!", "error");
                      </script>
                    <?php

                }

            }
        }
    }


}

?>