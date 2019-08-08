<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Register Now</title>
<body>
<?php include "nav.php"; ?>
<div class ="container col-md-4">
    <h2>Enter details below</h2>
<form action="Login.php" method="post">
    <input type="text" name="fname">
    <input type="text" name="lName">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="text" name="confirmpwd">

<?php
//defined variables and set to empty

$fname = $lname = $email = $password = $confirmpwd = "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $confirmpwd = test_input($_POST["confirmpwd"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<?php require_once("footer.php"); ?>
</body>
</html>