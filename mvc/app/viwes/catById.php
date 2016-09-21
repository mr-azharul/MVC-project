<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>
Category List<hr/>
	<?php
		foreach ($catById as $key => $value) {
			echo $value['name'].'<br/>';
			echo $value['title'].'<br/>';
		}
	?>

</body>
</html>