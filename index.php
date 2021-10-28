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
<h2>
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
  </h2>

  </tr>
  </table>
  <h2></h2>
  <div align="center">

  </div>
  <div align="center">
    <form method="post">
    <p>Get Users</p>
    <button type="submit" name="get_users">Get me</button>
    </form>
  </div>
  <div align="center">
    <h3>Show the Users Lists
      
    </h3>
</div>
  

  <?php

    $user = 'root';
    $pass = 'WebDevelopment';
    $db = 'gamechangerdb';

    $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
    
    $result = mysqli_query( $conn , 'select * from users' );
  
    if(array_key_exists('get_users', $_POST)){

      

      while($rows=mysqli_fetch_assoc($result)){
      
      ?>
        <tr>
          <?php echo $rows['user_name']; ?>
        </tr>
    <?php
      }

    }

  ?>
</body>

</html>