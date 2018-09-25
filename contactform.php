<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $emailFrom = $_POST['mail'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "lornam0209191@outlook.com";
  $headers = "From: ".$emailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message; 

  if (mail($mailTo, $subject, $txt, $headers)) {
    $name = $emailFrom = $phone = $subject = $message = ''; 
  };
  header("Location: index.php?mailsend");
}
?>