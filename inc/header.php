<?php
$phone = "5574xxxx";
?>
<head>
  <meta charset="utf-8">
  <title><?php echo $pageTitle ?></title>
  <link rel="stylesheet" href="main.css">
  <link rel="icon"  type="image/png" href="img/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header class="main-header">
  <nav class="main-nav" id="nav">
    <div class="logo item"><img class="logo" src="img/full-logo.png">
    <div class="phone item-1"><a href=<?php echo "tel:$phone"?> ><?php echo "ph: " . $phone ?></a></div>
    </div>
    <span id="disclaimer"><em>THIS WEBSITE FOR DEMO PURPOSES ONLY<br>THIS BUSINESS IS NOW CLOSED</em></span>
    <ul class="main-nav">
        <li class="item"><a href="index.php">Home</a></li>
        <li class="item"><a href="about.php">About</a></li>
        <li class="item"><a href="lessons.php">Lessons</a></li>
        <li class="item"><a href="teachers.php">Teachers</a></li>
        <li class="item"><a href="location.php">Location</a></li>
    </ul>
  </nav>
</header>
<body>