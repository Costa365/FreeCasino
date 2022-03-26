<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Free Casino</title>
  <link href="entireframework.min.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="favicon.ico">
  <meta name="description" content="Play slots, table games and solitaire games for free">
  <link rel="canonical" href="http://free-casino.gq/" />
  <meta name="robots" content="index, nofollow">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Extreme Weather Today" />
  <meta property="og:description" content="Extreme weather conditions over the past 24 hours for all continents" />
  <meta property="og:image" content="http://free-casino.gq/images/banner.jpg" />
  <meta property="og:url" content="http://free-casino.gq/" />
  <meta property="og:site_name" content="Free Casino" />
 </head>
 <body>
 <div class="main-container">
 <div>
  <a class="pagename current" href="/"><img class="top-nav-image" src="images/logo.png"></a>
 </div>
 <div>
    <img class="banner-image" src="images/banner.jpg">
  </div>
 <div class="flex-container">
 <?php
 include_once('cms.php');
 $ct = cms::readContent('sites');
 foreach ($ct as $k => $v) {
    echo "<div class='flex-item game-thumb divmulti'>";
    echo "<img src='{$ct[$k]['image']}'><a href='game.php?g={$ct[$k]['slug']}'><img style='opacity:1' class='playoverlapmulti playbutton' src='images/play.png'></a></div>";    
 }
 ?>
 </div>
 <?php include_once('footer.php');?>
 <div>&nbsp;</div>
 </div>
 </body>
</html>
