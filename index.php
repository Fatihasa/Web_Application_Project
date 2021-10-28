<!DOCTYPE html>
<html lang="en">

<head>
  <title>A simple HTML document fatıh</title>
  <link rel="stylesheet" href="style.css">
  <style>
body {
  background-color: coral;
}
  </style>
</head>

<body>
  <div align="center">
    <p>Web Application Development</p>
  </div>

  <table>
    <tr>
      <div align="center">
        <p>Navigation Bar</p>
      </div>
      <div align="center">
        <p>Users Name</p>
        <form action="add_user.php" method="post">
          <input type="text" id="user_name" name="user_name" required placeholder="Name (5 to 15 characters)">
          <p>Add Users</p>
          <button type="submit">Add me</button>
        </form>
      </div>
    </tr>
  </table>
  <h2></h2>

  </tr>
  </table>
  <h2></h2>
  <div align="center">

  </div>
  <div align="center">
    <p>Get Users</p>
    <button>Get me</button>
  </div>
  <div align="center">
    <h3>Show the Users Lists</h3>
    <ul>
      <li>User1</li>
      <li>User2</li>
  </div>
  </ul>

  <?php
  $txt = "Fatih";

  echo "I love $txt!";

  $user = 'root';
  $pass = 'WebDevelopment';
  $db = 'gamechangerdb';

  $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

  echo "Data Base Connected";

  $db->close();

  ?>
</body>

</html>