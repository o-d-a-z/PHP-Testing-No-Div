<html lang="en">
<head>
  <meta charset="utf-8">

  <title>HTML Testing</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<script src="js/jq.js"></script>
<script src="js/scripts.js"></script>
<?php
DEFINE('DB_USERNAME', 'root');
 DEFINE('DB_PASSWORD', 'root');
 DEFINE('DB_HOST', 'localhost');
 DEFINE('DB_DATABASE', 'test_db');

 $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 if (mysqli_connect_error()) {
   die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
 }

 echo 'Connected successfully.';

?>

<body>
<h1> DB Testing </h1>
  <div class="row">
  <?php
  $sql = "SELECT username, email FROM users";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<strong>Username: </strong>" . $row["username"]. "<strong> Email: </strong>" . $row["email"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  $conn->close();
  ?>
    </div>
</body>
</html>
