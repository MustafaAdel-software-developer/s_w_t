const add = document.querySelector(".add-btn");
const productName = document.querySelector("#product-name");
const price = document.getElementById("price");
const quantity = document.getElementById("quantity");
const tableBody = document.getElementById("products");
let total = 0;
function addProduct() {
  if (
    typeof productName.value !== String ||
    typeof price.value !== Number ||
    typeof quantity.value !== String
  ) 
  {
    alert("something went wrong, Please try again");
    continue;
  }
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
add.addEventListener("click", addProduct);
