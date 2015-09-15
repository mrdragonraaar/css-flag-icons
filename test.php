<?php

$flag_dir = 'Flags/flags_iso/16/';

$files = scandir($flag_dir);

foreach ($files as $flag) {
	if ($flag != '.' && $flag != '..') {
		$id = preg_replace("/\\.[^.\\s]{3,4}$/", "", $flag);
		//echo "\t\t";
		//echo '&.flag-' . $id . ' { background-image: data-uri("../Flags/flags_iso/16/' . $flag . '"); }';
		echo '.flag-icon-iso(16, ' . $id . ');';
		echo "\n";
	}
}
?>
