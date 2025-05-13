<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" type="image/png" href="/assets/favicon.png">
    <title>Booktrip4me</title>
</head>

<body>
    <?php include 'partials/navbar.php'; ?>
  <!--<nav>-->
  <!--  <div class="nav__header">-->
  <!--    <div class="logo-wrapper">-->
  <!--      <img src="/assets/logo.png" alt="Your Logo" class="site-logo">-->
  <!--    </div>-->
  <!--    <div class="nav__menu__btn" id="menu-btn">-->
  <!--      <i class="ri-menu-line"></i>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--  <ul class="nav__links" id="nav-links">-->
  <!--    <li><a href="/index.html">Home</a></li>-->
  <!--    <li><a href="/about-us.html">About Us</a></li>-->
  <!--    <li><a href="/contact-us.html">Contact</a></li>-->
  <!--  </ul>-->
  <!--  <div class="nav__btns">-->
  <!--    <button class="btn">Let's Talk Us</button>-->
  <!--  </div>-->
  <!--</nav>-->

  <section class="about-hero">
    <div class="hero-content">
      <h1>Need Help? We’re Ready to Assist.</h1>
      <p>At Booktrip4me, your peace of mind is our top priority. Whether it’s changing bookings, tracking flights, or solving payment issues, our expert team is here 24/7 to support you every step of the way.</p>
      <a href="tel:+1 (888)711 2909" class="cta-button">Contact Our Support Team</a>
    </div>
  </section>

  <section class="contact-info-section section__container">
    <h2 class="section__header">Contact Us</h2>
    <div class="contact-queries">
      <div><strong>Got any queries?</strong><br />Need amendments in your booking?</div>
      <div><strong>Manage cancellations?</strong><br />Payment issues?</div>
      <div><strong>Want to book a holiday?</strong><br />Need any assistance with your booking?</div>
    </div>
    <!--<div class="contact-description section__description">-->
    <!--  Our travel geniuses are available 24/7 at your service to answer your booking related queries.-->
    <!--</div>-->
    <div class="contact-methods">
      <div class="contact-box">
        <div class="contact-icon"><i class="fas fa-phone"></i></div>
        <div class="contact-text">+1 (888)711 2909</div>
      </div>
      <div class="contact-box">
        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
        <div class="contact-text">support@booktrip4me.com</div>
      </div>
      <div class="contact-box">
        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
        <div class="contact-text">Texas, USA</div>
      </div>
    </div>
  </section>

  <section class="section__container" id="contact-form">
    <div class="contact-section contact-section-custom">
      <div class="contact-image contact-image-custom">
        <img src="/assets/about.png" alt="Contact Us">
      </div>
      <form id="contactForm" action="send_mail.php" method="POST" class="contact-form-custom">
        <h2 class="contact-form-title">Get in Touch</h2>
        <p class="contact-form-desc">Fill out the form and our team will get back to you as soon as possible.</p>
        <div class="contact-form-row">
          <div class="contact-form-group">
            <span class="contact-form-icon"><i class="fas fa-user"></i></span>
            <input type="text" name="first_name" placeholder="First Name" required>
          </div>
          <div class="contact-form-group">
            <span class="contact-form-icon"><i class="fas fa-user"></i></span>
            <input type="text" name="last_name" placeholder="Last Name" required>
          </div>
        </div>
        <div class="contact-form-row">
          <div class="contact-form-group">
            <span class="contact-form-icon"><i class="fas fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="contact-form-group">
            <span class="contact-form-icon"><i class="fas fa-phone"></i></span>
            <input type="text" name="phone" placeholder="Phone Number" required>
          </div>
        </div>
        <div class="contact-form-row">
          <div class="contact-form-group">
            <span class="contact-form-icon"><i class="fas fa-ticket-alt"></i></span>
            <input type="text" name="booking_ref" placeholder="Booking Reference">
          </div>
          <div class="contact-form-group">
            <span class="contact-form-icon"><i class="fas fa-question-circle"></i></span>
            <select name="query_type" required>
              <option value="">Select Query Type</option>
              <option>Booking</option>
              <option>Cancellation</option>
              <option>Support</option>
            </select>
          </div>
        </div>
        <div class="contact-form-group contact-form-message">
          <span class="contact-form-icon"><i class="fas fa-comment-dots"></i></span>
          <textarea name="message" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn contact-form-btn">Send Message <i class="fas fa-paper-plane" style="margin-left:8px;"></i></button>
      </form>
    </div>
  </section>

  <section class="map-section section__container">
    <h2 class="section__header">Our Location</h2>
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6998896.12656348!2d-105.37150888348916!3d31.0699709154994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C%20USA!5e0!3m2!1sen!2sin!4v1746622463371!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <!--<footer>-->
  <!--  <div class="section__container footer__container">-->
  <!--    <div class="footer__col">-->
  <!--      <div class="footer__logo">-->
  <!--        <div class="logo-wrapper">-->
  <!--          <img src="/assets/logo.png" alt="Your Logo" class="site-logo">-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <p class="section__description">-->
  <!--        Booktrip4me is your trusted travel partner, offering seamless booking and exceptional service for over a decade.-->
  <!--      </p>-->
  <!--      <h3>Follow Us</h3>-->
  <!--      <ul class="footer__socials">-->
  <!--        <li><a href="#"><i class="ri-facebook-fill"></i></a></li>-->
  <!--        <li><a href="#"><i class="ri-twitter-fill"></i></a></li>-->
  <!--        <li><a href="#"><i class="ri-instagram-line"></i></a></li>-->
  <!--        <li><a href="#"><i class="ri-behance-fill"></i></a></li>-->
  <!--        <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>-->
  <!--      </ul>-->
  <!--    </div>-->
  <!--    <div class="footer__col">-->
  <!--      <h4>Quick Links</h4>-->
  <!--      <ul class="footer__links">-->
  <!--        <li><a href="/about-us.html">About Us</a></li>-->
  <!--        <li><a href="/contact-us.html">Contact Us</a></li>-->
  <!--        <li><a href="/privacy-policy.html">Privacy Policy</a></li>-->
  <!--        <li><a href="/terms-and-conditions.html">Terms and Conditions</a></li>-->
  <!--      </ul>-->
  <!--    </div>-->
  <!--    <div class="footer__col">-->
  <!--      <h4>Support</h4>-->
  <!--      <ul class="footer__links">-->
  <!--        <li><a href="#">Help Center</a></li>-->
  <!--        <li><a href="#">FAQs</a></li>-->
  <!--        <li><a href="#">Privacy Policy</a></li>-->
  <!--        <li><a href="#">Report an Issue</a></li>-->
  <!--        <li><a href="#">Get a Quote</a></li>-->
  <!--      </ul>-->
  <!--    </div>-->
  <!--    <div class="footer__col">-->
  <!--      <h4>Contact Us</h4>-->
  <!--      <ul class="footer__links">-->
  <!--        <li><a href="tel:+1 (888)711 2909"><span><i class="ri-phone-fill"></i></span>+1 (888)711 2909</a></li>-->
  <!--        <li><a href="mailto:support@booktrip4me.com"><span><i class="ri-mail-fill"></i></span> support@booktrip4me.com</a></li>-->
  <!--        <li><a href="https://google.com/maps/place/Texas,USA"><span><i class="ri-map-pin-2-fill"></i></span> Texas, USA</a></li>-->
  <!--      </ul>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--  <div class="footer__bar">-->
  <!--    Copyright © 2025 Web Booktrip4me. All rights reserved.-->
  <!--  </div>-->
  <!--</footer>-->
  <?php include 'partials/footer.php'; ?>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
</body>
</html>