<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Names</h2>
  <form method="post" action="#">
    <div class="form-group">
      <label for="email">Enter The names here:</label>
      <input type="text" class="form-control" name="name"  placeholder="Enter name here" required>
    </div>
    <div>
      <button type="submit" name="submit" class="btn btn-info">submit</button>
    </div>
    </form>
  </div>

<?php

if(isset($_POST['submit'])) {
$name=$_POST['name'];

echo "your fullname  is  : ".$name;

$parts = explode(" ", $name);
echo "</br>the fisrt name is : ".$parts[0];
if($parts[1] != "" && $parts[2] != ""){

   echo "<br>the middlename is  : ".$parts[1];
   echo "<br>your last name is  : ".$parts[2];

}

else
{
echo "<br>your last name is  : ".$parts[1];
}
}

  


// $lname = array_pop($parts);
// $fname = implode(" ", $parts);

// echo "<br/>your last name is: $fname";
// echo "<br/>your lastname name is: $lname  ";


// echo  "your first name is: ".$name;

?>
</body>
</html>