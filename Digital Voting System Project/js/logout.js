function logout(){
		var data = confirm("Are you Sure. You want to logout?");

		if(data==true){
			window.location.href="../logout.php";
		}
		else{
			window.location.href="dashboard.php";
		}
	}