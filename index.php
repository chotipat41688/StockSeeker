  <?php
// Start the session
session_start();
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

    <?php header('Access-Control-Allow-Origin: *'); ?>
    <script type="text/javascript">
    $(document).ready(function(){
         $.getJSON("http://stockseeker.busseeker.in.th/getnews.php",
         function(data) {
            console.log(data);         
          });   
    });

    $(document).ready(function(){
         $.ajax({ 
             type: "GET",
             dataType: "json",
             url: "http://stockseeker.busseeker.in.th/getnews.php",
             success: function(data){        
                console.log(data);
                $a = data;
                $('#invTitle1').html($a[0].title);
                $('#invSubTitle1').html($a[0].subtitle);
                $( "#invImgTitle1" ).attr('src', '/'+$a[0].image );

                $('#invTitle2').html($a[1].title);
                $('#invSubTitle2').html($a[1].subtitle);
                $( "#invImgTitle2" ).attr('src', '/'+$a[1].image );

                $('#advTitle1').html($a[2].title);
                $('#advSubTitle1').html($a[2].subtitle);

                $('#advTitle2').html($a[3].title);
                $('#advSubTitle2').html($a[3].subtitle);

                $('#advTitle3').html($a[4].title);
                $('#advSubTitle3').html($a[4].subtitle);

                $('#contentTitle1').html($a[5].title);
                $('#contentSubTitle1').html($a[5].subtitle);

                $('#contentTitle2').html($a[6].title);
                $('#contentSubTitle2').html($a[6].subtitle);

                $('#contentTitle3').html($a[7].title);
                $('#contentSubTitle3').html($a[7].subtitle);
      

             }
         });
    });

</script>


  </head>
  <body>
    <div class="wrapper">
      <div class="top-strip">
        <div class="logo">
          <!--<h1>sitename</h1>-->
          <!--<h2>lorem ipsum</h2>-->
          <img src="images/logofinal.png"/>
        </div>
          <?php  
              if (isset($_SESSION['username'])){
                echo '<div > <p><a href="insertNews.php">Add News(Logged in as Admin)</a></p></div>';
                echo '<div > <p><a href="logout.php">Logout</a></p></div>';

              }
              else
              {
          echo '<div class="login">
            <p><a href="Login.php">login</a></p>
          </div>';
              }
          ?>
        <div class="clearing"></div>
        <!--Navigator bar-->
        <div> 
          <nav style="text-align:center">
            <ul>
              <li><a href="#">Home</a></li>
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

      <!--banner-->
      <div class="banner-wrapper" style="margin-top:20px;  ">
       <div id="carousel">
        <div id="slides">
          <ul>
            <li><img src="images/slice1.png"  alt="Slide 1"/></li>
            <li><img src="images/slice1.png"  alt="Slide 2"/></li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div id="buttons"> <a href="#" id="prev">prev</a> <a href="#" id="next">next</a>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="clearing"></div>

    <div class="clearing"></div>

    <!--- panel wrapper div end -->
    <div class="page-wrapper">
     <div class="primary-content marRight40">
       <div class="panel">
         <div class="title">
          <h1>ข่าวการลงทุน</h1>
        </div>
        <div class="left marRight30">
          <div class="imgbg">
            <div class="img"><img height="100" width="100" id="invImgTitle1" src="images/img3.jpg"  /></div>
          </div>
        </div>
        <div class="right">
          <p><span id="invTitle1" >ข่าวการลงทุนที่ 1</span><br/>
            <div id="invSubTitle1">เนื้อหาของข่าว.</div></p>
          </div>
        </div>

        <div class="panel bdrBottom">
        	
          <div class="left marRight30">
            <div class="imgbg">
              <div class="img"><img id="invImgTitle2" src="images/img4.jpg" height="100" width="100" /></div>
            </div>
          </div>
          <div class="right">
            <p><span id="invTitle2" >ข่าวการลงทุนที่ 2</span><br/>
             <div id="invSubTitle2">เนื้อหาของข่าว.</div></p>
           </div>
         </div>
       </div>

       <div class="sidebar">
        <div class="title">
          <h1>ข่าวประชาสัมพันธ์ </h1>
        </div>
        <div class="left marRight20">
          <div class="imgbg">
            <div class="img"><img src="images/img5.jpg" /></div>
          </div>
        </div>

        <div class="right">
          <p><span id="advTitle1">01. หัวข้อประชาสัมพันธ์ที่ 1</span><br/>
            <div id="advSubTitle1">เนื้อหาของข่าว.</div> </p>
            <p><span id="advTitle2">02. หัวข้อประชาสัมพันธ์ที่ 2</span><br/>
              <div id="advSubTitle2">เนื้อหาของข่าว.</div></p>
              <p><span id="advTitle3">03. หัวข้อประชาสัมพันธ์ที่ 3</span><br/>
                <div id="advSubTitle3">เนื้อหาของข่าว.</div> </p>
              </div>
            </div>
          </div>
          <!--- page wrapper div end -->
          <div class="footer-wrapper">
           <div class="footer">
             <div class="panel marRight30">
               <div class="title">
                 <h1 id="contentTitle1">เนื้อหาอันที่ 1</h1>
               </div>
               <div class="content" id="contentSubTitle1">
                 <p>ฉันแพ้ทางคนอย่างเธอ มันเอาแต่เผลอไม่กินไม่นอน โปรดจงรู้เอา โปรดเถอะขอวอน หยุดน่ารักไหม ใจฉันกำลังละลาย.</p>
               </div>
               <div class="btnmore"><a href="#">more</a></div>
             </div>

             <div class="panel marRight30">
               <div class="title">
                 <h1 id="contentTitle2">เนื้อหาอันที่ 2</h1>
               </div>
               <div class="content" id="contentSubTitle2">
                 <p>ฉันแพ้ทางคนอย่างเธอ มันเอาแต่เผลอไม่กินไม่นอน โปรดจงรู้เอา โปรดเถอะขอวอน หยุดน่ารักไหม ใจฉันกำลังละลาย.</p>
               </div>
               <div class="btnmore"><a href="#">more</a></div>
             </div>

             <div class="panel">
               <div class="title">
                 <h1 id="contentTitle3" >เนื้อหาอันที่ 3</h1>
               </div>
               <div class="content" id="contentSubTitle3">
                 <p>ฉันแพ้ทางคนอย่างเธอ มันเอาแต่เผลอไม่กินไม่นอน โปรดจงรู้เอา โปรดเถอะขอวอน หยุดน่ารักไหม ใจฉันกำลังละลาย.</p>
               </div>
               <div class="btnmore"><a href="#">more</a></div>
             </div>

           </div>
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
