

<?php

include "complaint.php";

$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='gram';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$db_server) die("Unable to connect".mysqli_error());


$selected_val = $_POST['about'];
if( isset($_POST['uname']) && isset($_POST['aadharno']) && isset($_POST['wardno']) )
{
	$query="INSERT INTO complaint(name,aadharno,wardno,about,description) values('$_POST[uname]','$_POST[aadharno]','$_POST[wardno]','$selected_val','$_POST[des]')";
	$result=mysqli_query($db_server,$query) or die ("query execution error:".mysqli_error($db_server));
	
	
	echo <<<_END
	<script type="text/javascript">

	alert("Your complaint has been Registered. Actions will be taken soon!!!!!");
	window.location.href="homepageaa.php";
	
</script>

_END;

	}
	else
	{
		echo "ERROR: could not able to execute Sql".mysqli_error($db_server);
		}
		
		mysqli_close($db_server);
		
		
?>