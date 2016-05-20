<?php 
  session_start();
  echo $_SESSION['username'];
  if (isset($_SESSION['username'])) { 
      //echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
  } else {
      die("Please login first");
      header('Refresh: 1; URL=http://stockseeker.busseeker.in.th/Login.php');
  }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StockSeeker</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/carouselScript.js"></script>
<link href="css/carousel.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />

</head>
<body>
<div class="wrapper">
  <div class="top-strip">
    <div class="logo">
      <!--<h1>sitename</h1>-->
      <!--<h2>lorem ipsum</h2>-->
      <img src="images/logofinal.png"  alt="Slide 1"/>
    </div>
    <div class="clearing"></div>
     <!--Navigator bar-->
  <div> 
    <nav style="text-align:center">
      <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="#">Stock Info</a></li>
          <li><a href="#">Market</a></li>
         <li>
          <a href="#">Simulator</a>
            <ul class="above">
                <li><a href="#">Themes</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Tutorials</a></li>
            </ul>
         </li>
        <li><a href="#">Tutorial</a>
         <ul class="above">
                <li><a href="#">Themes</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Tutorials</a></li>
            </ul>
        </li> 
    </ul>
  </nav>
</div>

 <!--add news-->



 <div class ="Size">
  <center><h3>เพิ่มข่าว</h3></center>
  <form action="addnewsdata.php" class ="Addnews" method="post" enctype="multipart/form-data">
    <label for="title">ชื่อหัวข้อข่าว</label>
    <input type="text" id="title" name="title">

    <label for="subTitle">รายละเอียดย่อ</label>
    <input type="text" id="subTitle" name="subTitle">

    <label for="detail">รายละเอียดเต็ม</label>
    <textarea class="TextBox" rows="10" style="width:500px" required id="detail" name="detail">
    </textarea>
<br><br>
    <label for="topic">หัวข้อข่าว</label>
    <select id="topic" name="type">
      <option value="1">ข่าวการลงทุน</option>
      <option value="2">ข่าวการประชาสัมพันธ์</option>
      <option value="3">เนื้อหา</option>
    </select>
<br><br><br>
        <label for="title">รูปภาพ</label>
    <input type="file" name="image" id="image">
    ​<br>
    <br>
    <input type="submit" value="Submit">
  </form>
</div>



 <!--- footer wrapper div end -->
 <div class="copyright">
 <p>Copyright (c) stockseeker. All rights reserved. <a href="#"> www.stockseeker.com</a></p>
 </div>
</div>
</div>
<!--- wrapper div end -->
</body>
</html>
