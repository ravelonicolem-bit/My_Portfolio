<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Pages/Styles/MainStyle.css">
    <title>My Portfolio</title>
</head>
<body>
<section class="navbar">
  <div class="nav">
    <div class="navLeft">•PORTFOLIO•</div>

    <div class="navRight">
      <div class="profileContainer">
        <img src="Pages/Image/chib.png" alt="Profile" class="profilePic">
      </div>

      <!-- Button -->
      <div class="buttonContainer" id="files-btn">
        <button class="download-btn" id="downloadBtn">DOWNLOAD FILES</button>
      </div>
    </div>
  </div>
</section>
<section class="center">
    <?php include 'Pages/First-Page.html'?>
</section>
<section class="skills">
    <?php include 'Pages/Skills-Page.html'?>
</section>
<section class="email">
     
</section>
<script src="Pages/Backend/DBtn.js"></script>
</body>
</html>