<?php
	spl_autoload_register(function ($class){
		include "Classes/".$class.".php";
	});
	$database = new Database();
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>