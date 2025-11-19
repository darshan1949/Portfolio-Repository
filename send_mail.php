<?php
  // Set the recipient email address
  $to = "pdarshan2803@gmail.com";

  // Set the subject of the email
  $subject = "Form Submission";

  // Get the form data
  $name = $_POST['user_name'];
  $email = $_POST['user_email'];
  $message = $_POST['user_message'];

  // Create the email message
  $message .= "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Message: $message\n";

  // Send the email
  mail($to, $subject, $message);

  // Redirect to a thank you page
  header("Location: thank_you.html");
  exit;
?>