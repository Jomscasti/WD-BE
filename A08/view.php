<?php
include 'assets/shared/connect.php';

$islandOfPersonalityID = intval($_GET['id']);

$islandDetailsQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = $islandOfPersonalityID";
$islandDetailsResult = mysqli_query($conn, $islandDetailsQuery);
$islandDetails = mysqli_fetch_assoc($islandDetailsResult);

$islandContentQuery = "
    SELECT 
        color AS contentColor,
        image AS contentImage,
        content AS contentText
    FROM 
        islandcontents
    WHERE 
        islandOfPersonalityID = $islandOfPersonalityID";
$islandContentResult = mysqli_query($conn, $islandContentQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo htmlspecialchars($islandDetails['name']); ?> - Island Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: "Poppins", sans-serif;
        }
        .bgimg {
            min-height: 100%;
            background-color: <?php echo $islandDetails['color']; ?>;
            background-position: center;
            background-size: cover;
        }
        .content-section {
            padding: 32px;
        }
        h1,
        h2 {
            color: <?php echo $islandDetails['color']; ?>;
        }
        p {
            line-height: 1.8;
        }
    </style>
</head>

<body>
    <header class="bgimg w3-display-container w3-center" id="home">
        <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-text-white">
                Welcome to the Island of <?php echo htmlspecialchars($islandDetails['name']); ?>
            </h1>
        </div>
    </header>

    <div class="content-section">
        <div class="w3-container w3-center">
            <h2>Discover More</h2>
            <?php 
            if ($islandContentResult && mysqli_num_rows($islandContentResult) > 0) {
                while ($contentRow = mysqli_fetch_assoc($islandContentResult)) {
                    ?>
                    <div class="w3-card w3-margin w3-padding">
                        <img class="w3-image w3-round"
                            src="assets/images/<?php echo htmlspecialchars($contentRow['contentImage']); ?>"
                            alt="Island Content Image">
                        <p><?php echo htmlspecialchars($contentRow['contentText']); ?></p>
                    </div>
                    <?php
                }
            } else {
                ?>
                <p>No additional content available for this island.</p>
                <?php
            }
            ?>
        </div>
        <div class="w3-container w3-padding">
            <button onclick="history.back()" class="w3-button w3-light-grey">Go Back</button>
        </div>
    </div>

</body>

</html>
