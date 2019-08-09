<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<body>
<?php include "nav.php"; ?>

<form action="Login.php">

<input type ="text" placeholder="Email" name = "email">
<input type = "password" placeholder="Password" name = "Passwd">
<button type = "submit">Login</button>


<?php require_once("footer.php"); ?>
</body>
</html>