<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/b5b3392b53.js" crossorigin="anonymous"></script>
</head>
<body>
<audio id="loading" src="music/music.mp3" autoplay="true" hidden="true" loop="true"></audio>
<div class="header">
<div class="inner-header flex">
<h1><?php echo $server_name ?></h1>
</div><div class="background"></div>
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
</div>
<div class="content flex">
 <p><i class="fab fa-discord" id="icon"></i><span class="text"><?php echo $discord ?></span></p>
 <div class="space"></div>
 <p><i class="fas fa-globe" id="icon"></i><span class="text"><?php echo $website ?></span></p>
</div>
<script>
  var vid = document.getElementById("loading");
  vid.volume = <?php echo $music_volume ?>;
</script>
</body>
</html>
