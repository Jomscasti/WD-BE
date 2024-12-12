<?php
include 'assets/shared/connect.php';

$query = "SELECT * FROM islandsofpersonality WHERE status = 'Active';";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Jomari's Headquarters</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Poppins">
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      font-family: "Poppins", sans-serif;
    }
    .bgimg {
      min-height: 100%;
      background-position: center;
      background-size: cover;
      background-image: url("assets/images/head001.png");
    }
    .section-bg {
      background: linear-gradient(to bottom right, #e6e6fa, #d8bfd8);
      padding: 64px 0;
    }
    h1,
    h2 {
      color: #5D3FD3;
    }
    p {
      line-height: 1.8;
      color: #4b4b4b;
    }
    .w3-bottom {
      background-color: rgba(255, 255, 255, 0.8);
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    }
    .island-container {
      cursor: pointer;
      transition: transform 0.2s ease;
    }
    .island-container:hover {
      transform: scale(1.02);
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home"></header>

  <!-- Introduction Section -->
  <div class="w3-container section-bg" id="introduction">
    <div class="w3-content w3-center">
      <h2>Welcome to Jomari's Headquarters</h2>
      <p>Embark on a journey through the Islands of Personality, where each stop reveals the vibrant traits that make us
        who we are.</p>
    </div>
  </div>

  <!-- Navbar -->
  <div class="w3-bottom w3-hide-small">
    <div class="w3-bar w3-center w3-padding">
      <a href="#home" class="w3-bar-item w3-button">Home</a>
      <?php
      if ($result && mysqli_num_rows($result) > 0) {
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)) {
          $sectionID = strtolower(str_replace(' ', '', $row['name']));
          ?>
          <a href="#<?php echo $sectionID; ?>" class="w3-bar-item w3-button"><?php echo $row['name']; ?></a>
          <?php
        }
      }
      ?>
    </div>
  </div>

  <?php
  if ($result && mysqli_num_rows($result) > 0) {
    mysqli_data_seek($result, 0);
    while ($row = mysqli_fetch_assoc($result)) {
      $sectionID = strtolower(str_replace(' ', '', $row['name']));
      ?>
      <a href="view.php?id=<?php echo $row['islandOfPersonalityID']; ?>" style="text-decoration: none;">
        <div class="w3-container island-container" id="<?php echo $sectionID; ?>"
          style="background-color:<?php echo $row['color']; ?>;">
          <div class="w3-content">
            <h1 class="w3-center"><b>Island of <?php echo $row['name']; ?></b></h1>
            <p class="w3-center w3-large"><?php echo $row['shortDescription']; ?></p>
            <img class="w3-round w3-grayscale-min" src="assets/images/<?php echo $row['image']; ?>"
              style="width:100%;margin:32px 0">
            <p class="w3-center">
          </div>
        </div>
      </a>
      <?php
    }
  } else {
    ?>
    <div class="w3-container w3-center">
      <p>No content available. Please add data to the database.</p>
    </div>
    <?php
  }
  ?>

</body>

</html>