
<!DOCTYPE html>
<html>
<head>
    <title>WVE - Submission Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <nav class="nav">
        <h1 id="icon"> wave <span>to earth</span> </h1>
        <div class="nav-links">
            <a href="home.html">Home</a>
            <a href="merch.html">Merch</a>
            <a href="music.html">Music</a>
            <a href="contact.html">Contact</a>
        </div>
    </nav>  

    <div class="tracks-section success-section">
        <h2>Thank you for contacting us, <?php echo $name; ?>!</h2>
        <p class="success-intro">We have successfully received your message details:</p>
        
        <div class="message-summary-box">
            <p class="summary-line"><strong>Email:</strong> <?php echo $email; ?></p>
            <p class="summary-line message-text"><strong>Message:</strong> <?php echo $message; ?></p>
        </div>
        
        <a href="contact.html" class="btn-submit back-btn">Go Back</a>
    </div>

    <footer>
        <p>2026 wave to earth. All rights reserved.</p>
    </footer>   

</body>
</html>
<?php
 else {
    echo "Access denied.";
}
?>
