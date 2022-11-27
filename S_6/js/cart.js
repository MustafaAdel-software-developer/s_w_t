const add = document.querySelector(".add-btn");
const productName = document.querySelector("#product-name");
const price = document.getElementById("price");
const quantity = document.getElementById("quantity");
const tableBody = document.getElementById("products");
let total = 0;
function addProduct() {
  if (productName.value === "") {
    alert("Please enter product's name:");
    productName.focus();
  } else if (price.value === "") {
    alert("Please enter product's price:");
    price.focus();
  } else if (quantity.value === "") {
    alert("Please enter product's amount");
    quantity.focus();
  } else {
    tableBody.innerHTML += `<tr>
                          <td>${productName.value}</td>
                          <td>${price.value}</td>
                          <td>${quantity.value}</td>
                          <td>${(total += price.value * quantity.value)}</td>
                          <td>Remove</td>      
                          </tr>`;

    productName.value = "";
    price.value = "";
    quantity.value = "";
    total = "";
    productName.focus();
  }
}
add.addEventListener("click", addProduct);
