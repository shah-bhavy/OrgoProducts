<?php
session_start();
require_once 'db_connect.php'; // Include your database connection file

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // Redirect to login page if user is not logged in
  exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT p.product_name, p.price FROM products p INNER JOIN carts c ON p.product_id = c.product_id WHERE c.user_id = $user_id";
$result = mysqli_query($dbConnection, $sql);
$total_price = 0; // Initialize total price variable

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Include FontAwesome CSS -->
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
  }

  header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
  }

  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
  }

  h1 {
    margin-top: 0;
    margin-bottom: 20px;
  }

  .cart-items {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .cart-item {
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
  }

  .cart-item:last-child {
    border-bottom: none;
  }

  .cart-item h3 {
    margin-top: 0;
    margin-bottom: 5px;
    color: #333;
  }

  .cart-item p {
    margin: 0;
    color: #666;
  }

  .checkout-form {
    background-color: #fff;
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .form-group {
    margin-bottom: 15px;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
  }

  .checkout-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
  }

  .checkout-btn:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
  <header>
    <h1>Checkout</h1>
  </header>

  <main class="container">
    <div class="cart-items">
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='cart-item'>";
          echo "<h3>{$row['product_name']}</h3>";
          echo "<p>Price: {$row['price']}</p>";
          echo "</div>";
          $total_price += $row['price']; // Add product price to total price
        }
      } else {
        echo "<p>Your cart is empty.</p>";
      }
      ?>
    </div>

    <!-- Display Grand Total -->
    <div class="grand-total">
      <h3>Grand Total: <?php echo $total_price; $_SESSION['total']=$total_price; ?></h3>
    </div>

    <div class="checkout-form">
      <h2>Shipping Information</h2>
      <form action="process_order.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <button type="submit" class="checkout-btn"><i class="fas fa-check"></i> Place Order</button>
      </form>
    </div>
  </main>

  <footer>
    &copy; 2024 Your Store Name
  </footer>
</body>
</html>
