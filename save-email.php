<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["Email"]), FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = 'emails.txt';
        
        if (is_writable($file)) {
            file_put_contents($file, $email . PHP_EOL, FILE_APPEND | LOCK_EX);
            // Redirect to the thank you page after successful subscription
            header("Location: thank_you.php"); // Assuming you save the thank you HTML as thank_you.php
            exit();
        } else {
            echo "Cannot write to file. Please check file permissions.";
        }
    } else {
        echo "Invalid email address.";
    }
}
?>

<!-- The HTML form for subscription -->
<form method="POST" action="">
    <input type="email" name="Email" placeholder="Enter your email" required>
    <button type="submit">Subscribe</button>
</form>