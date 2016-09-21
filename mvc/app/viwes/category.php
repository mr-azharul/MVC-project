<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>
Category List<hr/>
	<?php
		foreach ($cat as $key => $value) {
			echo $value['name'].'<br/>';
		}
	?>

</body>
</html>