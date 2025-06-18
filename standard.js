const frequency = document.querySelector(".service-frequency select");
const price = document.getElementById("main-price");
const quantitySelect = document.getElementById("workers-numbers");
const defaultWorker = document.getElementById("default");
const defaultLabel = document.getElementById("default-label");

const basePrices = {
  monthly: 1390,
  two_monthly: 2780,
  three_monthly: 4170,
};
const increments = {
  monthly: 120,
  two_monthly: 240,
  three_monthly: 350,
};

const calculatePrice = () => {
  const selectedPlan = frequency.value;
  const selectedQuantity = parseInt(quantitySelect.value, 10);
  const basePrice = basePrices[selectedPlan];
  const increment = increments[selectedPlan];

  let total = 0;

  if (selectedQuantity === 4) {
    total = increment * 4;
  } else if (selectedQuantity === 5) {
    total = increment * 5;
  } else if (selectedQuantity === 6) {
    total = increment * 6;
  } else if (selectedQuantity === 7) {
    total = increment * 7;
  } else if (selectedQuantity === 8) {
    total = increment * 8;
  } else if (selectedQuantity === 9) {
    total = increment * 9;
  } else if (selectedQuantity === 10) {
    total = increment * 10;
  } else if (selectedQuantity === 11) {
    total = increment * 11;
  } else if (selectedQuantity === 12) {
    total = basePrice;
  } else if (selectedQuantity >= 13) {
    total = basePrice + increment * (selectedQuantity - 12);
  } else if (quantitySelect.value === "noneValue") {
    total = basePrice;
  }

  // Display the total price
  price.value = `$${total}`;

  // Update the defaultWorker text
  defaultWorker.value = selectedQuantity;
  defaultLabel.innerHTML = `Number of workers:`;
  if (quantitySelect.value === "noneValue") {
    defaultWorker.value = "12";
  }
};

// Attach event listeners
frequency.addEventListener("change", calculatePrice);
quantitySelect.addEventListener("change", calculatePrice);

function standardRedirect() {
  window.location.href = "carpet-payment.html";
}
