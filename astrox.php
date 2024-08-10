<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
    $to = "chamikamunithunga1215@gmail.com";

    
    $subject = "New message from $name";

    
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    
    $mailSent = mail($to, $subject, $message, $headers);

    
    if ($mailSent) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
