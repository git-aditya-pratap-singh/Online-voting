<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF=8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vote for India</title>

	<!-- import fontawesome icon -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  

	<!-- Google Font family -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500;600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

   
   
    
   

	<!-- import css file -->

	<link rel="stylesheet" type="text/css" href="../css/index_main.css">

	<!-- import login css file -->

	<link rel="stylesheet" type="text/css" href="../css/login_page.css">

	<!-- import admin login css file -->

	<link rel="stylesheet" type="text/css" href="../css/admin_login.css">


   <!-- import about us css file -->

	<link rel="stylesheet" type="text/css" href="../css/about_us.css">

     
   <!-- import service css file -->

	<link rel="stylesheet" type="text/css" href="../css/service.css">

   <!-- import contact css file -->

   <link rel="stylesheet" type="text/css" href="../css/contact.css">


	<!-- import icon -->
	<link rel="icon" href="../img/logom.png" type="image/x-icon">
    

</head>
<body>

	<section class="header" id="home">
		<nav>
			<a href="index.php"><img src="../img/logon.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="#home"><i class="fa fa-home" id="icon"></i>Home</a></li>
					<li><a href="#aboutid"><i class="fa fa-user" id="icon"></i>About us</a></li>
				    <li><a href="#service"> <i class="fa fa-wrench" id="icon"></i>Service</a></li>
				    <li><a href="#contactus"> <i class="fa fa-phone" id="icon"></i>Contact us</a></li>
				    <li><a href="#"> <i class="fa fa-bell" id="icon"></i>Notification</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>

		<div class="text-box">
			<h1>Welcome to Digital Voting System</h1>
			<p>An online voting system is a software platform that allows groups to securely conduct votes and elections. <br>High-quality online voting systems balance ballot security and the overall requirements of an organization voting event.</p>

            <div>
			  <button type="button" onclick="fun()"> <i class="fa fa-user-circle" id="icon"></i>  Register</button>
			  <button type="button" onclick="login_fun()" style="background-color: #009688;"> <i class="fa fa-sign-in" id="icon"></i>  Login</button>
			</div>
		    
		</div>
		
	</section>
	

   

   <!-- about us ----------------->



   <section class="about" id="aboutid">
   	<div class="abcontain">
   		<h1>About Us</h1>
   	</div>
   </section>
   <section class="second_about">
   	<div class="write">
   		<p>An online voting system is a software platform that allows groups to securely conduct votes and elections.High-quality online voting systems balance ballot security and the overall requirements of an organization voting event.<br><br>
   		An online voting system is a software platform that allows groups to securely conduct votes and elections.</p>
   		<a href="../aboutus/Page-2.html"><input type="button" name="btn" value="Read more.." class="readmore"></a>
   	</div>
   	<div class="img"></div>
   	
   </section>






   <!--service page ---->



   <section class="service-box" id="service">
   	<h1>Service</h1>
   	<div class="flex-item-1">
   		<div class="logoservice" id="item1"></div>
   		<h2>Voter</h2>
   		<p>Exclusive to ElectionsOnline, and purpose-built for elections, the ledger database at the heart of the system provides a transparent, immutable, and cryptographically. </p>
   	</div>
   	<div class="flex-item-2">
   		<div class="logoservice" id="item2"></div>
   		<h2>Elections</h2>
   		<p>Exclusive to ElectionsOnline, and purpose-built for elections, the ledger database at the heart of the system provides a transparent, immutable, and cryptographically. </p>
   	</div>
   	<div class="flex-item-3">
   		<div class="logoservice" id="item3"></div>
   		<h2>Result</h2>
   		<p>Exclusive to ElectionsOnline, and purpose-built for elections, the ledger database at the heart of the system provides a transparent, immutable, and cryptographically. </p>
   	</div>
   	<div class="flex-item-4">
   		<div class="logoservice" id="item4"></div>
   		<h2>Support</h2>
   		<p>Exclusive to ElectionsOnline, and purpose-built for elections, the ledger database at the heart of the system provides a transparent, immutable, and cryptographically. </p>
   	</div>
   	
   </section>






   <!-- Contact us ----------->



   <section class="Contact" id="contactus">
      <div class="content3">
         <h2>Contact Us</h2><br>
         <p>Exclusive to ElectionsOnline, and purpose-built for elections, the ledger database at the heart of the system provides a transparent, immutable, and cryptographically.</p>
      </div>
      <div class="fluid">
         <div class="contactinfo">
            <div class="box">
               <div class="icon-contact"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
               <div class="text">
                  <h3>Address</h3>
                  <p>Himcity Colony, Chinhat Road,<br>Gomatinagar, Lucknow<br>221706</p>
               </div>
            </div>

            <div class="box">
               <div class="icon-contact"> <i class="fa fa-phone" aria-hidden="true"></i></div>
               <div class="text">
                  <h3>Phone</h3>
                  <p>+91- 9118033929</p>
               </div>
            </div>

             <div class="box">
               <div class="icon-contact"> <i class="fa fa-envelope-o" aria-hidden="true"></i></div>
               <div class="text">
                  <h3>Email</h3>
                  <p>singhadityapratap370@gmail.com</p>
               </div>
            </div>

            
         </div>

         <div class="contactForm">
            <form>
               <h2>Send Message</h2>
               <div class="inputBox">
                  <input type="text" name="" required="required">
                  <span>Full Name</span>
               </div>

               <div class="inputBox">
                  <input type="email" name="" required="required">
                  <span>Email</span>
               </div>

               <div class="inputBox">
                  <textarea required="required"></textarea>
                  <span>Type Your Message...</span>
               </div>

               <div class="inputBox">
                  <input type="submit" name="" value="Send">
               </div>
            </form>
         </div>
         
      </div>
      
   </section>


   

   <!-- footer page -->
 

   <section class="last">
      <h1>Vote for India</h1>
      <p><i class="fa fa-copyright"></i> Copyright 2021 Vote for India | All rights reserved.</p>
      
   </section>




	<!-- Registration form ------->



	<section class="registration" id="regis">

		<!-- Registration form header section -->

		<div class="head">
			<ul>
				<li onclick="cross_slide_1()"><i class="fa fa-user" id="icon-2">   Voter</i></li>
			    <li onclick="cross_slide_2()"><i class="fa fa-user-circle" id="icon-2">   Nominee</i></li>

			</ul>
            <div id="col"></div>
			<div class="cross" onclick="document.getElementById('regis').style.display='none'"> <i class="fa fa-times"></i></div>
		</div>

		<!---------------------------------->




		<!-- registartion voter-page -->
         <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
		   
				<div class="container" id="contain_voter">
					<div class="logo"></div>
                                 
                    <b>aaaa</b>
                  
					     <div class="input-container" id="temp">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your name" name="uname" required="required" 
                      pattern="[a-zA-Z\s]+" title="A name must be contain only characters!" />
                    </div>

                    <div class="input-container">
                        <i class="fa fa-address-card icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your Aadhaar Id" name="Aadhaar_no" required="required" pattern="[0-9]{12}" title="Aadhaar-no must be contain 12 digits !" />
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your e-mail" name="mail" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="These email is not correct !" />
                    </div>

                     <div class="input-container">
                        <i class="fa fa-phone icon"></i>
                        <input class="input-field" type="tel" placeholder="Enter your Phone no" name="phone" required="required" pattern="[0-9]{10}" title="A Phone no must be contain 10 digits!" />
                    </div>
                    
                     <div class="input-container">
                     	<div class="ip">
                           <span>Gender :</span>
                           <input type="radio" name="check" value="Male" />
                           <i class="fa fa-male"></i>
                           <input type="radio" name="check" value="Female"/>
                           <i class="fa fa-female"></i>
                        </div>
                        <div class="ip">
                           <span>Status:</span>
                           <input type="radio" name="check_m" value="Married">
                           <span style="color:#009688;">Married</span>
                           <input type="radio" name="check_m" value="Unmarried">
                           <span style="color:#009688;">Unmarried</span>
                        </div>
                    </div>

                    <div class="input-container">
                    	   <i class="fa fa-calendar icon"></i>
                        <input class="input-field" type="date" placeholder="Enter your Date Of Birth" name="dob" required="required"/>
                    </div>
                    
                     <div class="input-container">
                        <i class="fa fa-map-marker icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your Address" name="address" required="required"/>
                    </div>

                    <div class="input-container">
                       <i class="fa fa-key icon"></i>
                       <input class="input-field" type="password" placeholder="Password" name="psw" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" />
                    </div>

                    <div class="input-container">
                       <i class="fa fa-key icon"></i>
                       <input class="input-field" type="password" placeholder="Confirm Password" name="c_psw" required="required"/>
                    </div>

                    <div class="input-container">
                       <i class="fa fa-picture-o icon"></i>
                       <input class="input-field" type="file" name="file" required="required"/>
                    </div>

                    <div class="input-container">
                     
                     <button class="input-field_bt" id="submit_bt" name="insertdata"><i class="fa fa-sign-in" id="icon"></i>    Submit</button>
                        
                    </div> 
                  
                 
                    
                   
            </div> 
         
         </form>

			<!------------------registration voter-page-end -------------------->

       



         <!-- Registration Nominee-page ------------------->


         <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
				<div class="container" id="contain_voter">
					     
                
                    <b>aaaa</b>
					     <div class="input-container" id="temp">
                        <i class="fa fa-user icon" id="Nominee-icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your name" name="candi_name" required="required" pattern="[a-zA-Z\s]+" title="A name must be contain only characters!">
                    </div>

                    <div class="input-container">
                        <i class="fa fa-address-card icon" id="Nominee-icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your Aadhaar Id" name="candi_Aadhaar_no" required="required" pattern="[0-9]{12}" title="Aadhaar-no must be contain 12 digits !" >
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon" id="Nominee-icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your e-mail" name="candi_mail" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="These email is not correct !">
                    </div>

                     <div class="input-container">
                        <i class="fa fa-phone icon" id="Nominee-icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your Phone no" name="candi_phone" required="required"pattern="[0-9]{10}" title="A Phone no must be contain 10 digits!">
                    </div>
                    
                     <div class="input-container">
                     	<div class="ip">
                           <span>Gender :</span>
                           <input type="radio" name="candi_check" value="Male">
                           <i class="fa fa-male" id="Nominee-m-or-f"></i>
                           <input type="radio" name="candi_check" value="Female">
                           <i class="fa fa-female" id="Nominee-m-or-f"></i>
                        </div>
                        <div class="ip">
                           <span>Status:</span>
                           <input type="radio" name="candi_check_m" value="Married">
                           <span style="color:#00b8ff;">Married</span>
                           <input type="radio" name="candi_check_m" value="Unmarried">
                           <span style="color:#00b8ff;">Unmarried</span>
                        </div>
                    </div>

                    <div class="input-container">
                    	   <i class="fa fa-calendar icon" id="Nominee-icon"></i>
                        <input class="input-field" type="date" placeholder="Enter your Date Of Birth" name="candi_dob" required="required">
                    </div>
                    
                     <div class="input-container">
                        <i class="fa fa-map-marker icon" id="Nominee-icon"></i>
                        <input class="input-field" type="text" placeholder="Enter your Address" name="candi_address" required="required">

                        <i class="fa fa-map-marker icon" id="Nominee-icon"></i>
                        <input class="input-field" type="number" placeholder="Enter Pin Code" name="pincode" required="required" pattern="[0-9]{6}">

                    </div>

                    <div class="input-container">
                       <i class="fa fa-key icon" id="Nominee-icon"></i>
                       <input class="input-field" type="password" placeholder="Password" name="candi_psw" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>

                    <div class="input-container">
                       <i class="fa fa-key icon" id="Nominee-icon"></i>
                       <input class="input-field" type="password" placeholder="Confirm Password" name="candi_c_psw" required="required">
                    </div>

                    <div class="input-container">
                       <i class="fa fa-picture-o icon" id="Nominee-icon"></i>
                       <input class="input-field" type="file" name="file2" required="required">
                    </div>

                    <div class="input-container">
                        
                        <button class="input-field_bt" id="submit_bt" name="submitdata"><i class="fa fa-sign-in" id="icon"></i>    Submit</button> 
                    </div>
                    
                   
            </div>

			</form>
         <!-- Registration Nominee-page-end------------------>

	</section>





   <!--  Login Pages ------------->
 
   <section class="login" id="login1">


		<div class="head">
			<ul>
				<li onclick="voter_login()"><i class="fa fa-user" id="icon-2">   Voter</i></li>
			   <li onclick="nominee_login()"><i class="fa fa-user-circle" id="icon-2">   Nominee</i></li>
            <div class="cross_login" onclick="document.getElementById('login1').style.display='none'"> <i class="fa fa-times"></i></div>
			</ul>
            <div id="logincol"></div>
		</div>

       
		<form action="voterlogin.php" method="post">
			<div class="login_form" id="login-voter">
				 <div class="login_logo"></div>
				<div class="title">login here!</div>
				<div class="fields">
					<div class="userid">
						<svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
						</svg>
						<input type="userid" name="UserID" classs="user-input" placeholder="UserID" required="required" />
					</div>
               

					<div class="password">
						<svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
						</svg>
						<input type="password" name="Password" classs="pass-input" placeholder="Password" required="required" />
					</div>
				</div>
				<button  type="submit" class="signin-button"  name="voterlog"> <i class="fa fa-sign-in" id="icon"></i> login</button>

				<div class="link">
					<a href="#">Forgot password?</a>
				</div>
			</div>
			
		</form>




		<form action="nominee_login.php" method="post">
			<div class="login_form" id="login-nominee">
				<div class="login_logo2" id="login2logo"></div>
				<div class="title">login here!</div>
				<div class="fields">
					<div class="userid">
						<svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
						</svg>
						<input type="userid" name="User" class="user-input" placeholder="UserID" required="required" />
					</div>

					<div class="password">
						<svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
						</svg>
						<input type="password" name="Password2" class="pass-input" placeholder="Password" required="required" />
					</div>
				</div>
				<button type="submit" class="signin-button" name="nomineelog"> <i class="fa fa-sign-in" id="icon"></i> login</button>

				<div class="link">
					<a href="#">Forgot password?</a>
				</div>
			</div>
			
		</form>


		<div class="footer">
			<a href="#">Are you <span onclick="admin_login()">Admin?</span></a>
		</div>

   </section>



  <!-- Admin login form -->


   
   <section class="admin_container" id="admin">
   	<form action="adminlogin.php" method="post">
   		<div class="admin_cross" onclick="document.getElementById('admin').style.display='none'"> <i class="fa fa-times"></i></div>
   		<div class="admin_logo"></div>
         <div class="admin_title">Admin login !</div>
         <div class=""></div>
         <div class="input-admin" id="temp1">
               <i class="fa fa-user icon" id="iconadmin"></i>
               <input class="input-field" type="text" placeholder="Username" name="useradmin" required="required">
         </div>

          <div class="input-admin">
               <i class="fa fa-key icon" id="iconadmin"></i>
               <input class="input-field" type="password" placeholder="Password" name="password" required="required">
         </div>

         <button type="submit" class="signin-admin" name="submitadmin"> <i class="fa fa-sign-in" id="icon"></i>     login</button>
        
   	</form>
      
      <div class="link">
				<span>Forgot password?</span>
		</div>
   </section>






   	
   
   <!-- import index.js file -->

	<script type="text/javascript" src="../js/index.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>
