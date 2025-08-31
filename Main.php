<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN PORTFOLIO</title>
    <link rel="stylesheet" href="Pages/Styles/Navbar.css">
    <link rel="stylesheet" href="Pages/Styles/Main.css">
    <link rel="stylesheet" href="Pages/Styles/Android.css">
    <link rel="stylesheet" href="Pages/Styles/Email.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <div class="navbar" id="nav">
                <?php include 'Pages/Navbar.html';?>
            </div>

            <div class="opening-section">
                <?php include 'Pages/Opening.html';?>
            </div>

            <div class="software-section">
                <?php include 'Pages/Software.html';?>
            </div>

            <div class="contact-container">
                <?php include 'Pages/Email.php';?>
            </div>
        </div>
    </div>
</body>
</html>