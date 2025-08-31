<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get In Touch</title>
  <link rel="stylesheet" href="Styles/Email.css">
</head>
<body>

  <h1>GET IN TOUCH</h1>
  
  <div class="contact-container">
    <div class="contact-box">

      <!-- Left Info -->
      <div class="contact-info">
        <h2>Contact for more Info</h2>
        <p>Feel free to contact any time, will get back to you soon as I can</p>
        <p>📧 ravelonicole.m@gmail.com</p>
        <p>📞 0976-229-1339</p>
        <p>📍 102 J.P Rizal St. Sabutan, Silang, Cavite</p>
      </div>

      <!-- Right Form -->
      <div class="contact-form">
        <h2>Send Email</h2>
        <form action="Backend/PHP/SendEmail.php" method="POST">
          <div class="form-group">
            <label>Your Name</label>
            <input type="text" name="name" required>
          </div>
          <div class="form-group">
            <label>Your Email</label>
            <input type="email" name="email" required>
          </div>
          <div class="form-group">
            <label>Your Subject</label>
            <input type="text" name="subject" required>
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea name="message" required></textarea>
          </div>
          <button type="submit" class="send-btn">Send Email</button>
        </form>
      </div>

    </div>
  </div>

</body>
</html>
