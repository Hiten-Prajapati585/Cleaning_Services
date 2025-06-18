<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BrightWave Cleaners</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="aos.css" />
    <!----- animation ----->
  </head>
  <body>
    <div class="preloader js-preloader">
      <div></div>
    </div>

    <div class="page-wrapper">

      <!----- header ----->

      <header class="header js-header">
        <div class="container">
          <div class="logo" data-aos="fade-down" data-aos-duration="1000">
            <a href="#">BrightWave <span>Cleaners</span></a>
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
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.html" class="login-btn">Login &#8594;</a></li>
                <li class="logoutLI"><a style = "color: red;" class = "logout-btn" id = "logoutBtn">Logout &#8594;</a></li>
              </ul>
            </nav>
            <!----- Logout Form ----->
            <div class="logoutForm-overlay" id="logoutForm-overlay"></div>
            <div id="logoutForm">
                <form action="logout.php" method="POST">
                  <label for="username">Enter Username to Logout:</label> <br>
                  <input type="text" name="username" id="username" required>
                  <button type="submit">Submit</button>
                </form>
            </div>
            <div style = "display: flex" class="profile" id="profile">
              <i style = "margin: 3px 8px 0 0" class="fas fa-user"></i>
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

      <!----- home ----->

      <section class="home" id="home">
        <div class="container">
          <div class="grid">
            <div class="home-text">
              <h1 data-aos="fade-up" data-aos-duration="1000">
                Do you need any cleaning Services?
              </h1>
              <p
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="150"
              >
                At Brightwave Cleaning, we believe a clean space is a happy
                space. We are dedicated to providing top-notch cleaning services
                that exceed your expectations and bring a breath of fresh air to
                your home or office.
              </p>
              <div
                class="btn-wrap"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300"
              >
                <a href="about.php" class="btn"> Know more</a>
              </div>
            </div>
            <div class="home-img">
              <div
                class="circle-wrap"
                data-aos="fade-right"
                data-aos-duration="1000"
              >
                <div class="circle"></div>
              </div>
              <img
                src="images\homeImage3.webp"
                loading="lazy"
                alt="img"
                data-aos="fade-left"
                data-aos-duration="1000"
              />
            </div>
          </div>
        </div>
      </section>

      <!----- about  ----->

      <section class="about section-padding" id="about">
        <div class="container">
          <div class="grid">
            <div class="about-img">
              <div class="img-box" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/about-img.webp" loading="lazy" alt="img" />
                <div class="box box-1">
                  <span>2.5k</span>
                  <p>satisfied clients</p>
                </div>
              </div>
            </div>
            <div class="about-text">
              <div class="section-title">
                <span class="title" data-aos="fade-up" data-aos-duration="600"
                  >about us</span
                >
                <h2
                  class="sub-title"
                  data-aos="fade-up"
                  data-aos-duration="600"
                >
                  we're cleaning since 2010
                </h2>
              </div>
              <h4 data-aos="fade-up" data-aos-duration="600">Professional Staff:</h4>

              <p class="about-para" data-aos="fade-up" data-aos-duration="700">
                Our team consists of trained and experienced
                professionals who are passionate about delivering 
                the best cleaning solutions tailored to your needs.</p>

                <h4 data-aos="fade-up" data-aos-duration="600">Eco-Friendly Products: </h4> 

                <p class="about-para" data-aos="fade-up" data-aos-duration="700">
                We care about your health and the environment, which
                is why we use eco-friendly cleaning products that are effective
                and safe.</p>

              <h4 data-aos="fade-up" data-aos-duration="600">Affordable Rates: </h4>

              <p class="about-para" data-aos="fade-up" data-aos-duration="700">
                Quality service doesn't have to break the
                bank. We offer competitive pricing without compromising on
                excellence. </p>

               <h4 data-aos="fade-up" data-aos-duration="600">Flexible Scheduling:</h4> 

                <p class="about-para" data-aos="fade-up" data-aos-duration="700">
                Your convenience is our priority. We offer flexible scheduling to
                fit your busy lifestyle.</p>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!----- services  ----->

      <section class="services section-padding" id="services">
        <div class="container">
          <div class="section-title">
            <span class="title" data-aos="fade-up" data-aos-duration="600"
              >services</span
            >
            <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">
              what we do
            </h2>
          </div>
          <div class="grid">
            <div
              class="services-item"
              data-aos="fade-up"
              data-aos-duration="600"
            >
              <div class="img-box">
                <a href="carpet-service.html" onclick="requireLogin(event)"
                  ><img src="images/house.webp" loading="lazy" alt="carpet"
                /></a>
              </div>
              <h3>carpet cleaning</h3>
            </div>

            <div
              class="services-item"
              data-aos="fade-up"
              data-aos-duration="600"
              data-aos-delay="100"
            >
              <div class="img-box">
                <a href="window-service.html" onclick="requireLogin(event)"
                  ><img src="images/window.webp" loading="lazy" alt="window"
                /></a>
              </div>
              <h3>window cleaning</h3>
            </div>

            <div
              class="services-item"
              data-aos="fade-up"
              data-aos-duration="600"
              data-aos-delay="200"
            >
              <div class="img-box">
                <a href="bathroom-service.html" onclick="requireLogin(event)"
                  ><img src="images/bathroom.webp" loading="lazy" alt="bathroom"
                /></a>
              </div>
              <h3>bathroom cleaning</h3>
            </div>

            <div
              class="services-item"
              data-aos="fade-up"
              data-aos-duration="600"
              data-aos-delay="300"
            >
              <div class="img-box">
                <a href="furniture-service.html" onclick="requireLogin(event)"
                  ><img src="images/furniture.webp" loading="lazy" alt="furniture"
                /></a>
              </div>
              <h3>furniture cleaning</h3>
            </div>
          </div>
        </div>
      </section>

      <!----- pricing ----->

      <section class="pricing section-padding" id="pricing">
        <div class="container">
          <div class="section-title">
            <span class="title" data-aos="fade-up" data-aos-duration="600"
              >pricing</span
            >
            <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">
              our pricing plans
            </h2>
          </div>
          <div class="grid">
            <div
              class="pricing-item"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <div class="pricing-header">
                <h3>basic</h3>
                <div class="price"><span>$700</span>monthly</div>
              </div>
              <div class="pricing-body">
                <ul>
                  <li><i class="fas fa-check"></i>window cleaning</li>
                  <li><i class="fas fa-check"></i>carpet cleaning</li>
                  <li><i class="fas fa-check"></i>With 6 workers (Default)</li>
                  <li>
                    <i class="fas fa-check"></i>Customize workers
                  </li>
                  <li><i class="fas fa-times"></i>furniture cleaning</li>
                  <li><i class="fas fa-times"></i>car cleaning</li>
                  <li><i class="fas fa-times"></i>bathroom cleaning</li>
                  <li><i class="fas fa-times"></i>other services</li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="basic.html" class="btn getBtn1" onclick="requireLogin(event)">get started</a>
              </div>
            </div>

            <div
              class="pricing-item"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="100"
            >
              <div class="pricing-header">
                <h3>standard</h3>
                <div class="price"><span>$1390</span>monthly</div>
              </div>
              <div class="pricing-body">
                <ul>
                  <li><i class="fas fa-check"></i>furniture cleaning</li>
                  <li><i class="fas fa-check"></i>kitchen cleaning</li>
                  <li><i class="fas fa-check"></i>bathroom cleaning</li>
                  <li><i class="fas fa-check"></i>car cleaning</li>
                  <li><i class="fas fa-check"></i>With 12 workers (Default)</li>
                  <li>
                    <i class="fas fa-check"></i>Customize workers
                  </li>
                  <li><i class="fas fa-times"></i>office cleaning</li>
                  <li><i class="fas fa-times"></i>other services</li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="standard.html" class="btn getBtn2" onclick="requireLogin(event)">get started</a>
              </div>
            </div>

            <div
              class="pricing-item"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="200"
            >
              <div class="pricing-header">
                <h3>premium</h3>
                <div class="price"><span>$2080</span>monthly</div>
              </div>
              <div class="pricing-body">
                <ul>
                  <li><i class="fas fa-check"></i>window cleaning</li>
                  <li><i class="fas fa-check"></i>office cleaning</li>
                  <li><i class="fas fa-check"></i>furniture cleaning</li>
                  <li><i class="fas fa-check"></i>car cleaning</li>
                  <li><i class="fas fa-check"></i>bathroom cleaning</li>
                  <li><i class="fas fa-check"></i>other services</li>
                  <li><i class="fas fa-check"></i>With 18 workers (Default)</li>
                  <li>
                    <i class="fas fa-check"></i>Customize workers
                  </li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="premium.html" class="btn getBtn3" onclick="requireLogin(event)">get started</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!----- team  ----->

      <section class="team section-padding" id="team">
        <div class="container">
          <div class="section-title">
            <span class="title" data-aos="fade-up" data-aos-duration="600"
              >team</span
            >
            <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">
              meet our team
            </h2>
          </div>
          <div class="grid">
            <div class="team-item" data-aos="fade-up" data-aos-duration="1000">
              <div class="img-box">
                <a href="member1.php"><img src="images/hiten_profile_photo.webp" loading="lazy" alt="img" /></a>
              </div>
              <div class="detail">
                <h3>Hiten Prajapati</h3>
                <!-- <p>CEO 1</p> -->
              </div>
            </div>

            <div
              class="team-item"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="100"
            >
              <div class="img-box">
                <a href="member2.php"><img src="images/santosh-profile.webp" loading="lazy" alt="img" /></a>
              </div>
              <div class="detail">
                <h3>Santosh Prajapati</h3>
                <!-- <p>CEO 2</p> -->
              </div>
            </div>

            <div
              class="team-item"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="200"
            >
              <div class="img-box">
                <a href="member3.php"><img src="images/sohil-profile.webp" loading="lazy" alt="img" /></a>
              </div>
              <div class="detail">
                <h3>Sohil Prajapati</h3>
                <!-- <p>CEO 3</p> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!----- contact  ----->

      <section class="contact section-padding" id="contact">
        <div class="container">
          <div class="section-title">
            <span class="title" data-aos="fade-up" data-aos-duration="600"
              >contact us</span
            >
            <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">
              have any question?
            </h2>
          </div>
          <div class="grid contact-grid">
            <div class="contact-info">
              <div
                class="contact-info-item"
                data-aos="fade-up"
                data-aos-duration="600"
              >
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>
                  Block-A, BrightWave, Riverdale, The Bronx, NY, United State
                </p>
              </div>

              <div
                class="contact-info-item"
                data-aos="fade-up"
                data-aos-duration="600"
              >
                <i class="fas fa-phone"></i>
                <h3>Call us</h3>
                <p>+91 63596 23257</p>
              </div>

              <div
                class="contact-info-item"
                data-aos="fade-up"
                data-aos-duration="600"
              >
                <i class="fas fa-envelope"></i>
                <h3>Email us</h3>
                <p>brightwavecleaners17@gmail.com</p>
              </div>
            </div>
            <div
              class="contact-form"
              data-aos="fade-up"
              data-aos-duration="600"
            >
              <form action="./Feedback-Details.php" method="POST">
                <div class="input-box">
                  <input
                    type="text"
                    name="Name"
                    placeholder="Name"
                    class="input-control"
                    required
                  />
                </div>
                <div class="input-box">
                  <input
                    type="text"
                    name="Address"
                    placeholder="Address"
                    class="input-control"
                    required
                  />
                </div>
                <div class="input-box">
                  <input
                    type="text"
                    name="Phone"
                    placeholder="Phone"
                    class="input-control"
                    required
                  />
                </div>
                <div class="input-box">
                  <textarea
                    name="Message"
                    placeholder="Message"
                    class="input-control"
                  ></textarea>
                </div>
                <div class="btn-wrap">
                  <button type="submit" name="Send" class="btn">
                    Send Message
                  </button>
                </div>
              </form>
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

      function requireLogin(event) {
        var username = "<?php echo $username; ?>";
        if (username === "Guest") {
          event.preventDefault();
          alert("You must be logged in to purchase a service.");
          window.location.href = "login.html";
        }
      }
    </script>
    <script src="aos.js"></script>
    <script src="script.js"></script>
  </body>
</html>