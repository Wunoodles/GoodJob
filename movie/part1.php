<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
<style>
body{
  background-image: url("../images/movie_bg.jpg");
  background-color:white;
  background-repeat: no-repeat;
}
.title{
  font-size: 40px;
  font-weight: bolder;
  color:	#0000CC;
  margin:5px;
}
.content{
  width:560px;
  height:315px;
}
.page{
  display: inline-block;
  width: 75px;
  margin:10px;
  height: auto;
  background-color: #CCEEFF;
  border-radius: 15px;
  padding:5px;
  text-align: center;
  cursor:pointer;
  font-size: 20px;
}
.page:hover{
  background-color: #5599FF;
  color:white;
}
.login{
  font-size: 100px;
  color:red;
  margin-top:20%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#1").click(function(){
      $("#content").html('<iframe width="100%" height="600px" src="https://www.youtube.com/embed/zRiRFAEhhUQ" frameborder="0" allowfullscreen></iframe>');
      $(".page").css("background-color","#CCEEFF");
      $("#1").css("background-color","#5599FF");
  });
    $("#2").click(function(){
        $("#content").html('<iframe width="100%" height="600px" src="https://www.youtube.com/embed/jfysx6YbnJY" frameborder="0" allowfullscreen></iframe>');
        $(".page").css("background-color","#CCEEFF");
        $("#2").css("background-color","#5599FF");
    });
    $("#3").click(function(){
        $("#content").html('<iframe width="100%" height="600px" src="https://www.youtube.com/embed/6IilGYa6SDo" frameborder="0" allowfullscreen></iframe>');
        $(".page").css("background-color","#CCEEFF");
        $("#3").css("background-color","#5599FF");
    });
    $("#4").click(function(){
        $("#content").html('<iframe width="100%" height="600px" src="https://www.youtube.com/embed/ZnJTw1hGY-E" frameborder="0" allowfullscreen></iframe>');
        $(".page").css("background-color","#CCEEFF");
        $("#4").css("background-color","#5599FF");
    });
    $("#5").click(function(){
        $("#content").html('<iframe width="100%" height="600px" src="https://www.youtube.com/embed/2akfr0MjRLI" frameborder="0" allowfullscreen></iframe>');
        $(".page").css("background-color","#CCEEFF");
        $("#5").css("background-color","#5599FF");
    });
    $("#6").click(function(){
        $("#content").html('<iframe width="100%" height="600px" src="https://www.youtube.com/embed/RFupDUUbrFU" frameborder="0" allowfullscreen></iframe>');
        $(".page").css("background-color","#CCEEFF");
        $("#6").css("background-color","#5599FF");
    });
    $("#7").click(function(){
        $("#content").html('<iframe width="100%" height="600px" src="https://www.youtube.com/embed/cZJAI79nChE" frameborder="0" allowfullscreen></iframe>');
        $(".page").css("background-color","#CCEEFF");
        $("#7").css("background-color","#5599FF");
    });
});
</script>
</head>
<body>
  <center>
<?php if ($_SESSION['FBID']):?>
<div class='title'>☆FAE 工程師</div>
<div id='content'>
  <iframe width="100%" height="600px" src="https://www.youtube.com/embed/zRiRFAEhhUQ" frameborder="0" allowfullscreen></iframe></div>
<div>
<div class='page' id='1' style='background-color:#5599FF;'>part1 </div>
<div class='page' id='2'>part1_1</div>
<div class='page' id='3'>part1_2</div>
<div class='page' id='4'>part1_3</div>
<div class='page' id='5'>part1_4</div>
<div class='page' id='6'>part1_5</div>
<div class='page' id='7'>part1_6</div>
<?php else:
  //echo "<script>alert('尚未登入！自動轉入登入~'); location.href = '../fbconfig.php';</script>";
?>
<div class='login'> 尚未登入 </div>

<?php endif ?>
</center>
</body>
