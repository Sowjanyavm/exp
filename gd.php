
<html>
<head>
	<title>captcha</title>
</head>
<body>
<form action="#" method="post"> 
<img src="captcha.php" width="70px" height="30px">
Enter Captha here: <input type="text" name="captcha" /> 
<input type="submit" name="Submit" value="Submit" /> 
</form>
<?php 

if(isset($_POST[Submit])){
session_start(); 
if ($_POST["captcha"] != $_SESSION["key"] OR $_SESSION["key"]=='')  { 
     echo  "Incorrect verification code."; 
} else { 
     
     echo  "Verification successful."; 
};
} 
?>

</body>
</html>



