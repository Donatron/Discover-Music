<?php
$phone = "5574xxxx";
?>
<head>
  <meta charset="utf-8">
  <title><?php echo $pageTitle ?></title>
  <link rel="stylesheet" href="main.css">
  <link rel="icon"  type="image/png" href="img/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="752" height="80" viewBox="0 0 752 80">
    
    <symbol id="icon-hamburger" width="32" height="32" viewBox="0 0 32 32" x="0" y="0" fill="#fff">
      <path d="M4 10h24c1.104 0 2-0.896 2-2s-0.896-2-2-2h-24c-1.104 0-2 0.896-2 2s0.896 2 2 2zM28 14h-24c-1.104 0-2 0.896-2 2s0.896 2 2 2h24c1.104 0 2-0.896 2-2s-0.896-2-2-2zM28 22h-24c-1.104 0-2 0.896-2 2s0.896 2 2 2h24c1.104 0 2-0.896 2-2s-0.896-2-2-2z"></path>
    </symbol>
    
  </svg>
<header class="main-header">
  <span class="nav-btn nav-toggle">
    <svg>
      <use xlink:href="#icon-hamburger"/>
    </svg>
  </span>
  <nav class="main-nav" id="nav">
    <div class="logo item"><img class="logo" src="img/full-logo.png">
    <div class="phone item-1"><a href=<?php echo "tel:$phone"?> ><?php echo "ph: " . $phone ?></a></div>
    </div>
    <span id="disclaimer"><em>THIS WEBSITE FOR DEMO PURPOSES ONLY<br>THIS BUSINESS IS NOW CLOSED</em></span>
    <ul class="main-nav main-nav-ul">
        <li class="item"><a href="index.php">Home</a></li>
        <li class="item"><a href="about.php">About</a></li>
        <li class="item"><a href="lessons.php">Lessons</a></li>
        <li class="item"><a href="teachers.php">Teachers</a></li>
        <li class="item"><a href="location.php">Location</a></li>
      <span class="nav-toggle item">Close</span>
    </ul>
  </nav>
</header>
<body>