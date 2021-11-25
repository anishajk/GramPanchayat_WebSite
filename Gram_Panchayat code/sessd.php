<?php 
session_start();
if(isset($_SESSION['username']))
{

session_destroy();

echo <<<_END
	<script type="text/javascript">

	window.location.href="homepage.html";
	
</script>
_END;
}
?>