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

<div class="row" id="t">

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
<p id="bgformg">Show Your Skills</p>
<p id="bgformi">Home | Team</p>
</div></div>
<div class="row">
<div class="col-md-12">
<p id="fp">Register As A Team For Our Tournaments</p>

<h1 id="fh">Let's Show Your Team's Skills To India</h1>
<form action="" method="post">
<div class="form-group" id="form">
<div class="row">
<div class="col-md-12">
<label class="labelfn">Team Name</label><br>
<input type="text" placeholder="Enter Your Team Name" class="nonen form-control"name="teamname" required >


<label class="labelf">Player 1</label><br>
<input type="text" placeholder="Name Of Player 1" class="nonen form-control"name="player1" required >

<label class="labelf">Player 2</label><br>
<input type="text" placeholder="Name Of Player 2" class="nonen form-control"name="player2" required >

<label class="labelf">Player 3</label><br>
<input type="text" placeholder="Name Of Player 3" class="nonen form-control"name="player3" required >

<label class="labelf">Player 4</label><br>
<input type="text" placeholder="Name Of Player 4" class="nonen form-control"name="player4" required >

<label class="labelf">Player 5</label><br>
<input type="text" placeholder="Name Of Player 5" class="nonen form-control"name="player5" required >

<label class="labelf">Player 6</label><br>
<input type="text" placeholder="Name Of Player 6" class="nonen form-control"name="player6" required >

<label class="labelf">Player 7</label><br>
<input type="text" placeholder="Name Of Player 7" class="nonen form-control"name="player7" required >

<label class="labelf">Player 8</label><br>
<input type="text" placeholder="Name Of Player 8" class="nonen form-control"name="player8" required >

<label class="labelf">Player 9</label><br>
<input type="text" placeholder="Name Of Player 9" class="nonen form-control"name="player9" required >

<label class="labelf">Player 10</label><br>
<input type="text" placeholder="Name Of Player 10" class="nonen form-control"name="player10" required >

<label class="labelf">Player 11</label><br>
<input type="text" placeholder="Name Of Player 11" class="nonen form-control"name="player11" required >

<label class="labelf">Player 12</label><br>
<input type="text" placeholder="Name Of Player 12" class="nonen form-control"name="player12" required >

<label class="labelf">Player 13</label><br>
<input type="text" placeholder="Name Of Player 13" class="nonen form-control"name="player13" required >

<label class="labelf">Player 14</label><br>
<input type="text" placeholder="Name Of Player 14" class="nonen form-control"name="player14" required >


<label class="labelf">Player 15</label><br>
<input type="text" placeholder="Name Of Player 15" class="nonen form-control" name="player15" required >

<button class="sendmessage" name="btnsendmessage">Submit</button>
</div>


</div>
</form>


<?php 

if (isset($_POST['btnsendmessage']))
{
	
	
$teamname=$_POST['teamname'];	
	
$player1=$_POST['player1'];

$player2=$_POST['player2'];

$player3=$_POST['player3'];

$player4=$_POST['player4'];

$player5=$_POST['player5'];

$player6=$_POST['player6'];

$player7=$_POST['player7'];


$player8=$_POST['player8'];

$player9=$_POST['player9'];

$player10=$_POST['player10'];

$player11=$_POST['player11'];

$player12=$_POST['player12'];

$player13=$_POST['player13'];

$player14=$_POST['player14'];

$player15=$_POST['player15'];



$query="insert into team(player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12,player13,player14,player15) values('$player1','$player2','$player3','$player4','$player5','$player6','$player7','$player8','$player9','$player10','$player11','$player12','$player13','$player14','$player15')";

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


</div>

<?php

include'footer.php';
?>
</div>


</body>
</html>