
function addToCart(productName, price) {
  var cartItem = {
      name: productName,
      price: price
  };
  var cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.push(cartItem);
  localStorage.setItem('cart', JSON.stringify(cart));
  updateCartDisplay();
}

function updateCartDisplay() {
  var cart = JSON.parse(localStorage.getItem('cart')) || [];
  var cartContainer = document.getElementById('cart');
  cartContainer.innerHTML = '';
  cart.forEach(function(item) {
      var cartItemElement = document.createElement('div');
      cartItemElement.innerHTML = '<p>' + item.name + ' - ' + item.price + '</p>';
      cartContainer.appendChild(cartItemElement);
  });
}
