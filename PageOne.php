<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Page One</title>
</head>
<body>
	<h1>Hello</h1>

	<h3> <?php echo $_SESSION["username"];?></h3>

	<h3> <?php echo $_SESSION["fname"];?></h3> <br/>

	<h3> <?php echo $_SESSION["email "];?></h3> <br/>

	

    



	<br/>
    <h2>Do you want to <a href="LogOut.php">logout</a></h2>

</body>

</body>
</html>