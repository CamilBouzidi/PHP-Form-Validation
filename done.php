
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>Your session was destroyed</h1>
<br><br>

	<?php

	if (isset($_POST['reset']) ){
  $_SESSION = array();   // empties session state
   if (isset($_COOKIE["PHPSESSID"]))  // cancels sessionid cookie
   { setcookie("PHPSESSID", '', time()-3600, '/'); }
   session_destroy();     // release all session resources
}
?>
<p><a href="smarties.php"> Click here to Practice Smarties Eating</a></p>

</body>
</html>



