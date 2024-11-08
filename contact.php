<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and sanitize the input data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]));

    // Check that all form fields are filled out
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } else {
        // Email details
        $to = "charitybeholmes@gmail.com";  // Replace with your email address
        $subject = "New Contact Form Message";
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";
        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $email_content, $headers)) {
            // Redirect to a thank you page if email is sent successfully
            header("Location: index.html");
            exit;
        } else {
            $error_message = "Sorry, but the message could not be sent. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>

<?php if (isset($error_message)) : ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
    <a href="index.html">Back to Contact Form</a>
<?php endif; ?>

</body>
</html>
