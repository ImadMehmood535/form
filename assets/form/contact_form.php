<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  $to = "imad@ocreateo.com";
  $subject = "New Feedback Submission";
  $message = "Name: $name\n";
  $message .= "Email: $email\n";

  $headers = "From: $email\r\n";
  if (mail($to, $subject, $message, $headers)) {
    echo json_encode(array("message" => "Email sent successfully"));
  } else {
    echo json_encode(array("error" => "Failed to send email"));
  }
} else {
  // Handle non-POST requests
  echo json_encode(array("error" => "Invalid request method"));
}

?>
