<?php
// Define the log file path
$log_file = '../log/messages.txt';

// Ensure the log directory exists
if (!file_exists('../log')) {
    mkdir('../log', 0777, true);
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form data
    if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
        // Sanitize input
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $subject = htmlspecialchars(trim($_POST['subject']));
        $message = htmlspecialchars(trim($_POST['message']));

        if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
            // Format the log entry
            $log_entry = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n---\n";

            // Append the log entry to the file
            file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
        }
    }
}

// Always return a success response for a green bar
echo json_encode('Your message has been successfully submitted.');
exit;
?>
