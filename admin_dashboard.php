<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="styles/style.css"> <!-- Include your CSS file -->
</head>
<body>
  <div class="admin-dashboard">
    <h1>Contact Messages</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
      </tr>
      <?php
      // Fetch all contact messages
      require_once("db_connect.php");
$sql = "SELECT * FROM contact_messages";
$result = mysqli_query($dbConnection, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['message']}</td>";
        echo "<td>{$row['timestamp']}</td>";
        echo "</tr>";
      }
      ?>
    </table>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>