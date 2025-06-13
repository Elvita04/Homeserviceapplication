<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Our Services</title>
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
  <h1>Our Services</h1>

  <?php
  $sql = "SELECT * FROM services";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $imgName = strtolower(str_replace(' ', '_', $row['Name'])) . ".jpg";
          $imgPath = "images/" . $imgName;

          echo '<div class="service-card">';
          echo '<img class="service-image" src="' . htmlspecialchars($imgPath) . '" alt="' . htmlspecialchars($row['Name']) . '">';
          echo '<div class="service-details">';
          echo '<h3>' . htmlspecialchars($row['Name']) . '</h3>';
          echo '<p>' . htmlspecialchars($row['Description']) . '</p>';
          echo '<strong>Price: $' . htmlspecialchars($row['Price']) . '</strong>';
          echo '</div></div>';
      }
  } else {
      echo '<p>No services found.</p>';
  }

  $conn->close();
  ?>

</body>
</html>
