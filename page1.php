<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php BirthDay</title>
  <!-- css -->
  <link rel="stylesheet" href="./dist/css/app.css">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Day of Birth -->
  <?php
  $date = $_POST["date"];
  $dataBirth = explode("-", $date);
  ?>
  <div id="result">
    <span>The </span><?php echo $dataBirth[2] . " " . $dataBirth[1] . " " . $dataBirth[0] ?> <span>was on a </span> <?php echo date("l", mktime(0, 0, 0, (int)$dataBirth[1], (int)$dataBirth[2], (int)$dataBirth[0])); ?>
  </div>

  <!-- happy birthday greetings -->
  <?php
  date_default_timezone_set('Europe/Rome');
  $todayDay = date("d");
  $todayMonth = date("m");
  //echo $todayMonth;
  //echo $todayDay;


  if ($todayDay == (int)$dataBirth[2] && $todayMonth == (int)$dataBirth[1]) {
    echo "<h1>" . "&#127881 HAPPY BIRTHDAY &#127881" . "</h1>";
  }
  ?>
</body>

</html>