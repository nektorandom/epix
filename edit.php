<?php
$filename = dirname(__FILE__). '/data/'. $_GET['file'];
$data = file_get_contents($filename);
?>

<form action="save.php" method="post">
	Text: <input name="data" value="<?=data;?>">
	File name: <input name="filename" value="<?=$_GET['file'];?>">
	<input type="submit">
</form>
