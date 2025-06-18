const frequency = document.querySelector(".service-frequency select");
const price = document.getElementById("main-price");
const quantitySelect = document.getElementById("workers-numbers");
const defaultWorker = document.getElementById("default");
const defaultLabel = document.getElementById("default-label");

const basePrices = {
  monthly: 700,
  two_monthly: 1400,
  three_monthly: 2100,
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
    total = basePrice;
  } else if (selectedQuantity >= 7) {
    total = basePrice + increment * (selectedQuantity - 6);
  } else if (quantitySelect.value === "noneValue") {
    total = basePrice;
  }

  // Display the total price
  price.value = `$${total}`;

  // Update the defaultWorker text
  defaultWorker.value = selectedQuantity;
  defaultLabel.innerHTML = `Number of workers:`;
  if (quantitySelect.value === "noneValue") {
    defaultWorker.value = "6";
  }
};

// Attach event listeners
frequency.addEventListener("change", calculatePrice);
quantitySelect.addEventListener("change", calculatePrice);

function basicRedirect() {
  window.location.href = "carpet-payment.html";
}
