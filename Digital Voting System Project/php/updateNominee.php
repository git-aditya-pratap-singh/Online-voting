<?php

error_reporting(0);

         //----Connect Database-----------

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
      $id = $_GET['id'];
      
      $query="SELECT * FROM registrationnom WHERE ID = $id";
      $run = mysqli_query($conn,$query);

      $result = mysqli_fetch_array($run);


    
    }
 

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update-Nominee</title>

  <!-- icon -->
<link rel="icon" href="../img/logom.png" type="image/x-icon">


  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="../css/update.css">

</head>
<body>


<section class="under"></section>
  <div class="model" id="regis">
  <div class="popup">
    <h3>Update Data</h3>

  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

    <div class="admin-input">
      <i class="fa fa-user icon" id="iconadmin"></i>
            <input class="input-field" type="text" placeholder="Enter your name" name="uname" pattern="[a-zA-Z\s]+" title="A name must be contain only characters!" value="<?php echo $result['name'];?>" required="required">
      
    </div>

    <div class="admin-input">
            <i class="fa fa-address-card icon" id="iconadmin"></i>
            <input class="input-field" type="text" placeholder="Enter your Aadhaar Id" name="Aadhaar_no" required="required" pattern="[0-9]{12}" value="<?php echo $result['aadhaar'];?>" title="Aadhaar-no must be contain 12 digits !" />
        </div>

        <div class="admin-input">
            <i class="fa fa-envelope icon" id="iconadmin"></i>
            <input class="input-field" type="text" placeholder="Enter your email" name="mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo $result['email'];?>" title="These email is not correct !" required="required">
        </div>

        <div class="admin-input">
            <i class="fa fa-phone icon" id="iconadmin"></i>
            <input class="input-field" type="tel" placeholder="Enter your Phone no" name="phone" required="required" pattern="[0-9]{10}" value="<?php echo $result['phoneno'];?>" title="A Phone no must be contain 10 digits!" />
        </div>

        <div class="admin-input">
                      <div class="ip">
                           <span>Gender :</span>
                           <input type="radio" name="check" value="Male" 
                           <?php
                           if($result['gender'] == "Male"){
                               echo "checked";
                           }
                           ?>
                           >
                           <i class="fa fa-male"></i>

                           <input type="radio" name="check" value="Female"
                           <?php
                           if($result['gender'] == "Female"){
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
                           if($result['status'] == "Married"){
                               echo "checked";
                           }
                           ?>
                           >
                           <span>Married</span>

                           <input type="radio" name="check_m" value="Unmarried"
                           <?php
                           if($result['status'] == "Unmarried"){
                                echo "checked";
                           } 
                           ?>
                           >
                           <span>Unmarried</span>
                        </div>
                    </div>

        <div class="admin-input">
            <i class="fa fa-calendar icon" id="iconadmin"></i>
            <input class="input-field" type="date" placeholder="Enter your Date of Birth" name="dob" value="<?php echo $result['DOB'];?>" required="required">
        </div>

        <div class="admin-input">
            <i class="fa fa-map-marker icon" id="iconadmin"></i>
            <input class="input-field" type="text" placeholder="Enter your Address" name="address" value="<?php echo $result['address'];?>" required="required"/>
        </div>

        <div class="admin-input">
            <i class="fa fa-picture-o icon" id="iconadmin"></i>
            <input class="input-field" type="file" name="save_new_image" >
            <input type="hidden" name="save_old_image" value="<?php echo $result['Image'];?>">
        </div>


        <button class="input-field_bt" id="submit_bt" name="insertNominee"><i class="fa fa-sign-in" id="icon"></i>     Update</button>

    </form>
      
   </div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 


</body>
</html>

<?php

error_reporting(0);

if(isset($_REQUEST['insertNominee'])){

    $name=$_POST['uname'];

    $aadhaar=$_POST['Aadhaar_no'];

    $email=$_POST['mail'];

    $phoneno=$_POST['phone'];

    $gender=$_POST['check'];

    $status=$_POST['check_m'];

    $date_of_birth=$_POST['dob'];

    $address=$_POST['address'];

    $old_image=$_POST['save_old_image'];

    $new_image=$_FILES['save_new_image'];

    $filename=$new_image['name'];
    $filepath=$new_image['tmp_name'];
    $fileerror=$new_image['error'];
    $file_ext=explode('.',$filename);

    $file_ext_check = strtolower(end($file_ext));

    $valid_file_ext = array('png','jpg','jpeg');

    //--------user choice file-----------

    if($filename!= ''){
    
        //---------file formate validation--------


        if(in_array($file_ext_check, $valid_file_ext)){

            unlink($result['Image']);


            $update_file=$filename;
            
            $dest = "../".'upload-candidate/' .$update_file;

            move_uploaded_file($filepath, $dest);

            //----username stored into database-------

            $array = explode("@",$email);
            $user=strtolower($array[0]);
   

            $update_query = "UPDATE registrationnom SET username='{$user}',name='{$name}',aadhaar='{$aadhaar}',email='{$email}',phoneno='{$phoneno}',gender='{$gender}',status='{$status}',DOB='{$date_of_birth}',address='{$address}',Image='{$dest}' WHERE ID= '{$id}'";

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
                   swal("Error!", "Please Check your file extansion (png, jpg, jpeg)!", "error");
            
               </script>

            <?php
        
        }
    
    }

    //-------------without Image Update-----------


    else{

        $array = explode("@",$email);
        $user=strtolower($array[0]);
   

        $update_query = "UPDATE registrationnom SET username='{$user}',name='{$name}',aadhaar='{$aadhaar}',email='{$email}',phoneno='{$phoneno}',gender='{$gender}',status='{$status}',DOB='{$date_of_birth}',address='{$address}' WHERE ID= '{$id}'";

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
?>