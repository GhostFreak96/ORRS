<?php
session_start();
	
require('firstimport.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
$tbl_name="booking";
$pnrno=$_POST['pnrval'];

mysqli_select_db($conn,"$db_name") or die("cannot select db");
	$sql="SELECT Tnumber,doj,Name,Age,Sex,Status,DOB,class,fromstn,tostn,seatno FROM $tbl_name WHERE (pnr=$pnrno)";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) < 1){
		
		echo "<script>alert(\"This PNR is invalid! Try again! \")</script>";
		echo "<script>setTimeout(function (){location.href='cancellation.php';},100)</script>";
		//header("location:cancellation.php");
		
	}
	$row = mysqli_fetch_array($result);
	$name1=$_SESSION['name'];
	$tno=$row['Tnumber'];
	$doj=$row['doj'];
	$fromstn=$row['fromstn'];
	$tostn=$row['tostn'];
	$DOB=$row['DOB'];
	$class=$row['class'];
	
?>
	<!DOCTYPE html>
<html>
<head>
	<title> Reservation </title>
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
				<a class="brand" href="DEV_reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT US</a>
				</div>
			</div>
		</div>
		
		<div class="span12 well">
			<div align="center" style="border-bottom: 3px solid #ddd;">
				<h2>Cancel Ticket</h2>
			
			</div>
			<br>
		
	<div >
				<table  class="table">
				<col width="90">
					<col width="90">
				<col width="90">
				<col width="110">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<tr>
					<th style="width:10px;border-top:0px;">PNR No</th>
					<th style="width:100px;border-top:0px;">Train Number</th>
					<th style="width:100px;border-top:0px;">Date Of Journey</th>
					<th style="width:100px;border-top:0px;">Name</th>
					<th style="width:100px;border-top:0px;">Age</th>
					<th style="width:100px;border-top:0px;">From</th>
					<th style="width:100px;border-top:0px;">To</th>
					<th style="width:100px;border-top:0px;">Class</th>
					<th style="width:100px;border-top:0px;">Seat No</th>
					<th style="width:100px;border-top:0px;">Status</th>
				</tr>
				<?php


				$PassQuery="select COUNT(*) from booking where pnr=$pnrno";
				$count=mysqli_query($conn,$PassQuery);
				$row = mysqli_fetch_array($count);
				$PassCount=$row['COUNT(*)'];	
				
				
				//echo "the doj is :".$doj."<br>";
				$sql2="Select ".$class." from train_list WHERE Number=$tno";
				$sql2;
				$result2=mysqli_query($conn,$sql2);
				while($row=mysqli_fetch_array($result2)){
					$GLOBALS['amt']=$row[$class];
				}
				?>





	
				<?php
				$sql="SELECT Tnumber,doj,Name,Age,Sex,Status,DOB,class,fromstn,tostn,seatno FROM $tbl_name WHERE (pnr=$pnrno)";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($result)){
						
					
				?>
				<tr class="text-error">
					<th style="width:10px;"> <?php echo $pnrno; ?> </th>
					<th style="width:100px;"> <?php echo $row['Tnumber']; ?> </th>
					<th style="width:100px;"> <?php echo $row['doj']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Name']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Age']; ?> </th>
					<th style="width:100px;"> <?php echo $fromstn; ?> </th>
					<th style="width:100px;"> <?php echo $tostn; ?> </th>
					<th style="width:100px;"> <?php echo $class; ?> </th>
					<th style="width:100px;"> <?php echo $row['seatno']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Status']; ?> </th>
				</tr>
				<?php 
					}
					
				?>
					
				
				
				
				</table>
				<table class="table">
				<tr class="text-info">
				<td>Amount Paid :<?php $n=2; $tot=($n-1)*$amt;echo $tot*$PassCount;?></td>
				</tr>
				</table>
				<form method="POST" action="cancellation_helper.php">
				<input type="hidden" name="pnrval" value="<?php echo $pnrno?>">
				<input type="hidden" name="total" value="<?php echo $tot?>">
				<input type="hidden" name="name23" value="<?php echo $_SESSION['name']?>">
				<center><input type="submit" name="button1" class="btn btn-info" value="Cancel Booking"/></center>
				</form>
		
	</div>
</body>
</html>	