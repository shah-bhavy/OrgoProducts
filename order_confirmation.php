<?php
session_start();
require_once 'db_connect.php'; // Include your database connection file

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // Redirect to login page if user is not logged in
  exit();
}

// You may retrieve the order details from the database based on the user's ID and display them on this page
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM orders WHERE user_id = $user_id ORDER BY order_id DESC LIMIT 1"; // Assuming you have an 'orders' table
$result = mysqli_query($dbConnection, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $order_id = $row['order_id'];
} else {
  // Redirect to the homepage or an error page if order details are not found
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Confirmation</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Include FontAwesome CSS -->
<style>
  /* Your confirmation page styles */
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  h1 {
    margin-top: 0;
    margin-bottom: 20px;
  }

  .confirmation-message {
    margin-bottom: 20px;
  }

  .order-details {
    margin-bottom: 20px;
  }

  .order-details p {
    margin: 5px 0;
  }
</style>
</head>
<body>
  <div class="container">
    <h1>Order Confirmation</h1>
    <div class="confirmation-message">
      <p>Your order has been placed successfully!</p>
    </div>
    <div class="order-details">
      <p><strong>Order ID:</strong> <?php echo $order_id; ?></p>
      <p><strong>Total Price:</strong> <?php echo $_SESSION['total']; ?>/-</p>
    </div>
    <a href="index.html">Back to Home</a>
  </div>
</body>
</html>
