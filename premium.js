// const cards = document.querySelector(".card-detail");
// const payments = document.querySelector(".payment-detail select");
// payments.addEventListener("change", (e) => {
//   if (e.target.value === "credit_card" || e.target.value === "debit_card") {
//     cards.classList.remove("card-hidden");
//   } else {
//     cards.classList.add("card-hidden");
//   }
// });

const frequency = document.querySelector(".service-frequency select");
const price = document.getElementById("main-price");
const quantitySelect = document.getElementById("workers-numbers");
const defaultWorker = document.getElementById("default");
const defaultLabel = document.getElementById("default-label");

const basePrices = {
  monthly: 2080,
  two_monthly: 4160,
  three_monthly: 6240,
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

  if (selectedQuantity === 10) {
    total = increment * 10;
  } else if (selectedQuantity === 11) {
    total = increment * 11;
  } else if (selectedQuantity === 12) {
    total = increment * 12;
  } else if (selectedQuantity === 13) {
    total = increment * 13;
  } else if (selectedQuantity === 14) {
    total = increment * 14;
  } else if (selectedQuantity === 15) {
    total = increment * 15;
  } else if (selectedQuantity === 16) {
    total = increment * 16;
  } else if (selectedQuantity === 17) {
    total = increment * 17;
  } else if (selectedQuantity === 18) {
    total = basePrice;
  } else if (selectedQuantity >= 19) {
    total = basePrice + increment * (selectedQuantity - 18);
  } else if (quantitySelect.value === "noneValue") {
    total = basePrice;
  }

  // Display the total price
  price.value = `$${total}`;

  // Update the defaultWorker text
  defaultWorker.value = selectedQuantity;
  defaultLabel.innerHTML = `Number of workers:`;
  if (quantitySelect.value === "noneValue") {
    defaultWorker.value = "18";
  }
};

// Attach event listeners
frequency.addEventListener("change", calculatePrice);
quantitySelect.addEventListener("change", calculatePrice);

function premiumRedirect() {
  window.location.href = "carpet-payment.html";
}

// get service from checkbox

// function updateValue(){
//   var checkbox1 = document.getElementById("checkbox1");
//   var checkbox2 = document.getElementById("checkbox2");
//   var checkbox3 = document.getElementById("checkbox3");
//   var checkbox4 = document.getElementById("checkbox4");
//   var checkbox5 = document.getElementById("checkbox5");
//   var checkbox6 = document.getElementById("checkbox6");
//   var checkbox7 = document.getElementById("checkbox7");
//   var checkbox8 = document.getElementById("checkbox8");
//   var checkbox9 = document.getElementById("checkbox9");
//   var checkbox10 =ducument.getElementById("checkbox10");
//   var textbox = document.getElementById("myTextbox");

//   var selectedOptions =[];

//   if(checkbox1.checked){
//       selectedOptions.push("Furniture Cleaning");
//   }
//   if(checkbox2.checked){
//       selectedOptions.push("Kitchen Cleaning");
//   }
//   if(checkbox3.checked){
//       selectedOptions.push("Car Cleaning");
//   }
//   if(checkbox4.checked){
//     selectedOptions.push("Bathroom Cleaning");
//   }
//   if(checkbox5.checked){
//     selectedOptions.push("Window Cleaning");
//   }
//   if(checkbox6.checked){
//     selectedOptions.push("Carpet Cleaning");
//   }
//   if(checkbox7.checked){
//     selectedOptions.push("Office Cleaning");
//   }
//   if(checkbox8.checked){
//     selectedOptions.push("Medical Cleaning");
//   }
//   if(checkbox9.checked){
//     selectedOptions.push("Resturant Cleaning");
//   }
//   if(checkbox10.checked){
//    selectedOptions.push("Event Cleaning");
//   }
//   textbox.value = selectedOptions.join(",  ");
// }
