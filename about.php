<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BrightWave Cleaners About</title>
    <link rel="stylesheet" href="about.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="aos.css" />
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

      <!------ home of about  ------->

      <section class="ab-home" id="ab-home">
        <div class="container">
          <div class="text-section">
            <h1>Welcome To BrightWave</h1>
            <p>
              We are a professional cleaning company dedicated to providing
              exceptional cleaning services for homes and businesses. Our
              experienced team of cleaners delivers top-quality cleaning
              solutions tailored to your needs.
            </p>
            <button onclick="redirectPage()">Visit now</button>
          </div>
          <div class="image-section">
            <img
              src="images/about-home-img.webp"
              loading="lazy"
              alt="Cleaning Worker"
            />
          </div>
        </div>
      </section>

      <!----- service of about  ----->

      <section class="ab-services section-padding" id="ab-services">
        <div class="container">
          <div class="section-title">
            <span class="title" data-aos="fade-up" data-aos-duration="600"
              >what we provide</span
            >
            <h2 class="sub-title" data-aos="fade-up" data-aos-duration="800">
              sparkling insights
            </h2>
          </div>

          <div class="service-grid">
            <div class="service-text">
              <h4 data-aos="fade-up" data-aos-duration="1000">
                Dive into our blog for the latest cleaning tips, industry
                trends, and expert advice. Discover how to keep your space
                spotless, healthy, and inviting with insights from BrightWave
                Cleaning's professionals.
              </h4>
            </div>
            <div class="service-img">
              <div class="service-img-details">
                <img
                  src="images/about-1.webp"
                  loading="lazy"
                  class="s-img"
                  alt="img"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                />
                <div class="service-img-main">
                  <h1>10 Cleaning Hacks for a <br />Sparkling Home</h1>
                  <p>
                    Learn simple yet effective cleaning hacks to keep your home
                    sparkling clean with minimal effort.
                  </p>
                </div>
              </div>
              <div class="service-img-details">
                <img
                  src="images/about-2.webp"
                  loading="lazy"
                  class="s-img"
                  alt="img"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                />
                <div class="service-img-main">
                  <h1>
                    The Benefits of Eco-Friendly<br />
                    Cleaning Products
                  </h1>
                  <p>
                    Discover the advantages of using eco-friendly cleaning
                    products for safer,heathier home and environment.
                  </p>
                </div>
              </div>
              <div class="service-img-details">
                <img
                  src="images/about-3.webp"
                  loading="lazy"
                  class="s-img"
                  alt="img"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="400"
                />
                <div class="service-img-main">
                  <h1>
                    How to Maintain a Clean and <br />
                    Productive Workspace
                  </h1>
                  <p>
                    Find out how to clean workspace can boost productivityand
                    create a positive work environment.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-------- service-type of about  -------->

      <section class="ab-service-type section-padding" id="ab-service-type">
        <div class="section-title">
          <span class="title" data-aos="fade-up" data-aos-duration="600"
            >more services</span
          >
          <h2 class="sub-title" data-aos="fade-up" data-aos-duration="800">
            our more services
          </h2>
        </div>
        <div class="container">
          <div class="grid">
            <div class="about-main-images">
              <div class="about-image-and-text pink" data-aos="fade-up" data-aos-duration="1000">
                <h3>Home Cleaning</h3>
                <img src="images/about-image1.webp" loading="lazy" alt="" />
              </div>
              <div class="about-image-and-text blue" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="maid">Maid Service</h3>
                <img src="images/about-image2.webp" loading="lazy" alt="" />
              </div>
              <div class="about-image-and-text blue2" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="maid">Window Washing</h3>
                <img src="images/about-image3.webp" loading="lazy" alt="" />
              </div>
              <div class="about-image-and-text green" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="maid">Commercial Cleaning</h3>
                <img src="images/about-image4.webp" loading="lazy" alt="" />
              </div>
              <div class="about-image-and-text red" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="maid">Carpet Cleaning</h3>
                <img src="images/about-image5.webp" loading="lazy" alt="" />
              </div>
              <div class="about-image-and-text yellow" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="maid">
                  Move In/Move Out <br />
                  Cleaning
                </h3>
                <img src="images/about-image6.webp" loading="lazy" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!---------- experience of about  --------->

      <section class="ab-experience section-padding" id="ab-experience">
        <div class="container">
          <div class="section-title">
            <span class="title" data-aos="fade-up" data-aos-duration="600"
              >why choosing us</span
            >
            <h2 class="sub-title" data-aos="fade-up" data-aos-duration="800">
              we have experience
            </h2>
          </div>

          <div class="grid">
            <div class="experience-text">
              <h1 data-aos="fade-right" data-aos-duration="1000">
                We're Experience Of 15 Years In Cleaning Service
              </h1>
              <div class="experience-text2">
                <h2
                  data-aos="fade-right"
                  data-aos-duration="1000"
                  data-aos-delay="100"
                >
                  <i class="fa-solid fa-check"></i>100% Satisfaction
                </h2>
                <p
                  data-aos="fade-right"
                  data-aos-duration="1000"
                  data-aos-delay="100"
                >
                  We guarantee 100% client satisfaction with our top-quality
                  cleaning services, ensuring every space shines with
                  perfection. Your happiness is our priority, and we won’t rest
                  until your expectations are exceeded!
                </p>
                <h2
                  data-aos="fade-right"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                >
                  <i class="fa-solid fa-check"></i>Eco-Friendly Cleaning
                  Products
                </h2>
                <p
                  data-aos="fade-right"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                >
                  Our eco-friendly cleaning products are tough on dirt but
                  gentle on the planet, ensuring a spotless home without harmful
                  chemicals. Safe for your family and pets, they promote a
                  healthier, greener lifestyle with every clean.
                </p>
              </div>
            </div>
            <div class="experience-img">
              <img
                src="images/about-4.webp"
                loading="lazy"
                alt="img"
                data-aos="zoom-in"
                data-aos-duration="1000"
              />
            </div>
          </div>
        </div>
      </section>

      <!--------- experience-2 of about  --------->

      <section class="ab-experience2 section-padding" id="ab-experience2">
        <div class="container">
          <div class="ex-grid">
            <div class="ex2-img">
              <img
                src="images/about-5.webp"
                loading="lazy"
                alt=""
                data-aos="zoom-in"
                data-aos-duration="1000"
              />
            </div>
            <div class="ex2-text">
              <h1 data-aos="fade-up" data-aos-duration="1000">
                we are experienced cleaning professionals commited to creating
                spotless, welcoming environments.
              </h1>
              <div class="ex2-1" data-aos="fade-up" data-aos-duration="1000">
                <h1>our team</h1>
                <p>
                  our highly trained, experienced cleaners ensure
                  meticulous,thorough cleaning every time.
                </p>
              </div>
              <div class="ex2-1" data-aos="fade-up" data-aos-duration="1000">
                <h1>our commitment</h1>
                <p>
                  our highly trained, experienced cleaners ensure
                  meticulous,thorough cleaning every time.
                </p>
              </div>
              <div class="ex2-1" data-aos="fade-up" data-aos-duration="1000">
                <h1>our approach</h1>
                <p>
                  our highly trained, experienced cleaners ensure
                  meticulous,thorough cleaning every time.
                </p>
              </div>
              <div class="ex2-1" data-aos="fade-up" data-aos-duration="1000">
                <h1>our promise</h1>
                <p>
                  our highly trained, experienced cleaners ensure
                  meticulous,thorough cleaning every time.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!------------- rating section  ------------->

      <section class="rate-experience section-padding" id="rate-experience">
        <div class="container">
          <div class="section-title">
            <span class="title" data-aos="fade-up" data-aos-duration="600"
              >why choosing us</span
            >
            <h2 class="sub-title" data-aos="fade-up" data-aos-duration="800">
              our rating
            </h2>
          </div>
          <div class="rating-grid" data-aos="fade-up" data-aos-duration="1000">
            <div
              class="rating-text"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <h4>
                Discover our difference with our exceptional cleaning services,
                backed by impressive numbers that demonstrate our commitment to
                quality and customer satisfaction.
              </h4>
            </div>
            <div class="rating-box">
              <div class="box-1" data-aos="fade-up" data-aos-duration="1000">
                <h1>15+</h1>
                <p>Years of Experience</p>
              </div>
              <div class="box-1" data-aos="fade-up" data-aos-duration="1000">
                <h1>98%</h1>
                <p>Satisfaction Rate</p>
              </div>
              <div class="box-1" data-aos="fade-up" data-aos-duration="1000">
                <h1>1,000+</h1>
                <p>Spaces Cleaned</p>
              </div>
              <div class="box-1" data-aos="fade-up" data-aos-duration="1000">
                <h1>100%</h1>
                <p>Eco-Friendly Products</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--------- last section of about  ---------->

      <section class="ab-last section-padding" id="ab-last">
        <div class="container">
          <div class="last-grid">
            <div class="last-text1">
              <h1 data-aos="fade-up" data-aos-duration="1000">
                Ready for a Spotless Space?
              </h1>
              <p
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
              >
                Experience the BrightWave Cleaning difference. Contact us today
                for top-quality cleaning services tailored to your needs. Let us
                bring sparkle and shine your space!
              </p>
              <button
                onclick="redirectPage()"
                data-aos="fade-up"
                data-aos-duration="800"
              >
                Visit now
              </button>
            </div>
            <div class="last-img">
              <img
                src="images/2.webp"
                loading="lazy"
                alt=""
                data-aos="zoom-in"
                data-aos-duration="1000"
              />
            </div>
          </div>
        </div>
      </section>

      <!----------- footer  ----------->

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
      function redirectPage(){
        window.location.href = "index.php#services";
      }
      
      const logoutBtn = document.getElementById("logoutBtn");
      logoutBtn.addEventListener("click", () => {
        document.getElementById("logoutForm").style.display = "block";
        document.getElementById("logoutForm-overlay").style.display = "block";
      });
    </script>
    <script src="aos.js"></script>
    <script src="script.js"></script>    
  </body>
</html>
