<?php


$name = $_POST['name'];
$subject = $_POST['subject'];
$vistor_email = $_POST['email'];
$message =$_POST['message'];

$mailTo = "nolizwehlope@gmail.com";
$headers = "From: " .$vistor_email;
$txt = "You have recieved an email from" .$name.".\n\n" .$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: main.html");

?>
