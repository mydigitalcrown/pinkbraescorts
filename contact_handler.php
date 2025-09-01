<?php
// Contact form handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $location = filter_var(trim($_POST['location']), FILTER_SANITIZE_STRING);
    $service = filter_var(trim($_POST['service']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
    
    // Validation
    $errors = array();
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    if (empty($errors)) {
        // Email configuration
        $to = "sanjanadotsingh@gmail.com"; // Change this to your email
        $subject = "New Contact Form Submission - Pinbra Escorts";
        
        // Email body
        $body = "New contact form submission:\n\n";
        $body .= "Name: " . $name . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Phone: " . $phone . "\n";
        $body .= "Location: " . $location . "\n";
        $body .= "Service: " . $service . "\n";
        $body .= "Message: " . $message . "\n";
        $body .= "\n";
        $body .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
        
        // Email headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $subject, $body, $headers)) {
            $success_message = "Thank you for your message! We will get back to you within 24 hours.";
        } else {
            $error_message = "Sorry, there was an error sending your message. Please try again or contact us directly.";
        }
    } else {
        $error_message = "Please correct the following errors: " . implode(", ", $errors);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Pinbra Escorts</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .message {
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            text-align: center;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div style="margin-top: 100px; padding: 50px 0;">
        <div class="container">
            <?php if (isset($success_message)): ?>
                <div class="message success">
                    <h2>Message Sent Successfully!</h2>
                    <p><?php echo $success_message; ?></p>
                    <a href="index.php" class="cta-button" style="margin-top: 20px; display: inline-block;">Return to Home</a>
                </div>
            <?php elseif (isset($error_message)): ?>
                <div class="message error">
                    <h2>Error</h2>
                    <p><?php echo $error_message; ?></p>
                    <a href="index.php#contact" class="cta-button" style="margin-top: 20px; display: inline-block;">Try Again</a>
                </div>
            <?php else: ?>
                <div class="message">
                    <h2>Contact Form</h2>
                    <p>Please fill out the contact form on our <a href="index.php#contact">main page</a>.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>
