<?php
session_start();
require 'functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<title>GoodJob</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript">
  Shadowbox.init();
</script>
</head>
<body>

<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
      <img src='images/Logo.png' style='width:70px;height:70px;'>
      <h1><a href="#">GoodJob</a></h1>
</div>
    <div id="menu">
      <ul>
        <li class="current_page_item"><a href="#" accesskey="1" title="">首頁</a></li>
        <li><a href="#" accesskey="2" title="">講者介紹</a></li>
        <li><a href="#" accesskey="3" title="">討論區</a></li>
        <li><a href="#" accesskey="4" title="">計畫簡介</a></li>
        <?php if ($_SESSION['FBID']): checkuser( $_SESSION['FBID'],$_SESSION['FULLNAME'],$_SESSION['EMAIL']);?>      <!--  After user login  -->
        <li><a href="#" accesskey="5" title=""><?php echo $_SESSION['FULLNAME']; ?></a><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
        <li><a href="logout.php">登出</a></li>
        <?php else: ?>
        <li><a href="fbconfig.php">登入</a></li>
        <?php endif ?>
      </ul>

    </div>
  </div>
</div>
<div id="header-featured"><iframe width="100%" height="120%" src="https://www.youtube.com/embed/xMnS6PeQ5l8?&autoplay=1" frameborder="0" allowfullscreen></iframe></div>
<br />
<br />
<div id="wrapper">
  <div id="featured-wrapper">
    <div id="featured" class="container">
      <div class="column1">
        <!-- news-->
        <div class="title">
          <h2></h2>
        </div>
        <p>最新消息</p>
      </div>
      <div class="column2">
        <a href="movie/part1.php" rel="shadowbox"; width=600; height=400>FAE 工程師</a><br /><br />
        持續新增...
        <div class="title">
          <h2></h2>
        </div>
        <p><h2>最新上架</h2></p>
      </div>
    </div>
  </div>
  <div id="extra" class="container">
    <h2>聯絡方式</h2>
    <a href="#" class="button">首頁</a> </div>
</div>

<div id="copyright" class="container">
  <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
