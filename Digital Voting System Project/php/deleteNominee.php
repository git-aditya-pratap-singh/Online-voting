<?php
  

error_reporting(0);

//----Connect Database-----------

    $servername="localhost";
    $username="root";
    $data_password="";
    $database_name="nominee-info";

    //-----Create a Connection--------

    $conn=mysqli_connect($servername, $username, $data_password, $database_name);

    // Die if connection was not successfully

    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }

    else{

    	$id=$_GET['id'];

        //----------Select query-------------

        $query2="SELECT * FROM registrationnom WHERE ID = $id";

        $run=mysqli_query($conn,$query2);

        $result_data=mysqli_fetch_assoc($run);

        //------------Delete Image from specific voter-------------

        unlink($result_data['Image']);

        

    	$query="DELETE FROM registrationnom WHERE ID = $id";
  
    	mysqli_query($conn,$query);


    	header('location:nominee-table.php');
    	
    }
?>