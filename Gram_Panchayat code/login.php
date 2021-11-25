<?php

	 $con = mysqli_connect('localhost','root','');
	 mysqli_select_db($con,'flight1');
	 $sql="SELECT * FROM flight2t where fid='$_GET[log]'";
	
	 $exec=mysqli_query($con,$sql);
		 
	 	 session_start();
			while($row=mysqli_fetch_row($exec))

{
	
	
$_SESSION['fid1']=$row[0];
$_SESSION['fid2']=$row[1];
$_SESSION['fid3']=$row[2];
$_SESSION['fid4']=$row[3];
$_SESSION['fid5']=$row[4];
$_SESSION['fid6']=$row[5];
$_SESSION['fid7']=$row[6];
$_SESSION['fid8']=$row[7];
$_SESSION['fid9']=$row[8];
$_SESSION['fid10']=$row[9];
$_SESSION['fid11']=$row[10];
$_SESSION['fid12']=$row[12];

header("location:login2.php");
} 
	 
?>