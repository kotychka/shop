<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


$text =  file_get_contents("messages");

$messages = explode("\n\n", $text);

foreach ($messages as $key => $value): ?>
	<div> <?php echo $value; ?> </div>	
<?php endforeach ?>

</body>
</html>