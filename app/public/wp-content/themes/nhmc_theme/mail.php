<?php 
$data = array();
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
// CHANGE RECIPIENT ADDRESS
$recipient = "charles@grizzcode.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if(mail($recipient, $subject, $formcontent, $mailheader)){
  $data = array("success" => true, "text" => "Mail was sent successfully.");
}else{
  $data = array("success" => false, "text" => "Mail was not sent.");
}
echo json_encode($data)
?>
