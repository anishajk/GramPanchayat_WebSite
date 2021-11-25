<?php

include "register.html";

$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='gram';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$db_server) die("Unable to connect".mysqli_error());
if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['aadharno']) && isset($_POST['phoneno']) && isset($_POST['zone']) )
{
	$query="INSERT INTO register(username,password,name,email,aadharno,phoneno,zone) values('$_POST[username]','$_POST[password]','$_POST[name]','$_POST[email]','$_POST[aadharno]','$_POST[phoneno]','$_POST[zone]')";
	$result=mysqli_query($db_server,$query) or die ("query execution error:".mysqli_error($db_server));
	echo "Record entered successfully";
	
	echo <<<_END
	<script type="text/javascript">

	alert("You are a Registered member Now!!!!!");
	
	
</script>

_END;

	}
	else
	{
		echo "ERROR: could not able to execute Sql".mysqli_error($db_server);
		}
		
		mysqli_close($db_server);
		
		
?>