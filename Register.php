<?php 
require_once("header.php");
require_once("dbconnect.php");
include("nav.php");
$fname = $_POST['FirstName'];
$lname =$_POST['LastName'];
$email = $_POST['Email'];
$pwd = $_POST['Passwd'];

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} 
    else {
$SELECT = "SELECT Email FROM user WHERE Email = ? LIMIT 1";
$INSERT = "INSERT INTO user values (?,?,?,?)";


$stmt = $mysqli->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     
     if ($rnum==0) {
      $stmt->close();
      $stmt = $mysqli->prepare($INSERT);
      $stmt->bind_param('ssss',$fname,$lname,$email,$parampwd);
      $parampwd = password_hash($pwd,PASSWORD_DEFAULT);
      $stmt->execute();
      $stmt->close();

      echo "Thank you for registering! Please login.";
     } else {
      echo "Someone already register using this email";
      $stmt->close;
     }
      //https://www.codeandcourse.com/2018/03/how-to-connect-html-register-form-to-mysql-database-with-php/
      //got stuck on correct way to insert into database
    }
require_once("footer.php");
?>