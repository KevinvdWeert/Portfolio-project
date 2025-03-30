<?php
  // Create the log folder if it doesn't exist
  $log_folder = '../log';
  if (!file_exists($log_folder)) {
    mkdir($log_folder, 0777, true);
  }

  // Define the log file path
  $log_file = $log_folder . '/messages.txt';

  // Collect the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Format the message
  $log_message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n---\n";

  // Write the message to the log file
  file_put_contents($log_file, $log_message, FILE_APPEND);

  // Respond with a success message
  echo json_encode('Your message has been send.');
?>
