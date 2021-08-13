<?php




//THIS ADMIN SYSTEM IS DESIGNED BY SUPRIN AZIZ TALPUR
//YOU CAN FREELY USE IT AND MODIFY IT, BUT PLEASE MENTION ME IN YOUR CREDIT


//theusername and password 
include 'credential.php';


$setadmin=test_input($setadmin);
$setpass=test_input($setpass);




$logout=test_input($_GET["logout"]);






if ($logout=="yes"){
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();

			echo '
	
	<script>
	window.location.href = "index.php";
	</script>
	
	
	';
	
}




session_start();

$sessionadmin = test_input($_SESSION["admin@"]); 
$sessionpass = test_input($_SESSION["pass@"]);

if ($sessionadmin==$setadmin && $sessionpass==$setpass){
	
}	




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








$_POST["admin_name"]=test_input($_POST["admin_name"]);
$_POST["password"]=test_input($_POST["password"]);
$admin=$_POST["admin_name"];
$pass=$_POST["password"];

//process_data.php






if(isset($_POST["admin_name"]))
{
 $admin_name = '';

 $password = '';

 $admin_name_error = '';

 $password_error = '';
 $captcha_error = '';
 $invalid_error = '';
 
 




 if(empty($_POST["admin_name"]))
 {
  $admin_name_error = 'Admin is empty or you had used restricted symbols.';
 }
 else
 {
  $admin_name = $_POST["admin_name"];
 }

 
 
 if(empty($_POST["password"]))
 {
  $password_error = 'Password is empty or you had used restricted symbols.';
 }
 else
 {
  $password = $_POST["password"];
 }

 if(empty($_POST['g-recaptcha-response']))
 {
  $captcha_error = 'Captcha is required';
 }
 else
 {
  $secret_key =  $secret;

  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);

  $response_data = json_decode($response);

  if(!$response_data->success)
  {
   $captcha_error = 'Captcha verification failed, Please refresh the webpage.';
  }
 }
 
  if($admin!=$setadmin or $pass!=$setpass)
 {
  $invalid_error = 'Invalid Username or Password';
 }

 if($admin_name_error == '' && $password_error == '' && $captcha_error == '' && $admin==$setadmin && $pass==$setpass)
 {


$_SESSION["admin@"] = $setadmin;
$_SESSION["pass@"] = $setpass;
	 
	 
  $data = array(
   'success'  => true
  );


 }
 else
 {
	 
	
  $data = array(
   'admin_name_error' => $admin_name_error,
   'password_error' => $password_error,
   'captcha_error'  => $captcha_error,  
   'invalid_error'  => $invalid_error
  );

 }
 if ($logout!="yes") {
 echo json_encode($data);
}
 }

?>





