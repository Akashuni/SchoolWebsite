<?php
if (isset($_COOKIE['student']))

{
    include_once('db_connect.php');
header("location:wecome.php");




}
?>



<!DOCTYPE html>
<html>
<head> 
  <title>St. John's Ranchi </title>
  <link href="css/style.css" rel="stylesheet ">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" >
        <meta name="description" content="Education">
        <meta name="keywords" content="school,college,Education,collge in Ranchi,St johns ,st. johns Ranchi">
        <meta name="author" content="Akash Ram">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        
  


</head>
<body>


<nav class="navbar navbar-default" style="margin-bottom: 0px;">
  <div class="container-fluid">
    <div class="row">

    <div class="navbar-header">
      <a ><img class="logo" src="image/logo.jpg"></a>
    </div>
    <ul class="nav navbar-nav  navbar-right">
     <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      
    </ul>
  </div>
  </div>
</nav>


<!--...................end...............................................................-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/img1.jpg" alt="St jhons" width="100%" height="100px">
    </div>

    <div class="item">
      <img src="image/img2.jpg" alt="st jhons" width="100%" height="200px">
    </div>

    <div class="item">
      <img src="image/img3.jpg" alt="st jhons" width="100%" height="100px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 



<!--...................end...............................................................-->

<marquee><h3 class="marquee">Click Here For Admission Details</h3></marquee>


<!--...................end...............................................................-->

<div class="box">
<div class=" row panel  ">
  <div class="imgdoga col-md-2 col-md-offset-1">
    <img  class ="doga" src="image/doga.jpg">
  </div>
  <div class="col-md-8 " >
  <p>inter there speech.</p>
</div>
</div><br>
<div class=" row panel ">
  <div class="col-md-8  col-md-offset-2 text-left" >
  <p>inter there speech.</p>
</div>
  <div class="imgdoga col-md-2 col-md-offset-10">
    <img  class ="doga" src="image/doga.jpg">
  </div>
  
</div><br>

<div class=" row panel  ">
  <div class="imgdoga col-md-2 col-md-offset-1">
    <img  class ="doga" src="image/doga.jpg">
  </div>
  <div class="col-md-8 " >
  <p>inter there speech.</p>
</div>
</div>
</div><br><br>

<!--...................end...............................................................-->



<!-- gallery section -->

<div class="container-fluid">
  <div class="row">
   <div class="col-md-3">
      <img src="image/video_gallery.png" height="25%" width="25%" class="news">
       <a href="gallery.html"><h3 class="text-center">video Gallery</h3></a>
       <h3 class="text-center"><small>Get Ours college function's video</small></h3>
    
    </div>
     <div class="col-md-3 ">
      <img src="image/marks.png" height="25%" width="25%" class="news">
       <a href="result.html"><h3 class="text-center">Result</h3></a>
       <h3 class="text-center"><small>Check your marks </small></h3>
    
    </div>

 <div class="col-md-3">
      <img src="image/android.png" height="25%" width="25%" class="news">
       <a href="android.html"><h3 class="text-center">Android</h3></a>
       <h3 class="text-center"><small>coming soon....</small>
    
    </div>

 <div class="col-md-3">
      <img src="image/newsfeed.png" height="25%" width="25%" class="news">
       <a href="image/gallery.html"><h3 class="text-center">Newsfeed</h3></a>
       <h3 class="text-center"><small>Share your Thoughts on newsfeed Section</small></h3>
    
    </div>
</div>
  


</div><br><br><br>

<!--...................end...............................................................-->


      <div class=" row text-center bg-color">
      <h2 class="title">Student Corner</h2>
      </div><br><br><br>
<!--...................end...............................................................-->

  <div class="row">
    <div class="col-md-2 jumbotron text-center col-md-offset-2">
      <span class="glyphicon glyphicon-book"></span>
      <h4 class="text-center"><a href="#" style="text-decoration:none">Pre Year Question Paper</a></h4>
      <p>Qustion Paper Available</p>
    </div>
    <div class="col-md-2 jumbotron text-center col-md-offset-1">
      <span class="glyphicon glyphicon-book"></span>

    <h4 class="text-center"><a href="#" style="text-decoration:none"> all Assignment</a></h4>
      <p>Get your Assignment </p>
    </div>
    <div class="col-md-2 jumbotron text-center col-md-offset-1 ">
      <span class="glyphicon glyphicon-book"></span>
      <h4 class="text-center"><a href="#" style="text-decoration:none">Complain Section </a></h4>
      <p>free to complain</p>
    </div>
  </div>

  <!--...................end...............................................................-->


<div class="box">
</div>
  <div class="footer"><small>&copy;St john's Ranchi</small></div>

</body>
</html>





