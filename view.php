<?php

include "dbconn.php";
include "controller.php";

$var = controller::showAllMessage();

?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
<h3>
<?php var_dump($var); ?>
</h3>
</body>
</html>

