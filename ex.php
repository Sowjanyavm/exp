<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php




$dbhost="localhost";
$username="dbadd";
$password="Zaq1Mko0";
$dbname="employee";

$conn=mysqli_connect($dbhost,$username,$password,$dbname);
if(!$conn)
{
  die("connection failed:".mysqli_connect_error($conn));
}
else
{
  echo "database connected successfully<br />";
}

 $nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if(isset($_POST[submit]))
 { 
 $name=$_POST[name];
 $myemail=$_POST[email];
 $website=$_POST[website];
 $gender=$_POST[gender];



if(!empty($_POST["name"] && $_POST["email"] && $_POST["website"] && $_POST["gender"]))
{

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
                    if (empty($_POST["name"])) {
                      $nameErr = "Name is required";
                    } else {
                      $name = test_input($_POST["name"]);
                      // check if name only contains letters and whitespace
                      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed"; 
                      }
                    }
                    
                    if (empty($_POST["email"])) {
                      $emailErr = "Email is required";
                    } else {
                      $email = test_input($_POST["email"]);
                      // check if e-mail address is well-formed
                      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format"; 
                      }
                    }
                      
                    if (empty($_POST["website"])) {
                      $website = "";
                    } else {
                      $website = test_input($_POST["website"]);
                      // check if URL address syntax is valid
                      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                        $websiteErr = "Invalid URL"; 
                      }    
                    }

                    if (empty($_POST["comment"])) {
                      $comment = "";
                    } else {
                      $comment = test_input($_POST["comment"]);
                    }

                    if (empty($_POST["gender"])) {
                      $genderErr = "Gender is required";
                    } else {
                      $gender = test_input($_POST["gender"]);
                    }
      }
              else
        {
          echo "data is not available or not correct plzzz enter<br/>";
        }
  
$sql="insert into detail(name,email,website,gender) values('$name','$myemail','$website','$gender')";

 if(mysqli_query($conn,$sql))
 {
   echo "inserted sucessfully<br/>";
 }
 else
 {
  echo "error in insertion".mysqli_error($conn);
 }

 }
 
}





















// define variables and set to empty values


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" pattern="[a-zA-Z]">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="url" name="website"  pattern="https?://.+" title="Include http://">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>