<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> About US </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
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
			 }
			?>
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="DEV_reservation.php">NEW BOOKING</a>
				<a class="brand" href="display.php">TICKETS</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				

				</div>
			</div>
		</div>
		
		<div class="span12 well">
		
			<div  style="float:left; margin-right:200px; margin-top:50px;">
				<div align="left" style="font-size:36px; font-family:'Viner Hand ITC';" > About Us &nbsp;  
					<hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:500px;" />
				</div>
				<div >
					<div  style="margin-left:100px; ">
						<table style="padding:5px;">
							<tr> 
								<td > Name &nbsp; </td>
								<td style="font-family:Kristen ITC;"> : Sanwar Hussain</td>
							</tr>
							<tr>
								<td > Profession &nbsp; </td>
								<td style="font-family:Kristen ITC;"> : B.Tech. Information Technology ** </td>
							</tr>
							<tr>
								<td > University &nbsp; </td>
								<td style="font-family:Kristen ITC;"> : Narula Institute of Technology </td>
							</tr>
							
							
						</table>
						<div style="margin-top:20px;">
							
						</div>
					</div>
				</div>
			</div>
			
			
			<div style="margin-left:195px; float:right;" >
				<hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:500px; margin-top:10px;" />
				<div class="about-detail" style="margin-left:110px; margin-top:15px;">
					<table style="padding:5px;">
						<tr> 
							<td> Name &nbsp; </td>
							<td style="font-family:Kristen ITC;"> : Parama Sarbajna</td>
						</tr>
						<tr>
							<td> Profession &nbsp; </td>
							<td style="font-family:Kristen ITC;"> : B.Tech. Information Technology ** </td>
						</tr>
						<tr>
							<td> University &nbsp; </td>
							<td style="font-family:Kristen ITC;"> : Narula Institute of Technology </td>
						</tr>
					</table>
					<div style="margin-top:20px;">
						
					</div>
			
				</div>
			</div>
	
	</div>
	
</body>
</html>