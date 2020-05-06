<?php


session_start();
//theusername and password 
$setadmin="admin"; 
$setpass="password";

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



echo '

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>


<div class="navbar">

  <a href="process_data.php?logout=yes">logout</a>

   
    
</div> 
  
</body>
</html>
';


//CODING AREA. CODING AREA 
//keep href to "process_data.php?logout=yes" for logging out 
<h2> YOUR CODE SHOULD BE HERE :D </h2>






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
