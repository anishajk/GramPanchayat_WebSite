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



 <table><tr><td>
<img src="billphoto.png" height="400" width="600" alt=""></td>

<td>
<font style="font-family:Georgia, 'Times New Roman', Times, serif">
<h1><b>BILL PAYMENT:</h1></b>
<font size="+2">
<p> 
Electronic bill payment is a feature of online,allow going a customer of a financial institution to do transfer money from their transaction to make the Bill payments of the related specific  transactions.
</p></font>

<h3>PROCEDURRE TO MAKE A TRANSACTION </h3>
<ul><font size="+1">
<li>CREDIT/DEBIT CARD 
The authorization request includes the following:</li>
<li>Card number</li>

<li>Card expiration date</li>

<li>Billing address — for Address Verification System (AVS) validation</li>

<li>Card security code — CVV, for instance</li>

<li>Payment amount</li>

<li>After entering all the above mentioned data accurately an OTP is generated.</li>
 
<li>you have to enter the otp number to proceed for further Payment.</li>


</ul></font>
 </p></font>


</td></tr></table>
</div>
<script type="text/javascript">

function logout()
{
	alert("You will be Logged Out from this Page");
	<?php
	
?>

	
	
	}
</script>
</body></html>