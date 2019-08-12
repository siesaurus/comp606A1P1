<?php
include("header.php");
include("dbconnect.php");

$email = $_POST['Email'];
$pwd = $_POST['Passwd'];

$sql = "SELECT Email, Password from user where email = ?";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("s", $email);
    
    if($stmt->execute()) {
        $stmt->store_result();

        if($stmt->num_rows == 1) {
            $stmt->bind_result($email, $hashed_password);
            
            if ($stmt->fetch()) {

                if(password_verify($pwd, $hashed_password)) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['Email'] = $email;
                    header('location: welcome.php');
                } else{ 
                    Echo "The password you entered was incorrect!";
                }
            }
        } else{ 
            Echo "Sorry, no account with that email found! Please make sure you have registered.";
        }
    } else{ 
        echo "Oops! Something went wrong. Please try again later"; 
    }
}
$stmt->close();

//https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
?>
