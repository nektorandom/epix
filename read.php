
<?php

$path = dirname(__FILE__);
include_once($path . "/auth.php");
$dir = $path . '/data/';
$list = scandir($dir);

echo "<ul>";
foreach($list as $filelist) {
	$file = $dir . $filename;
	if(is_file($file)) {
		echo "<li>" . file_get_contents($file) . "</li>";
	}
}
echo "</ul>";

?>
