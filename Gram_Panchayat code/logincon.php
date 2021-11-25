<?php

include "login.html";
session_start();
$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='gram';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$db_server) die("Unable to connect".mysqli_error());

$uname="SELECT username,password FROM register WHERE username= '".$_POST['username']."'";


$exec = mysqli_query($db_server,$uname) or die("Query execution error".mysqli_error($db_server));



if(!isset($_SESSION['username']))
{

if (mysqli_num_rows($exec) > 0) 
{
   while($row=mysqli_fetch_row($exec))

  {
	if($row[0]==$_POST['username'] && $row[1]==$_POST['password'])
   {
	   $_SESSION['username'] = $row[0];
	header('Location: http://localhost/ggggg/homepageaa.php');
	
	}
	  else
		  {
			 
		echo <<<_END
<script type="text/javascript">
alert("Invalid UserName and Password")
</script>

_END;
			  
			  
			}
   }
}
else
{
	$euname="SELECT username,password FROM employee WHERE username= '".$_POST['username']."'";


     $eexec = mysqli_query($db_server,$euname) or die("Query execution error".mysqli_error($db_server));

	
	if (mysqli_num_rows($eexec) > 0) 
   {
       while($row=mysqli_fetch_row($eexec))

       {
	      if($row[0]==$_POST['username'] && $row[1]==$_POST['password'])
           {
	          $_SESSION['username'] = $row[0];
	         header('Location: http://localhost/ggggg/homepageadmin.php');
	
	      }
		  else
		  {
			 
		echo <<<_END
<script type="text/javascript">
alert("Invalid UserName and Password")
</script>

_END;
			  
			  
			}
	
       }
    }
 
     else
		  {
			 
		echo <<<_END
<script type="text/javascript">
alert("NO Registration with this USERNAME!!!!!")
</script>

_END;
			  
			  
			}
    
    
    
}
}

	
    ?>
	
