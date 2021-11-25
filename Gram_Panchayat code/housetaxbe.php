<html>
<head> 
<link rel="stylesheet" type="text/css" href="stylesheet.css" >

<style>
.navbar {
  overflow: hidden;
  background-color:#606;
  font-family: Arial, Helvetica, sans-serif;
   }

.navbar a {
	
	
	 width:170px;
	
	height:40px;
	line-height:50px;
	
	
	
  float: left;
  font-size:18px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {

  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
	
	 width:170px;
	
	height:50px;
	line-height:50px;
	
	
	
  font-size:18px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:#3C3;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<title>Gram panchayt</title>

</head>
<body background="blueshades3.jpg">



<div><table> <tr>
<td>
<image src="smartgram.png" width=1000 height=200 ></td> 
  <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td> 
<td align="right">
<font size="+3" color="#660066"><b>
USER:&nbsp;&nbsp;</font></b>
<font size="+2" color="#660066">
<u><i>
<?php

session_start();

$uname = $_SESSION['username'];

if(isset($_SESSION['username']))
{echo $uname;
}
else{
	echo <<<_END
	<script type="text/javascript">
alert("Please Login Again!!!!!");
	
	window.location.href="login.html";
	
</script>
_END;
}
?>


</i></u></font></td></tr></table>

</div> <br>






<div class="navbar">
  <a href="homepageaa.php">Home</a>
  
  
  
  
  <div class="dropdown">
    <button class="dropbtn">About Us
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="introductiona.php">Introduction</a>
      
      <a href="taxesintroa.php">Taxes</a>
      
      <a href="billsintroa.php">Bill Payment</a>
    </div>
  </div> 
  
  
  <div class="dropdown">
    <button class="dropbtn">Taxes 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="wealthtax.php">Wealth Tax</a>
      
      <a href="watertax.php">Water Tax</a>
      
      <a href="housetax.php">House Tax</a>
    </div>
  </div> 
  
  
  <div class="dropdown">
    <button class="dropbtn">Bill Payment 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="phone.php">Phone Bill</a>
      
      <a href="electricity.php">Electricity</a>
    </div>
  </div> 
  
  
  
  
  <div class="dropdown">
    <button class="dropbtn">Contact Us 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="contact.html">All Contacts</a>
      
      
    </div>
  </div> 
  
  <a href="complaint.php">Complaint</a>
  

<a href="trans.php">Transcations</a>
    
  
<a href="sessd.php" onClick="logout()">Logout</a>
  

</div>



<br><br>


<big><b><center><u>HOUSE TAX</u></center></b></big>


<br><br><br>
<?php



$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='gram';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$db_server) die("Unable to connect".mysqli_error());

$dt = "UPDATE housetax SET paydate=CURRENT_DATE() WHERE  assessmentno= '".$_POST['assessmentno']."' ";

$show = "SELECT * FROM housetax where assessmentno= '".$_POST['assessmentno']."' and sno<=5 ";
 mysqli_query($db_server,$dt) or die("Query execution error".mysqli_error($db_server));
$exec = mysqli_query($db_server,$show) or die("Query execution error".mysqli_error($db_server));


if (mysqli_num_rows($exec) > 0) 
{
  

echo <<<_END
<center>
<table  border="5" cellspacing="0" cellpadding="9" width="70%" height="50%">

<tr bgcolor="#3C3" height="90">

<td><font color="#FFFFFF"> ASSESSMENT NO</font></td>
<td><font color="#FFFFFF"> AADHAR NO</font></td>
<td><font color="#FFFFFF"> OWNER NAME</font></td>
<td><font color="#FFFFFF"> DOOR NO</font></td>
<td><font color="#FFFFFF"> ZONE</font></td>

<td><font color="#FFFFFF"> AMOUNT</font></td>
<td><font color="#FFFFFF"> PAY DATE</font></td>
<td><font color="#FFFFFF"> STATUS</font></td>
</tr>

_END;
while($row=mysqli_fetch_row($exec))
{
	echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td></tr>";
	
	
echo "</table>";
 


echo <<<_END
	<br/><br/><br/><font size="+2" style="font-style:italic" >
This is a computer generated Receipt,Subject to accounted by AAO/ERO.<br><br></font>



 

_END;

$_SESSION['asno'] = $row[0];
if($row[7]!="Paid")
{
echo <<<_END
	


  <a href="htPAYMENT.php"><input type="button" value="PAY NOW" /></a>
  
</center>
_END;
}
else
{
	echo <<<_END
	


 <a href="homepageaa.php" ><input type="submit" value="Go To HOME" /></a>

</center>
_END;
	
	
	}

}
}
else
{
	
	
	echo <<<_END
	


 <script type="text/javascript">
 alert("Invalid Assessement Number!!!!");
 </script>

_END;
	
	}

?>


  </div>
</center>
</body>
</html>

