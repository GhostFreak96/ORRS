<?php
session_start();
	
require('firstimport.php');
mysqli_select_db($conn,"$db_name") or die("cannot select db");

$pnrno=$_POST['pnrval'];
$tot=$_POST['total'];
$name23=$_POST['name23'];
					
					$PassQuery="select COUNT(*) from booking where pnr=$pnrno";
					$count=mysqli_query($conn,$PassQuery);
					$row = mysqli_fetch_array($count);
					$PassCount=$row['COUNT(*)'];
					$tot1=$tot*$PassCount;
					
					$sql="delete from booking where pnr=".$_POST['pnrval'];
					$result=mysqli_query($conn,$sql);
										
					$sql="update users set credits=credits+".($tot1)." where f_name='".$name23."'";
					$result=mysqli_query($conn,$sql);
					
					echo "<script>alert(\"Reservation has been cancelled and your credits have been added to your account \")</script>";
					echo "<script>setTimeout(function (){location.href='reservation.php';},50)</script>";
				

?>