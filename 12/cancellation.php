<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title> Cancellation </title>
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
			<div id="heading">
				<a href="index.html">Indian Railways</a>
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
		
		<!-- Login and signup -->
		<div align="center">
		
		<?php
			if(isset($_SESSION['error']))
			{
			 if(isset($_SESSION['name']))
			 {
				
			 }
			 else if($_SESSION['error']==15)
			 {
				
		?>
				
		<?php	 }
			}
			//else{ echo "hi";}
		?>
			<br />
			<br />
		<div  class=" well login">
			<form class="form-signin " method="post" action="showpnrres.php">
		<br>
			<table class="table" style="margin-bottom:4px;">
			
			<tr>
			<td style="border-top:0px;"><label> Enter PNR</label></td>
			<td style="border-top:0px;"> <input type="text" name="pnrval" class="input-block-level" placeholder=""></td>
			</tr>
			<tr>
			<td colspan=2 style="border-top:0px; visibility:hidden;" id="wrong"  class="label label-important">Username and Password Wrong !!!</td>
			</tr>
			<tr>
			<td style="border-top:0px;"><input class="btn btn-info" type="submit" value="Search"></td>
			</tr>
			
						
			</table>
			</form>
		</div>
		</div>
		<br/>
		<!-- Footer -->
	
	</div>
</body>
</html>
<?php
/*$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="railres"; // Database name

$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($conn,"$db_name") or die("cannot select db");
$pnrno=$_REQUEST['pnrval'];
$sql="SELECT pnr FROM booking WHERE pnr= $pnrno";
$pnrQuery=mysqli_query($conn,$sql);
//$pnrQuery=$conn->query($sql);


if(mysqli_num_rows($pnrQuery)==0 ){
	echo "<script>document.getElementById(\"wrongpnr\").style.visibility=\"\";</script>";
	header("location:cancellation.php");
}


/*if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)


}
*/


?>	