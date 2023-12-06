<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Encode+Sans+SC:wght@500&family=Open+Sans:wght@600&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  
  $q = intval($_GET['q']);
  $conn = mysqli_connect("localhost", "root", "", "info");
  if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
  }

  $result = mysqli_query($conn, "SELECT * FROM info where id = '" . $q . "'");
  echo '<div class = "table"> <div class="section-heading">
  <center><h2>Your Recent Search Results</h2>
  <h6>Check Them Out</h6></center>
</div></div>';
  
  while ($row = mysqli_fetch_array($result)) {
    echo "<div class='card1'>" .
      "<div class='cardImage'>" . "<a href='" . $row['gmap'] . "' target = 'blank'>" . "<img src='data:image/jpeg;base64," . base64_encode($row['Images']) . "' alt='" . $row['Hospital Name'] . "'>" . "</a>" . "</div>" .
      "<div class='cardText' name='hname'>" . 
      "<a href='" . $row['gmap'] . "' target = 'blank'>" . $row['Hospital Name'] . "</a>" . "<br>" . 
      "<h6>" . $row['Address'] . "</h6>" . "</br>" .
      "<h6>" . "Doctor Name : " . $row['Doctors Name'] . "</h6>" . "</br>" .
      "<h6>" . "Degree : " . $row['Degree'] . "</h6>" . "</br>" .
      "<h6>" . "Experience : " . $row['Experience'] . "</h6>" . "</br>" .
      "<h6>" . "Phone No. : " . $row['Phone no'] . "</h6>" . "</br>" .
      "<h6>" . "Timing : " . $row['Open timings'] . "</h6>" . "</br>" .
      "<div class='Book'>" .
      // "<h6>" . "Rating : " . $row['Ratings'] . "</h6>" . "<button>" . "Book Appointment" . "</button>" ."</div>". "</div>" . "</div>";
      "<a href='appoint.html'>Book Appointment</a>" ."</div>". "</div>" . "</div>";
    $json = json_encode($row);
    
  }
  echo "</table>";
  mysqli_close($conn);
  ?>
</body>

</html>