<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
//unset($_SESSION['username']);
session_destroy();

header("Location: view_details.php "
exit;
?>
</body>
</html>