</html>



<!-- voter data insert database---------->


<?php

error_reporting(0);


if(isset($_REQUEST['insertdata'])){

    $name=$_POST['uname'];

    $aadhaar=$_POST['Aadhaar_no'];

    $email=$_POST['mail'];

    $phoneno=$_POST['phone'];

    $gender=$_POST['check'];

    $status=$_POST['check_m'];

    $dobv=$_POST['dob'];

    $address=$_POST['address'];

    $password=$_POST['psw'];

    $c_password=$_POST['c_psw'];

    $file=$_FILES['file'];

    //---- file error cheeck------

    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    $file_ext=explode('.',$filename);

    $file_ext_check = strtolower(end($file_ext));

    $valid_file_ext = array('png','jpg','jpeg');


    //-----Find age---------

    $age=date_diff(date_create($dobv),date_create('today'))->y;



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


    //------Gender validation----

    if(!isset($_POST['check'])){
        ?>
        <script type="text/javascript">
           swal("Error!", "Please! Select your Gender.", "error");
          
        </script>

        <?php

    }
    else{

        //------Status Validation--------

        if($status == "Married" || $status == "Unmarried"){

            //------Password Validation--------

            if($password == $c_password){

                // ---------Image Validation----------

                if($fileerror == 0){

                    if(in_array($file_ext_check, $valid_file_ext)){

                        // ------Age Validation---------

                        if($age >=18){

                            // --------Aadhaar validation---------

                            $aadhaar_v = "SELECT * FROM registration2 WHERE Aadhaarno = '$aadhaar' ";
                            $query = mysqli_query($conn,$aadhaar_v);

                        

                            if(mysqli_num_rows($query)>0){
                                 ?>
                                 <script type="text/javascript">
                                   swal("Error!", "Your Aadhaar-ID is already Registered!", "error");
            
                                 </script>

                                <?php 

                            }
                            else{
                               
                               //-----------E-mail validation-------------

                                $email_v = "SELECT * FROM registration2 WHERE Email = '$email' ";

                                $query2 = mysqli_query($conn,$email_v);

                        

                                if(mysqli_num_rows($query2)>0){
                                     ?>
                                     <script type="text/javascript">
                                       swal("Error!", "Your E-mail is already Registered!", "error");
                                       
                                     </script>

                                    <?php 


                                }

                                else{

                                   

                                    $destfilev = "../".'uploadvoter/' .$filename;

                                    move_uploaded_file($filepath, $destfilev);

                                    // -------Create username ---------------


                                    //------String change into array-----------

                                    $array = explode("@",$email);
                                    $user=strtolower($array[0]);

                                    $insertquery = "INSERT INTO registration2(username,Name,Aadhaarno,Email,Phoneno,Gender,Status,DOB,Address,Password,Image) values('$user','$name','$aadhaar','$email','$phoneno','$gender','$status','$dobv','$address','$password','$destfilev')";

                                    $query3=mysqli_query($conn,$insertquery);

                                    if($query3){
                                         ?>
                                          <script type="text/javascript">
                                             swal("Congratulations!", "Your Registration is Successfully!", "success");
                                          
                                          </script>

                                         <?php 
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
                           swal("Error!", "Please Check your file extansion (png, jpg, jpeg)!", "error");
            
                         </script>

                        <?php

                    }


                }
                else{
                    ?>
                       <script type="text/javascript">
                        swal("Error!", "Your file is error!", "error");
            
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

        else{
             ?>
                <script type="text/javascript">
                    swal("Error!", "Please! Select your Status.", "error");
                
                </script>

            <?php
        }

        
        
    }


} //---database Brackets
}
    
    
?>







<!-- candidate data insert database---------->


<?php

error_reporting(0);


if(isset($_REQUEST['submitdata'])){

    $cname=$_POST['candi_name'];

    $caadhaar=$_POST['candi_Aadhaar_no'];

    $cemail=$_POST['candi_mail'];

    $cphoneno=$_POST['candi_phone'];

    $cgender=$_POST['candi_check'];

    $cstatus=$_POST['candi_check_m'];

    $cdobv=$_POST['candi_dob'];

    $caddress=$_POST['candi_address'];

    $cpincode = $_POST['pincode'];

    $cpassword=$_POST['candi_psw'];

    $c_password=$_POST['candi_c_psw'];

    $file=$_FILES['file2'];

    //---- file error cheeck------

    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    $file_ext=explode('.',$filename);

    $file_ext_check = strtolower(end($file_ext));

    $valid_file_ext = array('png','jpg','jpeg');


    //-----Find age---------

    $age=date_diff(date_create($cdobv),date_create('today'))->y;



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


    //------Gender validation----

    if(!isset($_POST['candi_check'])){
        ?>
        <script type="text/javascript">
           swal("Error!", "Please! Select your Gender.", "error");
          
        </script>

        <?php

    }
    else{

        //------Status Validation--------

        if($cstatus == "Married" || $cstatus == "Unmarried"){

            //------Password Validation--------

            if($cpassword == $c_password){

                // ---------Image Validation----------

                if($fileerror == 0){

                    if(in_array($file_ext_check, $valid_file_ext)){

                        // ------Age Validation---------

                        if($age >=18){

                            // --------Aadhaar validation---------

                            $aadhaar_c = "SELECT * FROM registrationnom WHERE aadhaar = '$caadhaar' ";
                            $query = mysqli_query($conn,$aadhaar_c);

                        

                            if(mysqli_num_rows($query)>0){
                                 ?>
                                 <script type="text/javascript">
                                   swal("Error!", "Your Aadhaar-ID is already Registered!", "error");
            
                                 </script>

                                <?php 

                            }
                            else{
                               
                               //-----------E-mail validation-------------

                                $email_c = "SELECT * FROM registrationnom WHERE email = '$cemail' ";
                                $query2 = mysqli_query($conn,$email_c);

                        

                                if(mysqli_num_rows($query2)>0){
                                    ?>
                                     <script type="text/javascript">
                                       swal("Error!", "Your E-mail is already Registered!", "error");
                                       
                                     </script>

                                    <?php 


                                }

                                else{

                                    

                                    $destfile = "../".'upload-candidate/' .$filename;

                                    move_uploaded_file($filepath, $destfile);

                                    // -------Create username ---------------


                                    //------String change into array-----------

                                    $array = explode("@",$cemail);
                                    $user2=strtolower($array[0]);



                                    $insert_c = "INSERT INTO registrationnom(username,name,aadhaar,email,phoneno,gender,status,DOB,address,pincode,password,Image) values('$user2','$cname','$caadhaar','$cemail','$cphoneno','$cgender','$cstatus','$cdobv','$caddress','$cpincode','$cpassword','$destfile')";

                                    $query3=mysqli_query($conn,$insert_c);

                                    if($query3){
                                         ?>
                                          <script type="text/javascript">
                                             swal("Congratulations!", "Your Registration is Successfully!", "success");
             
                                          </script>

                                         <?php 
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
               
                     swal("Error!", "Your Password does not Matched!", "error");
                    
                </script>
                <?php

            }
            
        }

        else{
             ?>
                <script type="text/javascript">
                    swal("Error!", "Please! Select your Status.", "error");
                
                </script>

            <?php
        }

        
        
    }


} //---database Brackets
    
    
}
?>











