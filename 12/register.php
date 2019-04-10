<?php
session_start();
require('firstimport.php');
$tbl_name="users"; // Table name
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['psd'];
$mail=$_POST['eid'];
$gender=$_POST['gnd'];
$marital=$_POST['mrt'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$ques=$_POST['ques'];
$ans=$_POST['ans'];
$credits=$_POST['addcredits'];

$sql2="select * from $tbl_name";
$result2=mysqli_query($conn,$sql2);
$flag=0;

while($row=mysqli_fetch_array($result2)){
	if($row['email']==$mail){
		//echo ""."matched";
		$flag=1;
		break;
	}
}


if(isset($_SESSION['name'])){}
	else{
	if($flag==1){
	echo "<script LANGUAGE='JavaScript'>alert(\"Please use different emailID and try again! \")</script>";
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='signup.php?value=1';
    </SCRIPT>");
	die("");
	}
	else{
	$sql="INSERT INTO $tbl_name(f_name,l_name,password,email,gender,marital,dob,mobile,ques,ans,credits)
	VALUES ('$fname','$lname','$pass','$mail','$gender','$marital','$dob','$mobile','$ques','$ans','$credits')";
	$result=mysqli_query($conn,$sql);

	$_SESSION['name']=$fname;
	header("location:index.php");
	}
		
		
	}









//echo "f_name ".$f_name."... ".$l_name."... ".$email.".... ".$password.",,, ".$gender.",,,,".$marital."..... ".$dob.".... ".$mobile."....".$ques.",,,,".$ans;
?>