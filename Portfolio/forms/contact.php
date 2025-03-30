<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if ($email) {
        // Log the message
        $logDir = __DIR__ . '/../log';
        if (!is_dir($logDir)) {
            mkdir($logDir, 0777, true);
        }
        $logFile = $logDir . '/messages.txt';
        $logMessage = "Date: " . date('Y-m-d H:i:s') . "\nName: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message\n\n";
        file_put_contents($logFile, $logMessage, FILE_APPEND);

        echo "<div style='background: #059652; color: #ffffff; padding: 15px; text-align: center; font-weight: 600;'>Message sent</div>";
    } else {
        echo "<div style='background: #059652; color: #ffffff; padding: 15px; text-align: center; font-weight: 600;'>Invalid email</div>";
    }
} else {
    echo "<div style='background: #059652; color: #ffffff; padding: 15px; text-align: center; font-weight: 600;'>Invalid request</div>";
}
?>