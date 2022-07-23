<?php


session_start();

include 'credential.php';

//Fuction


function test_input($data) {
	$isequal = "=";
$oneone = "1=1";
$quote ='"';
	
if ($data==$isequal or $data==$oneone or $data=="105" or $data==$quote) {
$data="";
}
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




//Validation 

$setadmin=test_input($setadmin);
$setpass=test_input($setpass);
$sessionadmin = test_input($_SESSION["admin@"]); 
$sessionpass = test_input($_SESSION["pass@"]);



//Checking whether it is there or not 
if ($sessionadmin==$setadmin && $sessionpass==$setpass){
	

	
	







?>



<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<!-- CODING AREA. CODING AREA 
//keep href to "process_data.php?logout=yes" for logging out -->
<!DOCTYPE html>
<html lang="en">
<head>
<!--CSS resources-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css">
    	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#tab-container").on("click", ".nav_link", function(){
				var that = $(this);
				var tabid = that.data("tab");
				
				$(".tab").each(function(k, v){
					$(this).hide();
				});
				
				$(tabid).show();
			});
		});
	</script>

<!--CSS-->

<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #128C7E;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
</style>
</head>
<!--html-->
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="logo.gif" alt=""> </div>
    </header>
	<div id="container">
  


  <div class="content">
	<!--DASHBOARD -->
		<div id="tab-dashboard" class="tab">
		<div class="height-100 bg-light">
        <h4>Dashboard</h4>
        <?php
		include 'resources/dashboard.php';
		?>
		</div>
   		</div>
			<!--/DASHBOARD -->


	<!--law -->
		<div id="tab-data" class="tab" style="display: none;">
		<div class="height-100 bg-light">
        <h4>Database</h4>
        
		<?php
		include 'resources/data.php';
		?>
        </div>
   		</div>
		
	<!--/law -->
	
	
		
	<!--advertisements -->

		<div id="tab-ad" class="tab" style="display: none;">
		<div class="height-100 bg-light">
        <h4>Advertisements</h4>
		<?php
		include 'resources/ad.php';
		?>
        </div>
   		</div>
		
	<!--/advertisements 
	
	<!--DASHBOARD -->
		<div id="tab-tools" class="tab">
		<div class="height-100 bg-light">
        <h4>Tools</h4>
        <?php
		include 'resources/tools.php';
		?>
		</div>
   		</div>
			<!--/DASHBOARD -->

		
		<!--settings -->
	
		<div id="tab-settings" class="tab" style="display: none;">
		<div class="height-100 bg-light">
        <h4>Settings</h4>
        <?php
		include 'resources/settings.php';
		?>
		</div>
   		</div>
			<!--.settings -->

		
</div>

    <div class="l-navbar" id="nav-bar">
      <?php 
//mavbar included
include 'navbar.php';
 ?> 
    </div>
    <!--Container Main start-->

    <!--Container Main end-->
	

	<!-- JS RESOURCES -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- JS -->
	


	<script>
	document.addEventListener("DOMContentLoaded", function(event) {
   
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

 // Your code to run since DOM is loaded and ready
});

</script>
</html>









<?

}
else {
	
	echo '
	
	<script>
	window.location.href = "admin.php";
	</script>
	
	
	';
}

?>
