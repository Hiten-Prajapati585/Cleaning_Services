document.addEventListener("DOMContentLoaded", function () {
  let index = 0;
  const slides = document.querySelectorAll(".slider img");
  const totalSlides = slides.length;

  function showNextSlide() {
    index = (index + 1) % totalSlides;
    document.querySelector(".slider").style.transform = `translateX(-${
      index * 100
    }%)`;
  }

  setInterval(showNextSlide, 5000);
});

const frequency = document.querySelector(".service-frequency select");
const price = document.getElementById("main-price");
const quantitySelect = document.getElementById("workers-numbers");
const defaultWorker = document.getElementById("default");
const defaultLabel = document.getElementById("default-label");

const basePrices = {
  monthly: 360,
  two_monthly: 700,
  three_monthly: 1045,
};
const increments = {
  monthly: 120,
  two_monthly: 240,
  three_monthly: 360,
};

const calculatePrice = () => {
  const selectedPlan = frequency.value;
  const selectedQuantity = parseInt(quantitySelect.value, 10);
  const basePrice = basePrices[selectedPlan];
  const increment = increments[selectedPlan];

  let total = 0;

  if (selectedQuantity === 1) {
    total = increment;
  } else if (selectedQuantity === 2) {
    total = increment * 2;
  } else if (selectedQuantity === 3) {
    total = basePrice;
  } else if (selectedQuantity >= 4) {
    total = basePrice + increment * (selectedQuantity - 3);
  } else if (quantitySelect.value === "noneValue") {
    total = basePrice;
  }

  // Display the total price
  price.value = `$${total}`;

  // Update the defaultWorker text
  defaultWorker.value = selectedQuantity;
  defaultLabel.innerHTML = `Number of workers:`;
  if (quantitySelect.value === "noneValue") {
    defaultWorker.value = "3";
  }
};

// Attach event listeners
frequency.addEventListener("change", calculatePrice);
quantitySelect.addEventListener("change", calculatePrice);

function serviceRedirect() {
  let continueBtn = document.getElementById("continueBtn");
  let fullName = document.getElementById("fullName").value.trim();
  let email = document.getElementById("email").value.trim();
  let phone = document.getElementById("phone").value.trim();

  continueBtn.addEventListener("click", () => {
    if (fullName === "" || email === "" || phone === "") {
      alert("Please fill all the required fields before proceeding");
      return false;
    } else {
      window.location.href = "carpet-payment.html";
    }
  });
}
serviceRedirect();
