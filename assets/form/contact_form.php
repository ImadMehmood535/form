<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  // Retrieve other form fields as needed
  
  // Construct email message
  $to = "imad@ocreateo.com";
  $subject = "New Feedback Submission";
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  // Include other form fields in the message as needed

  // Send email
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
