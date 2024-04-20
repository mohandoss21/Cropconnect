function addToCart(productName) {
  // Make AJAX request to PHP script
  $.ajax({
      type: 'POST',
      url: 'card.php', // Replace with the path to your PHP script
      data: { productName: productName },
      success: function(response) {
          // Handle response from PHP script
          alert(response);
      },
      error: function(xhr, status, error) {
          // Handle errors
          console.error(xhr.responseText);
      }
  });
}