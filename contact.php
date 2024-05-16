<?php
    include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/contact.css">
<title>Contact Us</title>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 20px auto;
  padding: 0 20px;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo-container {
  display: flex;
  align-items: center;
}

.logo {
  width: 40px;
  height: auto;
  margin-right: 10px;
}

.website-name {
  font-size: 20px;
  font-weight: bold;
}

.nav-links {
  list-style-type: none;
  display: flex;
}

.nav-links li {
  margin-right: 20px;
}

.nav-links a {
  color: #fff;
  text-decoration: none;
}

.nav-links a.active {
  text-decoration: underline;
}

.cart-icon {
  color: #fff;
  font-size: 24px;
  text-decoration: none;
}

h1 {
  margin-top: 20px;
}

.contact-form {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

form {
  display: grid;
  gap: 10px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

</style>
</head>
<body>
 

  <main class="container">
    <h1>Contact Us</h1>
    <div class="contact-form">
      <form action="submit_contact.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Send Message">
      </form>
    </div>
  </main>

</body>
</html>
