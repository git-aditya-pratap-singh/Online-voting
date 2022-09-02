   var navLinks = document.getElementById("navLinks");  // Navigation id

   var id = document.getElementById("col");    // voter and nominee div slide
    
   var reg_form=document.getElementById("regis");  // registration form 

   var main_form = document.getElementById("contain_voter");  //Registration main page

   var width8=window.innerWidth;  // to find screen current width


   var login_page=document.getElementById("login1");  // show the login page

   var slide=document.getElementById("logincol");  // login slider 
   
   var voter=document.getElementById("login-voter");  // voter login page slide
	
	var nominee=document.getElementById("login-nominee");

	var a=document.getElementById("login2logo");


	var loginadmin=document.getElementById("admin");  // admin login section



	function showMenu() {            // navigation function(menu-bars)
		navLinks.style.right="0";
	}

	function hideMenu() {              // navigation function(cross-icon)
		navLinks.style.right="-200px";
	}

	function fun(){                       // registration page calling function
		reg_form.style.display="block"; 
		
	}

	function login_fun(){                  // login page calling function
		login_page.style.display="block";
		login_page.style.position="fixed";
	}
   
  



	function cross_slide_2(){    // nominee registration form function
		id.style.left="53%";
		main_form.style.display="none";
	
	
	}

	function cross_slide_1(){    // voter  registration form function
		
		if(width8<="650"){
         id.style.left="23%";
         main_form.style.display="block";
          
		}
		else{
			id.style.left="34%";
			main_form.style.display="block";
			
		}
	}




	function voter_login(){
		if(width8<="650"){
			slide.style.left="15%";
			voter.style.display="block";
			nominee.style.display="none";
			a.style.display="none";
		}
		else{
			slide.style.left="24%";
			voter.style.display="block";
			nominee.style.display="none";
			a.style.display="none";
		}
	}

	function nominee_login(){
       slide.style.left="50%";
       voter.style.display="none";
       nominee.style.display="block";
       a.style.display="block";
	}



    function admin_login() {
    	loginadmin.style.display="block";
    	loginadmin.style.position="fixed";
    	login_page.style.display="none";
    }



	
