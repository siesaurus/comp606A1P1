<?php 
require_once("header.php");

$sql = "INSERT INTO reguser (FirstName, LastName, Email) values (?,?,?)";

if ($stmt = mysqli_prepare($mysqli, $sql)){
    
    mysqli_stmt_bind_param($stmt,"sss", $fname,$lname,$email);

    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
}

if(mysqli_stmt_execute(stmt) === true){
    echo "Records added";
} else {
    echo "Error. Could not add"; 
mysqli_error($mysqli);
}
mysqli_stmt_close($stmt);

require_once("footer.php");
?>