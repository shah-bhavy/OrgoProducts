<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Orgo Products</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
<style>
  /* Global styles */
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    width: 400px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  label {
    margin-bottom: 5px;
    color: #333;
  }

  input[type="text"],
  input[type="password"] {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }

  .signup-link {
    text-align: center;
    margin-top: 15px;
  }

  .signup-link a {
    color: #007bff;
    text-decoration: none;
  }

  .signup-link a:hover {
    text-decoration: underline;
  }

  .error-message {
    color: red;
    margin-bottom: 10px;
    text-align: center;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    
    <form method="post" action="login_process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <div class="signup-link">
        <p>New to OrgoProducts? <a href="signup.php">Signup</a></p>
    </div>
  </div>
</body>
</html>
