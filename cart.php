<?php
session_start();
require_once 'db_connect.php'; // Include your database connection file

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if user is not logged in
    exit();
}

if (isset($_GET['remove_product_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_GET['remove_product_id'];

    // Remove the product from the cart
    $delete_sql = "DELETE FROM carts WHERE user_id = $user_id AND product_id = $product_id";
    mysqli_query($dbConnection, $delete_sql);
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT p.product_id, p.product_name, p.price FROM products p INNER JOIN carts c ON p.product_id = c.product_id WHERE c.user_id = $user_id";
$result = mysqli_query($dbConnection, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Shopping Cart</title>
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

  a {
    color: blue;
    text-decoration: none;
  }

  a:hover {
    text-decoration: none;
  }

  .checkout-btn{
    background-color: #4CAF50;
    color: white;
    width: 10vw;
    margin: 10vh 20vw;
    padding: 10px;
  }
  .checkout-btn:hover{
    background-color: #00af50;
    width: 10vw;
    margin: 10vh 20vw;
    padding: 10px;
  }

  footer {
    margin-top: 20px;
    text-align: center;
    color: #777;
  }
</style>
</head>
<body>
  <header>
    <?php
    if (isset($_SESSION['username'])) {
        echo "<h1>{$_SESSION['username']}'s Shopping Cart</h1>";
    } else {
        echo "<h1>Your Shopping Cart</h1>";
    }
    ?>
</header>

  <main class="container">
    <div class="cart-items">
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='cart-item'>";
          echo "<h3>{$row['product_name']}</h3>";
          echo "<p>Price: {$row['price']}</p>";
          echo "<a href='cart.php?remove_product_id={$row['product_id']}' class='remove-btn'><i class='fas fa-trash-alt'></i> Remove</a>";
          echo "</div>";
        }
      } else {
        echo "<p>Your cart is empty.</p>";
      }
      ?>
    </div>
    <a href="checkout.php" class="checkout-btn"><i class="fas fa-shopping-cart"></i> Proceed to Checkout</a>
  </main>

  <footer>
    &copy; 2024 Your Store Name
  </footer>
</body>
</html>


