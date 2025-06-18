<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BrightWave Cleaners Member 1</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="member1.css" />
  </head>
  <body>
    <div class="preloader js-preloader">
      <div></div>
    </div>

    <div class="page-wrapper">
      <header class="header js-header">
        <div class="container">
          <div class="logo" data-aos="fade-down" data-aos-duration="1000">
            <a href="index.php">BrightWave <span>Cleaners</span></a>
          </div>
          <div class="nav-and-profile">
          <button
            type="button"
            class="nav-toggler js-nav-toggler"
            data-aos="fade-down"
            data-aos-duration="1000"
          >
            <span></span>
          </button>
          <nav class="nav js-nav">
            <ul data-aos="fade-down" data-aos-duration="1000">
              <li><a href="index.php#home">Home</a></li>
              <li><a href="index.php#about">About</a></li>
              <li><a href="index.php#services">Services</a></li>
              <li><a href="index.php#pricing">Pricing</a></li>
              <li><a href="index.php#team">Team</a></li>
              <li><a href="index.php#contact">Contact</a></li>
              <li><a href="login.html" class="login-btn">Login &#8594;</a></li>
              <li class="logoutLI"><a style = "color: red;" class = "logout-btn" id = "logoutBtn">Logout &#8594;</a></li>
              </ul>
          </nav>
          <!-- Logout Form -->
          <div class="logoutForm-overlay" id="logoutForm-overlay"></div>
            <div id="logoutForm">
                <form action="logout.php" method="POST">
                  <label for="username">Enter Username to Logout:</label> <br>
                  <input type="text" name="username" id="username" required>
                  <button type="submit">Submit</button>
                </form>
          </div>

          <div style = "display: flex" class="profile" id="profile">
            <i style = "margin: 3px 10px 0 0" class="fas fa-user"></i>
            <span id="username">
            <?php 
               if (session_status() == PHP_SESSION_NONE) {
                 session_start();
               }
              if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
                $_SESSION['username'] = $_COOKIE['username'];
              }
               $username = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";
               if($username === "Guest"){
                 echo '<h3 style="font-style: italic;">Guest</h3>';
                 echo "<script>document.querySelector('.logout-btn').style.display = 'none';</script>";
               }
               else{
                 echo "<h3 style=\"font-style: italic;\">$username</h3>";
                 echo "<script>document.querySelector('.login-btn').style.display = 'none';</script>";
               }
            ?>
            </span>
          </div>
          </div>
        </div>
      </header>

      <section class="member1-home section-padding" id="member1-home">
        <div class="container">
          <div class="grid member-grid">
            <div class="member-home-img">
              <img src="images/sohil-profile.webp" loading="lazy" alt="" />
            </div>
            <div class="member-home-text">
              <h1>Welcome to BrightWave Cleaners</h1>
              <p>
                Hi, I'm Sohil,I'm 20 years old and I'm here to help you with your laundry needs. I'm
                available 24/7 to help you with your laundry needs. Feel free to
                contact me anytime.
              </p>
              <div class="social-media-links">
                <h4>Social Media :</h4>
                <div class="media-links">
                  <a href="https://www.instagram.com/sohil_.17/">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/sohil-prajapati-94b515308?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  >
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                  <a href="https://www.facebook.com/share/14unLzdvVE/">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!----- footer  ----->

      <div class="footer">
        <div class="container">
          <h3>follow us</h3>
          <div class="social-links">
            <a
              href="https://www.facebook.com/profile.php?id=100084174810296"
              title="facebook"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/sohil_.17/" title="instagram"
              ><i class="fab fa-instagram"></i
            ></a>
            <a href="#" title="youtube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!----- styel-switcher  ----->

    <div class="style-switcher js-style-switcher">
      <button
        type="button"
        class="style-switcher-toggler js-style-switcher-toggler"
      >
        <i class="fas fa-cog"></i>
      </button>
      <div class="style-switcher-main">
        <h2>style switcher</h2>
        <div class="style-switcher-item">
          <p>Theme Color</p>
          <div class="theme-color">
            <input
              type="range"
              min="0"
              max="360"
              class="hue-slider js-hue-slider"
            />
            <div class="hue">Hue:<span class="js-hue"></span></div>
          </div>
        </div>
        <div class="style-switcher-item">
          <label class="form-switch">
            <span>Dark Mode</span>
            <input type="checkbox" class="js-dark-mode" />
            <div class="box"></div>
          </label>
        </div>
      </div>
    </div>

    <script>
      const logoutBtn = document.getElementById("logoutBtn");
      logoutBtn.addEventListener("click", () => {
        document.getElementById("logoutForm").style.display = "block";
        document.getElementById("logoutForm-overlay").style.display = "block";
      });
    </script>
    <script src="script.js"></script>
  </body>
</html>
