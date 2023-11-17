<!DOCTYPE html>
<html>
<head>
<title>Connectivity</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="sash";

$name=$_POST['name'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$mob=$_POST['mob'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `register` (`name`, `pass`, `cpass`, `mob`) VALUES ('$name', '$pass', '$cpass', '$mob');";

 $result = mysqli_query($con,$sql);
 
 if($result)
  echo "successfully inserted";
  else
   echo "not inserted"; 
}

?>

<form action="/hem/sash.php" method="POST">
USER NAME : <input type="text" id="user" name="name" /><br><br>
PASSWORD : <input type="text" id="pass" name="pass" /><br><br> 
CPASSWORD : <input type="text" id="cpass" name="cpass" /><br><br>
mobile_no : <input type="integer" id="mob" name="mob" /><br><br>

	   <input type="submit" id="submit" name="submit"/><br><hr>
</form>
</body>
</html>