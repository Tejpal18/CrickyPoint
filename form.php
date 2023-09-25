<?php
include "connection.php";
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
<div class="row" id="s">

<div class="col-md-12">
<div class="row p-2" >

<div class="col-md-4">
<div class="nav">
<a class="nav-brand" href="#">
<img src="Logo1.png" width="300px" height="300px" class="logom" ></a>
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
<p id="bgformg">Get In Touch</p>
<p id="bgformk">Home | Contact Us</p>
</div></div>
<div class="row">
<div class="col-md-12">
<p id="fp">Get in Touch with Us</p>

<h1 id="fh">Don't hesitate to contuct us</h1>
<form action="" method="post">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439.4338701369275!2d74.8798814146037!3d30.452146806153163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39174be4c29f60cf%3A0xbbecbd4b85f4cecc!2sJaitu%20Cricket%20Club!5e0!3m2!1sen!2sin!4v1661476306907!5m2!1sen!2sin" width="1350px" height="500px" id="mapset" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<div class="form-group" id="form">
<div class="row">
<div class="col-md-6">
<label class="labelfn">Name</label><br>
<input type="text" placeholder="Name" class="nonen form-control"name="name" required >
</div>
<div class="col-md-6">
 <label class="labelfn">Phone</label><br>
 <input type="tel" placeholder="Phone" class="nonen form-control" name="phone"required ><br></div></div>
 
 <label class="labelf">Subject</label><br> 
<input type="text" placeholder="Subject" class="none form-control" name="subject"required ><br>

<label class="labelf">Message</label><br> 
<textarea rows="100" cols="20" class="noneme form-control" name="message" placeholder="Message">
</textarea><br>

<button class="sendmessage" name="btnsendmessage">Send Message</button>
</div>
</form>


<?php 

if (isset($_POST['btnsendmessage']))
{
$name=$_POST['name'];

$subject=$_POST['subject'];

$message=$_POST['message'];
$phone=$_POST['phone'];
$query="insert into contact(name,subject,message,phone) values('$name','$subject','$message','$phone')";

if(mysqli_query($con,$query))
{
	
	echo"<script>alert('Data Inserted')</script>";
}
else{
	
	echo mysqli_error($con);
}
}
?>
</div>
</div>

<div class="row" id="margin1">
<div class="col-md-4 offset-1 opening">
<img src="clock.png" width="150px" height="140px" class="openingmargin">
<h3 class="openingtext">Opening Hours</h3>
<p class="openingexp">6:00 AM-8:00 AM & 4:00 PM-7:00 PM</p></div>

<div class="col-md-4 opening1">
<img src="phonef.png" width="150px" height="140px" class="openingmargin">
<h3 class="openingtext">Phone Number</h3>
<p class="openingexp">+91 7347470554</p>



</div></div>

<div class="row" id="margin1">
<div class="col-md-4 offset-1 opening">
<img src="email.png" width="150px" height="140px" class="openingmargin">
<h3 class="openingtext">Mail Address</h3>
<p class="openingexp">tejpal7718@gmail.com</p></div>

<div class="col-md-4 opening1">
<img src="location.png" width="150px" height="140px" class="openingmargin">
<h3 class="openingtext" >Location</h3>
<p class="openingexp">Near Civil Hospital,Jaitu-Faridkot</p>



</div></div>

<?php

include'footer.php';
 ?>

</div>

</body>
</html>