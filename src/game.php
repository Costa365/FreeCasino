<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Free Casino</title>
  <link href="entireframework.min.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
 <?php
   include_once('cms.php');
   $url = cms::getLinkBySlug(basename($_GET["g"]));
   echo "<script>";
   echo "if( /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ){";
   echo "window.location = '$url'; }";
   echo "</script>";
 ?>
 </head>
 <body>
 <div class="main-container">
 <div id="game-nav" class="top-nav">
  <a class="pagename current" href="/"><img class="top-nav-image-game" src="images/logo.png"></a>
  <div class="top-nav-image-icons">
  <img class="top-nav-image-icon" src="images/expand.png" onclick="fullscreen()">
  <img class="top-nav-image-icon" src="images/close.png" onclick="location.href='/';">
  </div>
 </div>
 <div id="game" class="game-container">
 <script type="text/javascript" src="js/size-game.js"></script>
 <?php
   echo "<iframe class='responsive-iframe stage' src='$url' frameborder='0'> </iframe>";
 ?>
 </div>
 </div>
</html>

