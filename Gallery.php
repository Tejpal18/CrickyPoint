
<?php

include'connection.php'
?>

<html>
<head>
<title>
</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="http://fonts.cdnfonts.com/css/brittany-signature" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
<div class="row" id="gallerybg">
<div class="col-md-12">
<div class="row p-2" >
<div class="col-md-4">
<div class="nav">
<a class="nav-brand" href="#">
<img src="Logo.png" width="200px" height="80px" ></a>
</div></div>
<div class="col-md-6">
<div class="nav" id="navmargin">
<a href="home.php" class="nav-link" id="navh"
><span>Home</span></a>
<a href="ourcoaches.php" class="nav-link" id="navh"><span>Our Coaches</span></a>
<a href="gallery.php" class="nav-link" id="navh"><span>Gallery</span></a>
<a href="blog.php" class="nav-link text-light" id="navh"><span>Blogs</span></a>
<a href="form.php" class="nav-link text-light" id="navh"><span>Contact Us</span></a>
</div></div>
<div class="col-md-2" id="booknow"> 

<a href="player.php"><button class="register">Register</button></a>
</div>
</div>



</div>



<div class="row">
<div class="col-md-6">
<p id="ourgallery">Our Gallery</p></div>
<div class="col-md-6"><p id="bgformga">Home | Gallery </p></div></div>




</div>


<div class="row" id="gr">
<div class="col-md-12">
<p class="gcb">CrickyPoint's Gallery</p>
<hr id="ghr">
<p class="gg">Here is a Glimpse of CrickyPoint's Journey</p>
</div>
</div>
<div class="row" id="gr">
<div class="col-md-5 gc" >
<img src="association.png" width="100%" height="100%">

<h3 id="associationmargin">CrickyPoint Association</h3>

</div>

<div class="col-md-5 gc1" >
<img src="yuvi.jpg" width="100%" height="100%">

<h3 id="associationmargin">Yuvraj Singh Visited</h3>

</div>

</div>


<div class="row" id="gr1">
<div class="col-md-5 gc" >
<img src="cricketw.jpg" width="100%" height="100%">

<h3 id="associationmargin">Women's Cricket</h3>

</div>

<div class="col-md-5 gc1" >
<img src="senior.jpg" width="100%" height="100%">

<h3 id="associationmargin">Senior's Chapmionship </h3>

</div>

</div>

<div class="row" id="gr1">
<div class="col-md-5 gc" >
<img src="blog1.jpg" width="100%" height="100%">

<h3 id="associationmargin">U-19 Cricket</h3>

</div>

<div class="col-md-5 gc1" >
<img src="pm.jpg" width="100%" height="100%">

<h3 id="associationmargin">Practice Matches</h3>

</div>

</div>

<div class="row" id="gr1">
<div class="col-md-5 gc2" >
<img src="won.jpg" width="100%" height="100%">

<h3 id="associationmargin">FDCA Cricket Cup Won</h3>

</div>

<div class="col-md-5 gc3" >
<img src="drills.jpg" width="100%" height="100%">

<h3 id="associationmargin">Drills Sessions</h3>

</div>

</div>





<?php
include'footer.php';
?>

 </div>
</body>
</html>