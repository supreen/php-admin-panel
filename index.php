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
