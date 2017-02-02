<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .error {color: #FF0000;}
  </style>


</head>

<body>
	
	<div class="container">
		<h2>register here</h2>
 	<div class="col-xs-6">
  <form action="#" method="post">
		<div class="form-group">
			<label>Employee Name:</label>
				<input type="text" class="form-control" name="myname" placeholder="your name plz" >
				 <span class="error">* <?php echo $nameErr;?></span>
  				<br><br>
		</div>
		<div class="form-group">
			<label>Age:</label>
				<input type="number" class="form-control"name="myage" placeholder="your age" >
				 <span class="error">* <?php echo $emailErr;?></span>
  <br><br>			<br><br>
		</div>
		<div class="form-group">
			<label>Gender:</label>
				<input type="radio" name="Gender"  value="male">Male
				<input type="radio" name="Gender"  value="female">female
				 <span class="error">* <?php echo $genderErr;?></span>
  <br><br>			<br><br>
		</div>
		<div class="form-group">
			<label>designation:</label>
				<select name="desig" class="form-control">
					<option>software engg</option>
					<option>tester</option>
					<option>BA</option>
					<option>accountant</option>
				</select>
		</div>
		<div class="form-group">
			<label>mobile no:</label>
			<input type="digits" class="form-control">
		</div>

	<button type="submit" class="btn btn-success" name="sub">Submit</button>
	</form>
</div>


				
	<div class="col-xs-6" >
		<h2>login here</h2>
	        <form role="form" action="#" method="post">
                  <div class="form-group">
                  <label>Email address:</label>
                  <input type="email" class="form-control" name="memail">
                  </div>
                  <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" name="pwd">
                  </div>
                  
                  
	<button type="submit" class="btn btn-success" name="submi">Submit</button>
            </form>
    </div>
</div>

      















<?php
$dbhost="192.168.1.35";
$username="dbadd";
$password="Zaq1Mko0";
$dbname="employee";

$conn=mysqli_connect($dbhost,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error($conn));
}
// else
// {
// 	echo "database connected sucessfully";
// }


 if(isset($_POST[sub]))
 {
 $name=$_POST[myname];
 $age=$_POST[myage];
 $gender=$_POST[Gender];
 $des=$_POST[desig];

 $sql="insert into details(name,age,gender,des) values('$name','$age','$gender','$des')";

 if(mysqli_query($conn,$sql))
 {
   echo "inserted sucessfully";
 }
 else
 {
 	echo "error in insertion".mysqli_error($conn);
 }

 }


if(isset($_POST[submi]))
{
$memail=$_POST[memail];
$pwdd=$_POST[pwd];
echo "data";
$sql="insert into log(myemail,pass) values('$memail','$pwdd')";

if(mysqli_query($conn,$sql))
{
  echo "inserted sucessfully";
}
else
{
	echo "error in insertion".mysqli_error($conn);
}

}
			


// define variables and set to empty values
$nameErr  = $genderErr =  "";
$name  = $gender  = "";
echo "string";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "string";
  if (empty($_POST["myname"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["myname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name;

echo $gender;
echo "data";
?>


</body>
</html>




