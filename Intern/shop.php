<!DOCTYPE html>
<html>
<head>
<title>Crop Connect Shop</title>
<link rel="stylesheet" href="shop.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="shop.js"></script> <!-- Including shop.js -->
</head>

<?php
include('header.html')
?>
<body>
<div class="screen">
  <div class="side"></div>
  <div>
        <div class="row" style="background-color:lavender;">
            <div class="col-sm-4" >
              <p>Tomato</p>
              <img class="tomato" src="img\\vegtables\\tomato.jpg">
                <div>
                    <button  onclick="addToCart('Tomato')">Add to Cart</button>
                    <button>Show Quantity</button>
                    <button> Add to Cart</button>
                    <button>+2</button>
                    <button>Reset Cart</button>
                </div>
           </div>
           <div class="col-sm-4">
              <p>Potato</p>
              <img class="potato" src="img\\vegtables\\potato.jpg">
              <div>
                    <button onclick="addToCart('Potato')">Add to Cart</button>
                    <button>Show Quantity</button>
                   <button> Add to Cart</button>
                   <button>+2</button>
                   <button>Reset Cart</button>
              </div>
            </div>
            <div class="col-sm-4">
              <p>Carrot</p>
              <img class="carrot" src="img\\vegtables\\carrot.jpg">
              <div>
                    <button onclick="addToCart('Carrot')">Add to Cart</button>
                    <button>Show Quantity</button>
                  <button> Add to Cart</button>
                  <button>+2</button>
                  <button>Reset Cart</button>
              </div>
            </div>
      </div>
      <div class="row" style="background-color:lavender;">
      <div class="col-sm-4">
          <p>drumstick</p>
          <img class="drumstick" src="img\\vegtables\\drumstick.webp">
          <div>
              <button onclick="addToCart('Drumstick')">Add to Cart</button>
              <button>Show Quantity</button>
             <button> Add to Cart</button>
             <button>+2</button>
             <button>Reset Cart</button>
              </div>
        </div>
        <div class="col-sm-4">
          <p>brinjal</p>
          <img class="brinjal" src="img\\vegtables\\brinjal.jpeg">
          <div>
              <button onclick="addToCart('Brinjal')">Add to Cart</button>
              <button>Show Quantity</button>
             <button> Add to Cart</button>
             <button>+2</button>
             <button>Reset Cart</button>
              </div>
        </div>
        <div class="col-sm-4">
          <p>Garlic</p>
          <img class="carrot" src="img\\vegtables\\garlic.avif">
          <div>
              <button onclick="addToCart('Garlic')">Add to Cart</button>
              <button>Show Quantity</button>
             <button> Add to Cart</button>
             <button>+2</button>
             <button>Reset Cart</button>
              </div>
        </div>
      
      <div class="row">
      <div class="col-sm-4">
        <p>Lady's Finger</p>
        <img class="tomato" src="img\\vegtables\\lady's finger.jpg">
        <div>
              <button onclick="addToCart('Ladys Finger')">Add to Cart</button>
              <button>Show Quantity</button>
             <button> Add to Cart</button>
             <button>+2</button>
             <button>Reset Cart</button>
              </div>
      </div>
      <div class="col-sm-4">
        <p>Onion</p>
        <img class="potato" src="img\\vegtables\\onion.jpg">
        <div>
              <button onclick="addToCart('Onion')">Add to Cart</button>
              <button>Show Quantity</button>
             <button> Add to Cart</button>
             <button>+2</button>
             <button>Reset Cart</button>
              </div>
      </div>
      
  </div>

</div>
</div>
</div>
<?php
include('footer.html')
?>
</body>
</html>
