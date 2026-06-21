<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data safely
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Guest';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
?>
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

    <div class="tracks-section" style="font-family: sans-serif; text-align: center;">
        <h2 style="color: #2c3e50; margin-bottom: 15px; background-color: #fff;">Thank you for contacting us, <?php echo $name; ?>!</h2>
        <p style="background-color: #fff; color: #555; margin-bottom: 20px;">We have successfully received your message details:</p>
        
        <div style="background-color: #f7f9fa; padding: 20px; border-radius: 6px; text-align: left; border: 1px solid #e2e8f0; margin-bottom: 25px;">
            <p style="margin-bottom: 10px; background-color: transparent; color: #333;"><strong>Email:</strong> <?php echo $email; ?></p>
            <p style="background-color: transparent; color: #333; line-height: 1.5;"><strong>Message:</strong> <?php echo $message; ?></p>
        </div>
        
        <a href="contact.html" class="btn-submit" style="text-decoration: none; display: block; text-align: center; margin: 0 auto; width: 100%;">Go Back</a>
    </div>

    <footer>
        <p>2026 wave to earth. All rights reserved.</p>
    </footer>   

</body>
</html>
<?php
} else {
    echo "Access denied.";
}
?>