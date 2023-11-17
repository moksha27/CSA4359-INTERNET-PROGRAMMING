<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ram Infotech</title>
    <!-- Add your CSS links here -->
</head>
<body><center>
    <header>
        <h1><a href=" ">Ram Infotech Laptop Sales and Service</a></h1>
        
    </header>
	
	<br><br>

    <section id="admin">
        <h2><a href="file:///C:/Users/moksha%20sagar/OneDrive/Documents/Desktop/admin1.html">Admin Section</a></h2>

    </section>

    <section id="sales">
        <h2><a href="file:///C:/Users/moksha%20sagar/OneDrive/Documents/Desktop/sales1.html ">Sales Section</a></h2>

    </section>

    <section id="services">
        <h2><a href="file:///C:/Users/moksha%20sagar/OneDrive/Documents/Desktop/service1.html ">Services Section</a></h2>
    </section>

    <section id="customer-info">
        <h2><a href="file:///C:/Users/moksha%20sagar/OneDrive/Documents/Desktop/cusinfo1.html ">Customer Information Section</a></h2>

    </section>

    <section id="rental-agreement">
        <h2><a href=" file:///C:/Users/moksha%20sagar/OneDrive/Documents/Desktop/rental1.html">Laptop Rental Agreement Section</a></h2>

    </section>

    <section id="stock-maintenance">
        <h2><a href="file:///C:/Users/moksha%20sagar/OneDrive/Documents/Desktop/stock1.html ">Stock Maintenance Section</a></h2>

    </section>


</body></center>
 </form>
    </section>

    <section>
        <h2>Admin Registration</h2>
        <form action="admin_registration.php" method="post">
            <label for="newUsername">New Username:</label>
            <input type="text" id="newUsername" name="newUsername" required>

            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>

            <button type="submit">Register</button>
        </form>
    </section>

    <a href="details.php">click here to know the details</a>

   

    <section>
        <h2>Services - Laptop Services Information</h2>
        <form action="admin_registration.php" method="post">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" name="newUsername" required>

            <label for="newPassword"> Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>

            <button type="submit">Register</button>
        </form>
        <p>Our services include repairs, upgrades, and more. Contact us for details.</p>
    </section>

    <section>
        <h2>Customer Information</h2>
        <!-- Include customer purchase and service information -->
        <p>View your purchase and service history after logging in.</p>
    </section>

    <section>
        <h2>Laptop Rental Agreement Detail</h2>
        <!-- Include details about laptop rental agreements -->
        <p>Read and agree to our rental terms and conditions.</p>
    </section>

    <section>
        <h2>Stock Maintenance in the Shop</h2>
        <!-- Include stock maintenance information -->
        <p>Monitor and manage laptop stock levels to ensure availability.</p>
    </section>

</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="moksha";

$user=$_POST['user'];
$pass=$_POST['pass'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `moksh` (`user`, `pass`) VALUES ('$user', '$pass')";

 $result = mysqli_query($con,$sql);
 
 if($result){
  echo "successfully inserted";
}
  else
   echo "not inserted";
     
}

?>


