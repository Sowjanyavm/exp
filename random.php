<?php

$rand=rand(0,9);
// echo $rand."";

$operator=array("+","-");

$op=$operator[rand(0,sizeof($operator)-1)];
// echo $op."";

$number=array("one","two","three","four","five","six","seven","eight","nine");

$random_name = $number[rand(0, sizeof($number) - 1)];

// echo $random_name;




?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> captcha</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<script type="text/javascript">
		function refresh()
		{
			location.reload();
		}
	</script>
	<form action="#" method="POST">
		<?php echo $rand ?>&nbsp;<?php echo $op ?>&nbsp;<?php echo $random_name ?>&nbsp;=<input type="text" name="result" size="5">
		<button type="button" onclick="refresh()">refresh</button>
		<button type="submit" name="submit">submit</button>
		</form>
			

</body>
</html>
<?php 

if(isset($_POST[submit])){
session_start(); 
if ($_POST["result"] != $_SESSION["key"] OR $_SESSION["key"]=='')  { 
     echo  "Incorrect verification code."; 
} else { 
     
     echo  "Verification successful."; 
};
} 
?>


