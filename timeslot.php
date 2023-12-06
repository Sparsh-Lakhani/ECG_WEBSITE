<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="./assets/js/timeslot.js"></script>
  <style>
    .card1{
      display: flex;
      
    }
    .card2{
      margin: 20px;
    }

    .card2 h1{
      font-size:16px;
    }
  </style>
</head>

<body onload='redir();'>
  <div class="card1">
  <?php


  $q = intval($_GET['q']);
  $conn = mysqli_connect("localhost", "root", "", "info");
  if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
  }

  $result = mysqli_query($conn, "SELECT * FROM dr where id = '" . $q . "'");
  echo "<div class='card2'>";
  echo '<h1>Monday</h1>';
  while ($row = mysqli_fetch_array($result)) {
    if ($row['Monday'] != 0) {
        echo"<h1><label ><input type='radio' id='Monday' name = 'time' onclick='selected()' value= '" . $row['Monday'] . "'>" . $row['Monday'] . "</label></h1>";
    }
    $json = json_encode($row);
  }
  echo"</div>";
  mysqli_close($conn);
  ?>


  <?php

$q = intval($_GET['q']);
$conn = mysqli_connect("localhost", "root", "", "info");
if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}

$result = mysqli_query($conn, "SELECT * FROM dr where id = '" . $q . "'");
echo "<div class='card2'>";
echo '<h1>Tuesday</h1>';
while ($row = mysqli_fetch_array($result)) {
  if ($row['Tuesday'] != 0) {
      echo"<h1><label ><input type='radio' id='Tuesday' name = 'time' onclick='selected()' value= '" . $row['Tuesday'] . "'>" . $row['Tuesday'] . "</label></h1>";
  }
  $json = json_encode($row);
}
echo"</div>";
mysqli_close($conn);
?>


<?php
$q = intval($_GET['q']);
$conn = mysqli_connect("localhost", "root", "", "info");
if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}
$result = mysqli_query($conn, "SELECT * FROM dr where id = '" . $q . "'");
echo "<div class='card2'>";
echo '<h1>Wednesday</h1>';
while ($row = mysqli_fetch_array($result)) {
  if ($row['Wednesday'] != 0) {
      echo"<h1><label ><input type='radio' id='Wednesday' name = 'time' onclick='selected()' value= '" . $row['Wednesday'] . "'>" . $row['Wednesday'] . "</label></h1>";
  }
  $json = json_encode($row);
}
echo"</div>";
mysqli_close($conn);
?>


<?php
$q = intval($_GET['q']);
$conn = mysqli_connect("localhost", "root", "", "info");
if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}

$result = mysqli_query($conn, "SELECT * FROM dr where id = '" . $q . "'");
echo "<div class='card2'>";
echo '<h1>Thursday</h1>';
while ($row = mysqli_fetch_array($result)) {
  if ($row['Thursday'] != 0) {
      echo"<h1><label ><input type='radio' id='Thursday' name = 'time' onclick='selected()' value= '" . $row['Thursday'] . "'>" . $row['Thursday'] . "</label></h1>";
  }
  $json = json_encode($row);
}
echo"</div>";
mysqli_close($conn);
?>


<?php

$q = intval($_GET['q']);
$conn = mysqli_connect("localhost", "root", "", "info");
if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}

$result = mysqli_query($conn, "SELECT * FROM dr where id = '" . $q . "'");
echo "<div class='card2'>";
echo '<h1>Friday</h1>';
while ($row = mysqli_fetch_array($result)) {
  if ($row['Friday'] != 0) {
      echo"<h1><label ><input type='radio' id='Friday' name = 'time' onclick='selected()' value= '" . $row['Friday'] . "'>" . $row['Friday'] . "</label></h1>";
  }
  $json = json_encode($row);
}
echo"</div>";
mysqli_close($conn);
?>

<?php

$q = intval($_GET['q']);
$conn = mysqli_connect("localhost", "root", "", "info");
if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}

$result = mysqli_query($conn, "SELECT * FROM dr where id = '" . $q . "'");
echo "<div class='card2'>";
echo '<h1>Saturday</h1>';
while ($row = mysqli_fetch_array($result)) {
  if ($row['Saturday'] != 0) {
      echo"<h1><label ><input type='radio' id='Saturday' name = 'time' onclick='selected()' value= '" . $row['Saturday'] . "'>" . $row['Saturday'] . "</label></h1>";
  }
  $json = json_encode($row);
}
echo"</div>";
mysqli_close($conn);
?>

<?php

$q = intval($_GET['q']);
$conn = mysqli_connect("localhost", "root", "", "info");
if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}

$result = mysqli_query($conn, "SELECT * FROM dr where id = '" . $q . "'");
echo "<div class='card2'>";
echo '<h1>Sunday</h1>';
while ($row = mysqli_fetch_array($result)) {
  if ($row['Sunday'] != 0) {
      echo"<h1><label ><input type='radio' id='Sunday' name = 'time' onclick='selected()' value= '" . $row['Sunday'] . "'>" . $row['Sunday'] . "</label></h1>";
  }
  $json = json_encode($row);
}
echo"</div>";
mysqli_close($conn);
?>

</div>

</script>

</body>
<script>
function redir()
{
alert('Recorded Data...');
window.location.assign('index.html');
}
</script>

</html>