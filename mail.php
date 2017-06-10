<?php
$from = $_POST['Email'];
$email = "singh.m0710@gmail.com";
$name = $_POST['Name'];
$skype = $_POST['Skype'];
$tel = $POST['MobileNo'];
$subject = "enquiry mail from invoker.tech ";
$msg = $_POST['Message'];

$message = "Name: ".$name."\n"." Skype Id : ".$skype."\n"." Mobile No. : ".$tel."\n"." Message : ".$msg;

if(mail ($email, $from, $message)) {
    echo  "Sent Successfully";
}else {
    echo "Coudn't send";
}

?>