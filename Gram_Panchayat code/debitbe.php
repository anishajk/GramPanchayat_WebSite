<?php

include "payment.html";

$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='gram';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$db_server) die("Unable to connect".mysqli_error());
if( isset($_POST['cardno']) && isset($_POST['holdername']) && isset($_POST['expmm']) && isset($_POST['expyy']) )
{
	$query="INSERT INTO debitcard(cardno,holdername,expmm,expyy) values('$_POST[cardno]','$_POST[holdername]','$_POST[expmm]','$_POST[expyy]')";
	$result=mysqli_query($db_server,$query) or die ("query execution error:".mysqli_error($db_server));
	echo "Record entered successfully";
	
	echo <<<_END
	<script type="text/javascript">

	alert("Your CARD details has been SAVED!!!!!");
	
	
</script>

_END;

	}
	else
	{
		echo "ERROR: could not able to execute Sql".mysqli_error($db_server);
		}
		
		mysqli_close($db_server);
		
		
?>