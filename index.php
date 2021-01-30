<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-BirthDay</title>
  <!-- css -->
  <link rel="stylesheet" href="./dist/css/app.css">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h1>What day of the week were you born?</h1>
    <!-- FORM -->
    <form action="page1.php" method="post">
      <label>Enter your date of birth</label>
      <input type="date" name="date">
      <br>
      <input class="btn" type="submit" value="&#10067">
    </form>
  </div>


</body>

</html>