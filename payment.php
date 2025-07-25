
<?php
session_start();
include './config.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['payment'])) {
    $pay_method = $_POST['pay-method'];
    $user_id = $_SESSION['user_id']; // Assuming user_id is stored in session

    // Get B_ID from booking table
    $booking_stmt = $conn->prepare("SELECT `B_ID` FROM `booking_details` WHERE `B_ID` = (SELECT `B_ID` FROM `booking_details` ORDER BY `created_at` DESC LIMIT 1);");
    // $booking_stmt->bind_param("i", $user_id);
    $booking_stmt->execute();
    $booking_result = $booking_stmt->get_result();
    $booking_row = $booking_result->fetch_assoc();
    $b_id = $booking_row['B_ID'];

    // Insert payment details into the database
    $stmt = $conn->prepare("INSERT INTO payment (`B_ID`,`Payment Method`, `Date`) VALUES (?, ?, NOW())");
    $stmt->bind_param("is", $b_id, $pay_method);

    if ($stmt->execute()) {
        echo "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            showPopup();
          
        });
        </script>";
        header('refresh:0;url=./index.php');
        
    } else {
        echo "<script>alert('Error processing payment. Please try again.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment </title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="service.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="payment.css" />
  </head>
  <body>
    <div class="preloader js-preloader">
      <div></div>
    </div>

    <div class="page-wrapper">
      <header class="header js-header">
        <div class="container">
          <div class="logo" data-aos="fade-down" data-aos-duration="1000">
            <a href="#">BrightWave <span>Cleaners</span></a>
          </div>
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
            </ul>
          </nav>
        </div>
      </header>

      <form action="./payment.php" method="post">
      <section
        class="service-payment-home section-padding"
        id="service-payment-home"
      >
        <div class="container">
          <div class="grid">
            <div class="service-payment-info">
              <div class="payment-info-card">
                <h3
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="500"
                >
                  Payment Information
                </h3>

                <p>Payment Method :</p>
                <input
                  type="text"
                  name="pay-method"
                  class="pay-method"
                   value="Cash on Delivery"
                   readonly
                />
              <button class='buybtn' name='payment' onclick='showPopup()' value='submit'>
                  Buy now
                </button>
              </div>
              <div class="overlay" id="overlay"></div>
              <div class="popup" id="popup">
                <div class="popup-content">
                  <h2>Successfully Purchased!</h2>
                  <p>Your order will be stored! Your service has been successfully purchased.</p>
                  <button onclick="openIndex()">OK</button>
                </div>
              </div>

              <!-- <div class="card-detail card-hidden">
                <h3
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                >
                  Card Information
                </h3>
                <label
                  for="card_detail"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                  >for card user * </label
                ><br />
                <input
                  type="text"
                  name="card_number"
                  placeholder="Card Number"
                  class="service-inputs"
                  required
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                />
                <input
                  type="text"
                  name="expiry_date"
                  placeholder="Expiry Date : MM/YY"
                  class="service-inputs"
                  required
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                />
                <input
                  type="text"
                  name="cvv"
                  placeholder="CVV"
                  class="service-inputs"
                  required
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                />
              </div> -->
            </div>
          </div>
        </div>
      </section>
      </form>

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

    <script src="script.js"></script>
    <script>
      // const cards = document.querySelector(".card-detail");
      // const payments = document.querySelector(".payment-info-card select");
      // payments.addEventListener("change", (e) => {
      //   if (
      //     e.target.value === "credit_card" ||
      //     e.target.value === "debit_card"
      //   ) {
      //     cards.classList.remove("card-hidden");
      //   } else {
      //     cards.classList.add("card-hidden");
      //   }
      // });

      function showPopup() {
        document.getElementById("popup").style.display = "block";
        document.getElementById("overlay").style.display = "block";
      }

      function openIndex() {
       window.location.href = "index.html";
      }

      
    </script>
  </body>
</html>

