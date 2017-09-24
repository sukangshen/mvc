<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php foreach ($data as $k=>$v):?>
		<?= $v['name']?>
		<?= $v['age']?>
	<?php endforeach; ?>
	
</body>
</html>