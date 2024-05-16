<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/style.css">
<title>OrgoProducts</title>
</head>
<body>
  <nav class="navbar">
    <div class="logo-container">
      <img src="https://static.vecteezy.com/system/resources/previews/002/136/049/original/leaf-logo-organic-label-eco-icon-isolated-background-free-vector.jpg" alt="Logo" class="logo">
      <span class="website-name">OrgoProducts</span>
    </div>
    <ul class="nav-links">
      <li><a href="#" class="active" style="color: #4caf50;">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <?php
      session_start();
      if (isset($_SESSION['username'])) {
          // Display username if logged in
          echo '<a href="cart.php" class="signup-btn">' . $_SESSION['username'] . '</a>';
      } else {
          // Display signup button if not logged in
          echo '<a href="signup.php" class="signup-btn">Sign Up</a>';
      }
    ?>
  </nav>
  <div class="tagline-container">
    <h1 class="tagline">Welcome to OrgoProducts</h1>
    <a href="shop.html" class="shop-btn">Shop Now</a>
  </div>

</body>
</html>
