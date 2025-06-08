<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us | Collibrait Solutions</title>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="images/favicon.png" type="image/png">
  <style>
    html, body {
      background: #f6f8fb;
      color: #25314c;
      font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
      font-size: 17px;
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
    }
    .navbar {
      border: none;
      background: #fff;
      margin-bottom: 0;
      box-shadow: 0 3px 18px rgba(38, 60, 115, 0.07);
    }
    .navbar-brand img { max-height: 38px; }
    .hero {
      background: linear-gradient(120deg, #1e3c72 0%, #2a5298 100%);
      color: #fff;
      text-align: center;
      padding: 72px 0 54px 0;
      margin-bottom: 0;
    }
    .hero h1 {
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 0.4em;
      letter-spacing: 1px;
    }
    .hero p {
      font-size: 1.18rem;
      max-width: 600px;
      margin: 0 auto;
      opacity: 0.97;
    }
    .contact-section {
      max-width: 1040px;
      margin: 0 auto 60px auto;
      padding: 2.7rem 2vw;
      background: #fff;
      box-shadow: 0 5px 24px rgba(37,49,76,0.11);
      border-radius: 18px;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: center;
      margin-top: -48px;
    }
    .contact-details, .contact-form-wrap {
      flex: 1 1 350px;
      min-width: 320px;
      max-width: 500px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .contact-details h2,
    .contact-form-wrap h2 {
      color: #1e3c72;
      font-size: 1.18rem;
      font-weight: 600;
      margin-bottom: 18px;
      letter-spacing: 0.3px;
    }
    .contact-details ul {
      list-style: none;
      padding-left: 0;
      margin-bottom: 22px;
    }
    .contact-details ul li {
      margin-bottom: 18px;
      font-size: 1.09rem;
    }
    .contact-details i {
      color: #1e88e5;
      margin-right: 10px;
    }
    .contact-details .social-icons {
      margin-top: 12px;
    }
    .contact-details .social-icons a {
      font-size: 1.5rem;
      margin-right: 18px;
      color: #2a5298;
      transition: color 0.18s;
      display: inline-block;
    }
    .contact-details .social-icons a:hover { color: #1976d2; }
    .contact-form-wrap form {
      margin-top: 8px;
    }
    .contact-form-wrap label {
      color: #25314c;
      font-weight: 500;
      margin-bottom: 5px;
    }
    .contact-form-wrap .form-control {
      border-radius: 8px;
      border: 1px solid #d1d7e3;
      margin-bottom: 19px;
      font-size: 1rem;
      padding: 12px;
      background: #f7fafd;
      box-shadow: none;
      transition: border-color 0.18s;
    }
    .contact-form-wrap .form-control:focus {
      border-color: #1e88e5;
      background: #fff;
    }
    .contact-form-wrap textarea.form-control {
      min-height: 120px;
      max-height: 260px;
      resize: vertical;
    }
    .contact-form-wrap .btn-primary {
      background: linear-gradient(120deg,#2a5298,#1e3c72);
      border: none;
      border-radius: 32px;
      color: #fff;
      font-weight: 600;
      padding: 13px 40px;
      font-size: 1.1rem;
      letter-spacing: 0.2px;
      box-shadow: 0 2px 12px rgba(30,60,114,0.09);
      transition: background 0.22s, transform 0.18s;
    }
    .contact-form-wrap .btn-primary:hover {
      background: linear-gradient(120deg,#1e88e5,#1976d2);
      transform: translateY(-1px) scale(1.03);
    }
    .footer-section {
      background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
      color: #fff;
      padding: 46px 0 18px 0;
      margin-top: 0;
      border-radius: 32px 32px 0 0;
      box-shadow: 0 -2px 18px rgba(30,60,114,0.09);
    }
    .footer-section a {
      color: #b3e5fc;
      text-decoration: none;
      font-weight: 500;
    }
    .footer-section a:hover { color: #fff; text-decoration: underline; }
    .footer-section h4 {
      color: #fff;
      font-weight: 600;
      margin-bottom: 16px;
      font-size: 1.12rem;
      letter-spacing: 0.3px;
    }
    .footer-section ul {
      list-style: none;
      padding-left: 0;
      font-size: 1rem;
      line-height: 1.7;
    }
    .footer-section .social-icons a {
      font-size: 1.5rem;
      margin-right: 16px;
      color: #b3e5fc;
      display: inline-block;
      transition: color 0.18s;
    }
    .footer-section .social-icons a:hover {
      color: #fff;
    }
    #copyright {
      background: #142245;
      color: #b0bec5;
      text-align: center;
      padding: 13px 0 11px 0;
      font-size: 1rem;
      letter-spacing: 0.2px;
      margin-bottom: 0;
      border-radius: 0 0 12px 12px;
    }
    @media (max-width: 1020px) {
      .contact-section { flex-direction: column; gap: 0; }
      .contact-details, .contact-form-wrap { max-width: 100%; }
    }
    @media (max-width: 767px) {
      .hero h1 { font-size: 1.6rem; }
      .hero { padding: 44px 0 22px 0; }
      .contact-section { padding: 1.1rem 0.3rem; }
      .footer-section { padding: 28px 0 10px 0; }
      .navbar-brand img { max-height: 32px; }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="images/image.png" alt="Collibrait Solutions"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="about-us.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="team.html">Our Team</a></li>
        <li class="active"><a href="contact-us.html">Contact <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <h1>Contact Us</h1>
    <p>
      Get in touch with Collibrait Solutions. We're here to answer your questions, discuss your needs, and help your business grow with tailored IT solutions.
    </p>
  </div>
</section>

<div class="contact-section">
  <div class="contact-details">
    <h2>Contact Information</h2>
    <ul>
      <li><i class="fa fa-map-marker"></i> <strong>Office:</strong><br>150 Fayetteville Street, Suite 300<br>Raleigh, North Carolina 27601</li>
      <li><i class="fa fa-phone"></i> <strong>Phone:</strong> <a href="tel:+14232540604">+1 423-254-0604</a></li>
      <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:support@collibraitsolutions.com">support@collibraitsolutions.com</a></li>
    </ul>
    <div class="social-icons">
      <!-- Update with your actual social links -->
      <a href="#"><i class="fa fa-linkedin-square"></i></a>
      <a href="#"><i class="fa fa-twitter-square"></i></a>
      <a href="#"><i class="fa fa-facebook-square"></i></a>
    </div>
  </div>
  <div class="contact-form-wrap">
    <h2>Send Us a Message</h2>
    <form id="contact-form" method="post" action="contact.php" role="form" novalidate>
      <div class="form-group">
        <label for="form_name">Name *</label>
        <input id="form_name" type="text" name="name" class="form-control" placeholder="Your Name" required="required" data-error="Name is required.">
      </div>
      <div class="form-group">
        <label for="form_email">Email *</label>
        <input id="form_email" type="email" name="email" class="form-control" placeholder="Your Email" required="required" data-error="Valid email is required.">
      </div>
      <div class="form-group">
        <label for="form_subject">Subject</label>
        <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject (optional)">
      </div>
      <div class="form-group">
        <label for="form_message">Message *</label>
        <textarea id="form_message" name="message" class="form-control" placeholder="How can we help you?" rows="6" required="required" data-error="Please, leave us a message."></textarea>
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </div>
    </form>
  </div>
</div>

<div class="footer-section">
  <div class="container">
    <div class="row" style="margin-bottom:18px;">
      <div class="col-sm-4">
        <img src="images/footerlogo.png" alt="Collibrait Solutions Logo" class="img-responsive" style="max-width:180px;">
        <p style="margin-top:10px;">Innovating for your success, one solution at a time.</p>
      </div>
      <div class="col-sm-2">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="team.html">Our Team</a></li>
          <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h4>Contact Us</h4>
        <ul>
          <li><i class="fa fa-phone"></i> <a href="tel:+14232540604">+1 423-254-0604</a></li>
          <li><i class="fa fa-envelope"></i> <a href="mailto:support@collibraitsolutions.com">support@collibraitsolutions.com</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h4>Connect With Us</h4>
        <div class="social-icons">
          <!-- Update with your actual social links -->
          <a href="#"><i class="fa fa-linkedin-square"></i></a>
          <a href="#"><i class="fa fa-twitter-square"></i></a>
          <a href="#"><i class="fa fa-facebook-square"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="copyright">
  <div class="container">
    <p>© 2025 Collibrait Solutions | All Rights Reserved</p>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
