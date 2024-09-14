<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$phone = $_POST{'phone'};
$subject = $_POST{'subject'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Phone: ".$phone."
Subject: ".$subject."
Message: ".$message."

";

mail ("pmaconstructionscompany@gmail.com" , "New Message", $email_message);
header("location:https://asllah.github.io/pma-construction-company/mail\mail-success.html");
?>


