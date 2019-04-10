<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Indian Railways </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="/12/img/logo.png"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="DEV_reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT US</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="/12/img/11.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="/12/img/Antyodya.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="/12/img/inside.jpeg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="/12/img/rail.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="/12/img/train.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="/12/img/7.jpg"style="width:600px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" Style="float:right;">
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="294px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<p><b>India has some of the most spectacular and unforgettable rail journeys in the world. Here you experience a simple way to find out everything you need to know in one easy place. There's no better way to enjoy India's outback, cities, coastal towns and regional areas in comfort.</b></p>
				</br>
				<p><b>The Railway ministry has posted the rate list on its Twitter account while asking people to lodge a complaint if they are overcharged.</b></p></br>
				<p><b>International Tourist Bureaus issue reserved tickets to the Foreign Tourists and NRIs holding valid passport against payment in US dollars, Pounds, Sterling,Euros and indian Rupees. These Bureaus also sell Indrail passes which are issued to foreign tourists / NRIs on production of valid passport and valid visa.Indrail pass entitles the pass holder to travel as he likes over the entire Indian Railways with out any route restriction within the period of validity of IRP. Indrail pass however, does not guaranty reserved accommodation.</b></p></br>
				<p><b>Railway issues new catering policy for better food.</b></p></br>
				<p><b>PPlease help Indian railways and government of India in moving towards a digitized and cashless economy. Eradicate black money.</b><p></br>
			
				
				</div>
			</marquee>
			</div>
		</div>
		
	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>