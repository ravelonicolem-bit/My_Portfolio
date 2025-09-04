 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/MainStyle.css">
    <title>Email</title>
</head>
<body>
   <div class="text-con fade-in">
      <h1>GET IN TOUCH</h1>
    </div>
    <div class="contact-container fade-in">
        <div class="contact-box fade-in">
            <div class="contact-info fade-in">
                <div class="box-con"> 
                    <div class="text-info">
                        <h2>Contact for more Info</h2>
                        <p>Feel free to contact any time, will get back to you soon as I can</p>
                        <div class="context">
                        <div class="item">
                            <img src="Pages/Image/gmail.png" alt="">
                            <p>ravelonicole.m@gmail.com</p>
                        </div>

                        <div class="item">
                            <img src="Pages/Image/Phone.png" alt="">
                            <p>0976-229-1339</p>
                        </div>

                        <div class="item">
                            <img src="Pages/Image/Location.png" alt="">
                            <p>102 J.P Rizal St. Sabutan, Silang, Cavite</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Form -->
        <div class="contact-form fade-in">
            <div class="cont-txt">
                <!-- <h2>Send Email</h2> -->
                <form action="Backend/SendEmail.php" method="POST">
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
                        <textarea name="message" placeholder="Write Your Message here..." required></textarea>
                    </div>
                    <button type="submit" class="send-btn">Send Email</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        const faders = document.querySelectorAll(".fade-in");

        const appearOptions = {
            threshold: 0.2,  // 20% visible
            rootMargin: "0px 0px -50px 0px"
        };

        const appearOnScroll = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target); // animate only once
            }
            });
        }, appearOptions);

        faders.forEach(fader => {
            appearOnScroll.observe(fader);
        });
        });
    </script>

</body>
</html>