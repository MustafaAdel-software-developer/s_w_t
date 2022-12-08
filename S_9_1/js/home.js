const addSingleProductToCart = (product) => {
  const products = JSON.parse(localStorage.getItem("products") || "[]");
  const oldProductIndex = products.findIndex((item) => item.id === product.id);
  if (oldProductIndex >= 0) {
    products[oldProductIndex].quantity++;
  } else {
    products.push({ ...product, quantity: 1 });
  }
  localStorage.setItem("products", JSON.stringify(products));
};
