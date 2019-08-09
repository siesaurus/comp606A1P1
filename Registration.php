<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Register Now</title>
<body>
<?php include "nav.php"; ?>
<div class ="container col-md-4">
    <h2>Enter details below</h2>
<form action="Register.php" method="POST">
    <table>
        <tr>
            <td>First name: </td>
            <td><input type="text" name="FirstName"></td>
        </tr>
        <tr>
            <td>Last name: </td>
            <td><input type="text" name="LastName"></td>
        </tr>
        <tr>
            <td>Email address:</td>
            <td><input type="text" name="Email"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td> <input type="password" name="Passwd"></td>
        </tr>
        <tr>
        <td><input type="submit" value = "Submit"></td>
        </tr>
        </table>
        </form>

</*?php
//defined variables and set to empty

$fname = $lname = $email = $password = $confirmpwd = "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?*/>


<?php require_once("footer.php"); ?>
</body>
</html>