<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/style-login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="gambar/logo.png" alt="bPay" />
        </div>
        <div class="list-menu">
          <a href="index.php">Home</a>
          <a href="">Layanan</a>
          <a href="contact.php">Concact</a>
          <a href="login.php" class="btn_login">Sing In</a>
        </div>
      </div>
      <div class="content">
        <div class="login-wrapper">
          <div class="login-img">
            <img src="gambar/Capture2.JPG" alt="" />
          </div>
          <div class="login-form">
            <h2>WELCOME to <span class="logo">b</span>Pay</h2>
            <p>Sign in your account</p>
            <form action="login-proses.php" method="post">
              <div class="form-group">
                <i class="fas fa-user"> Email</i>
                <input type="email" placeholder="Enter Your Email" name="email"/>
              </div>
              <div class="form-group">
                <i class="fas fa-lock"> Password</i>
                <input type="password" name="password" id="" placeholder="***" />
                <label for="">Forgot Password?</label>
              </div>
              <div class="form-group button-holder">
                <button type="submit" class="btn_getStarted" name="login" id="login">Sign In</button>
              </div>
              <div class="social-media">
                <a href="#" class="social-icon-content">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon-content">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon-content">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon-content">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="footer-cards">
        <div class="footer-card">
          <div class="f-card1">
            <h2>About bPay</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae,
              quaerat. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Quibusdam, voluptates. Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Explicabo quod facilis quo optio deserunt rem
              beatae magnam blanditiis laudantium ad.
            </p>
            <br />
            <h3>All rights reserved by ©bPay 2022</h3>
          </div>
          <div class="f-card">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <div class="f-card">
            <div class="f-card-link">
              <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </div>
            <div class="f-card-link">
              <ul>
                <li><a href="">HTML</a></li>
                <li><a href="">CSS</a></li>
                <li><a href="">Javascript</a></li>
                <li><a href="">Photoshop</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
