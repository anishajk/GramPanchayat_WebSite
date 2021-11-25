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


<big><B><center><u>
PAYMENT GATEWAY</U></center></B></big>


</div>

 <br/><br/><br/><br/>



<center>
<form  action="htpaid.php" method="post" >
<font size="+3">
<input type="radio"  name="paycard" value='credit' required/>credit card

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<input type="radio"  name="paycard" value='debit'/>debit card<br><br>

</font>
<table border="1" cellspacing="0" cellpadding="9">
<tr>
<td><input type="text" placeholder="card number" required /></td>
</tr>
<tr>
<td><input type="text" placeholder="card Holder Name" required />
</td>
</tr>
<tr>
<td><select value="Expiry MM" required>
<option>Expiry MM</option>
<option> 01</option>
<option> 02</option> 
<option> 03 </option>  
<option> 04</option> 
<option> 05</option> 
<option> 06</option> 
<option> 07</option> 
<option> 08</option> 
<option> 09</option> 
<option> 10</option>
<option> 11</option> 
<option> 12</option> 
</select> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select value="Expiry YYYY" required>
<option>Expiry YYYY</option>
<option>2019</option>
 <option>2020</option>
 <option>2021</option>
 <option>2022</option>
 <option>2023</option>
 <option>2024</option>
 <option>2025</option>
 <option>2026</option>
</select>
</td>
</tr>
<tr>
<td><input type="password" placeholder="Enter CVV" required  />
</td>
</tr>
</table><br/><br/>
 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input type="submit" value="Payment" />  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 

 


</form></center>


</body></html>


