


<?

//THIS ADMIN SYSTEM IS DESIGNED BY SUPRIN AZIZ TALPUR
//YOU CAN FREELY USE IT AND MODIFY IT, BUT PLEASE MENTION ME IN YOUR CREDIT

session_start();
//theusername and password 
$setadmin="admin"; 
$setpass="password";
// you can get the sitekeyfrom https://www.google.com/recaptcha/admin/create . make sure that it is captcha v2 and i am not robot. 
$sitekey="your google captcha v2, i am not robot, sitekey";

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
	
	echo '
	
	<script>
	window.location.href = "index.php";
	</script>
	
	
	';
	
	
}	else {
	
	

?>




<html>  
   


<br>
<br>
        <title>Admin Panel</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>  
    <body>  
        <div class="container" style="width: 600px">
   <br />
   
   <h3 align="center">Admin Panel</a></h3><br />
   <br />
   <div class="panel panel-default">
      <div class="panel-heading"></div>
    <div class="panel-body">
     
     <form metod="post" id="captcha_form">
      <div class="form-group">
       <div class="row">
        <div class="col-md-6">
       
       </div>
    
      </div>
      <div class="form-group">
	     <label>Admin <span class="text-danger">*</span></label>
         <input type="text" name="admin_name" id="admin_name" class="form-control" />
         <span id="admin_name_error" class="text-danger"></span>
		 </div>
        <div class="form-group">
       <label>Password <span class="text-danger">*</span></label>
       <input type="password" name="password" id="password" class="form-control" />
       <span id="password_error" class="text-danger"></span>
      </div>
      <div class="form-group">
       <div class="g-recaptcha" data-sitekey= "<? echo $sitekey; ?>"></div>
       <span id="captcha_error" class="text-danger"></span>
	    
      </div>
	   <div class="form-group">
     <span id="invalid_error" class="text-danger"></span>
      </div>
      <div class="form-group">
       <input type="submit" name="register" id="register" class="btn btn-info" value="Login" />
      </div>
     </form>
     
    </div>
   </div>
  </div>
    </body>  
</html>

<script>
$(document).ready(function(){

 $('#captcha_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"process_data.php",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function()
   {
    $('#register').attr('disabled','disabled');
   },
   success:function(data)
   {
    $('#register').attr('disabled', false);
    if(data.success)
    {
     $('#captcha_form')[0].reset();
     $('#admin_name_error').text('');

     $('#password_error').text('');

     $('#captcha_error').text('');
	 $('#invalid_error').text('');
	 
     grecaptcha.reset();
     alert('Login Sucessfull');
	 window.location.href = "";
    }
    else
    {
     $('#admin_name_error').text(data.admin_name_error);

     $('#password_error').text(data.password_error);
	
     $('#captcha_error').text(data.captcha_error);
	 $('#invalid_error').text(data.invalid_error);
	
    }
   }
  })
 });

});
</script>
<?
}
?>