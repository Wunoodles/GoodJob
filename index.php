<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Breadth
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140331

-->
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

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

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
        <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
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
          <h2>最新消息</h2>
        </div>
        <p>new posts</p>
      </div>
      <div class="column2">
        <div>
          <ul>
            <li><a href='https://www.youtube.com/watch?v=IhdhyvyExEA' target="_blank">part1_2</li>
            <li><a href='https://www.youtube.com/watch?v=QkJkcCRT_6Y' target="_blank">part1_3</a></li>
          </ul>
        </div>
        <div class="title">
          <h2>最新上架</h2>
        </div>
        <p>new movie</p>
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
