<!DOCTYPE html>
<html>
<head>
<title>template</title>
<link rel="stylesheet" type="text/css" href="less/icon-flags-16.css"/>
</head>

<body>
<?php

$flag_dir = 'Flags/flags_iso/16/';

$files = scandir($flag_dir);

foreach ($files as $flag) {
	if ($flag != '.' && $flag != '..') {
		$id = preg_replace("/\\.[^.\\s]{3,4}$/", "", $flag);
		echo '<span class="flag flag-16 flag-' . $id . '"></span>';
		echo "\n";
	}
}
?>
</body>
</html>
