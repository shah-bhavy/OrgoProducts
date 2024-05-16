<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/services.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
  /* Reset default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.services {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.service-card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
  transition: transform 0.3s ease;
}

.service-card:hover {
  transform: translateY(-5px);
}

.service-image {
  width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 15px;
}

.service-title {
  font-size: 24px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

.service-description {
  font-size: 16px;
  color: #666;
}

</style>
<title>Our Services</title>
</head>
<body>
  <main class="container">
    <section class="services">
      <div class="service-card">
        <img src="data:image/jpeg;base64,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" alt="Product Sales" class="service-image">
        <h2 class="service-title">Product Sales</h2>
        <p class="service-description">Browse and purchase a wide range of organic and natural products.</p>
      </div>
      <div class="service-card">
        <img src="https://static.vecteezy.com/system/resources/previews/000/474/280/original/vector-product-list-conceptual-illustration-design.jpg" alt="Product Categories" class="service-image">
        <h2 class="service-title">Product Categories</h2>
        <p class="service-description">Explore products categorized into natural powders, body care, seeds, and food items.</p>
      </div>
      <div class="service-card">
        <img src="https://d2gg9evh47fn9z.cloudfront.net/1600px_COLOURBOX15315081.jpg" alt="Product Information" class="service-image">
        <h2 class="service-title">Product Information</h2>
        <p class="service-description">Get detailed information about each product, including name, price, and category.</p>
      </div>
      <div class="service-card">
        <img src="https://th.bing.com/th/id/R.d225d5349fced6307a4bcc5e24d49c9b?rik=IK4ieE8MXZVeCg&riu=http%3a%2f%2fmilgrasp.com%2fimg%2fsections%2ffeatures%2fuser_management1.jpg&ehk=8cN89jcE4c0vEDgIO7ilA6whrciI9c8RV2iSQOYqUHk%3d&risl=&pid=ImgRaw&r=0" alt="User Account Management" class="service-image">
        <h2 class="service-title">User Account Management</h2>
        <p class="service-description">Manage your account, view orders, and enjoy personalized recommendations.</p>
      </div>
    </section>
  </main>

</body>
</html>
